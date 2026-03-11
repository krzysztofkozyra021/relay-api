<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\PersonalAccessToken;
use Relay\Models\User;
use Tests\TestCase;

class TokenFlowTest extends TestCase
{
    use RefreshDatabase;

    public function testFullTokenFlow(): void
    {
        $user = User::factory()->create([
            "password" => "secret123",
        ]);

        $loginResponse = $this->postJson("/api/login", [
            "email" => $user->email,
            "password" => "secret123",
        ]);

        $loginResponse->assertStatus(200);
        $token = $loginResponse->json("access_token");
        $this->assertNotEmpty($token);

        $this->withToken($token)->getJson("/api/user")
            ->assertStatus(200)
            ->assertJson([
                "id" => $user->id,
                "email" => $user->email,
            ]);

        $this->withToken($token)->postJson("/api/logout")
            ->assertStatus(200)
            ->assertJson([
                "message" => "Logged out successfully.",
            ]);

        [$tokenId] = explode("|", $token, 2);
        $this->assertNull(PersonalAccessToken::find((int)$tokenId));
    }
}
