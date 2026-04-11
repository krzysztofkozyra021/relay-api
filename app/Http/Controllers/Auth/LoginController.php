<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Relay\Http\Controllers\Controller;
use Relay\Models\User;

class LoginController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $validated = $request->validate([
            "email" => ["required", "email", "string", "max:255"],
            "password" => ["required", "string"],
        ]);

        $user = User::query()->where("email", $validated["email"])->first();

        if (!$user || !Hash::check($validated["password"], $user->password)) {
            return new JsonResponse(["message" => "Invalid credentials."], 401);
        }

        return $this->processUserAuth($user);
    }

    public function processUserAuth(User $user): JsonResponse
    {
        if ($user->is_admin && $user->two_factor_secret) {
            $intermediateToken = Str::random(64);
            Cache::put("2fa_auth_" . $intermediateToken, $user->id, now()->addMinutes(10));

            return new JsonResponse([
                "requires_2fa" => true,
                "intermediate_token" => $intermediateToken,
            ]);
        }

        $token = auth("api")->login($user);

        return new JsonResponse([
            "access_token" => $token,
            "token_type" => "bearer",
            "expires_in" => auth("api")->factory()->getTTL() * 60,
            "user" => $user,
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        auth("api")->logout();

        return new JsonResponse([
            "message" => "Logged out successfully.",
        ]);
    }
}
