<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Helpers;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\Category\CategoryEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Artist\ArtistRepository;
use App\Repositories\MusicFavourite\MusicFavouriteRepository;
use App\Repositories\VideoFavourite\VideoFavouriteRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\PlaylistMusicModel;
use DB;

class MusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $musicRepository;
    protected $videoRepository;
    protected $playlistRepository;
    protected $musicListenRepository;
    protected $categoryListenRepository;
    protected $coverRepository;
    protected $artistRepository;
    protected $musicFavouriteRepository;
    protected $videoFavouriteRepository;
    protected $musicDownloadRepository;

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository,
                                CategoryEloquentRepository $categoryListenRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, ArtistRepository $artistRepository,
                                MusicFavouriteRepository $musicFavouriteRepository, VideoFavouriteRepository $videoFavouriteRepository, MusicDownloadEloquentRepository $musicDownloadRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->categoryListenRepository = $categoryListenRepository;
        $this->coverRepository = $coverRepository;
        $this->artistRepository = $artistRepository;
        $this->musicFavouriteRepository = $musicFavouriteRepository;
        $this->videoFavouriteRepository = $videoFavouriteRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function listenSingleMusic(Request $request, $cat, $sub, $musicUrl) {
        try {
            $arrUrl = Helpers::splitMusicUrl($musicUrl);
        } catch (Exception $e) {
            return view('errors.errors')->with('e');
        }
        if($cat == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId($arrUrl['id']);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        }
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionCountTimesMusic($arrUrl['id'])){
            $this->musicListenRepository->incrementListen($arrUrl['id']);
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
        $musicFavourite = false;
        if(Auth::check()){
            $getModelFavourite = $this->musicFavouriteRepository;
            if($type == 'video')
                $getModelFavourite = $this->videoFavouriteRepository;
            $musicFavourite = $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $music->music_id]])->first();
        }
        return view('jwplayer.music', compact('music', 'musicSet', 'musicFavourite'));
    }
    public function listenPlaylistMusic(Request $request, $musicUrl) {
        $arrUrl = Helpers::splitPlaylistUrl($musicUrl);
        $playlistMusic = [];
        $music = [];
        $playlist = [];
        $typeListen = 'single';
        if($arrUrl['type'] == 'nghe-album') {
            $album = $this->coverRepository->getCoverMusicById($arrUrl['id']);
            if(!$album)
                return view('errors.text_error')->with('message', 'Album không tìm thấy.');
            $typeListen = 'album';
            if(($album->music)) {
                $playlistMusic = $album->music->toArray();
            }
        }elseif($arrUrl['type'] == 'playlist'){
            $playlist = $this->playlistRepository->getMusicByPlaylistId($arrUrl['id']);
            if(!$playlist)
                return view('errors.404');
            $typeListen = 'playlist';
            if(($playlist->music)) {
                $playlistMusic = $playlist->music->toArray();
            }
        }elseif($arrUrl['type'] == 'nghe-bat-hat-ca-si'){
            $arrUrl = Helpers::splitArtistUrl($musicUrl);
            $artist = $this->artistRepository->find($arrUrl['id']);
            if(!$artist)
                return view('errors.text_error')->with('message', 'Ca sĩ chưa được phát hành.');
            $music = $this->musicRepository->findMusicByArtist($artist->artist_nickname, 'music_id', 'desc', LIMIT_MUSIC_PAGE_ARTIST)->toArray();
            if(!$music['data'])
                return view('errors.text_error')->with('message', 'Ca sĩ chưa có bài hát nào phát hành.');
            $playlistMusic = $music['data'];
            $typeListen = 'playlist';
        }
        if($playlistMusic) {
            $offsetPl = $playlistMusic[$request->playlist ? $request->playlist - 1 : 0];
            if($offsetPl['cat_id'] == CAT_VIDEO) {
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id']);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id']);
            }
        }else{
            return view('errors.text_error')->with('message', 'Nội dung playlist không có.');
        }
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionCountTimesMusic($arrUrl['id'])){
            $this->musicListenRepository->incrementListen($music->music_id);
        }
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        // update cookie music history
        $cookie = Helpers::MusicCookie($request, $music);
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);
        $musicSet = [
            'type_listen' => $typeListen, // single | playlist | album
            'type_jw' =>  $type,  // playlist | music | video
            'playlist_music' => $playlistMusic,
            'music_history' => $cookie,
            'playlist' => $playlist
        ];
        $musicFavourite = false;
        if(Auth::check()){
            $getModelFavourite = $this->musicFavouriteRepository;
            if($type == 'video')
                $getModelFavourite = $this->videoFavouriteRepository;
            $musicFavourite = $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $music->music_id]])->first();
        }
        return view('jwplayer.music', compact('music', 'musicSet', 'musicFavourite'));
    }
    public function listenBxhNow(Request $request, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'now', $catLevel);
    }
    public function listenBxhWeek(Request $request, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'week', $catLevel);
    }
    public function listenBxhMonth(Request $request, $month, $year, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'month', $catLevel, $month, $year);
    }
    public function listenBxhYear(Request $request, $year, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'year', $catLevel, 'all', $year);
    }
    public function listenBxhMusic($request, $catUrl, $typeBxh = 'now', $catLevel = '', $month = 0, $year = 0) {
        $id = $request->id;
        $type = 'music';
        $playlistMusic = [];
        // cache array
        global $hot_music_rows;
        global $hot_video_rows;
        if($typeBxh == 'now') {
            include(app_path() . '/../resources/views/cache/bxh/bxh_today.blade.php');
        }elseif($typeBxh == 'week') {
            include(app_path() . '/../resources/views/cache/bxh/bxh_week.blade.php');
        }elseif($typeBxh == 'month') {
            include(app_path() . '/../resources/views/cache/bxh/bxh_'.$month.'_'.$year.'.blade.php');
        }elseif($typeBxh == 'year') {
            include(app_path() . '/../resources/views/cache/bxh/bxh_'.$month.'_'.$year.'.blade.php');
        }
        $category = $this->categoryListenRepository->getCategoryUrl($catUrl == CAT_VIDEO_URL ? $catLevel : $catUrl);
        if($catUrl == CAT_VIDEO_URL) {
            // video (sub category videoclip)
            $type = 'video';
            $playlistMusic = $hot_video_rows[$category->cat_level];
        }else{
            // music (category music level 0)
            $playlistMusic = $hot_music_rows[$category->cat_id];
        }
        if(!$id) {
            $firstMusic = $playlistMusic[$request->playlist ? $request->playlist - 1 : 0];
            $id = $firstMusic['music_id'];
        }
        if($catUrl == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId(Helpers::decodeID($id));
        }else{
            $music = $this->musicRepository->findOnlyMusicId(Helpers::decodeID($id));
        }
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionCountTimesMusic($id)){
            $this->musicListenRepository->incrementListen($id);
        }
        // update cookie music history
        $cookie = Helpers::MusicCookie($request, $music);
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);
        $musicSet = [
            'type_listen' => 'playlist', // single | playlist | album
            'type_jw' =>  $type,  // music | video
            'playlist_music' => $playlistMusic,
            'music_history' => $cookie
        ];
        $musicFavourite = false;
        if(Auth::check()){
            $getModelFavourite = $this->musicFavouriteRepository;
            if($type == 'video')
                $getModelFavourite = $this->videoFavouriteRepository;
            $musicFavourite = $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $music->music_id]])->first();
        }
        return view('jwplayer.music', compact('music', 'musicSet', 'musicFavourite'));
    }
    public function embed(Request $request, $music) {
        $music = $this->musicRepository->findOnlyMusicId($music);
        if(!$music)
            return view('errors.404');
        return view('jwplayer.embed_mp3', compact('music'));
    }
    public function historyListen(Request $request) {
        $result = [];
        if(isset($_COOKIE['music_history'])) {
            $musicHistory = unserialize($_COOKIE['music_history']);
            $tempStr = implode(',', $musicHistory);
            $musics = $this->musicRepository->getHistoryRecents($tempStr);
            foreach ($musics as $key => $item) {
                $result[] = [
                    'title' => ++$key . '. ' . $item->music_title . ' - '. str_replace(';', ', ', $item->music_artist),
                    'link' => Helpers::listen_url([
                        'music_id'=> $item->music_id,
                        'cat_id' => $item->cat_id,
                        'cat_level' => $item->cat_level,
                        'music_title_url' => $item->music_title_url,
                    ])
                ];
            }
        }
        return response($result);
    }
    function musicFavourite (Request $request) {
        $dataRes = null;
        if(!Auth::check())
            return 'Lỗi User';
        $typeMes = 'bài hát';
        $getModelFavourite = $this->musicFavouriteRepository;
        if($request->type_of == 'video') {
            $typeMes = 'video';
            $getModelFavourite = $this->videoFavouriteRepository;
        }
        if($request->type == 'true'){
            $msg = 'Đã bỏ '.$typeMes.' '.$request->name.' ra khỏi danh sách yêu thích.';
            $dataRes = [];
            $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $request->music_id]])->delete();
        }else{
            $msg = 'Đã thêm '.$typeMes.' '.$request->name.' vào danh sách yêu thích.';
            $getModelFavourite->getModel()::create(['user_id' => Auth::user()->id, 'music_id' => $request->music_id]);
        }
        Helpers::ajaxResult(true, $msg, $dataRes);
    }
    public function countDownload(Request $request) {
        // +1 download
        if($request->music_id) {
            if(Helpers::sessionCountTimesMusic($request->music_id, 'download')){
                $this->musicDownloadRepository->incrementDownload($request->music_id);
            }
        }
        Helpers::ajaxResult(true, '', null);
    }
}
