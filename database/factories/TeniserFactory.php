<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeniserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'drzava' => $this->faker->country(),
            'godiste' => $this->faker->numberBetween($min = 1982, $max = 2005),
            'rank' => $this->faker->numberBetween($min = 1, $max = 500)
        ];
    }
}
