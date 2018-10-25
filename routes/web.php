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

Route::get('/ping', 'Sync\SorlSyncController@ping');
Route::get('/sync/solr_music', 'Sync\SolrSyncController@syncMusic');
Route::get('/sync/solr_video', 'Sync\SolrSyncController@syncVideo');
Route::get('/sync/solr_artist', 'Sync\SolrSyncController@syncArtist');
Route::get('/sync/solr_cover', 'Sync\SolrSyncController@syncCover');



Route::group(['middlewareGroups' => ['web']], function () {

    Auth::routes();

    // sync data
    Route::prefix('sync')->group(function () {
        Route::get('album', 'Sync\AlbumController@syncAlbum');
        Route::get('download', 'Sync\MusicDownloadController@syncMusicDownload');
        Route::get('bxh_category', 'Sync\BxhCategoryController@syncBxhCategory');
        Route::get('bxh_category/{month}/{year}', 'Sync\BxhCategoryController@syncBxhCategoryMonthYear'); // month = all || 1->12
    });


    Route::get('/logout', 'User\UserController@logout');
    Route::get('/', ['as' => 'HomeController.index', 'uses' => 'HomeController@index']);
    Route::get('/home', ['as' => 'HomeController.index', 'uses' => 'HomeController@index']);
    Route::get('/dang-tai', ['as' => 'upload.index', 'uses' => 'UploadController@index']);

    // Socialite
    Route::get('auth/facebook', 'Auth\AuthFacebookController@redirectToProvider');
    Route::get('auth/facebook/callback', 'Auth\AuthFacebookController@handleProviderCallback');
    Route::get('/xac-nhan-email/{token}', 'User\UserController@verifyEmail');
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

    Route::get('bang-xep-hang/tuan.html', ['as' => 'bxh.month', 'uses' => 'BxhController@week']);
    Route::get('bang-xep-hang/tuan', ['as' => 'bxh.month', 'uses' => 'BxhController@week']);

    Route::get('bang-xep-hang/thang-{month}-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);
    Route::get('bang-xep-hang/thang-{month}-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@month']);

    Route::get('bang-xep-hang/nam-{year}.html', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);
    Route::get('bang-xep-hang/nam-{year}', ['as' => 'bxh.month', 'uses' => 'BxhController@year']);


    Route::get('bang-xep-hang/{cat}', ['as' => 'bxh.cat', 'uses' => 'BxhController@cat']);


    // listen music
    // single
    Route::get('mp3/{cat}/{sub}/{musicUrl}.html', ['as' => 'music.listen', 'uses' => 'MusicController@listenSingleMusic']);
    Route::get('mp3/{cat}/{sub}/{musicUrl}', ['as' => 'music.listen', 'uses' => 'MusicController@listenSingleMusic']);
    // video-clip
    Route::get('hd/{cat}/{sub}/{musicUrl}.html', ['as' => 'music.video', 'uses' => 'MusicController@listenSingleMusic']);
    Route::get('hd/{cat}/{sub}/{musicUrl}', ['as' => 'music.video', 'uses' => 'MusicController@listenSingleMusic']);
    // album
    Route::get('nghe-album/{musicUrl}.html', ['as' => 'music.album.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    Route::get('nghe-album/{musicUrl}', ['as' => 'music.album.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    // playlist
    Route::get('playlist/{playlistUrl}.html', ['as' => 'music.playlist.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    Route::get('playlist/{playlistUrl}', ['as' => 'music.playlist.listen', 'uses' => 'MusicController@listenPlaylistMusic']);
    // artist
    Route::get('ca-si/{artistUrl}', ['as' => 'artist.home', 'uses' => 'ArtistController@index']);
    // nhac hot, bang xep hang
    Route::get('nhac-hot/{catUrl}/{catLevel?}.html', ['as' => 'music.nhac-hot.listen', 'uses' => 'MusicController@listenBxhNow']);
    Route::get('nhac-hot/{catUrl}/{catLevel?}', ['as' => 'music.nhac-hot.listen', 'uses' => 'MusicController@listenBxhNow']);

    Route::get('bang-xep-hang/tuan/{catUrl}/{catLevel?}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhWeek']);
    Route::get('bang-xep-hang/tuan/{catUrl}/{catLevel?}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhWeek']);

    Route::get('bang-xep-hang/thang-{month}-{year}/{catUrl}/{catLevel?}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhMonth']);
    Route::get('bang-xep-hang/thang-{month}-{year}/{catUrl}/{catLevel?}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhMonth']);

    Route::get('bang-xep-hang/nam-{year}/{catUrl}/{catLevel?}.html', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhYear']);
    Route::get('bang-xep-hang/nam-{year}/{catUrl}/{catLevel?}', ['as' => 'bxh.month', 'uses' => 'MusicController@listenBxhYear']);

    Route::get('embed/mp3/{music}', 'MusicController@embed');
    // ajax comment
    Route::post('binh-luan/get_ajax', ['as' => 'comment.get_ajax', 'uses' => 'CommentController@getAjaxCommentByMusicId']);
    Route::get('music/history_listen', ['as' => 'music.history_listen', 'uses' => 'MusicController@historyListen']);




    // Search
    Route::get('tim-kiem', ['as' => 'search.index', 'uses' => 'SearchController@index']);
    Route::get('/search/real', 'SearchController@ajaxSearch');


    // User
    Route::prefix('user/')->group(function () {
        Route::get('{id}', ['as' => 'user.index', 'uses' => 'User\UserController@index']);
        Route::post('music_uploaded', ['as' => 'user.index', 'uses' => 'User\MusicController@musicUploaded']);
    });

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
        Route::prefix('user/playlist/')->group(function () {
            Route::get('danh-sach-playlist', ['as' => 'playlist.play_list', 'uses' => 'PlaylistController@getPlayList']);
            Route::post('create-playlist', ['as' => 'playlist.play_list', 'uses' => 'PlaylistController@createPlayList']);
            Route::post('add-music-playlist', ['as' => 'playlist.play_list', 'uses' => 'PlaylistController@addMusicPlayList']);
            Route::get('cap-nhat/{id}', ['as' => 'playlist.update_playlist', 'uses' => 'PlaylistController@editPlaylist']);
            Route::post('cap-nhat/{id}', ['as' => 'playlist.store_playlist', 'uses' => 'PlaylistController@storePlaylist']);
            Route::get('chinh-sua', ['as' => 'playlist.edit_playlist', 'uses' => 'PlaylistController@editPagePlaylist']);
            Route::get('them', ['as' => 'playlist.create_playlist', 'uses' => 'PlaylistController@createPagePlaylist']);
            Route::post('them', ['as' => 'playlist.create_playlist', 'uses' => 'PlaylistController@storePlaylist']);
            Route::post('delete', ['as' => 'playlist.delete_playlist', 'uses' => 'PlaylistController@deletePlaylist']);
        });

        // User
        Route::prefix('user/')->group(function () {
            Route::post('update', ['as' => 'user.index', 'uses' => 'User\UserController@store']);
        });

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


