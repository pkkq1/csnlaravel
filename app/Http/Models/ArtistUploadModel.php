<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistUploadModel extends Model
{
    protected $table = 'csn_artist_upload';
    protected $fillable = ['artist_id', 'artist_nickname', 'artist_url', 'artist_birthday', 'artist_gender', 'artist_country', 'artist_avatar', 'artist_cover', 'last_update_user_id', 'last_update_time', 'last_edit_time'];

}
