<?php

namespace Tests\Feature;

use App\Models\Commute;
use App\Models\Place;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommuteControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_can_create_commute()
    {

        $place = Place::factory()->create();
        $data = [
            'start_destination_id' => $place->id,
            'end_destination_id' => $place->id,
            'distance' => $this->faker->randomFloat(2, 1, 100),
            'fuel_consumed' => $this->faker->randomFloat(2, 1, 50),
            'duration_seconds' => $this->faker->randomDigit(),
        ];



        $response = $this->post(route('commute.store'), $data);

        $response->assertStatus(302); // Assuming a redirect on successful creation

        $this->assertDatabaseHas('commutes', $data);
    }

    public function test_can_view_create_form()
    {
        $response = $this->get(route('commute.create'));

        $response->assertStatus(200);
        $response->assertViewIs('commute.create');
    }
}
