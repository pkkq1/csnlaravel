<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class ReportCommentModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_report_comment';
    protected $primaryKey = 'id';
    protected $fillable = ['comment_id', 'comment_type', 'report_option', 'music_id', 'report_text', 'comment_text', 'by_user_id', 'username', 'music_name'];
}
