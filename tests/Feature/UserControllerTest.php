<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Relay\Models\User;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testUnauthenticatedUserCannotListUsers(): void
    {
        $response = $this->getJson("/api/users");

        $response->assertStatus(401);
    }

    public function testNonAdminUserCannotListUsers(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, "api")
            ->getJson("/api/users");

        $response->assertStatus(403);
    }

    public function testAdminWithoutTwoFactorCannotListUsers(): void
    {
        $admin = User::factory()->admin()->create([
            "two_factor_secret" => null,
        ]);

        $response = $this->actingAs($admin, "api")
            ->getJson("/api/users");

        $response->assertStatus(403);
        $response->assertJson([
            "message" => "Two-Factor Authentication is actively enforced for your role. Please complete 2FA setup.",
            "action_required" => "setup_2fa",
        ]);
    }

    public function testAdminWithTwoFactorCanListUsers(): void
    {
        $admin = User::factory()->admin()->create([
            "two_factor_secret" => "some-secret-key",
        ]);

        $otherUsers = User::factory()->count(3)->create();

        $response = $this->actingAs($admin, "api")
            ->getJson("/api/users");

        $response->assertStatus(200);

        $response->assertJsonCount(4);
        $response->assertJsonFragment([
            "id" => $admin->id,
            "email" => $admin->email,
        ]);

        foreach ($otherUsers as $user) {
            $response->assertJsonFragment([
                "id" => $user->id,
                "email" => $user->email,
            ]);
        }
    }
}
