<?php

use Illuminate\Http\Request;
//use Illuminate\Routing\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*

Route::get('country', 'Country\CountryControll@index');
Route::get('country/{id}', 'Country\CountryControll@indexId');
Route::post('country', 'Country\CountryControll@indexSave');
Route::put('country/{id}', 'Country\CountryControll@indexUpdate');
Route::delete('country/{id}', 'Country\CountryControll@indexDelete');

*/

//Route::group(['middleware' => 'client'], function () {
    Route::apiResource('country', 'Country\CountryResource');
//});
