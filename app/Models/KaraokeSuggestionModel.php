<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class KaraokeSuggestionModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_music_karaoke_suggestion';
    protected $primaryKey = 'music_id';
    protected $fillable = ['music_id', 'music_title', 'music_artist', 'music_downloads_this_week', 'music_time', 'music_length', 'music_lyric_karaoke', 'user_id'];
}
