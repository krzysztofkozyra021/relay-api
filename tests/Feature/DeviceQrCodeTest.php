<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Relay\Models\Device;
use Tests\TestCase;

class DeviceQrCodeTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanGenerateQrCodeForDevice(): void
    {
        $device = Device::factory()->create();

        $response = $this->get(route("devices.qr", $device));

        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "image/svg+xml");
        $this->assertStringContainsString("<svg", $response->getContent());
    }

    public function testItCanCreateDeviceAndReturnQrCode(): void
    {
        $deviceData = [
            "name" => "New Device",
            "type" => "Sensor",
            "location" => "Laboratory",
        ];

        $response = $this->post(route("devices.store_with_qr"), $deviceData);

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
