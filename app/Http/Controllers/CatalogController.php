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
        switch ($url) {
            case "gym":
                $caption = 'Chủ đề gym';
                $playlist = $this->playlistRepository->getByUser(997940);
                break;
            case "romance":
                $caption = 'Chủ đề lãng mạn';
                $playlist = $this->playlistRepository->getByUser(997938);
                break;
            case "sleep":
                $caption = 'Chủ đề giấc ngủ';
                $playlist = $this->playlistRepository->getByUser(997939);
                break;
            case "dance":
                $caption = 'Chủ đề dance';
                $playlist = $this->playlistRepository->getByUser(997945);
                break;
            case "work":
                $caption = 'Chủ đề làm việc';
                $playlist = $this->playlistRepository->getByUser(997941);
                break;
            case "coffee":
                $caption = 'Chủ đề coffee';
                $playlist = $this->playlistRepository->getByUser(997942);
                break;
            case "game":
                $caption = 'Chủ đề giải trí';
                $playlist = $this->playlistRepository->getByUser(997944);
                break;
            case "travel":
                $caption = 'Chủ đề du lịch';
                $playlist = $this->playlistRepository->getByUser(997943);
                break;
            default:
                return view('errors.404');
        }
        return view('catalog.playlist_publisher', compact('playlist', 'caption'));
    }
    public function musicNews(Request $request) {
        $music = $this->musicRepository->musicNews('music_last_update_time', 'desc', LIMIT_MUSIC_PAGE_CATEGORY);
        if($request->input('tab'))
            return view('category.music_item', compact('music'));
        return view('catalog.music_news', compact('music'));

    }
    public function videoNews(Request $request) {
        $video = $this->videoRepository->videoNews('music_last_update_time', 'desc', LIMIT_MUSIC_PAGE_CATEGORY);
        if($request->input('tab'))
            return view('category.video_item', compact('video'));
        return view('catalog.video_news', compact('video'));
    }
    public function albumNews(Request $request) {
        $cover = $this->coverRepository->coverNews('cover_id', 'desc', LIMIT_MUSIC_PAGE_CATEGORY);
        if($request->input('tab'))
            return view('category.cover_item', compact('cover'));
        return view('catalog.cover_news', compact('cover'));
    }
}