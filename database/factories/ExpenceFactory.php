<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(4),
            'date' => $this->faker->date('Y-m-d'),
            'amount' => $this->faker->numberBetween(50, 500),
            'category' => $this->faker->randomElement(['protine', 'medicine', 'training'],1),
            'user_id' => 1,
            'payment_method' => $this->faker->randomElement(['online pay', 'credit card', 'debit card'],1),
        ];
    }
}
