<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Relay\Models\Device;
use Relay\Models\FaultReport;

/**
 * @extends Factory<FaultReport>
 */
class FaultReportFactory extends Factory
{
    protected $model = FaultReport::class;

    public function definition(): array
    {
        $status = $this->faker->randomElement(["pending", "in_progress", "resolved"]);

        return [
            "device_uuid" => Device::factory(),
            "title" => $this->faker->randomElement([
                "Urządzenie nie odpowiada",
                "Błąd zasilania",
                "Awaria czujnika",
                "Nadmierne wibracje",
                "Wyciek płynu",
                "Nieprawidłowe wskazania",
                "Hałas podczas pracy",
                "Przegrzewanie się urządzenia",
            ]),
            "description" => $this->faker->optional()->paragraph(),
            "reported_by" => $this->faker->optional()->name(),
            "contact" => $this->faker->optional()->randomElement([
                $this->faker->email(),
                $this->faker->phoneNumber(),
            ]),
            "status" => $status,
            "resolved_at" => $status === "resolved" ? $this->faker->dateTimeBetween("-30 days", "now") : null,
        ];
    }

    public function pending(): static
    {
        return $this->state(fn() => ["status" => "pending", "resolved_at" => null]);
    }

    public function inProgress(): static
    {
        return $this->state(fn() => ["status" => "in_progress", "resolved_at" => null]);
    }

    public function resolved(): static
    {
        return $this->state(fn() => [
            "status" => "resolved",
            "resolved_at" => $this->faker->dateTimeBetween("-30 days", "now"),
        ]);
    }
}
