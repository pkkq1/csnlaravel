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
use Illuminate\Support\Facades\Auth;
use App\Models\PlaylistMusicModel;

class PlaylistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $playlistRepository;

    public function __construct(PlaylistEloquentRepository $playlistRepository)
    {
        $this->playlistRepository = $playlistRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlayList(Request $request) {
        $musicId = $request->input('music_id');
        $result = $this->playlistRepository->getByUserId(Auth::user()->id)->toArray();
        foreach($result as &$item) {
            $exist = PlaylistMusicModel::where([['playlist_id', $item['playlist_id']], ['music_id', $musicId]])->exists();
            $item['music_exist'] = $exist ? true : false;
        }
        return response($result);
    }
    public function createPlayList(Request $request) {
        if(!$request->input('playlist_title')){
            Helpers::ajaxResult(false, 'Bạn chưa nhập tên playlist mới.', null);
        }
        if(strlen($request->input('playlist_title')) <= 1){
            Helpers::ajaxResult(false, 'Tên playlist mới ít nhất 2 ký tự.', null);
        }
        $playlistUser = $this->playlistRepository->getByPlaylist([['playlist_title', $request->input('playlist_name')], ['playlist_user_id', Auth::user()->id]]);
        if($playlistUser) {
            Helpers::ajaxResult(false, 'Tên playlist mới của bạn đã tồn tại', null);
        }
        $result = $this->playlistRepository->create([
            'playlist_user_id' => Auth::user()->id,
            'playlist_title' => trim($request->input('playlist_title'))
        ]);
        Helpers::ajaxResult(true, 'Đã thêm vào playlist.', $result);
    }
    public function addMusicPlayList(Request $request) {
        $playlistUser = $this->playlistRepository->getByPlaylist([['playlist_id', $request->input('playlist_id')], ['playlist_user_id', Auth::user()->id]]);
        if(!$playlistUser) {
            Helpers::ajaxResult(false, 'Không tìm thấy playlist của bạn', null);
        }
        $exist = PlaylistMusicModel::where([['playlist_id', $request->input('playlist_id')], ['music_id', $request->input('music_id')]])->exists();
        if($exist) {
            Helpers::ajaxResult(false, 'Bài Hát đã tồn tại trong playlist.', null);
        }
        $result = PlaylistMusicModel::firstOrCreate([
            'playlist_id' => $request->input('playlist_id'),
            'music_id' => $request->input('music_id')
        ]);
        $playlistUser->playlist_time = time();
        $playlistUser->playlist_music_total = $playlistUser->playlist_music_total + 1;
        $playlistUser->save();
        Helpers::ajaxResult(true, 'Đã thêm vào playlist.', null);
    }
}
