<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Relay\Models\Device;
use Relay\Models\User;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->admin()->create([
            "name" => "Administrator",
            "email" => "admin@example.com",
            "password" => "password",
        ]);

        User::factory()->installer()->create([
            "name" => "Installer",
            "email" => "installer@example.com",
            "password" => "password",
        ]);

        User::factory()->service()->create([
            "name" => "Service Technician",
            "email" => "service@example.com",
            "password" => "password",
        ]);

        Device::factory()->count(50)->create();

        Device::create([
            "uuid" => Str::uuid()->toString(),
            "name" => "Air Conditioner 01",
            "type" => "AC",
            "model" => "Samsung WindFree",
            "brand" => "Samsung",
            "serial_number" => "SN123456789",
            "location" => "Office Room 101",
            "installation_date" => "2024-01-15",
            "notes" => "Regular maintenance every 6 months.",
        ]);

        Device::create([
            "uuid" => Str::uuid()->toString(),
            "name" => "Elevator A",
            "type" => "Elevator",
            "model" => "Alpha 500",
            "brand" => "Otis",
            "serial_number" => "SN987654321",
            "location" => "Main Lobby",
            "installation_date" => "2023-11-20",
            "notes" => "Emergency brake check completed in Feb.",
        ]);
    }
}
