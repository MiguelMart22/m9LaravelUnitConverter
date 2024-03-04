<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpeedConverterTest extends TestCase
{
    /**
     * Test kilometers per hour to miles per hour conversion.
     *
     * @return void
     */
    public function testKphToMphConversion()
    {
        $response = $this->get('api/speed-converter/kph/100');

        $response->assertStatus(200)
                 ->assertJson(['mph' => 62.137100000000004]);
    }

    /**
     * Test miles per hour to kilometers per hour conversion.
     *
     * @return void
     */
    public function testMphToKphConversion()
    {
        $response = $this->get('api/speed-converter/mph/60');

        $response->assertStatus(200)
                 ->assertJson(['kph' => 96.5606698735538]);
    }
}
