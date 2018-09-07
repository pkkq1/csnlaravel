<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MusicListenModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_music_listen';
    protected $fillable = ['music_listen_total', 'music_listen_time', 'music_listen_today', 'music_listen_ago', 'music_listen_3day', 'music_listen_7day'];

}
