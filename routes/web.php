<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Termwind\Components\Dd;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $location = $_REQUEST['location'] ?? 'London';

    $responce = Http::get('https://api.openweathermap.org/data/2.5/weather', [
        'q' => $location,
        'appid' => env('OPEN_WEATHER_API_KEY'),
        'units' => 'metric',
    ]);

    $feature = Http::get('https://api.openweathermap.org/data/2.5/forecast', [
        'q' => $location,
        'appid' => env('OPEN_WEATHER_API_KEY'),
        'units' => 'metric',
        'cnt' => '5',
    ]);

    return view('welcome', [
        'current' => $responce->json(),
        'feature' => $feature->json(),
        'location' => $location,
    ]);

 
});
