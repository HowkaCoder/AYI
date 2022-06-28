<?php

use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

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
    return view('index_ru');
    // return "dowie";
    // $data = Country::with('regions')->first();
    
    // return Country::with('regions')->get();
    
    // return CountryResource::collection($data);
    

    // return new CountryResource($data);

    
    
    // return new CountryCollection(Country::all());

})->name('ru');

Route::get('/en' , function(){
    return view('index_en');
})->name('en');
