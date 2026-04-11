<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Relay\Http\Controllers\Controller;

class PasswordResetController extends Controller
{
    public function sendResetLinkEmail(Request $request): JsonResponse
    {
        $request->validate(["email" => ["required", "email"]]);

        $status = Password::broker()->sendResetLink($request->only("email"));

        return $status === Password::RESET_LINK_SENT
            ? new JsonResponse(["message" => __($status)])
            : new JsonResponse(["message" => __($status)], 400);
    }

    public function reset(Request $request): JsonResponse
    {
        $request->validate([
            "token" => ["required", "string"],
            "email" => ["required", "email"],
            "password" => ["required", "string", "min:8", "confirmed"],
        ]);

        $status = Password::broker()->reset(
            $request->only("email", "password", "password_confirmation", "token"),
            function ($user, $password): void {
                $user->forceFill([
                    "password" => Hash::make($password),
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            },
        );

        return $status === Password::PASSWORD_RESET
            ? new JsonResponse(["message" => __($status)])
            : new JsonResponse(["message" => __($status)], 400);
    }
}
