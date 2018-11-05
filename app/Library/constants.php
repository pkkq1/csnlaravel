<?php

define('MUSIC_DATA_PATH', 'data/128/');
define('SUB_ALLBUM', '/nghe-album/');
define('SUB_PLAYLIST', '/playlist/');
define('SUB_BXH_MUSIC', '/nhac-hot/');
define('SUB_BXH_NOW_MUSIC', '/nhac-hot/');
define('SUB_VIDEO', '/v-video/');
define('KBPS', 'kbps');
define('LOSSLESS', 'Lossless');
define('UPDATE_CASE_SUGGESTION_MUSIC', 604800); // 1 will week
define('UPDATE_CASE_SUGGESTION_MUSIC_ONCE', false);
define('CATEGORY_ID_VIDEO', 1);
define('LIMIT_HISTORY_MUSIC', 20);
define('LIMIT_HOME_ALBUM_OLD', 10);
define('LIMIT_HOME_ALBUM_NEW', 20);
define('LIMIT_HOME_ALBUM_NEW_BOTTOM', 10);
define('LIMIT_HOME_MUSIC_NEW', 10);
define('LIMIT_HOME_VIDEO_NEW', 8);
define('LIMIT_SUG_MUSIC', 10);
define('LIMIT_HOME_CAT_MUSIC', 10);
define('LIMIT_HOME_UPLOADER_MUSIC', 10);
define('LIMIT_HOME_ARTIST', 15);
define('LIMIT_SEARCH_RESULT', 20);
define('DEFAULT_ROOT_CACHE_MUSIC_PATH', $_SERVER['DOCUMENT_ROOT'].'/storage/data/cache_upload');
define('LYRIC_DETAIL_NEW_MUSIC', 5);
define('LYRIC_DETAIL_NEW_ALBUM', 5);
define('LIMIT_COMMENT', 10);
define('LIMIT_PAGE_MUSIC_UPLOADED', 10);
define('LITMIT_TITLE_PLAYLIST', 2);
define('TIME_EXPIRY_ADD_LISTEN_MUSIC', '+1 hour');
define('KEY_ID_PLAYLIST_ENCODE_URL', 'csn_playlist~');
define('KEY_ID_ALBUM_ENCODE_URL', 'csn_album~');
define('KEY_ID_ARTIST_ENCODE_URL', 'csn_artist~');
define('DEFAULT_CAT_ID_ACTIVE_BXH', 3);
define('UPLOAD_STAGE_DELETED', -1);
define('UPLOAD_STAGE_UNCENSOR', 0);
define('UPLOAD_STAGE_INCONVERT', 1);
define('UPLOAD_STAGE_FULLCONVERT', 2);
define('UPLOAD_STAGE_FULLCENSOR', 3);
define('MIN_DOWNLOAD_SUG_TITLE_SAME', 300);
define('LIMIT_PAGE_CATEGORY', 20);
define('LIMIT_MUSIC_PAGE_CATEGORY', 20);
define('CURRENT_YEAR', 2018);
define('MAX_LOSTLESS', 1000);

// USER
define('DEACTIVE_USER', 0);
define('ACTIVE_USER', 1);
define('BANNED_USER', 2);

// MUSIC ID ENCRIPT
define('MAX_ID_CONST', 71902891);

// ARTIST
define('AVATAR_ARTIST_SOURCE_PATH', '/data/source_artist_avatar/');
define('AVATAR_ARTIST_CROP_PATH', '/data/artist_avatar/');
define('COVER_ARTIST_SOURCE_PATH', '/data/source_artist_cover/');
define('COVER_ARTIST_CROP_PATH', '/data/artist_cover/');

define('PUBLIC_AVATAR_ARTIST_SOURCE_PATH', '/storage/data/source_artist_avatar/');
define('PUBLIC_COVER_ARTIST_SOURCE_PATH', '/storage/data/source_artist_cover/');
define('PUBLIC_AVATAR_ARTIST_PATH', '/storage/data/artist_avatar/');
define('PUBLIC_COVER_ARTIST_PATH', '/storage/data/artist_cover/');

// MUSIC
define('MUSIC_PATH', '/storage/data/source_music/');
// VIDEO
define('VIDEO_PATH', '/storage/data/source_video/');


// URL PARAMETERS
define('CAT_VIDEO', 1);
define('CAT_VIDEO_URL', 'video');
define('VIEW_VIDEO_URL', 'hd');
define('VIEW_URL', 'mp3');
// Video thumbnail
define('MUSIC_THUMBNAIL_PATH', 'data/thumb/');
// Cover
define('MUSIC_COVER_PATH', 'data/cover/');
define('MUSIC_COVER_SOURCE_PATH', 'data/source_cover/');
// Artist
define('MUSIC_ARTIST_PATH', 'data/artist/');
define('MUSIC_ARTIST_SOURCE_PATH', 'data/source_artist/');
// Face (Artist)
define('MUSIC_FACE_PATH', 'data/face/');
define('MUSIC_FACE_SOURCE_PATH', 'data/source_face/');
// Spectrum
define('MUSIC_SPECTRUM_PATH', 'data/spectrum/');
// Playlist
define('MUSIC_PLAYLIST_PATH', '/data/playlist/');
define('PUBLIC_MUSIC_PLAYLIST_PATH', '/storage/data/playlist/');
// User
define('USER_ACTIVE', 1);
define('AVATAR_PATH', '/data/user_avatar/');
define('PUBLIC_AVATAR_PATH', '/storage/data/user_avatar/');
define('HTMLEX', 'html');
// search
define('ROWS_MUSIC_SEARCH_PAGING', 10);
define('ROWS_ARTIST_SEARCH_PAGING', 10);
define('ROWS_ALBUM_SEARCH_PAGING', 10);
define('ROWS_VIDEO_SEARCH_PAGING', 8);
