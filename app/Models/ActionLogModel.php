<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class ActionLogModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_action_log';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'text', 'user_id', 'music_id', 'mod', 'permission_current', 'more', 'ip'];
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id')->select('id', 'name', 'user_avatar', 'username');
    }
}
