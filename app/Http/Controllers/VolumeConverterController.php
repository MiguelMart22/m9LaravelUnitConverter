<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolumeConverterController extends Controller
{
    public function convert($unit, $value)
    {
        $result = null;

        switch ($unit) {
            case 'liters':
                $result = $this->litersToGallons($value);
                break;
            case 'gallons':
                $result = $this->gallonsToLiters($value);
                break;
            default:
                return response()->json(['error' => 'Invalid unit'], 400);
        }

        return response()->json($result);
    }

    private function litersToGallons($liters)
    {
        $gallons = $liters * 0.264172;
        return ['gallons' => $gallons];
    }

    private function gallonsToLiters($gallons)
    {
        $liters = $gallons / 0.264172;
        return ['liters' => $liters];
    }
}
