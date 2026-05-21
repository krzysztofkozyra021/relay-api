<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Relay\Mail\MobileResetPinMail;
use Relay\Models\User;
use Tests\TestCase;

class MobilePasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function testSendPinSendsEmailAndCachesPin(): void
    {
        Mail::fake();

        $user = User::factory()->create([
            "email" => "test@example.com",
        ]);

        $response = $this->postJson("/api/public/mobile/password/email", [
            "email" => "test@example.com",
        ]);

        $response->assertStatus(200)
            ->assertJson(["message" => "Kod PIN został wysłany."]);

        Mail::assertSent(MobileResetPinMail::class, fn($mail) => $mail->hasTo("test@example.com"));

        $this->assertNotNull(Cache::get("mobile_reset_test@example.com"));
    }

    public function testSendPinValidationRequiresValidEmail(): void
    {
        $response = $this->postJson("/api/public/mobile/password/email", [
            "email" => "invalid-email",
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(["email"]);
    }

    public function testSendPinValidationRequiresExistingEmail(): void
    {
        $response = $this->postJson("/api/public/mobile/password/email", [
            "email" => "nonexistent@example.com",
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(["email"]);
    }

    public function testResetPasswordUpdatesPasswordAndClearsCache(): void
    {
        $user = User::factory()->create([
            "email" => "test@example.com",
            "password" => "oldpassword",
        ]);

        $pin = "123456";
        Cache::put("mobile_reset_test@example.com", Hash::make($pin), now()->addMinutes(15));

        $response = $this->postJson("/api/public/mobile/password/reset", [
            "email" => "test@example.com",
            "pin" => $pin,
            "password" => "newpassword123",
            "password_confirmation" => "newpassword123",
        ]);

        $response->assertStatus(200)
            ->assertJson(["message" => "Hasło zostało pomyślnie zmienione."]);

        $user->refresh();
        $this->assertTrue(Hash::check("newpassword123", $user->password));

        $this->assertNull(Cache::get("mobile_reset_test@example.com"));
    }

    public function testResetPasswordFailsWithInvalidPin(): void
    {
        $user = User::factory()->create([
            "email" => "test@example.com",
        ]);

        Cache::put("mobile_reset_test@example.com", Hash::make("123456"), now()->addMinutes(15));

        $response = $this->postJson("/api/public/mobile/password/reset", [
            "email" => "test@example.com",
            "pin" => "654321",
            "password" => "newpassword123",
            "password_confirmation" => "newpassword123",
        ]);

        $response->assertStatus(400)
            ->assertJson(["message" => "Nieprawidłowy lub wygasły kod PIN."]);
    }

    public function testResetPasswordFailsWithExpiredPin(): void
    {
        $user = User::factory()->create([
            "email" => "test@example.com",
        ]);

        $response = $this->postJson("/api/public/mobile/password/reset", [
            "email" => "test@example.com",
            "pin" => "123456",
            "password" => "newpassword123",
            "password_confirmation" => "newpassword123",
        ]);

        $response->assertStatus(400)
            ->assertJson(["message" => "Nieprawidłowy lub wygasły kod PIN."]);
    }

    public function testResetPasswordValidationRequiresMatchedConfirmation(): void
    {
        $response = $this->postJson("/api/public/mobile/password/reset", [
            "email" => "test@example.com",
            "pin" => "123456",
            "password" => "newpassword123",
            "password_confirmation" => "mismatchedpassword",
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(["password"]);
    }
}
