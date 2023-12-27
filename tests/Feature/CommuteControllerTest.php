<?php

namespace Tests\Feature;

use App\Models\Commute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommuteControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_can_create_commute()
    {
        $data = [
            'start_destination' => $this->faker->city,
            'end_destination' => $this->faker->city,
            'distance' => $this->faker->randomFloat(2, 1, 100),
            'fuel_consumed' => $this->faker->randomFloat(2, 1, 50),
            'duration' => $this->faker->time,
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
