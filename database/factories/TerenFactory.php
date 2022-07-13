<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TerenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->streetName(),
            'lokacija' => $this->faker->address(),
            'kapacitet' => $this->faker->numberBetween($min = 50, $max = 30000),
        ];
    }
}
