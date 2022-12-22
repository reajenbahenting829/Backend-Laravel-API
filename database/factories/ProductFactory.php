<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => fake()->brand,
            'name' => fake()->words(2,true),
            'supplier' => fake()->words(6, true),
            'category' => fake()->words(6, true),
            'price' => fake()->numberBetween(10,999),
            'quantity' => fake()->numberBetween(10,500),
            'units' => fake()->randomElement(["pieces","grams","kilograms","bottles","boxes","litres","meters","inches","packs","bundles","gallons"])
        ];
    }
}

