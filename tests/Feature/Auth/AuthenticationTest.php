<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Relay\Models\User;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanLoginWithCorrectCredentials(): void
    {
        $user = User::factory()->create([
            "password" => "password123",
        ]);

        $response = $this->postJson("/api/login", [
            "email" => $user->email,
            "password" => "password123",
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                "access_token",
                "token_type",
                "user",
            ]);

        $this->assertNotEmpty($response->json("access_token"));
        $this->assertSame("Bearer", $response->json("token_type"));
    }

    public function testUserCannotLoginWithIncorrectPassword(): void
    {
        $user = User::factory()->create([
            "password" => "password123",
        ]);

        $response = $this->postJson("/api/login", [
            "email" => $user->email,
            "password" => "wrong-password",
        ]);

        $response->assertStatus(401)
            ->assertJson([
                "message" => "Invalid credentials.",
            ]);
    }

    public function testUserCannotLoginWithNonExistentEmail(): void
    {
        $response = $this->postJson("/api/login", [
            "email" => "nobody@example.com",
            "password" => "password123",
        ]);

        $response->assertStatus(401)
            ->assertJson([
                "message" => "Invalid credentials.",
            ]);
    }

    public function testLoginValidationRequiresEmailAndPassword(): void
    {
        $response = $this->postJson("/api/login", []);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(["email", "password"]);
    }

    public function testAuthenticatedUserCanGetTheirDetails(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, "sanctum")
            ->getJson("/api/user");

        $response->assertStatus(200)
            ->assertJson([
                "id" => $user->id,
                "email" => $user->email,
            ]);
    }

    public function testAuthenticatedUserCanLogout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, "sanctum")
            ->postJson("/api/logout");

        $response->assertStatus(200)
            ->assertJson([
                "message" => "Logged out successfully.",
            ]);
    }

    public function testUnauthenticatedUserCannotAccessUserDetails(): void
    {
        $response = $this->getJson("/api/user");

        $response->assertStatus(401);
    }
}
