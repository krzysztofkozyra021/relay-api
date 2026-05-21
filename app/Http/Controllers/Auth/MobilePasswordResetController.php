<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Relay\Http\Requests\Auth\ResetMobilePasswordRequest;
use Relay\Http\Requests\Auth\SendMobileResetPinRequest;
use Relay\Mail\MobileResetPinMail;
use Relay\Models\User;

class MobilePasswordResetController extends Controller
{
    public function sendPin(SendMobileResetPinRequest $request): JsonResponse
    {
        $email = $request->validated()["email"];

        $pin = (string)random_int(100000, 999999);

        Cache::put("mobile_reset_" . $email, Hash::make($pin), now()->addMinutes(15));

        Mail::to($email)->send(new MobileResetPinMail($pin));

        return new JsonResponse(["message" => "Kod PIN został wysłany."]);
    }

    public function reset(ResetMobilePasswordRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $email = $validated["email"];
        $hashedPin = Cache::get("mobile_reset_" . $email);

        if (!$hashedPin || !Hash::check($validated["pin"], $hashedPin)) {
            return new JsonResponse(["message" => "Nieprawidłowy lub wygasły kod PIN."], 400);
        }

        $user = User::where("email", $email)->firstOrFail();

        $user->update([
            "password" => $validated["password"],
        ]);

        Cache::forget("mobile_reset_" . $email);

        return new JsonResponse(["message" => "Hasło zostało pomyślnie zmienione."]);
    }
}
