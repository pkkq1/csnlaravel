<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_artist';
    protected $primaryKey = 'artist_id';
    protected $fillable = ['artist_id', 'artist_nickname', 'artist_realname', 'artist_url', 'artist_birthday', 'artist_gender', 'artist_country', 'artist_avatar', 'artist_cover', 'artist_desc'];

}
