<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Relay\Models\Device;
use Relay\Models\User;
use Tests\TestCase;

class DeviceQrCodeTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanGenerateQrCodeForDevice(): void
    {
        $user = User::factory()->create();
        $device = Device::factory()->create();

        $response = $this->actingAs($user, "sanctum")
            ->get(route("devices.show_qr", $device));

        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "image/svg+xml");
        $this->assertStringContainsString("<svg", $response->getContent());
    }

    public function testItCanCreateDeviceAndReturnQrCode(): void
    {
        $user = User::factory()->create();

        $deviceData = [
            "name" => "New Device",
            "type" => "Sensor",
            "location" => "Laboratory",
        ];

        $response = $this->actingAs($user, "sanctum")
            ->post(route("devices.generate_qr"), $deviceData);

        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "image/svg+xml");
        $this->assertStringContainsString("<svg", $response->getContent());

        $this->assertDatabaseHas("devices", [
            "name" => "New Device",
            "type" => "Sensor",
            "location" => "Laboratory",
        ]);

        $device = Device::where("name", "New Device")->first();
        $this->assertNotNull($device->uuid);
    }
}
