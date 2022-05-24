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
            'name' => $this->faker->word(),
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,5),
            'stock' => 1,
            'price' => $this->faker->randomFloat(2,0,100),
            'slug' => $this->faker->slug(2, false),
        ];
    }
}
