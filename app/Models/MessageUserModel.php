<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class MessageUserModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_message_user';
    protected $primaryKey = 'id';
    protected $fillable = ['text', 'user_id', 'username', 'admin_reply_id', 'admin_username', 'read', 'status'];
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id')->select('id', 'name', 'user_avatar', 'username');
    }
}
