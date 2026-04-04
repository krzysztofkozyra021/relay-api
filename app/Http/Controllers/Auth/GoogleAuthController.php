<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Relay\Http\Controllers\Controller;
use Relay\Models\User;

class GoogleAuthController extends Controller
{
    public function __construct(
        private readonly LoginController $loginController,
    ) {}

    public function handleProviderCallback(Request $request): JsonResponse
    {
        $validated = $request->validate([
            "provider_token" => ["required", "string"],
        ]);

        try {
            $googleUser = Socialite::driver("google")
                ->stateless()
                ->userFromToken($validated["provider_token"]);
        } catch (Exception $e) {
            return new JsonResponse(["message" => "Invalid or expired provider token."], 401);
        }

        $user = User::query()->firstOrCreate(
            ["email" => $googleUser->getEmail()],
            [
                "name" => $googleUser->getName(),
                "provider" => "google",
                "provider_id" => $googleUser->getId(),
                "password" => null,
            ],
        );

        return $this->loginController->processUserAuth($user);
    }
}
