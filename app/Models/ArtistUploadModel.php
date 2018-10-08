<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class ArtistUploadModel extends Model
{
    use CrudTrait;

    public $timestamps = false;
    protected $table = 'csn_artist_upload';
    protected $primaryKey = 'artist_id';
    protected $fillable = ['artist_id', 'artist_nickname', 'artist_url', 'artist_birthday', 'artist_gender', 'artist_country', 'artist_avatar', 'artist_cover', 'artist_avatar_crop_x', 'artist_avatar_crop_y', 'artist_cover_crop_x', 'artist_cover_crop_y', 'last_update_user_id', 'last_update_time', 'last_edit_time'];

}
