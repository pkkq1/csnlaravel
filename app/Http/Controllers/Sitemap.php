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
use App\Repositories\Category\CategoryEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Library\Helpers;
use App\Solr\Solarium;
use App\Models\ErrorBugSlowModel;
use Jenssegers\Agent\Agent;
use Response;
use View;

class Sitemap extends Controller
{
    protected $categoryRepository;
    protected $musicRepository;
    protected $videoRepository;
    protected $musicListenRepository;
    protected $coverRepository;
    public function __construct(CategoryEloquentRepository $categoryRepository, MusicEloquentRepository $musicRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository) {
        $this->categoryRepository = $categoryRepository;
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->coverRepository = $coverRepository;
    }
    public function categoryList(Request $request)
    {
        global $cat_id2info;
        include(app_path() . '/../resources/views/cache/def_main_cat.blade.php');
        $arrDefCat = [
            '/nhac-hot',
            '/bang-xep-hang/tuan',
            '/bang-xep-hang/thang-01-2020',
            '/bang-xep-hang/nam-2018',
            '/bang-xep-hang/nam-2019',
            '/bang-xep-hang/nam-2020',
        ];
        return response()->view('sitemap.sitemap_category', [
            'arrDefCat' => $arrDefCat,
            'cat_id2info' => $cat_id2info,
        ])->header('Content-Type', 'text/xml');
    }

    public function topArtist(Request $request)
    {
        global $top_artist_rows;
        include(app_path() . '/../resources/views/cache/top_artist.blade.php');
        return response()->view('sitemap.sitemap_top_artist', [
            'top_artist_rows' => $top_artist_rows
        ])->header('Content-Type', 'text/xml');
    }

    public function newVideo(Request $request)
    {
        global $video_new_uploads;
        include(app_path() . '/../resources/views/cache/def_home_album.blade.php');
        return response()->view('sitemap.sitemap_new_video', [
            'video_new_uploads' => $video_new_uploads
        ])->header('Content-Type', 'text/xml');
    }

    public function bxh_now(Request $request)
    {
        $cacheBxh = 'bxh_today';
        return response()->view('sitemap.sitemap_bxh', [
            'cacheBxh' => $cacheBxh
        ])->header('Content-Type', 'text/xml');
    }

    public function bxh_week(Request $request, $cat = false)
    {
        $cacheBxh = 'bxh_week';
        return response()->view('sitemap.sitemap_bxh', [
            'cacheBxh' => $cacheBxh
        ])->header('Content-Type', 'text/xml');
    }

    public function bxh_month(Request $request, $month, $year, $cat = false)
    {
        $cacheBxh = 'bxh_' . sprintf('%02d', $month) . '_' . $year;
        return response()->view('sitemap.sitemap_bxh', [
            'cacheBxh' => $cacheBxh
        ])->header('Content-Type', 'text/xml');
    }

    public function bxh_year(Request $request, $year, $cat = false)
    {
        $cacheBxh = 'bxh_all_' . $year;
        return response()->view('sitemap.sitemap_bxh', [
            'cacheBxh' => $cacheBxh
        ])->header('Content-Type', 'text/xml');

    }
    public function category(Request $request, $cat, $sub = '') {
        $category = $this->categoryRepository->getCategoryParentByUrl($cat);
        if(!$category) {
            echo 'not found catogory'; exit;
        }
        if($sub)
            $category = $this->categoryRepository->getCategorySub($category->cat_id, $sub);
        $_GET['page'] = 1;
        if($category->cat_id != CATEGORY_ID_VIDEO) {
            $covers = $this->coverRepository->getCategoryCoverSolr($category->cat_id, $category->cat_level, null, null, 'cover_id', 'desc', LIMIT_PAGE_CATEGORY);
            $musics = $this->musicRepository->getCategoryMusicSolr($category->cat_id, $category->cat_level, 'music_id', 'desc', LIMIT_MUSIC_PAGE_CATEGORY);
            return response()->view('sitemap.sitemap_category_solr_music', [
                'musics' => $musics,
                'covers' => $covers,
            ])->header('Content-Type', 'text/xml');
        }else{
            $video = $this->videoRepository->getCategoryVideoSolr($category->cat_id, $category->cat_level, ['csn_video.music_year', CURRENT_YEAR], 'video_id', 'desc', LIMIT_PAGE_CATEGORY);
            return response()->view('sitemap.sitemap_category_solr_video', [
                'videos' => $video
            ])->header('Content-Type', 'text/xml');
        }
    }
}