<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/13/2018
 * Time: 5:45 PM
 */
namespace App\Models;
use Zizaco\Entrust\EntrustPermission;

class PermissionRoleModel extends EntrustPermission
{
    protected $table = 'permission_role';
    protected $fillable =
        [
            'permission_id',
            'role_id'
        ];
}