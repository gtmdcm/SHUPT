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

Route::get('/', 'PageController@welcome')->name('welcome');

Route::get('mainpage', 'PageController@mainpage')->name('mainpage')->middleware('auth');

Route::get('rules', 'PageController@rules')->name('rules')->middleware('auth');

Route::get('upload', 'PageController@upload')->name('upload')->middleware('auth');

Route::get('torrent', 'PageController@torrent')->name('torrent')->middleware('auth');

Route::get('forums', 'PageController@forums')->name('forums')->middleware('auth');

Route::get('help', 'PageController@help')->name('help');

Route::get('viewrequests', 'PageController@viewrequests')->name('viewrequests')->middleware('auth');

Route::get('edit_profile', 'PageController@edit_profile')->name('edit_profile')->middleware('auth');

Route::post('edit_profile', 'UserController@editProfile')->name('edit_profile')->middleware('auth');

Route::post('upload','UploadController@uploadSeeds')->name('upload')->middleware('auth');

Route::get('todo', 'PageController@todo')->name('todo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('users', 'UserController');

//zd test
Route::get('/testapp', 'PageController@app')->name('app')->middleware('auth');

Route::get('/testchild', 'PageController@child')->name('child')->middleware('auth');

//szy test
Route::get('log', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
