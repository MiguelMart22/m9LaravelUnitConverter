<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeedConverterController;
use App\Http\Controllers\WeightConverterController;
use App\Http\Controllers\TemperatureConverterController;
use App\Http\Controllers\VolumeConverterController;
use App\Http\Controllers\LengthConverterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/length-converter/{unit}/{value}', [LengthConverterController::class, 'convert']);
Route::get('/weight-converter/{unit}/{value}', [WeightConverterController::class, 'convert']);
Route::get('/temperature-converter/{unit}/{value}', [TemperatureConverterController::class, 'convert']);
Route::get('/volume-converter/{unit}/{value}', [VolumeConverterController::class, 'convert']);
Route::get('/speed-converter/{unit}/{value}', [SpeedConverterController::class, 'convert']);