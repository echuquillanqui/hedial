<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->userName(),
            'name' => fake()->name(),
            'profile' => fake()->randomElement(['Super', 'Admin', 'Doctor', 'Enfermero', 'Tecnico']),
            'place' => fake()->randomElement(['Lima', 'Huancayo', 'San Ramon', 'Pasco', 'Huancavelica']),
            'room' => fake()->randomElement(['MODULO 1', 'MODULO 2', 'MODULO 3', 'MODULO 4']),
            'dni' => fake()->unique()->randomNumber(8),
            'cmp' => fake()->unique()->randomNumber(5),
            'rne' => fake()->unique()->randomNumber(5),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
