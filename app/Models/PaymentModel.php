<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class PaymentModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_payment';
    protected $primaryKey = 'payment_id';
    protected $fillable = ['payment_id', 'user_id', 'level_id', 'voucher_id', 'cen_add', 'level_cen', 'cen_current_user', 'level_money', 'level_money_promo', 'level_money_promo_status', 'time_add_expired', 'request_from', 'status', 'note', 'user_by_id', 'pay_money_value', 'request_api_id'];
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
