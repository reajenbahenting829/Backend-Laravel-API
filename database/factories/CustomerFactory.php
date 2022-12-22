<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => fake()->fullname,
            'age' => fake()->age,
            'email_address' => fake()->address,
            'status' => fake()->status,
            'phone' => fake()->phoneNumber,
            'credit_limit' => fake()->numberBetween(1000,10000)
        ];
    }
}
