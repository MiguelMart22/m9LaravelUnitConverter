<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemperatureConverterTest extends TestCase
{
    /**
     * Test Celsius to Fahrenheit conversion.
     *
     * @return void
     */
    public function testCelsiusToFahrenheitConversion()
    {
        $response = $this->get('api/temperature-converter/celsius/25');

        $response->assertStatus(200)
                 ->assertJson(['fahrenheit' => 77]);
    }

    /**
     * Test Fahrenheit to Celsius conversion.
     *
     * @return void
     */
    public function testFahrenheitToCelsiusConversion()
    {
        $response = $this->get('api/temperature-converter/fahrenheit/75');

        $response->assertStatus(200)
                 ->assertJson(['celsius' => 23.88888888888889]);
    }
}
