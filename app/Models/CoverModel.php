<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class CoverModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_cover';
    protected $primaryKey = 'cover_id';
    protected $fillable = ['music_album', 'music_production', 'music_album_id', 'music_year', 'cover_filename', 'user_id', 'last_user_id', 'album_artist_1', 'album_artist_id_1', 'album_artist_2', 'album_artist_id_2', 'album_cat_id_1', 'album_cat_level_1', 'album_cat_id_2', 'album_cat_level_2', 'music_bitrate'];

    public function music() {
        return $this->hasMany('App\Models\MusicModel', 'cover_id', 'cover_id')->select('music_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'cat_id', 'cat_level', 'cat_sublevel', 'cat_custom', 'cover_id', 'music_download_time', 'music_last_update_time', 'music_title_url',
            'music_title_search', 'music_artist_search', 'music_album_search', 'music_composer', 'music_album', 'music_listen', 'music_track_id', 'music_track_id', 'music_filename', 'music_bitrate')->orderBy('music_id', 'desc');
    }
    public function video() {
        return $this->hasMany('App\Models\VideoModel', 'cover_id', 'cover_id')->select('music_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'cat_id', 'cat_level', 'cat_sublevel', 'cat_custom', 'cover_id', 'music_download_time', 'music_last_update_time', 'music_title_url',
            'music_title_search', 'music_artist_search', 'music_album_search', 'music_composer', 'music_album', 'music_listen', 'music_track_id', 'music_track_id', 'music_filename', 'music_bitrate')->orderBy('music_id', 'desc');
    }

}
