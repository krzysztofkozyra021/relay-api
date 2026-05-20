<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Relay\Mail\MobileResetPinMail;
use Relay\Models\User;

class MobilePasswordResetController extends Controller
{
    public function sendPin(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        $email = $request->email;
        
        $pin = (string) random_int(100000, 999999);

        Cache::put('mobile_reset_' . $email, Hash::make($pin), now()->addMinutes(15));

        Mail::to($email)->send(new MobileResetPinMail($pin));

        return new JsonResponse(['message' => 'Kod PIN został wysłany.']);
    }

    public function reset(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'pin' => ['required', 'digits:6'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $email = $request->email;
        $hashedPin = Cache::get('mobile_reset_' . $email);

        if (!$hashedPin || !Hash::check($request->pin, $hashedPin)) {
            return new JsonResponse(['message' => 'Nieprawidłowy lub wygasły kod PIN.'], 400);
        }

        $user = User::where('email', $email)->firstOrFail();
        
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        Cache::forget('mobile_reset_' . $email);

        return new JsonResponse(['message' => 'Hasło zostało pomyślnie zmienione.']);
    }
}