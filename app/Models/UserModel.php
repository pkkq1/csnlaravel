<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/13/2018
 * Time: 2:10 PM
 */
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Notifications\Notifiable;
use DB;

class UserModel extends Authenticatable
{
    use EntrustUserTrait, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'avatar', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roleUser()
    {
        return $this->belongsTo('App\Models\RoleUserModel', 'user_id');
    }
}