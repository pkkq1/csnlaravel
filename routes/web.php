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

Auth::routes();

Route::get('/ping', 'SolariumController@ping');
Route::get('/sync/sorl_music', 'Sync\SorlSyncController@syncMusic');
Route::get('/sync/sorl_video', 'Sync\SorlSyncController@syncVideo');
Route::get('/sync/sorl_artist', 'Sync\SorlSyncController@syncArtist');
Route::get('/sync/sorl_cover', 'Sync\SorlSyncController@syncCover');
Route::get('/sync/demo', 'Sync\AlbumController@syncAlbumHot');


Route::group(['middlewareGroups' => ['web']], function () {
    Route::get('/logout', 'UserController@logout');

    Route::get('/', ['as' => 'HomeController.index', 'uses' => 'HomeController@index']);
    Route::get('/home', ['as' => 'HomeController.index', 'uses' => 'HomeController@index']);
    Route::get('/dang-tai', ['as' => 'upload.index', 'uses' => 'UploadController@index']);

    // Socialite
    Route::get('auth/facebook', 'Auth\AuthFacebookController@redirectToProvider');
    Route::get('auth/facebook/callback', 'Auth\AuthFacebookController@handleProviderCallback');
    // Category
    Route::get('mp3/{cat}.html', ['as' => 'category.get1', 'uses' => 'CategoryController@index1']);
    Route::get('mp3/{cat}', ['as' => 'category.get1', 'uses' => 'CategoryController@index1']);
    Route::get('mp3/{cat}/{sub}.html', ['as' => 'category.get2', 'uses' => 'CategoryController@index2']);
    Route::get('mp3/{cat}/{sub}', ['as' => 'category.get2', 'uses' => 'CategoryController@index2']);
    Route::get('hd/{cat}.html', ['as' => 'category.get1', 'uses' => 'CategoryController@index1']);
    Route::get('hd/{cat}', ['as' => 'category.get1', 'uses' => 'CategoryController@index1']);
    Route::get('hd/{cat}/{sub}.html', ['as' => 'category.get2', 'uses' => 'CategoryController@index2']);
    Route::get('hd/{cat}/{sub}', ['as' => 'category.get2', 'uses' => 'CategoryController@index2']);
    // BXH
    Route::get('nhac-hot.html', ['as' => 'bxh.now', 'uses' => 'BxhController@now']);
    Route::get('nhac-hot', ['as' => 'bxh.now', 'uses' => 'BxhController@now']);

    Route::get('bang-xep-hang/bang-xep-thang-{month}-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);
    Route::get('bang-xep-hang/bang-xep-thang-{month}-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);

    Route::get('bang-xep-hang/bang-xep-nam-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);
    Route::get('bang-xep-hang/bang-xep-nam-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);


    Route::get('bang-xep-hang/{cat}', ['as' => 'bxh.cat', 'uses' => 'BxhController@cat']);


    // listen music
    // single
    Route::get('mp3/{cat}/{sub}/{musicUrl}.html', ['as' => 'music.listen', 'uses' => 'MusicController@listenSingleMusic']);
    Route::get('mp3/{cat}/{sub}/{musicUrl}', ['as' => 'music.listen', 'uses' => 'MusicController@listenSingleMusic']);
    // album
    Route::get('nghe-album/{musicUrl}.html', ['as' => 'music.album.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    Route::get('nghe-album/{musicUrl}', ['as' => 'music.album.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    // playlist
    Route::get('playlist/{playlistUrl}.html', ['as' => 'music.playlist.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    Route::get('playlist/{playlistUrl}', ['as' => 'music.playlist.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    // video-clip
    Route::get('hd/video/{sub}/{musicUrl}.html', ['as' => 'music.video', 'uses' => 'MusicController@listenPlaylistMusic']);
    Route::get('hd/video/{sub}/{musicUrl}', ['as' => 'music.video', 'uses' => 'MusicController@listenPlaylistMusic']);
    // artist
    Route::get('ca-si/{artistUrl}', ['as' => 'artist.home', 'uses' => 'ArtistController@index']);
    // nhac hot, bang xep hang
    Route::get('nhac-hot/{catUrl}.html', ['as' => 'music.nhac-hot.listen', 'uses' => 'MusicController@listenBxhNow']);
    Route::get('nhac-hot/{catUrl}', ['as' => 'music.nhac-hot.listen', 'uses' => 'MusicController@listenBxhNow']);

    Route::get('bang-xep-hang/bang-xep-thang-{month}-{year}/{catUrl}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhMonth']);
    Route::get('bang-xep-hang/bang-xep-thang-{month}-{year}/{catUrl}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhMonth']);

    Route::get('bang-xep-hang/bang-xep-hang-nam-{year}/{catUrl}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhYear']);
    Route::get('bang-xep-hang/bang-xep-hang-nam-{year}/{catUrl}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhYear']);

    Route::get('embed/mp3/{music}', 'MusicController@embed');
    // ajax comment
    Route::post('binh-luan/get_ajax', ['as' => 'comment.get_ajax', 'uses' => 'CommentController@getAjaxCommentByMusicId']);

    // User
    Route::get('user/{id}', ['as' => 'user.index', 'uses' => 'User\UserController@index']);


    // Search
    Route::get('tim-kiem', ['as' => 'search.index', 'uses' => 'SearchController@index']);
    Route::get('/search/real', 'SearchController@ajaxSearch');


    Route::group(['middleware' => ['auth']], function() {

        // upload selector
        Route::get('dang-tai/ca-si', ['as' => 'upload.createArtist', 'uses' => 'UploadController@createArtist']);
        Route::post('dang-tai/ca-si', ['as' => 'upload.storeArtist', 'uses' => 'UploadController@storeArtist']);
        Route::get('dang-tai/nhac', ['as' => 'upload.createMusic', 'uses' => 'UploadController@createMusic']);
        Route::post('dang-tai/nhac', ['as' => 'upload.storeMusic', 'uses' => 'UploadController@storeMusic']);
        Route::post('dang-tai/file-nhac', ['as' => 'upload.fileMusic', 'uses' => 'UploadController@uploadFileMusic']);
        Route::get('dang-tai/ca-si/tim-kiem', ['as' => 'artist.gettermartist', 'uses' => 'ArtistController@getTermArtist']);

        // Comment
        Route::post('comment/post', ['as' => 'comment.create', 'uses' => 'CommentController@postComment']);

        // Playlist

        Route::get('playlist/user/danh-sach-playlist', ['as' => 'playlist.play_list', 'uses' => 'PlaylistController@getPlayList']);
        Route::post('playlist/user/create-playlist', ['as' => 'playlist.play_list', 'uses' => 'PlaylistController@createPlayList']);
        Route::post('playlist/user/add-music-playlist', ['as' => 'playlist.play_list', 'uses' => 'PlaylistController@addMusicPlayList']);
        Route::get('playlist/user/cap-nhat/{id}', ['as' => 'playlist.update_playlist', 'uses' => 'PlaylistController@editPlaylist']);
        Route::post('playlist/user/cap-nhat/{id}', ['as' => 'playlist.store_playlist', 'uses' => 'PlaylistController@storePlaylist']);
        Route::get('playlist/user/chinh-sua', ['as' => 'playlist.edit_playlist', 'uses' => 'PlaylistController@editPagePlaylist']);
        Route::get('playlist/user/them', ['as' => 'playlist.create_playlist', 'uses' => 'PlaylistController@createPagePlaylist']);
        Route::post('playlist/user/them', ['as' => 'playlist.create_playlist', 'uses' => 'PlaylistController@storePlaylist']);
        Route::post('playlist/user/delete', ['as' => 'playlist.delete_playlist', 'uses' => 'PlaylistController@deletePlaylist']);

        // User
        Route::post('user/update', ['as' => 'user.index', 'uses' => 'User\UserController@store']);

        //

        Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index']);
        Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create']);


        Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store']);
        Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
        Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit']);
        Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update']);
        Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy']);


        Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
        Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
        Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
        Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
        Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
        Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
        Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);


    });

});


