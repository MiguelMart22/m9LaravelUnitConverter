<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeedConverterController extends Controller
{
    public function convert($unit, $value)
    {
        $result = null;

        switch ($unit) {
            case 'kph':
                $result = $this->kphToMph($value);
                break;
            case 'mph':
                $result = $this->mphToKph($value);
                break;
            default:
                return response()->json(['error' => 'Invalid unit'], 400);
        }

        return response()->json($result);
    }

    private function kphToMph($kph)
    {
        $mph = $kph * 0.621371;
        return ['mph' => $mph];
    }

    private function mphToKph($mph)
    {
        $kph = $mph / 0.621371;
        return ['kph' => $kph];
    }
}
