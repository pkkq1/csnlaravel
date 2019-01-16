<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class ErrorLogModel extends Model
{
    public $timestamps = false;
    protected $table = 'csn_error_log';
    protected $primaryKey = 'id';
    protected $fillable = ['request', 'type', 'url', 'view', 'message', 'parameter', 'note'];
}
