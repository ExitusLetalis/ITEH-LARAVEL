<?php

namespace Database\Seeders;

use App\Models\Teren;
use Illuminate\Database\Seeder;

class TerenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teren::factory()->count(30)->create();
    }
}
