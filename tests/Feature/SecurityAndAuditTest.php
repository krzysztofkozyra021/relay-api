<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Relay\Models\AuditLog;
use Relay\Models\User;
use Tests\TestCase;

class SecurityAndAuditTest extends TestCase
{
    use RefreshDatabase;

    public function testApiResponsesHaveSecurityHeaders(): void
    {
        $response = $this->getJson("/api/hello");

        $response->assertStatus(200);
        $response->assertHeader("X-Frame-Options", "DENY");
        $response->assertHeader("X-Content-Type-Options", "nosniff");
        $response->assertHeader("X-XSS-Protection", "1; mode=block");
        $response->assertHeader("Referrer-Policy", "no-referrer-when-downgrade");
        $response->assertHeader("Content-Security-Policy", "default-src 'none'; frame-ancestors 'none'; sandbox");
        $response->assertHeader("Permissions-Policy", "geolocation=(), microphone=(), camera=(), interest-cohort=()");
    }

    public function testModelModificationsCreateAuditLogs(): void
    {
        $this->assertDatabaseCount("audit_logs", 0);

        $user = User::factory()->create([
            "name" => "Audit Tester",
            "email" => "audit@example.com",
            "password" => "password",
        ]);

        $this->assertDatabaseHas("audit_logs", [
            "action" => "created_user",
            "model_type" => User::class,
            "model_id" => (string)$user->id,
        ]);

        $creationLog = AuditLog::where("action", "created_user")->first();
        $this->assertNotNull($creationLog);
        $this->assertArrayNotHasKey("password", $creationLog->payload);

        $user->update(["name" => "Updated Audit Tester"]);

        $this->assertDatabaseHas("audit_logs", [
            "action" => "updated_user",
            "model_type" => User::class,
            "model_id" => (string)$user->id,
        ]);

        $updateLog = AuditLog::where("action", "updated_user")->first();
        $this->assertNotNull($updateLog);
        $this->assertEquals("Audit Tester", $updateLog->payload["old"]["name"]);
        $this->assertEquals("Updated Audit Tester", $updateLog->payload["new"]["name"]);

        $user->delete();

        $this->assertDatabaseHas("audit_logs", [
            "action" => "deleted_user",
            "model_type" => User::class,
            "model_id" => (string)$user->id,
        ]);
    }

    public function testLoginAttemptsCreateAuditLogs(): void
    {
        $user = User::factory()->create([
            "password" => "secret123",
        ]);

        $this->postJson("/api/login", [
            "email" => $user->email,
            "password" => "wrong_password",
        ]);

        $this->assertDatabaseHas("audit_logs", [
            "action" => "login_failed",
            "description" => "Nieudana próba logowania dla e-maila: " . $user->email,
        ]);

        $this->postJson("/api/login", [
            "email" => $user->email,
            "password" => "secret123",
        ]);

        $this->assertDatabaseHas("audit_logs", [
            "action" => "login_success",
            "user_id" => $user->id,
        ]);
    }
}
