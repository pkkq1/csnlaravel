<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class CategoryPlaylistModel extends Model
{
    use CrudTrait;

    public $timestamps = false;
    protected $table = 'csn_playlist_category';
    protected $primaryKey = 'cat_id';
    protected $fillable = ['cat_level', 'cat_title', 'cat_short_title', 'cat_url', 'cat_playlist_total', 'cat_order'];

    public function parent()
    {
        return $this->belongsTo('App\Models\CategoryPlaylistModel', 'cat_level', 'cat_id');
    }
}
