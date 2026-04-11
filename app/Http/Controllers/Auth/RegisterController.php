<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Relay\Http\Controllers\Controller;
use Relay\Models\User;

class RegisterController extends Controller
{
    public function __construct(
        private readonly LoginController $loginController,
    ) {}

    public function register(Request $request): JsonResponse
    {
        $validated = $request->validate([
            "name" => ["required", "string", "max:255"],
            "email" => ["required", "string", "email", "max:255", "unique:users"],
            "password" => ["required", "confirmed", Password::defaults()],
        ]);

        $user = User::query()->create([
            "name" => $validated["name"],
            "email" => $validated["email"],
            "password" => Hash::make($validated["password"]),
        ]);

        return $this->loginController->processUserAuth($user);
    }
}
