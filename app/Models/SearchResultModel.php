<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class SearchResultModel extends Model
{
    protected $table = 'csn_search_result';
    protected $primaryKey = 'id';
    protected $fillable = ['key_search', 'count', 'type', 'type_id'];
}
