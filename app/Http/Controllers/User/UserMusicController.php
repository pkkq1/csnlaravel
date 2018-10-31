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
use App\Repositories\Album\AlbumEloquentRepository;
use App\Models\MailTokenModel;
use App\Repositories\Upload\UploadEloquentRepository;

class UserMusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;
    protected $musicRepository;
    protected $playlistRepository;
    protected $uploadRepository;
    protected $albumRepository;

    public function __construct(UserEloquentRepository $userRepository, PlaylistEloquentRepository $playlistRepository, MusicEloquentRepository $musicRepository,
        UploadEloquentRepository $uploadRepository, AlbumEloquentRepository $albumRepository)
    {
        $this->userRepository = $userRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicRepository = $musicRepository;
        $this->uploadRepository = $uploadRepository;
        $this->albumRepository = $albumRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function musicUploaded(Request $request)
    {
        $stage = $request->input('stage');
        if($stage == 'all' || $stage == 'uncensor') {
            // chờ xử lý
            $music['stage_uncensor'] = $this->uploadRepository->musicByUser($request->input('user_id'),[UPLOAD_STAGE_UNCENSOR], 'music_id', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
        }
        if($stage == 'all' || $stage == 'fullcensor') {
            // đã duyệt
            $music['stage_fullcensor'] = $this->uploadRepository->musicByUser($request->input('user_id'),[UPLOAD_STAGE_FULLCENSOR, UPLOAD_STAGE_FULLCONVERT], 'music_id', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
        }
        if($stage == 'all' || $stage == 'delete') {
            // đã xóa
            $music['stage_delete'] = $this->uploadRepository->musicByUser($request->input('user_id'),[UPLOAD_STAGE_DELETED], 'music_id', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
        }
        if($stage == 'all' || $stage == 'album') {
            // album
            $music['album'] = $this->albumRepository->findAlbumByUser($request->input('user_id'), 'album_id', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
        }
        return view('user.music_uploaded', compact('music', 'stage'));
    }
    public function musicUploadedRedirect(Request $request, $user_id, $music_id) {
//        , 'music_user_id' => $user_id
        $music = $this->musicRepository->getModel()::where(['music_id' => $music_id])->first();
        if($music) {
            $url = Helpers::listen_url($music->toArray());
            return redirect($url);
        }
        return view('errors.404');
    }
    public function musicRecent(Request $request) {
        $result = [];
        $musics = [];
        if(isset($_COOKIE['music_history'])) {
            $musicHistory = array_reverse(unserialize($_COOKIE['music_history']));
            $tempStr = implode(',', $musicHistory);
            $musics = $this->musicRepository->getHistoryRecents($tempStr);
        }
        return view('user.music_recents', compact('musics'));
    }

}
