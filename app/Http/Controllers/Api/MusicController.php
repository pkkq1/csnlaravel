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
use App\Http\Controllers\Sync\SolrSyncController;

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
    protected $Solr;

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository,
                                CategoryEloquentRepository $categoryListenRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, ArtistRepository $artistRepository,
                                MusicFavouriteRepository $musicFavouriteRepository, VideoFavouriteRepository $videoFavouriteRepository, MusicDownloadEloquentRepository $musicDownloadRepository, KaraokeEloquentRepository $karaokeRepository,
                                VideoListenEloquentRepository $videoListenRepository, VideoDownloadEloquentRepository $videoDownloadRepository, PlaylistPublisherEloquentRepository $playlistPublisherRepository, SearchResultEloquentRepository $searchResultRepository,
                                Solarium $Solr)
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
        $this->Solr = $Solr;
    }

    public function getAlbumInfo(Request $request, $musicUrl) {
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
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id']);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id']);
            }
        }else{
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Nội dung playlist không có'], 400);
        }
        if(!$music)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Bài hát không tìm thấy'], 400);
        $music['file_url'] = Helpers::file_url($music);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => $music->toArray(), 'playlist' => $playlistMusic], 'error' => []], 200);
    }
    public function getPlaylistInfo(Request $request, $musicUrl) {
        $arrUrl = Helpers::splitPlaylistUrl($musicUrl, 'playlist');
        $playlist = $this->playlistRepository->getMusicByPlaylistId($arrUrl['id']);
        if(!$playlist)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'không tìm thấy playlist'], 400);
        $playlistMusic = [];
        if(($playlist->music)) {
            $playlistMusic = $playlist->music->toArray();
        }
        if($playlistMusic) {
            $offsetPl = $playlistMusic[$request->playlist ? ($request->playlist > count($playlistMusic) ? count($playlistMusic) : $request->playlist) - 1 : 0];
            if($offsetPl['cat_id'] == CAT_VIDEO) {
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id']);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id']);
            }
        }else{
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Nội dung playlist không có'], 400);
        }
        if(!$music)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Bài hát không tìm thấy'], 400);
        $music['file_url'] = Helpers::file_url($music);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => $music->toArray(), 'playlist' => $playlistMusic], 'error' => []], 200);
    }
    public function listenSingleMusic(Request $request, $cat, $sub, $musicUrl) {
        try {
            $arrUrl = Helpers::splitMusicUrl($musicUrl);
        } catch (Exception $e) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'url sai cú pháp'], 400);
        }
        if($cat == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId($arrUrl['id']);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        }
        if(!$music) {
            $music = $this->musicRepository->checkDeleteMusic($arrUrl['id'], false);
        }
        // +1 view
        if(Helpers::sessionCountTimesMusic($arrUrl['id'])){
            if($cat == CAT_VIDEO_URL) {
                $this->videoListenRepository->incrementListen($arrUrl['id']);
            }else{
                $this->musicListenRepository->incrementListen($arrUrl['id']);
            }
            if($_COOKIE['search_search'] ?? '') {
                unset($_COOKIE['search_search']);
                $this->musicSearchResultRepository->createSearch($music);
            }
        }
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        // update cookie music history
        $cookie = Helpers::MusicCookie($request, $music);
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);
        $musicSet = [
            'type_listen' => 'single', // single | playlist | album
            'type_jw' =>  $type,  // music | video
            'playlist_music' => [],
            'music_history' => $cookie
        ];
//        // update search analytics
//        if(isset($request->ref) && isset($request->key_search)&& isset($request->type_search) && $request->ref == 'search') {
//            $this->searchResultRepository->createAnalytics($request->ref, $request->key_search, $music->music_id, $request->type_search);
//        }
        $musicFavourite = false;
        if(Auth::check()){
            $getModelFavourite = $this->musicFavouriteRepository;
            if($type == 'video')
                $getModelFavourite = $this->videoFavouriteRepository;
            $musicFavourite = $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $music->music_id]])->first();
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => $music->toArray(), 'musicSet' => $musicSet, 'musicFavourite' => $musicFavourite], 'error' => []], 200);
    }
}