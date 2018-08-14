<?php namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class RoleUser extends EntrustRole
{
  protected $table = 'role_user';
  protected $fillable =
    [
      'user_id',
      'role_id'
    ];
}
