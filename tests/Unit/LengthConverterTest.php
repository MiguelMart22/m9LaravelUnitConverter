<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LengthConverterTest extends TestCase
{
    /**
     * Test meters to feet conversion.
     *
     * @return void
     */
    public function testMetersToFeetConversion()
    {
        $response = $this->get('api/length-converter/meters/10');

        $response->assertStatus(200)
                 ->assertJson(['feet' => 32.8084]);
    }

    /**
     * Test feet to meters conversion.
     *
     * @return void
     */
    public function testFeetToMetersConversion()
    {
        $response = $this->get('api/length-converter/feet/32.8084');

        $response->assertStatus(200)
                 ->assertJson(['meters' => 10]);
    }
}
