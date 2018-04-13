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

Route::get('mainpage', 'PageController@mainpage')->name('mainpage');

Route::get('rules', 'PageController@rules')->name('rules');

Route::get('upload', 'PageController@upload')->name('upload');

Route::get('torrent', 'PageController@torrent')->name('torrent');

Route::get('forums', 'PageController@forums')->name('forums');

Route::get('help', 'PageController@help')->name('help');

Route::get('viewrequests', 'PageController@viewrequests')->name('viewrequests');

Route::get('edit_profile', 'PageController@edit_profile')->name('edit_profile');

Route::post('edit_profile', 'UserController@editProfile')->name('edit_profile');

Route::get('todo', 'PageController@todo')->name('todo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

//zd test
Route::get('/testapp', 'PageController@app')->name('app');

Route::get('/testchild', 'PageController@child')->name('child');

//szy test
Route::get('log', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
