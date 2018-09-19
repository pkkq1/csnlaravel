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

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository,
                                CategoryEloquentRepository $categoryListenRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->categoryListenRepository = $categoryListenRepository;
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
            $arrUrl = Helpers::splitUrl($musicUrl);
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
        $typeListen = 'playlist'; // single | playlist
        $typeJw = 'music'; // music | video
        return view('jwplayer.music', compact('music', 'typeListen', 'typeJw'));
    }
    public function listenPlaylistMusic(Request $request, $musicUrl) {
        $arrUrl = Helpers::splitUrl($musicUrl);
        $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionListenMusic($arrUrl['id'])){
            $this->musicListenRepository->incrementListen($arrUrl['id']);
        }
        $typeListen = 'playlist';
        $typeJw = 'music';
        return view('jwplayer.music', compact('music', 'typeListen', 'typeJw'));
    }
    public function listenBxhNow(Request $request, $catUrl) {
        return $this->listenBxhMusic($request, $catUrl);
    }
    public function listenBxhMonth(Request $request, $month, $catUrl) {
        return $this->listenBxhMusic($request, $catUrl, $month);
    }
    public function listenBxhYear(Request $request, $year, $catUrl) {
        return $this->listenBxhMusic($request, $catUrl, $year);
    }
    public function listenBxhMusic($request, $catUrl, $offset = false, $type = 'now') {
        $id = $request->id;
        if(!$id) {
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
            if($category->cat_level == 1) {
                // video (sub category videoclip)
                $firstMusic = $hot_video_rows[$category->cat_id][0];
            }else{
                // music (category music level 0)
                $firstMusic = $hot_music_rows[$category->cat_id][0];
            }
            $id = $firstMusic['music_id'];
        }
        $music = $this->musicRepository->findOnlyMusicId($id);
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionListenMusic($id)){
            $this->musicListenRepository->incrementListen($id);
        }
        $typeListen = 'playlist';
        $typeJw = 'music';
        return view('jwplayer.music', compact('music', 'typeListen', 'typeJw'));
    }
    public function embed(Request $request, $music) {
        $music = $this->musicRepository->findOnlyMusicId($music);
        if(!$music)
            return view('errors.404');
        return view('jwplayer.embed_mp3', compact('music'));
    }
}
