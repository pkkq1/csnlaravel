<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MusicKaraokeModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_music_karaoke';
    protected $primaryKey = 'music_id';
    protected $fillable =
        [
            'music_title', 'music_artist', 'music_downloads_this_week', 'music_time', 'music_lyric_karaoke'
        ];
}
