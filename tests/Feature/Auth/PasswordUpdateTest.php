<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Relay\Models\User;
use Tests\TestCase;

class PasswordUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function testAuthenticatedUserCanUpdatePassword(): void
    {
        $user = User::factory()->create([
            "password" => "oldpassword123",
        ]);

        $response = $this->actingAs($user, "api")
            ->putJson("/api/user/password", [
                "current_password" => "oldpassword123",
                "password" => "newpassword123",
                "password_confirmation" => "newpassword123",
            ]);

        $response->assertStatus(200)
            ->assertJson(["message" => "Hasło zostało pomyślnie zmienione."]);

        $user->refresh();
        $this->assertTrue(Hash::check("newpassword123", $user->password));
    }

    public function testPasswordUpdateRequiresCorrectCurrentPassword(): void
    {
        $user = User::factory()->create([
            "password" => "oldpassword123",
        ]);

        $response = $this->actingAs($user, "api")
            ->putJson("/api/user/password", [
                "current_password" => "wrongpassword",
                "password" => "newpassword123",
                "password_confirmation" => "newpassword123",
            ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(["current_password"]);
    }

    public function testUnauthenticatedUserCannotUpdatePassword(): void
    {
        $response = $this->putJson("/api/user/password", [
            "current_password" => "oldpassword123",
            "password" => "newpassword123",
            "password_confirmation" => "newpassword123",
        ]);

        $response->assertStatus(401);
    }
}
