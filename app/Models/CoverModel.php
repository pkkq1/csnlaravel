<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class CoverModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_cover';
    protected $primaryKey = 'cover_id';
    protected $fillable = ['music_album', 'music_production', 'music_album_id', 'music_year', 'cover_filename', 'user_id', 'last_user_id'];

}
