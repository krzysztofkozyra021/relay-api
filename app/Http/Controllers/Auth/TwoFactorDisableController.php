<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Relay\Http\Controllers\Controller;
use Relay\Services\AuditLogger;
use Relay\Models\User;

class TwoFactorDisableController extends Controller
{
    public function disable(Request $request): JsonResponse
    {
        $user = $request->user('api');

        if (!$user->is_admin) {
            return new JsonResponse(['message' => 'Unauthorized: Admin only.'], 403);
        }

        $user->forceFill([
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'two_factor_confirmed_at' => null,
        ])->save();

        AuditLogger::log(
            action: "2fa_disabled",
            description: "Wyłączono 2FA dla konta: " . $user->email,
            modelType: User::class,
            modelId: $user->id,
            userId: $user->id,
        );

        return new JsonResponse(['message' => '2FA disabled successfully']);
    }
}