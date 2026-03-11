<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Relay\Http\Controllers\Controller;
use Relay\Http\Requests\Auth\LoginRequest;
use Relay\Models\User;

class LoginController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $user = User::query()->where("email", $request->input("email"))->first();

        if ($user === null || !password_verify($request->input("password"), $user->password)) {
            return new JsonResponse([
                "message" => "Invalid credentials.",
            ], 401);
        }

        $token = $user->createToken("auth_token")->plainTextToken;

        return new JsonResponse([
            "access_token" => $token,
            "token_type" => "Bearer",
            "user" => $user,
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()?->delete();

        return new JsonResponse([
            "message" => "Logged out successfully.",
        ]);
    }
}
