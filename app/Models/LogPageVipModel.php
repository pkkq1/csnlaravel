<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class LogPageVipModel extends Model
{
    use CrudTrait;
    public $timestamps = false;
    protected $table = 'csn_log_page_vip';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'ip', 'time_log'];
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id')->select('id', 'name', 'user_avatar', 'username');
    }
}
