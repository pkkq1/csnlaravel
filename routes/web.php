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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', ['as' => 'HomeController@index', 'uses' => 'HomeController@index']);
Route::get('/upload', ['as' => 'UploadController@index', 'uses' => 'UploadController@index']);
Route::get('/upload/artist', ['as' => 'UploadController@uploadArtist', 'uses' => 'UploadController@uploadArtist']);
Route::post('/upload/store_artist', ['as' => 'UploadController@storeArtist', 'uses' => 'UploadController@storeArtist']);
