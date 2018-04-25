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

Route::get('mainpage', 'PageController@mainpage')->name('mainpage')->middleware('auth')->middleware('mailcheck');

Route::get('rules', 'PageController@rules')->name('rules')->middleware('auth')->middleware('mailcheck');

Route::get('upload', 'PageController@upload')->name('upload')->middleware('auth')->middleware('mailcheck');

Route::get('torrent', 'PageController@torrent')->name('torrent')->middleware('auth')->middleware('mailcheck');

Route::get('forums', 'PageController@forums')->name('forums')->middleware('auth')->middleware('mailcheck');

Route::get('help', 'PageController@help')->name('help')->middleware('auth')->middleware('mailcheck');

Route::get('viewrequests', 'PageController@viewrequests')->name('viewrequests')->middleware('auth')->middleware('mailcheck');

Route::get('edit_profile', 'PageController@edit_profile')->name('edit_profile')->middleware('auth')->middleware('mailcheck');

Route::post('edit_profile', 'UserController@editProfile')->name('edit_profile')->middleware('auth')->middleware('mailcheck');

Route::post('upload', 'ResourceController@createResource')->name('upload')->middleware('auth')->middleware('mailcheck');

Route::post('upload_file', 'UploadController@uploadSeeds')->name('upload_file')->middleware('auth')->middleware('mailcheck');

Route::get('userinfo', 'UserInfoController@getUserInfo')->name('userinfo');

Route::get('userud', 'UserInfoController@getUserUD')->name('userud');

Route::get('contribute', 'UserInfoController@getContribute')->name('contribute');

Route::get('todo', 'PageController@todo')->name('todo');

Route::get('announce', 'TrackerController@Tracking');

Route::get('handletorrent', 'TorrentController@handleTorrent');

Auth::routes();

Route::get('logout', 'UserController@getLogout')->name('logout')->middleware('auth')->middleware('mailcheck');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth')->middleware('mailcheck');

Route::get('emailerror','PageController@emailerror')->name('emailerror');
//zd test
Route::get('/testapp', 'PageController@app')->name('app')->middleware('auth')->middleware('mailcheck');

Route::get('/testchild', 'PageController@child')->name('child')->middleware('auth')->middleware('mailcheck');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth')->middleware('mailcheck');

Route::get('getImage', 'UserInfoController@getImage')->name('getImage')->middleware('auth')->middleware('mailcheck');

Route::get('mail','ApiController@showEMail');

Route::get('identifyemail','PageController@identifyemail')->name('identifyemail')->middleware('auth');

//Route::get('getImage', 'UserinfoController@getImage')->name('getImage')->middleware('auth');

