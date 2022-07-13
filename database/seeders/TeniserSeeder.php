<?php

namespace Database\Seeders;

use App\Models\Teniser;
use Illuminate\Database\Seeder;

class TeniserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teniser::factory()->count(50)->create();
    }
}
