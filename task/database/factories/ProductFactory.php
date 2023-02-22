<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            //name, price, count, category, expire_date,
            'name' => $this->faker->name,
            'price' => rand(1000, 10000),
            'count' => $this->faker->numerify('##'),
            'category' => $this->faker->name,
            'expire_date' => $this->faker->date,
        ];
    }
}
