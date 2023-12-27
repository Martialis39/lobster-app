<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;
use Database\Factories\PlaceFactory;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::factory()->count(5)->create();
    }
}
 