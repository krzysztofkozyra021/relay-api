<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Relay\Models\Device;
use Relay\Models\FaultReport;
use Relay\Models\User;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::factory()->admin()->create([
            "name" => "Administrator",
            "email" => "admin@example.com",
            "password" => "password",
        ]);

        $installer = User::factory()->installer()->create([
            "name" => "Installer",
            "email" => "installer@example.com",
            "password" => "password",
        ]);

        $service = User::factory()->service()->create([
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

        $devices = Device::all();

        $installer->devices()->attach(
            $devices->slice(0, 25)->pluck("uuid")->toArray(),
        );

        $service->devices()->attach(
            $devices->slice(25, 20)->pluck("uuid")->toArray(),
        );

        $shared = $devices->slice(45)->pluck("uuid")->toArray();
        $installer->devices()->syncWithoutDetaching($shared);
        $service->devices()->syncWithoutDetaching($shared);

        $installerDevices = $installer->devices()->get();
        $serviceDevices = $service->devices()->get();

        FaultReport::factory()->pending()->create([
            "device_uuid" => $installerDevices->first()->uuid,
            "title" => "Urządzenie nie odpowiada",
            "description" => "Po włączeniu zasilania urządzenie nie reaguje na komendy.",
            "reported_by" => "Jan Kowalski",
            "contact" => "jan.kowalski@firma.pl",
        ]);

        FaultReport::factory()->inProgress()->create([
            "device_uuid" => $installerDevices->get(1)->uuid,
            "title" => "Nadmierne wibracje",
            "description" => "Podczas pracy słychać nienaturalne wibracje.",
            "reported_by" => "Anna Nowak",
            "contact" => "501 234 567",
        ]);

        FaultReport::factory()->resolved()->create([
            "device_uuid" => $installerDevices->get(2)->uuid,
            "title" => "Wyciek płynu chłodzącego",
            "reported_by" => "Piotr Wiśniewski",
        ]);

        FaultReport::factory()->pending()->create([
            "device_uuid" => $serviceDevices->first()->uuid,
            "title" => "Błąd wyświetlacza",
            "description" => "Ekran pokazuje kod błędu E04.",
        ]);

        FaultReport::factory()->pending()->create([
            "device_uuid" => $serviceDevices->get(1)->uuid,
            "title" => "Awaria czujnika temperatury",
            "reported_by" => "Krzysztof Zając",
            "contact" => "k.zajac@kontakt.pl",
        ]);

        FaultReport::factory()->inProgress()->create([
            "device_uuid" => $serviceDevices->get(2)->uuid,
            "title" => "Hałas podczas pracy",
            "description" => "Urządzenie wydaje głośne dźwięki w trybie nocnym.",
        ]);

        FaultReport::factory()->resolved()->create([
            "device_uuid" => $devices->last()->uuid,
            "title" => "Przegrzewanie się urządzenia",
            "reported_by" => "Maria Kaczmarek",
            "contact" => "maria@example.com",
        ]);

        FaultReport::factory()->pending()->create([
            "device_uuid" => $devices->last()->uuid,
            "title" => "Nieprawidłowe wskazania",
            "description" => "Czujnik pokazuje wartości poza zakresem normy.",
        ]);
    }
}
