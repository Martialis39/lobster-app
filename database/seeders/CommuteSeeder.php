<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commute;

class CommuteSeeder extends Seeder
{
    public function run()
    {
        // Seed some dummy commutes
        Commute::factory()->count(5)->create();
    }
}
