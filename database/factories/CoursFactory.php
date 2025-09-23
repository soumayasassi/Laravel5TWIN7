<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cours>
 */
class CoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
           // 'duree' => $this->faker->randomDigit(),
            'duree' => $this->faker->randomElement(['21', '30' , '42']),

        ];
    }
}
