<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use DB;

class ReportMusicModel extends Model
{
    use CrudTrait;
    protected $table = 'csn_report_music';
    protected $primaryKey = 'id';
    protected $fillable = ['report_option', 'music_id', 'report_text', 'by_user_id', 'username', 'music_name', 'ip', 'mod', 'url_music', 'link_file_jw', 'status', 'notifi_read'];
}
