<?php

namespace Database\Factories;

use App\Models\Category;
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
        $titlesAndStyles = [
            'Sunset Dangles' => 'dangles',
            'Ocean Hoops' => 'hoops',
            'Pastel Studs' => 'studs',
            'Gold Swirls' => 'swirls',
            'Floral Drops' => 'drops',
        ];

        $title = $this->faker->randomElement(array_keys($titlesAndStyles));

        return [
            'title' => $title,
            'price' => $this->faker->numberBetween(8, 30),
            'style' => $titlesAndStyles[$title],
        ];
    }
}
