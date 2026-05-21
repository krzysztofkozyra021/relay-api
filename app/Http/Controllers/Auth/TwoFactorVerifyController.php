<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use PragmaRX\Google2FA\Google2FA;
use Relay\Http\Controllers\Controller;
use Relay\Models\User;
use Relay\Services\AuditLogger;

class TwoFactorVerifyController extends Controller
{
    public function verify(Request $request): JsonResponse
    {
        $validated = $request->validate([
            "intermediate_token" => ["required", "string"],
            "code" => ["required", "string"],
        ]);

        $cacheKey = "2fa_auth_" . $validated["intermediate_token"];
        $userId = Cache::get($cacheKey);

        if (!$userId) {
            return new JsonResponse(["message" => "2FA challenge expired or invalid."], 401);
        }

        $user = User::query()->find($userId);

        $google2fa = new Google2FA();
        $secret = decrypt($user->two_factor_secret);

        if (!$google2fa->verifyKey($secret, $validated["code"])) {
            $recoveryCodes = json_decode(decrypt($user->two_factor_recovery_codes), true);
            $codeIndex = array_search($validated["code"], $recoveryCodes, true);

            if ($codeIndex === false) {
                AuditLogger::log(
                    action: "login_2fa_failed",
                    description: "Nieudane logowanie 2FA dla e-maila: " . $user->email,
                    modelType: User::class,
                    modelId: $user->id,
                    userId: $user->id,
                );

                return new JsonResponse(["message" => "Invalid 2FA code or recovery code."], 401);
            }

            unset($recoveryCodes[$codeIndex]);
            $user->forceFill([
                "two_factor_recovery_codes" => encrypt(json_encode(array_values($recoveryCodes))),
            ])->save();
        }

        Cache::forget($cacheKey);

        if ($user->two_factor_confirmed_at === null) {
            $user->forceFill(["two_factor_confirmed_at" => now()])->save();
        }

        $token = auth("api")->login($user);

        AuditLogger::log(
            action: "login_success",
            description: "Użytkownik zalogował się pomyślnie z użyciem 2FA: " . $user->email,
            modelType: User::class,
            modelId: $user->id,
            payload: ["method" => "credentials_2fa"],
            userId: $user->id,
        );

        return new JsonResponse([
            "access_token" => $token,
            "token_type" => "bearer",
            "expires_in" => auth("api")->factory()->getTTL() * 60,
            "user" => $user,
        ]);
    }
}
