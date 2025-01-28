<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'Sunset Dangles',
                'Ocean Hoops',
                'Pastel Studs',
                'Gold Swirls',
                'Floral Drops',
            ]),
            'price' => $this->faker->numberBetween(8, 30),
            'style' => $this->faker->randomElement(['dangles', 'hoops', 'studs', 'swirls', 'drops'])
        ];
    }
}
