<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/13/2018
 * Time: 2:11 PM
 */

namespace App\Models;


class ItemModel extends Model
{
    protected $table = 'item';
    public $fillable = ['title','description'];
}