<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 4:29 PM
 */
namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class MusicSearchResultModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_music_search_result';
    protected $primaryKey = 'music_id';
    protected $fillable =
        [
            'music_id', 'music_title', 'music_artist', 'music_artist_id', 'music_album', 'music_year', 'music_search_count'
        ];
}
