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
Route::post('nghe-album/{musicUrl}.html', ['as' => 'api.music.listen', 'uses' => 'MusicController@getAlbumInfo']);
Route::post('nghe-album/{musicUrl}', ['as' => 'api.music.listen', 'uses' => 'MusicController@getAlbumInfo']);

Route::post('playlist/{musicUrl}.html', ['as' => 'api.music.listen', 'uses' => 'MusicController@getPlaylistInfo']);
Route::post('playlist/{musicUrl}', ['as' => 'api.music.listen', 'uses' => 'MusicController@getPlaylistInfo']);

Route::get('mp3/{cat}/{sub}/{musicUrl}.html', ['as' => 'music.listen', 'uses' => 'MusicController@listenSingleMusic']);
Route::get('mp3/{cat}/{sub}/{musicUrl}', ['as' => 'music.listen', 'uses' => 'MusicController@listenSingleMusic']);

// artist
Route::prefix('artist')->group(function () {
    Route::post('profile', ['as' => 'api.artist.profile', 'uses' => 'ArtistController@getProfile']);
    Route::get('tab', ['as' => 'api.artist.tab', 'uses' => 'ArtistController@getTabArtist']);
    Route::post('favourite', ['as' => 'api.artist.favourite', 'uses' => 'ArtistController@favourite']);
    Route::post('list_all_music', ['as' => 'api.artist.list_all_music', 'uses' => 'ArtistController@listMusic']);
});

// BXH
Route::get('nhac-hot.html', ['as' => 'bxh.now', 'uses' => 'BxhController@now']);
Route::get('nhac-hot', ['as' => 'bxh.now', 'uses' => 'BxhController@now']);

Route::get('bang-xep-hang/tuan.html', ['as' => 'bxh.month', 'uses' => 'BxhController@week']);
Route::get('bang-xep-hang/tuan', ['as' => 'bxh.month', 'uses' => 'BxhController@week']);

Route::get('bang-xep-hang/thang-{month}-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);
Route::get('bang-xep-hang/thang-{month}-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);

Route::get('bang-xep-hang/nam-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);
Route::get('bang-xep-hang/nam-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);


Route::get('bang-xep-hang/{cat}', ['as' => 'bxh.cat', 'uses' => 'BxhController@cat']);



