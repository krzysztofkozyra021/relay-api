<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Relay\Models\Device;
use Relay\Models\FaultReport;
use Tests\TestCase;

class DeviceEventTest extends TestCase
{
    use RefreshDatabase;

    public function testItReturnsDeviceEventsInCorrectOrder(): void
    {
        $device = Device::factory()->create([
            "created_at" => now()->subDays(5),
        ]);

        $fault = FaultReport::factory()->create([
            "device_uuid" => $device->uuid,
            "title" => "Clogged pipe",
            "reported_by" => "John Doe",
            "created_at" => now()->subDays(3),
            "status" => "pending",
            "resolved_at" => null,
        ]);

        $resolvedFault = FaultReport::factory()->create([
            "device_uuid" => $device->uuid,
            "title" => "Sensor malfunction",
            "reported_by" => "Jane Smith",
            "created_at" => now()->subDays(2),
            "status" => "resolved",
            "resolved_at" => now()->subDays(1),
        ]);

        $response = $this->getJson("/api/devices/{$device->uuid}/events");

        $response->assertStatus(200);

        $events = $response->json();

        $this->assertCount(4, $events);

        $this->assertSame("fixed", $events[0]["type"]);
        $this->assertSame("Naprawiono usterkę", $events[0]["title"]);

        $this->assertSame("fault", $events[1]["type"]);
        $this->assertSame("Zgłoszono usterkę", $events[1]["title"]);
        $this->assertSame("Sensor malfunction", $events[1]["description"]);

        $this->assertSame("fault", $events[2]["type"]);
        $this->assertSame("Zgłoszono usterkę", $events[2]["title"]);
        $this->assertSame("Clogged pipe", $events[2]["description"]);

        $this->assertSame("install", $events[3]["type"]);
        $this->assertSame("Instalacja urządzenia", $events[3]["title"]);
        $this->assertSame("System", $events[3]["user"]);
    }

    public function testItReturns404ForNonExistentDevice(): void
    {
        $response = $this->getJson("/api/devices/nonexistent-uuid/events");

        $response->assertStatus(404);
    }
}
