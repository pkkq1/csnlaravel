<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Music\MusicEloquentRepository;

class MusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $musicRepository;

    public function __construct(MusicEloquentRepository $musicRepository)
    {
        $this->musicRepository = $musicRepository;
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
        $music = $this->musicRepository->findOnlyMusicUrl($musicUrl);
        return view('jwplayer.music', compact('music'));
    }
}
