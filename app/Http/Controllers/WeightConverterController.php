<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightConverterController extends Controller
{
    public function convert($unit, $value)
    {
        $result = null;

        switch ($unit) {
            case 'kilograms':
                $result = $this->kilogramsToPounds($value);
                break;
            case 'pounds':
                $result = $this->poundsToKilograms($value);
                break;
            default:
                return response()->json(['error' => 'Invalid unit'], 400);
        }

        return response()->json($result);
    }

    private function kilogramsToPounds($kilograms)
    {
        $pounds = $kilograms * 2.20462;
        return ['pounds' => $pounds];
    }

    private function poundsToKilograms($pounds)
    {
        $kilograms = $pounds / 2.20462;
        return ['kilograms' => $kilograms];
    }
}
