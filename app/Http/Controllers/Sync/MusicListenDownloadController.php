<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Sync;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;
use App\Repositories\VideoListen\VideoListenEloquentRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use App\Repositories\VideoDownload\VideoDownloadEloquentRepository;
use DB;

class MusicListenDownloadController extends Controller
{

    public function __construct() {

    }
    public function syncMusicListen() {
        $query  = "UPDATE csn_music_listen SET music_listen_this_week = (music_listen_today_7 + music_listen_today_6 + music_listen_today_5 + music_listen_today_4 + music_listen_today_3 + music_listen_today_2 + music_listen_today_1), music_listen_today_7 = music_listen_today_6,
                        music_listen_today_6 = music_listen_today_5, music_listen_today_5 = music_listen_today_4, music_listen_today_4 = music_listen_today_3, music_listen_today_3 = music_listen_today_2, music_listen_today_2 = music_listen_today_1, music_listen_today_1 = music_listen_today_0, 
                        music_listen_ago = music_listen_today_0, music_listen_today = music_listen_today / 2, music_listen_today_0 = 0, music_listen_max_week = IF(music_listen_this_week > music_listen_max_week, music_listen_this_week, music_listen_max_week)";
        $result = DB::connection( 'mysql' )->select( $query );
        return $result;
    }
    public function syncMusicDownload() {
        $query  = "UPDATE csn_music_download SET music_downloads_this_week = (music_downloads_today_7 + music_downloads_today_6 + music_downloads_today_5 + music_downloads_today_4 + music_downloads_today_3 + music_downloads_today_2 + music_downloads_today_1), music_downloads_today_7 = music_downloads_today_6,
                        music_downloads_today_6 = music_downloads_today_5, music_downloads_today_5 = music_downloads_today_4, music_downloads_today_4 = music_downloads_today_3, music_downloads_today_3 = music_downloads_today_2, music_downloads_today_2 = music_downloads_today_1, music_downloads_today_1 = music_downloads_today_0, 
                        music_downloads_ago = music_downloads_today_0, music_downloads_today = music_downloads_today / 2, music_downloads_today_0 = 0, music_downloads_max_week = IF(music_downloads_this_week > music_downloads_max_week, music_downloads_this_week, music_downloads_max_week)";
        $result = DB::connection( 'mysql' )->select( $query );
        return $result;
    }

    public function syncVideoListen() {
        $query  = "UPDATE csn_video_listen SET music_listen_this_week = (music_listen_today_7 + music_listen_today_6 + music_listen_today_5 + music_listen_today_4 + music_listen_today_3 + music_listen_today_2 + music_listen_today_1), music_listen_today_7 = music_listen_today_6,
                        music_listen_today_6 = music_listen_today_5, music_listen_today_5 = music_listen_today_4, music_listen_today_4 = music_listen_today_3, music_listen_today_3 = music_listen_today_2, music_listen_today_2 = music_listen_today_1, music_listen_today_1 = music_listen_today_0, 
                        music_listen_ago = music_listen_today_0, music_listen_today = music_listen_today / 2, music_listen_today_0 = 0, music_listen_max_week = IF(music_listen_this_week > music_listen_max_week, music_listen_this_week, music_listen_max_week)";
        $result = DB::connection( 'mysql' )->select( $query );
        return $result;
    }
    public function syncVideoDownload() {
        $query  = "UPDATE csn_video_download SET music_downloads_this_week = (music_downloads_today_7 + music_downloads_today_6 + music_downloads_today_5 + music_downloads_today_4 + music_downloads_today_3 + music_downloads_today_2 + music_downloads_today_1), music_downloads_today_7 = music_downloads_today_6,
                        music_downloads_today_6 = music_downloads_today_5, music_downloads_today_5 = music_downloads_today_4, music_downloads_today_4 = music_downloads_today_3, music_downloads_today_3 = music_downloads_today_2, music_downloads_today_2 = music_downloads_today_1, music_downloads_today_1 = music_downloads_today_0, 
                        music_downloads_ago = music_downloads_today_0, music_downloads_today = music_downloads_today / 2, music_downloads_today_0 = 0, music_downloads_max_week = IF(music_downloads_this_week > music_downloads_max_week, music_downloads_this_week, music_downloads_max_week)";
        $result = DB::connection( 'mysql' )->select( $query );
        return $result;
    }

    public function realMusicListen(){

    }
    public function realMusicDownload(){

    }
    public function realVideoListen(){

    }
    public function realVideoDownload(){

    }
}