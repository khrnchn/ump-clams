<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pledge>
 */
class PledgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vot_no' => fake()->text(50),
            'sample_no' => fake()->text(50),
            'description' => fake()->text(500),
            'payment_proof_path' => fake()->text(500),

        ];
    }
}
