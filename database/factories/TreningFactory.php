<?php

namespace Database\Factories;

use App\Models\Teniser;
use App\Models\Teren;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'vreme' => $this->faker->time($format = 'H:i', $max = 'now'),
            'teniser_id' => Teniser::factory(),
            'teren_id' => Teren::factory()
        ];
    }
}
