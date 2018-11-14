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

    Route::get('artist_upload/{id}/approval', 'ArtistUploadController@approvalArtistUpload');
    CRUD::resource('artist_upload', 'ArtistUploadController');
    CRUD::resource('artist', 'ArtistController');

    Route::get('artist_upload/preview/{id}', 'ArtistUploadController@preview');

});

