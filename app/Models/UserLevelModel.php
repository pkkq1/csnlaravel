<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class UserLevelModel extends Model
{
    protected $table = 'csn_users_level';
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id', 'level_id', 'level_expried', 'level_note', 'level_block'];
}
