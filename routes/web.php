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

Route::get('help', 'PageController@help')->name('help')->middleware('auth');

Route::get('viewrequests', 'PageController@viewrequests')->name('viewrequests')->middleware('auth');

Route::get('edit_profile', 'PageController@edit_profile')->name('edit_profile')->middleware('auth');

Route::post('edit_profile', 'UserController@editProfile')->name('edit_profile')->middleware('auth');

Route::post('upload','ResourceController@createResource')->name('upload')->middleware('auth');

Route::post('upload_file','UploadController@uploadSeeds')->name('upload_file')->middleware('auth');

Route::get('userinfo','UserInfoController@getUserInfo')->name('userinfo');

Route::get('todo', 'PageController@todo')->name('todo');

Route::get('announce', 'TrackerController@Tracking');

Route::get('handletorrent','TorrentController@handleTorrent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//zd test
Route::get('/testapp', 'PageController@app')->name('app')->middleware('auth');

Route::get('/testchild', 'PageController@child')->name('child')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
