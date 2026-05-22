<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use PragmaRX\Google2FA\Google2FA;
use Relay\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TwoFactorSetupController extends Controller
{
    public function store(Request $request): JsonResponse
    {
    $user = $request->user("api");
    
    if (!$user->is_admin) {
        return new JsonResponse(['message' => 'Unauthorized: Admin only.'], 403);
    }
        $user = $request->user("api");

        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();

        $recoveryCodes = Collection::times(8, fn() => Str::random(10) . "-" . Str::random(10))->toArray();

        $user->forceFill([
            "two_factor_secret" => encrypt($secret),
            "two_factor_recovery_codes" => encrypt(json_encode($recoveryCodes)),
        ])->save();

        $qrCodeUrl = $google2fa->getQRCodeUrl(
            config("app.name", "Relay"),
            $user->email,
            $secret,
        );

        $svg = (string)QrCode::size(200)->generate($qrCodeUrl);

        return new JsonResponse([
            "secret" => $secret,
            "qr_code_svg" => $svg,
            "recovery_codes" => $recoveryCodes,
        ]);
    }
}
