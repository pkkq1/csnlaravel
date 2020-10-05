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
    Route::post('login', 'AuthController@loginManual');
    Route::get('login/facebook', 'AuthController@loginFacebook');
    Route::get('login/google', 'AuthController@loginGoogle');
    Route::get('logout', 'AuthController@logOut');
    Route::post('register', 'AuthController@register');
});
Route::get('search', 'SearchController@index');
Route::get('home', 'HomeController@index');
Route::post('nghe-album/{musicUrl}.html', ['as' => 'api.music.listen', 'uses' => 'MusicController@urlAlbum']);
Route::post('nghe-album/{musicUrl}', ['as' => 'api.music.listen', 'uses' => 'MusicController@urlAlbum']);

Route::post('listen_info_music', ['as' => 'api.music.listen', 'uses' => 'MusicController@infoMusicId']);


Route::post('playlist/{musicUrl}/{name_playlist}.html', ['as' => 'api.music.listen', 'uses' => 'MusicController@getPlaylistInfo']);
Route::post('playlist/{musicUrl}/{name_playlist}', ['as' => 'api.music.listen', 'uses' => 'MusicController@getPlaylistInfo']);

Route::post('mp3/{cat}/{sub}/{musicUrl}.html', ['as' => 'music.listen', 'uses' => 'MusicController@newListenSingleMusic']);
Route::post('mp3/{cat}/{sub}/{musicUrl}', ['as' => 'music.listen', 'uses' => 'MusicController@newListenSingleMusic']);

Route::post('mp3/{artist}/{urlMusic}.html', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);
Route::post('mp3/{artist}/{urlMusic}', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);

Route::post('mp3/{urlMusic}.html', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);
Route::post('mp3/{urlMusic}', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);


Route::post('hd/{cat}/{sub}/{musicUrl}.html', ['as' => 'music.listen', 'uses' => 'MusicController@newListenSingleMusic']);
Route::post('hd/{cat}/{sub}/{musicUrl}', ['as' => 'music.listen', 'uses' => 'MusicController@newListenSingleMusic']);

Route::post('hd/{artist}/{urlMusic}.html', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);
Route::post('hd/{artist}/{urlMusic}', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);

Route::post('hd/{urlMusic}.html', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);
Route::post('hd/{urlMusic}', ['as' => 'music.listen', 'uses' => 'MusicController@newLinkListenSingleMusic']);


// artist
Route::prefix('artist')->group(function () {
    Route::post('profile', ['as' => 'api.artist.profile', 'uses' => 'ArtistController@getProfile']);
    Route::get('tab', ['as' => 'api.artist.tab', 'uses' => 'ArtistController@getTabArtist']);
    Route::post('favourite', ['as' => 'api.artist.favourite', 'uses' => 'ArtistController@favourite']);
    Route::post('list_all_music', ['as' => 'api.artist.list_all_music', 'uses' => 'ArtistController@listMusic']);
});

// BXH list
Route::get('nhac-hot.html', ['as' => 'bxh.now', 'uses' => 'BxhController@now']);
Route::get('nhac-hot', ['as' => 'bxh.now', 'uses' => 'BxhController@now']);

Route::get('bang-xep-hang/tuan.html', ['as' => 'bxh.month', 'uses' => 'BxhController@week']);
Route::get('bang-xep-hang/tuan', ['as' => 'bxh.month', 'uses' => 'BxhController@week']);

Route::get('bang-xep-hang/thang-{month}-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);
Route::get('bang-xep-hang/thang-{month}-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);

Route::get('bang-xep-hang/nam-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);
Route::get('bang-xep-hang/nam-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);

Route::get('bang-xep-hang/{cat}', ['as' => 'bxh.cat', 'uses' => 'BxhController@cat']);

// nghe nhac hot, bang xep hang
Route::post('nhac-hot/{catUrl}/{catLevel?}.html', ['as' => 'music.nhac-hot.listen', 'uses' => 'MusicController@listenBxhNow']);
Route::post('nhac-hot/{catUrl}/{catLevel?}', ['as' => 'music.nhac-hot.listen', 'uses' => 'MusicController@listenBxhNow']);

Route::post('bang-xep-hang/tuan/{catUrl}/{catLevel?}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhWeek']);
Route::post('bang-xep-hang/tuan/{catUrl}/{catLevel?}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhWeek']);

Route::post('bang-xep-hang/thang-{month}-{year}/{catUrl}/{catLevel?}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhMonth']);
Route::post('bang-xep-hang/thang-{month}-{year}/{catUrl}/{catLevel?}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhMonth']);

