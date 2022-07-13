<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $terenSeeder = new TerenSeeder();
        $terenSeeder->run();

        $teniserSeeder = new TeniserSeeder();
        $teniserSeeder->run();

        $treningSeeder = new TreningSeeder();
        $treningSeeder->run();
    }
}
