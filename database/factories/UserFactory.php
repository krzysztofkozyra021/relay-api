<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Relay\Models\User;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "email" => fake()->unique()->safeEmail(),
            "email_verified_at" => now(),
            "password" => "password",
            "remember_token" => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn(array $attributes): array => [
            "email_verified_at" => null,
        ]);
    }

    public function admin(): static
    {
        return $this->state(fn(array $attributes): array => [
            "is_admin" => true,
        ]);
    }

    public function installer(): static
    {
        return $this->state(fn(array $attributes): array => [
            "is_installer" => true,
        ]);
    }

    public function service(): static
    {
        return $this->state(fn(array $attributes): array => [
            "is_service" => true,
        ]);
    }
}
