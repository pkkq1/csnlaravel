<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helpers;
use App\Repositories\User\UserEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Models\MailTokenModel;

class MusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;
    protected $musicRepository;
    protected $playlistRepository;

    public function __construct(UserEloquentRepository $userRepository, PlaylistEloquentRepository $playlistRepository, MusicEloquentRepository $musicRepository)
    {
        $this->userRepository = $userRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicRepository = $musicRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function musicUploaded(Request $request)
    {
        $music = $this->musicRepository->musicByUser($request->input('user_id'), 'music_id', 'desc', LITMIT_COMMENT);
        if(!$user)
            return view('errors.404');
        $playlist = $this->playlistRepository->getByUserId($user->id);
        return view('user.index', compact('user', 'playlist'));
    }

}
