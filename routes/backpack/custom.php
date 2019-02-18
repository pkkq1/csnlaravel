<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('category_csn', 'CategoryCsnController');
    CRUD::resource('category_playlist', 'CategoryPlaylistController');
    CRUD::resource('playlist_user', 'PlaylistUserController');
    CRUD::resource('playlist_publisher', 'PlaylistPublisherController');
    CRUD::resource('music', 'MusicController');
    CRUD::resource('video', 'VideoController');
    CRUD::resource('comment', 'CommentController');
    CRUD::resource('comment_replay', 'CommentReplayController');
    Route::get('playlist_user/{id}/approval', 'PlaylistUserController@approvalPublisher');

    Route::get('artist_upload/{id}/approval', 'ArtistUploadController@approvalArtistUpload');
    Route::get('artist_upload/{id}/approval', 'ArtistUploadController@approvalArtistUpload');
    CRUD::resource('artist_upload', 'ArtistUploadController');
    CRUD::resource('artist', 'ArtistController');

    Route::get('artist_upload/preview/{id}', 'ArtistUploadController@preview');
    Route::get('artist_upload/suggest/{id}', 'ArtistUploadController@suggest');
    CRUD::resource('comment_replay', 'CommentReplayController');

    Route::put('/artist_upload/suggest/{id}', 'ArtistUploadController@suggest');




});

