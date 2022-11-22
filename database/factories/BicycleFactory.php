<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bicycle>
 */
class BicycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'make' => fake()->year(),
            'model' => 'Chine',
            'size' => fake()->randomElement(['19' ,'20', '21']),
            'color' => fake()->randomElement(['red' ,'yellow', 'green']),
            'price' => rand(5000, 15000),
            'make_date' =>  now()
        ];
    }
}
