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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
// Api

Route::prefix('auth')->group(function () {
    Route::get('login', 'AuthController@login');
    Route::get('login/facebook', 'AuthController@loginFacebook');
    Route::get('login/google', 'AuthController@loginGoogle');
});
Route::get('search', 'SearchController@index');
Route::post('nghe-album/{musicUrl}.html', ['as' => 'api.music.listen', 'uses' => 'MusicController@getMusicInfo']);
Route::post('nghe-album/{musicUrl}', ['as' => 'api.music.listen', 'uses' => 'MusicController@getMusicInfo']);
Route::post('artist/profile', ['as' => 'api.artist.profile', 'uses' => 'ArtistController@getProfile']);
Route::get('artist/tab', ['as' => 'api.artist.tab', 'uses' => 'ArtistController@getTabArtist']);
Route::post('artist/favourite', ['as' => 'api.artist.favourite', 'uses' => 'ArtistController@favourite']);
Route::post('artist/list_all_music', ['as' => 'api.artist.list_all_music', 'uses' => 'ArtistController@listMusic']);



