<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VolumeConverterTest extends TestCase
{
    /**
     * Test liters to gallons conversion.
     *
     * @return void
     */
    public function testLitersToGallonsConversion()
    {
        $response = $this->get('api/volume-converter/liters/50');

        $response->assertStatus(200)
                 ->assertJson(['gallons' => 13.2086]);
    }

    /**
     * Test gallons to liters conversion.
     *
     * @return void
     */
    public function testGallonsToLitersConversion()
    {
        $response = $this->get('api/volume-converter/gallons/10');

        $response->assertStatus(200)
                 ->assertJson(['liters' => 37.854125342579835]);
    }
}
