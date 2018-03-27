<?php

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

Route::get('/','PageController@mainpage')->name('mainpage');

Route::get('/testpage', function () {return view('welcome');});

Route::get('/upload','PageController@upload')->name('upload');

Route::get('/torrent','PageController@torrent')->name('torrent');

Route::get('/forums','PageController@forums')->name('forums');

Route::get('/viewrequests','PageController@viewrequests')->name('viewrequests');

Route::get('/main',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//