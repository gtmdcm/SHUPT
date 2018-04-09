<?php

use Illuminate\Http\Request;

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

Route::get('/school','ApiController@showSchools');

Route::get('/standard','ApiController@showStandards');

Route::get('/catagory','ApiController@showCatagory');

Route::post('test',function () {
    print(Input::all());
});

Route::post('/documents',function(){

});

