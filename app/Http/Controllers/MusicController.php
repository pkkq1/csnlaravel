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

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicListenRepository = $musicListenRepository;
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
    public function listenMusic(Request $request, $cat, $sub, $musicUrl) {
        $arrUrl = Helpers::splitUrl($musicUrl);
        $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        if(!$music)
            return view('errors.404');
        // +1 view
        if(Helpers::sessionListenMusic($arrUrl['id'])){
            $this->musicListenRepository->incrementListen($arrUrl['id']);
        }
        return view('jwplayer.music', compact('music'));
    }
    public function embed(Request $request, $music) {
        $music = $this->musicRepository->findOnlyMusicId($music);
        if(!$music)
            return view('errors.404');
        return view('jwplayer.embed_mp3', compact('music'));
    }
}
