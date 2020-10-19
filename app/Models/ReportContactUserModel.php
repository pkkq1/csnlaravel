<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class ReportContactUserModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_report_contact_user';
    protected $primaryKey = 'id';
    protected $fillable = ['report_text', 'by_user_id', 'username', 'ip', 'phone', 'mod', 'status'];
}
