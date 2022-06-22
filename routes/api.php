<?php

use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\FlightSearchController;
use App\Http\Controllers\GetPriceController;
use App\Http\Controllers\OrderFlightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/init', AccessTokenController::class);

Route::get('/generate', 'App\Http\Controllers\AccessTokenController@generate');
// Route::post('/search', FlightSearchController::class);
Route::get('/search', 'App\Http\Controllers\FlightSearchController@search');
Route::post('/price', GetPriceController::class);
Route::post('/order', OrderFlightController::class);
