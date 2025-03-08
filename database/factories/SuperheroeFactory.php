<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superheroe>
 */
class SuperheroeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->userName(),
            'real_name' => fake()->name(),
            'gender_id' => fake()->numberBetween(1,3),
            'universe_id' => fake()->numberBetween(1,2),
            'picture' => fake()->imageUrl(640, 480, 'superhero'),
        ];
    }
}
