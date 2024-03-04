<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureConverterController extends Controller
{
    public function convert($unit, $value)
    {
        $result = null;

        switch ($unit) {
            case 'celsius':
                $result = $this->celsiusToFahrenheit($value);
                break;
            case 'fahrenheit':
                $result = $this->fahrenheitToCelsius($value);
                break;
            default:
                return response()->json(['error' => 'Invalid unit'], 400);
        }

        return response()->json($result);
    }

    private function celsiusToFahrenheit($celsius)
    {
        $fahrenheit = ($celsius * 9/5) + 32;
        return ['fahrenheit' => $fahrenheit];
    }

    private function fahrenheitToCelsius($fahrenheit)
    {
        $celsius = ($fahrenheit - 32) * 5/9;
        return ['celsius' => $celsius];
    }
}
