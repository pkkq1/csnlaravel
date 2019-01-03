<?php
/**
 * @author peter.nguyen
 * @email peter.it85@gmail.com
 * @todo
 * @created 10/13/17 11:08 AM
 */

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'csn_permissions';
    protected $fillable = ['name', 'display_name', 'description'];
}