<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sample>
 */
class SampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sample_no' => fake()->text(50),
            'sample_marking' => fake()->text(50),
            'sample_description' => fake()->text(500),
            'no_of_samples' => fake()->randomNumber(),
            'action' => fake()->text(50),
            'remarks' => fake()->text(500),
            'delete_later' => fake()->text(50),

        ];
    }
}
