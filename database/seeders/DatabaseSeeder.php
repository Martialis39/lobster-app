<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\PlaceFactory;
use Database\Seeders\PlaceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            PlaceSeeder::class,
            // CommuteSeeder::class,
            // Other seeders...
        ]);
    }
}
