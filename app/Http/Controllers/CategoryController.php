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
use App\Library\Helpers;
use App\Repositories\Category\CategoryEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;

class CategoryController extends Controller
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
    public function index1(Request $request, $sub) {
        $category = $this->categoryRepository->getCategoryParentByUrl($sub);
        if(!$category)
            return view('errors.404');
        $cover = $this->coverRepository->getCategoryCover($category->cat_id, $category->cat_level, 'cover_id', 'desc', LIMIT_PAGE_CATEGORY);
        $cover = view('category.cover_item', compact('cover'));
        return view('category.index', compact('category', 'cover'));
    }
    public function index2(Request $request, $cat, $sub) {
        $category = $this->categoryRepository->getCategoryParentByUrl($cat);
        $category = $this->categoryRepository->getCategorySub($category->cat_id, $sub);
        if(!$category)
            return view('errors.404');

        $cover = $this->coverRepository->getCategoryCover($category->cat_id, $category->cat_level, 'cover_id', 'desc', LIMIT_PAGE_CATEGORY);
        $cover = view('category.cover_item', compact('cover'));

        if(!$category)
            return view('errors.404');
        return view('category.index', compact('category', 'cover'));
    }
    public function getTabCategory(Request $request) {
        if($request->tab == 'album') {
            $cover = $this->coverRepository->getCategoryCover($request->cat_id, $request->cat_level, 'cover_id', 'desc', LIMIT_PAGE_CATEGORY);
            return view('category.cover_item', compact('cover'));
        }elseif($request->tab == 'music') {
            $music = $this->musicRepository->getCategoryMusic($request->cat_id, $request->cat_level, 'music_id', 'desc', LIMIT_PAGE_CATEGORY);
            return view('category.music_item', compact('music'));
        }elseif($request->tab == 'video') {
            $catVideoLevel = $request->cat_level;
            if($request->cat_id == CATEGORY_ID_VIDEO) {
                if($request->cat_level == 0)
                    $catVideoLevel = 0;
            }else{
                $catVideoLevel = $request->cat_id - 2;
            }
            $video = $this->videoRepository->getCategoryVideo(CATEGORY_ID_VIDEO, $catVideoLevel, 'music_id', 'desc', LIMIT_PAGE_CATEGORY);
            return view('category.video_item', compact('video'));
        }elseif($request->tab == 'download') {
            $music = $this->musicRepository->getCategoryMusic($request->cat_id, $request->cat_level, 'music_downloads', 'desc', LIMIT_PAGE_CATEGORY);
            return view('category.music_item', compact('music'));
        }
    }

}