<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Relay\Models\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function testLoginEndpointReturnsTokenOnSuccess(): void
    {
        $user = User::factory()->create([
            "password" => "secret123",
        ]);

        $response = $this->postJson("/api/login", [
            "email" => $user->email,
            "password" => "secret123",
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                "access_token",
                "token_type",
                "user",
            ]);
    }
}