Route::post('bang-xep-hang/nam-{year}/{catUrl}/{catLevel?}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhYear']);
Route::post('bang-xep-hang/nam-{year}/{catUrl}/{catLevel?}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhYear']);
Route::post('tab_category', ['as' => 'category.get_tab', 'uses' => 'CategoryController@getTabCategory']);

Route::post('music/favourite', ['as' => 'bxh.month', 'uses' => 'MusicController@musicFavourite']);
// User
Route::prefix('user/')->group(function () {
    Route::post('qr_code/login/{token}', ['as' => 'api.user.qr_code.login', 'uses' => 'UserController@qrCodeLogin']);
    Route::post('{id}/music_recents', ['as' => 'user.music_recents', 'uses' => 'UserMusicController@musicRecent']);
    Route::post('artist_favourite', ['as' => 'user.artist_favourite', 'uses' => 'UserMusicController@artistFavourite']);
    Route::post('video_favourite', ['as' => 'user.video_favourite', 'uses' => 'UserMusicController@videoFavourite']);
    Route::post('music_favourite', ['as' => 'user.music_favourite', 'uses' => 'UserMusicController@musicFavourite']);
    Route::get('profile/{id}', ['as' => 'user.profile', 'uses' => 'UserController@index']);
    Route::post('update/{id}', ['as' => 'user.update', 'uses' => 'UserController@store']);
    Route::get('playlist/{id}', ['as' => 'api.user.playlist', 'uses' => 'UserController@playlist']);
    Route::prefix('playlist/')->group(function () {
        Route::post('danh-sach-playlist', ['as' => 'api.user.playlist_music', 'uses' => 'PlaylistController@getPlayList']);
        Route::post('add-music-playlist', ['as' => 'api.playlist.add_play_list', 'uses' => 'PlaylistController@addMusicPlayList']);
        Route::get('cap-nhat/{id}', ['as' => 'api.playlist.update_playlist', 'uses' => 'PlaylistController@editPlaylist']);
        Route::post('them', ['as' => 'api.playlist.store_playlist', 'uses' => 'PlaylistController@storePlaylist']);
        Route::post('create-playlist', ['as' => 'api.playlist.play_list', 'uses' => 'PlaylistController@createPlayList']);
        Route::post('delete', ['as' => 'api.playlist.delete_playlist', 'uses' => 'PlaylistController@deletePlaylist']);
    });
});

// Catalog
Route::prefix('catalog/')->group(function () {
    Route::get('bai-hat-moi', ['as' => 'catalog.music', 'uses' => 'CatalogController@musicNews']);
    Route::get('video-moi', ['as' => 'catalog.video', 'uses' => 'CatalogController@videoNews']);
    Route::get('album-moi', ['as' => 'catalog.album', 'uses' => 'CatalogController@albumNews']);
    Route::get('bai-hat-moi.html', ['as' => 'catalog.music', 'uses' => 'CatalogController@musicNews']);
    Route::get('video-moi.html', ['as' => 'catalog.video', 'uses' => 'CatalogController@videoNews']);
    Route::get('album-moi.html', ['as' => 'catalog.album', 'uses' => 'CatalogController@albumNews']);
});
// Chu de
Route::prefix('chu-de/')->group(function () {
    Route::get('danh-sach-chu-de', ['as' => 'api.catalog.list', 'uses' => 'CatalogController@list']);
    Route::get('{url}.html', ['as' => 'api.catalog.index', 'uses' => 'CatalogController@playlistPublisher']);
    Route::get('{url}', ['as' => 'api.catalog.index', 'uses' => 'CatalogController@playlistPublisher']);
});


// notify
Route::prefix('notify')->group(function () {
    Route::post('upload_status', ['as' => 'api.user.tab', 'uses' => 'NotifyController@uploadStatusNotify']);
});

Route::get('code_ads/{key}', ['as' => 'code.ads.index', 'uses' => 'CodeAdsController@index']);

// api up level
Route::post('csn-vip/up_vip_level', ['as' => 'vip.up', 'uses' => 'RequestPaymentVipController@saveUpRequest']);

//Payment & Level


