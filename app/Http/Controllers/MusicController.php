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
use App\Repositories\Category\CategoryEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\PlaylistMusicModel;

class MusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $musicRepository;
    protected $playlistRepository;
    protected $musicListenRepository;
    protected $categoryListenRepository;
    protected $coverRepository;

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository,
                                CategoryEloquentRepository $categoryListenRepository, CoverEloquentRepository $coverRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->categoryListenRepository = $categoryListenRepository;
        $this->coverRepository = $coverRepository;
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
        $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionListenMusic($arrUrl['id'])){
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
            'music_history' => $cookie['value']
        ];
        return response()
            ->view('jwplayer.music', compact('music', 'musicSet'))->cookie($cookie['cookie']);
    }
    public function listenPlaylistMusic(Request $request, $musicUrl) {
        $arrUrl = Helpers::splitPlaylistUrl($musicUrl);
        $playlistMusic = [];
        $music = [];
        $typeListen = 'single';
        if($arrUrl['type'] == 'nghe-album') {
            $album = $this->coverRepository->getCoverMusicById($arrUrl['id']);
            if(!$album)
                return view('errors.404');
            $typeListen = 'album';
            if(($album->music || $album->music)) {
                $playlistMusic = array_merge($album->music->toArray(), $album->video->toArray());
            }
        }elseif($arrUrl['type'] == 'playlist'){
            $playlist = $this->playlistRepository->getMusicByPlaylistId($arrUrl['id']);
            if(!$playlist)
                return view('errors.404');
            $typeListen = 'playlist';
            if(($playlist->music || $playlist->music)) {
                $playlistMusic = array_merge($playlist->music->toArray(), $playlist->video->toArray());
            }
        }
        if($playlistMusic) {
            $music = $this->musicRepository->findOnlyMusicId($playlistMusic[$request->playlist ? $request->playlist - 1 : 0]['music_id']);
        }
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionListenMusic($arrUrl['id'])){
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
            'type_listen' => 'playlist', // single | playlist | album
            'type_jw' =>  $typeListen,  // playlist | music | video
            'playlist_music' => $playlistMusic,
            'music_history' => $cookie['value']
        ];
        return response()
            ->view('jwplayer.music', compact('music', 'musicSet'))->cookie($cookie['cookie']);
    }
    public function listenBxhNow(Request $request, $catUrl) {
        return $this->listenBxhMusic($request, $catUrl);
    }
    public function listenBxhMonth(Request $request, $month, $year, $catUrl) {
        return $this->listenBxhMusic($request, $catUrl, $month, $year);
    }
    public function listenBxhYear(Request $request, $year, $catUrl) {
        return $this->listenBxhMusic($request, $catUrl, $year);
    }
    public function listenBxhMusic($request, $catUrl, $offset = false, $type = 'now') {
        $id = $request->id;
        $type = 'music';
        $playlistMusic = [];
        // cache array
        global $hot_music_rows;
        global $hot_video_rows;
        if($offset) {
            if($type = 'month') {
                // month BXH
                include(app_path() . '/../resources/views/cache/def_hot_today.blade.php');
            }else{
                // year BXH
                include(app_path() . '/../resources/views/cache/def_hot_today.blade.php');
            }
        }else{
            include(app_path() . '/../resources/views/cache/def_hot_today.blade.php');
        }
        $category = $this->categoryListenRepository->getCategoryUrl($catUrl);
        if(!$category)
            return view('errors.404');
        if($category->cat_id == CAT_VIDEO) {
            // video (sub category videoclip)
            $type = 'video';
            $playlistMusic = $hot_video_rows[$category->cat_id];
        }else{
            // music (category music level 0)
            $playlistMusic = $hot_music_rows[$category->cat_id];
        }
        if(!$id) {
            $firstMusic = $playlistMusic[$request->playlist ? $request->playlist - 1 : 0];
            $id = $firstMusic['music_id'];
        }
        $music = $this->musicRepository->findOnlyMusicId(Helpers::decodeID($id));
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionListenMusic($id)){
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
            'music_history' => $cookie['value']
        ];
        return response()
            ->view('jwplayer.music', compact('music', 'musicSet'))->cookie($cookie['cookie']);
    }
    public function embed(Request $request, $music) {
        $music = $this->musicRepository->findOnlyMusicId($music);
        if(!$music)
            return view('errors.404');
        return view('jwplayer.embed_mp3', compact('music'));
    }
}
