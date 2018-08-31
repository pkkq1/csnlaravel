<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class CommentModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_comment';
    protected $primaryKey = 'comment_id';
    protected $fillable = ['music_id', 'user_id', 'username', 'comment_text', 'comment_time', 'comment_reply'];

    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id')->select('id', 'name', 'user_avatar', 'username');
    }

}
