<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => $this->faker->unique()->randomNumber(8),
            'firstname' => $this->faker->firstName(),
            'othername' => $this->faker->name,
            'surname' => $this->faker->lastName(1),
            'lastname' => $this->faker->lastName(1),
            'sex' => $this->faker->randomElement(['M', 'F']),
            'birthday' => $this->faker->date(),
            'start_dial' => $this->faker->date(),
            'code' => $this->faker->randomNumber(8),
            'status' => $this->faker->randomElement(['ACTIVO', 'INACTIVO'])
        ];
    }
}
