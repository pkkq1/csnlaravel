<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class LyricSuggestionModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_music_lyric_suggestion';
    protected $primaryKey = 'music_id';
    protected $fillable = ['music_id', 'music_title', 'music_artist', 'music_time', 'music_length', 'music_lyric', 'user_id'];
}
