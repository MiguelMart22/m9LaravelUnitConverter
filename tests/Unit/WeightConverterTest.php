<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeightConverterTest extends TestCase
{
    /**
     * Test kilograms to pounds conversion.
     *
     * @return void
     */
    public function testKilogramsToPoundsConversion()
    {
        $response = $this->get('api/weight-converter/kilograms/20');

        $response->assertStatus(200)
                 ->assertJson(['pounds' => 44.0924]);
    }

    /**
     * Test pounds to kilograms conversion.
     *
     * @return void
     */
    public function testPoundsToKilogramsConversion()
    {
        $response = $this->get('api/weight-converter/pounds/45');

        $response->assertStatus(200)
                 ->assertJson(['kilograms' => 20.41168092460379]);
    }
}
