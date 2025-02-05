<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = [
            'Minimalist',
            'Boho Chic',
            'Statement Earrings',
            'Geometric',
            'Nature-Inspired',
        ];

        static $index = 0;

        $pickedName = $name[$index];

        $index = ($index + 1) % count($name);

        return [
            'name' => $pickedName,
        ];
    }
}
