<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/14/2018
 * Time: 4:25 PM
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocialModel extends Model
{
    protected $table = 'user_social';
    protected $fillable = ['id', 'user_id', 'app', 'data'];


}
