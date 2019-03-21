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
use App\Repositories\Playlist\PlaylistEloquentRepository;

class CatalogController extends Controller
{
    protected $categoryRepository;
    protected $musicRepository;
    protected $videoRepository;
    protected $musicListenRepository;
    protected $coverRepository;
    protected $playlistRepository;

    public function __construct(CategoryEloquentRepository $categoryRepository, MusicEloquentRepository $musicRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, PlaylistEloquentRepository $playlistRepository) {
        $this->categoryRepository = $categoryRepository;
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->coverRepository = $coverRepository;
        $this->playlistRepository = $playlistRepository;
    }
    public function playlistPublisher(Request $request, $url) {
        $catalog = config('constants.catalog');
        $result = $catalog[$url];
        if(!$result)
            return redirect()->guest('/');
        $caption = $result['caption'];
        $playlist = $this->playlistRepository->getByUser($result['user_id']);
        return view('catalog.playlist_publisher', compact('playlist', 'caption'));
    }
    public function musicNews(Request $request) {
        $music = $this->musicRepository->musicNewsSolr('music_id', 'desc', LIMIT_MUSIC_PAGE_CATEGORY);
        $htmlMusic = view('category_solr.music_item', compact('music'));;
        return view('catalog.music_news', compact('htmlMusic'));

    }
    public function videoNews(Request $request) {
        $video = $this->videoRepository->videoNewsSolr('video_id', 'desc', LIMIT_MUSIC_PAGE_CATEGORY);
        $htmlVideo = view('category_solr.video_item', compact('video'));
        return view('catalog.video_news', compact('htmlVideo'));
    }
    public function albumNews(Request $request) {
        $cover = $this->coverRepository->coverNewSolr('cover_id', 'desc', LIMIT_MUSIC_PAGE_CATEGORY);
        $htmlCover = view('category_solr.cover_item', compact('cover'));
        return view('catalog.cover_news', compact('htmlCover'));
    }
}