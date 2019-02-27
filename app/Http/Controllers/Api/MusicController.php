<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Music\MusicEloquentRepository;
use App\Library\Helpers;
use App\Solr\Solarium;
use Socialite;
use Session;
use App\Repositories\Category\CategoryEloquentRepository;
use \Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Session as SessionModel;
use App\Http\Controllers\SearchController as SearchSolr;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Repositories\PlaylistPublisher\PlaylistPublisherEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;
use App\Repositories\VideoListen\VideoListenEloquentRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use App\Repositories\VideoDownload\VideoDownloadEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Artist\ArtistRepository;
use App\Repositories\SearchResult\SearchResultEloquentRepository;
use App\Repositories\MusicFavourite\MusicFavouriteRepository;
use App\Repositories\VideoFavourite\VideoFavouriteRepository;
use App\Repositories\Karaoke\KaraokeEloquentRepository;

class MusicController extends Controller
{
    protected $musicRepository;
    protected $videoRepository;
    protected $playlistRepository;
    protected $playlistPublisherRepository;
    protected $musicListenRepository;
    protected $musicDownloadRepository;
    protected $videoListenRepository;
    protected $videoDownloadRepository;
    protected $categoryListenRepository;
    protected $coverRepository;
    protected $artistRepository;
    protected $musicFavouriteRepository;
    protected $videoFavouriteRepository;
    protected $karaokeRepository;
    protected $searchResultRepository;

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository,
                                CategoryEloquentRepository $categoryListenRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, ArtistRepository $artistRepository,
                                MusicFavouriteRepository $musicFavouriteRepository, VideoFavouriteRepository $videoFavouriteRepository, MusicDownloadEloquentRepository $musicDownloadRepository, KaraokeEloquentRepository $karaokeRepository,
                                VideoListenEloquentRepository $videoListenRepository, VideoDownloadEloquentRepository $videoDownloadRepository, PlaylistPublisherEloquentRepository $playlistPublisherRepository, SearchResultEloquentRepository $searchResultRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->playlistRepository = $playlistRepository;
        $this->playlistPublisherRepository = $playlistPublisherRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
        $this->videoListenRepository = $videoListenRepository;
        $this->videoDownloadRepository = $videoDownloadRepository;
        $this->categoryListenRepository = $categoryListenRepository;
        $this->coverRepository = $coverRepository;
        $this->artistRepository = $artistRepository;
        $this->musicFavouriteRepository = $musicFavouriteRepository;
        $this->videoFavouriteRepository = $videoFavouriteRepository;
        $this->karaokeRepository = $karaokeRepository;
        $this->searchResultRepository = $searchResultRepository;
    }

    public function getMusicInfo(Request $request, $musicUrl) {
        $arrUrl = Helpers::splitPlaylistUrl($musicUrl);
        $album = $this->coverRepository->getCoverMusicById($arrUrl['id']);
        if(!$album)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'không tìm thấy album'], 400);
        $playlistMusic = [];
        if(($album->music)) {
            $playlistMusic = $album->music->toArray();
        }
        if($playlistMusic) {
            $offsetPl = $playlistMusic[$request->playlist ? ($request->playlist > count($playlistMusic) ? count($playlistMusic) : $request->playlist) - 1 : 0];
            if($offsetPl['cat_id'] == CAT_VIDEO) {
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id'], false);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id'], false);
            }
        }else{
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Nội dung playlist không có.'], 400);
        }
        if(!$music)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Nội dung playlist không có.'], 400);
        $music['file_url'] = Helpers::file_url($music);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => $music->toArray(), 'playlist' => $playlistMusic], 'error' => []], 200);
    }

}