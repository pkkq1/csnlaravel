<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class ReportContactModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_report_contact';
    protected $primaryKey = 'id';
    protected $fillable = ['email', 'text', 'ip', 'phone', 'mod', 'status'];
}
