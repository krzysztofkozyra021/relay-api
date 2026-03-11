<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Relay\Models\Device;

/**
 * @extends Factory<Device>
 */
class DeviceFactory extends Factory
{
    public function definition(): array
    {
        return [
            "uuid" => $this->faker->uuid(),
            "name" => $this->faker->numerify("Device ####"),
            "type" => $this->faker->randomElement(["A/C", "Gate", "Wheel Lock"]),
            "model" => $this->faker->numerify("Model-####"),
            "brand" => $this->faker->company(),
            "serial_number" => $this->faker->numerify("SN-########"),
            "location" => $this->faker->address(),
            "installation_date" => $this->faker->date(),
            "notes" => $this->faker->text(),
        ];
    }
}
