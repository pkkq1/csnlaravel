<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class VoucherModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_voucher';
    protected $primaryKey = 'voucher_id';
    protected $fillable = ['value_cen', 'voucher_name', 'level_id', 'voucher_note', 'voucher_status'];
    public function level() {
        return $this->belongsTo('App\Models\LevelModel', 'level_id');
    }
    public function levelEnable() {
//        dd($this->belongsTo('App\Models\LevelModel', 'level_id')->where('level_status', 1));

        $contracts = \App\Models\LevelModel::where('level_status', 1)->get();
        return $contracts;

        return $this->belongsTo('App\Models\LevelModel', 'level_id');
    }
}
