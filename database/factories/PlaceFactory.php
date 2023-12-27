<?php

namespace Database\Factories;

use App\Models\Place;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    protected $model = Place::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->city
            // Add other fields based on your "places" table

            // Don'
        ];
    }
}
