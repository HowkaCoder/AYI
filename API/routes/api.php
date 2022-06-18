<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RestaraunController;
use App\Models\Country;
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


Route::resource('countries' , CountryController::class);

Route::resource('regions' , RegionController::class);

Route::resource('cities' , CityController::class);

Route::resource('restarauns' , RestaraunController::class);

Route::post('restarauns/upbeat' , [RestaraunController::class , 'upbeat']);

Route::resource('menus' , MenuController::class);

Route::resource('foods' , FoodController::class);

Route::post('foods/upbeat' , [FoodController::class , 'upbeat']);

