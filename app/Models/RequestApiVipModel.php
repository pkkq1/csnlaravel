<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class RequestApiVipModel extends Model
{
    use CrudTrait;
    public $timestamps = false;
    protected $table = 'csn_log_api_vip';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'code', 'phone', 'note', 'amount', 'time', 'time_create'];
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id')->select('id', 'name', 'user_avatar', 'username');
    }
}
