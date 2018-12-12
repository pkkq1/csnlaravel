<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class CommentReplyModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_comment_reply';
    protected $primaryKey = 'comment_reply_id';
    protected $fillable = ['comment_id', 'user_id', 'username', 'comment_text', 'comment_time', 'comment_jw_postion'];
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id')->select('id', 'name', 'user_avatar', 'username');
    }


}
