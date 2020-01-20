<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Music\MusicEloquentRepository;
use App\Library\Helpers;
use App\Solr\Solarium;
use App\Repositories\Category\CategoryEloquentRepository;
use App\Models\ErrorBugSlowModel;
use Jenssegers\Agent\Agent;
use Response;
use View;

class Sitemap extends Controller
{
    public function category(Request $request) {
        global $cat_id2info;
        include(app_path() . '/../resources/views/cache/def_main_cat.blade.php');
        $arrDefCat = [
            '/',
            '/nhac-hot.html',
            '/bang-xep-hang/tuan.html',
            '/bang-xep-hang/thang-01-2020.html',
            '/bang-xep-hang/nam-2018.html',
            '/bang-xep-hang/nam-2019.html',
        ];
        return response()->view('sitemap.sitemap_category', [
            'arrDefCat' => $arrDefCat,
            'cat_id2info' => $cat_id2info,
        ])->header('Content-Type', 'text/xml');
    }
    public function topArtist(Request $request) {
        global $top_artist_rows;
        include(app_path() . '/../resources/views/cache/top_artist.blade.php');
        return response()->view('sitemap.sitemap_top_artist', [
            'top_artist_rows' => $top_artist_rows
        ])->header('Content-Type', 'text/xml');
    }
    public function newVideo(Request $request) {
        global $video_new_uploads;
        include(app_path() . '/../resources/views/cache/def_home_album.blade.php');
        return response()->view('sitemap.sitemap_new_video', [
            'video_new_uploads' => $video_new_uploads
        ])->header('Content-Type', 'text/xml');
    }
}