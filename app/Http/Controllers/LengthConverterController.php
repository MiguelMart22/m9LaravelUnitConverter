<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LengthConverterController extends Controller
{
    public function convert($unit, $value)
    {
        $result = null;

        switch ($unit) {
            case 'meters':
                $result = $this->metersToFeet($value);
                break;
            case 'feet':
                $result = $this->feetToMeters($value);
                break;
            default:
                return response()->json(['error' => 'Invalid unit'], 400);
        }

        return response()->json($result);
    }

    private function metersToFeet($meters)
    {
        $feet = $meters * 3.28084;
        return ['feet' => $feet];
    }

    private function feetToMeters($feet)
    {
        $meters = $feet / 3.28084;
        return ['meters' => $meters];
    }
}
