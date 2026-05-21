<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\GoogleProvider;
use Laravel\Socialite\Two\User as SocialiteUser;
use Relay\Models\User;
use Tests\TestCase;

class GoogleAuthTest extends TestCase
{
    use RefreshDatabase;

    public function testGoogleLoginCreatesNewUserAndReturnsToken(): void
    {
        $socialiteUser = $this->createMock(SocialiteUser::class);
        $socialiteUser->method("getId")->willReturn("google-id-123");
        $socialiteUser->method("getEmail")->willReturn("newuser@example.com");
        $socialiteUser->method("getName")->willReturn("Google User");

        $provider = $this->createMock(GoogleProvider::class);
        $provider->method("stateless")->willReturnSelf();
        $provider->method("userFromToken")
            ->with("valid-google-token")
            ->willReturn($socialiteUser);

        Socialite::shouldReceive("driver")
            ->with("google")
            ->andReturn($provider);

        $response = $this->postJson("/api/auth/google", [
            "provider_token" => "valid-google-token",
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                "access_token",
                "token_type",
                "expires_in",
                "user",
            ]);

        $this->assertDatabaseHas("users", [
            "email" => "newuser@example.com",
            "name" => "Google User",
            "provider" => "google",
            "provider_id" => "google-id-123",
        ]);
    }

    public function testGoogleLoginUsesExistingUserAndReturnsToken(): void
    {
        $existingUser = User::factory()->create([
            "email" => "existing@example.com",
            "name" => "Existing User",
            "provider" => null,
            "provider_id" => null,
        ]);

        $socialiteUser = $this->createMock(SocialiteUser::class);
        $socialiteUser->method("getId")->willReturn("google-id-456");
        $socialiteUser->method("getEmail")->willReturn("existing@example.com");
        $socialiteUser->method("getName")->willReturn("Google Name");

        $provider = $this->createMock(GoogleProvider::class);
        $provider->method("stateless")->willReturnSelf();
        $provider->method("userFromToken")
            ->with("valid-token")
            ->willReturn($socialiteUser);

        Socialite::shouldReceive("driver")
            ->with("google")
            ->andReturn($provider);

        $response = $this->postJson("/api/auth/google", [
            "provider_token" => "valid-token",
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                "access_token",
                "token_type",
                "expires_in",
                "user",
            ]);

        $this->assertDatabaseHas("users", [
            "id" => $existingUser->id,
            "email" => "existing@example.com",
            "provider" => "google",
            "provider_id" => "google-id-456",
        ]);
    }

    public function testGoogleLoginReturns401OnInvalidToken(): void
    {
        $provider = $this->createMock(GoogleProvider::class);
        $provider->method("stateless")->willReturnSelf();
        $provider->method("userFromToken")
            ->with("invalid-token")
            ->willThrowException(new Exception("Invalid token"));

        Socialite::shouldReceive("driver")
            ->with("google")
            ->andReturn($provider);

        $response = $this->postJson("/api/auth/google", [
            "provider_token" => "invalid-token",
        ]);

        $response->assertStatus(401)
            ->assertJson([
                "message" => "Invalid or expired provider token.",
            ]);
    }
}
