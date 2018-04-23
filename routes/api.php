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

Route::get('school', 'ApiController@showSchools')->name('school');

Route::get('standard', 'ApiController@showStandards')->name('standard');

Route::get('catagory', 'ApiController@showCatagory')->name('catagory');

Route::get('userinfo', 'ApiController@showUserinfo')->name('userinfo');

Route::get('resource', 'ApiController@showResource')->name('resource');

Route::get('ip', 'ApiController@showIP')->name('ip');

Route::post('upload_file/{name}', 'UploadController@uploadSeeds');

Route::post('Avatar/{name}', 'UploadController@uploadAvatar');

Route::get('download/{pub}/{seed}/{index}', 'ResourceController@downloadSeeds');

Route::post('test', function () {
    print(Input::all());
});
Route::get('ifAvatar/{name}', 'UserInfoController@ifAvatar');

