<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class PlaylistMusicModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_playlist_music';
    protected $fillable = ['playlist_id', 'music_id'];

    public function music()
    {
        return $this->belongsTo('App\Models\MusicModel', 'music_id')->select('music_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist');
    }
}
