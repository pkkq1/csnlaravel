<?php

namespace App;

use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\CrudTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use CrudTrait;
    use HasRoles;

    protected $table = 'csn_users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_active', 'username', 'password', 'user_identity', 'name', 'user_level', 'user_session_time', 'user_session_page', 'user_lastvisit',
        'user_regdate', 'user_music', 'user_comments', 'user_money', 'user_money_upload', 'user_money_download', 'user_login_tries', 'user_last_login_try', 'user_allow_viewonline', 'user_avatar',
        'email', 'user_phone_number', 'user_interests', 'user_actkey', 'user_birthday', 'user_gender', 'user_favourite', 'remember_token', 'app', 'app_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
