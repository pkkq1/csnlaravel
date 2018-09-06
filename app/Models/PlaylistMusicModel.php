<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class PlaylistMusicModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_playlist_music';
    protected $fillable = ['playlist_id', 'music_id'];


}
