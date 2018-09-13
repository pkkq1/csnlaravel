<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class PlaylistModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_playlist';
    protected $primaryKey = 'playlist_id';
    protected $fillable = ['playlist_cat_id', 'playlist_cat_level', 'playlist_cover', 'playlist_music_total', 'playlist_user_id', 'playlist_status', 'playlist_title', 'playlist_desc', 'playlist_time', 'playlist_listen'];

    public function playlist_music() {
        return $this->belongsTo('App\Models\PlaylistMusicModel', 'playlist_id', 'playlist_id')->with('music');
    }
    public function playlist_category_cat_id() {
        return $this->belongsTo('App\Models\CategoryPlaylistModel', 'playlist_cat_id', 'cat_id');
    }
    public function playlist_category_cat_level() {
        return $this->belongsTo('App\Models\CategoryPlaylistModel', 'playlist_cat_level', 'cat_level');
    }
    static function getPlayListCategoryByUserId($id)
    {
        $query = 'select `csn_playlist`.*, csn_playlist_category.cat_title, csn_playlist_category.cat_url, DATE_FORMAT(FROM_UNIXTIME(`playlist_time`), \'%d-%m-%Y\') as "playlist_date"
                from `csn_playlist` left join `csn_playlist_category` on `csn_playlist`.`playlist_cat_id` = `csn_playlist_category`.`cat_id` 
                and `csn_playlist`.`playlist_cat_level` = `csn_playlist_category`.`cat_level` 
                where `playlist_user_id` = '.$id;
        $result = DB::connection('mysql')->select($query);
        return $result;
    }

}
