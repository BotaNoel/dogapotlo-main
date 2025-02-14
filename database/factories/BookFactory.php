<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
                'Konyv1', 'Konyv2', 'Konyv3', 'Konyv4', 'Konyv5', 'Konyv6', 'Konyv7', 'Konyv8', 'Konyv9', 'Konyv10'
            ])
        ];
    }
}
