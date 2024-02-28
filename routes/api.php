<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountyController;
use Illuminate\Support\Facades\Route;

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

Route::get('counties', [CountyController::class, 'show']);
Route::controller(CityController::class)->middlleware('cors')->group(function () {
    Route::post('newcity', 'store');
    Route::get('citytable', 'show');
    Route::post('update', 'update');
    Route::delete('destroy', 'destroy');
});
