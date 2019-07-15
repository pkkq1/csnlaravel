<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class PaymentCenModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_payment_cen';
    protected $primaryKey = 'payment_id';
    protected $fillable = ['payment_id', 'user_id', 'level_id', 'cen_value', 'cen_promotion', 'cen_total', 'cen_current_user', 'note'];
    public function level() {
        return $this->belongsTo('App\Models\LevelModel', 'level_id');
    }
    public function voucher() {
        return $this->belongsTo('App\Models\VoucherModel', 'voucher_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id')->select('id', 'name', 'user_avatar', 'username');
    }
}
