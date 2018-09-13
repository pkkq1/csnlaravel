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
use App\Repositories\PlaylistCategory\PlaylistCategoryEloquentRepository;
use App\Repositories\PlaylistMusic\PlaylistMusicEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\PlaylistMusicModel;
use App\Models\PlaylistModel;

class PlaylistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $playlistRepository;
    protected $playlistCategoryRepository;
    protected $playlistMusicRepository;

    public function __construct(PlaylistEloquentRepository $playlistRepository, PlaylistCategoryEloquentRepository $playlistCategoryRepository,
                                PlaylistMusicEloquentRepository $playlistMusicRepository)
    {
        $this->playlistRepository = $playlistRepository;
        $this->playlistCategoryRepository = $playlistCategoryRepository;
        $this->playlistMusicRepository = $playlistMusicRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlayList(Request $request) {
        $musicId = $request->input('music_id');
        $result = $this->playlistRepository->getByUserId(Auth::user()->id)->toArray();
        return response($result);
    }
    public function createPlayList(Request $request) {
        if(!$request->input('playlist_title')){
            Helpers::ajaxResult(false, 'Bạn chưa nhập tên playlist mới.', null);
        }
        if(strlen($request->input('playlist_title')) <= 1){
            Helpers::ajaxResult(false, 'Tên playlist mới ít nhất 2 ký tự.', null);
        }
        $result = $this->playlistRepository->create([
            'playlist_user_id' => Auth::user()->id,
            'playlist_time' => time(),
            'playlist_music_total' => 0,
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
            Helpers::ajaxResult(false, 'Bài hát đã tồn tại trong playlist.', null);
        }
        $result = PlaylistMusicModel::firstOrCreate([
            'playlist_id' => $request->input('playlist_id'),
            'music_id' => $request->input('music_id')
        ]);

        $playlistUser->playlist_time = time();
        $playlistUser->playlist_music_total = $playlistUser->playlist_music_total + 1;

        // add and sort artist
        if($request->input('artist')) {
            $artistNew = explode(';', $request->input('artist'));
            $artistIdNew = explode(';', $request->input('artist_id'));
            $artistOld = [];
            $arrNew = [];
            if($playlistUser->playlist_artist) {
                $artistOld = json_decode($playlistUser->playlist_artist, true);
                foreach($artistNew as $key => $val) {
                    if(isset($artistOld[$artistIdNew[$key]])) {
                        // +1 duplicate
                        $artistOld[$artistIdNew[$key]]['order'] = $artistOld[$artistIdNew[$key]]['order'] + 1;
                    }else{
                        // add new artist
                        $artistOld[$artistIdNew[$key]] = [
                            'order' => 0,
                            'name' => $val
                        ];
                    }
                }
                arsort($artistOld);
            }else {
                foreach ($artistNew as $key => $val) {
                    $artistOld[$artistIdNew[$key]] = [
                        'order' => 0,
                        'name' => $val
                    ];
                }
            }
            $playlistUser->playlist_artist = json_encode($artistOld);
        }
        $playlistUser->save();
        Helpers::ajaxResult(true, 'Đã thêm vào playlist.', null);
    }
    public function editPlaylist(Request $request, $id) {
        $playlistUser = $this->playlistRepository->getByPlaylist([['playlist_id', $id], ['playlist_user_id', Auth::user()->id]]);
        if(!$playlistUser) {
            return view('errors.404');
        }
        $playlistmusic = PlaylistMusicModel::where('playlist_id', $id)->with('music')->get();
        $playlistLevel = $this->playlistCategoryRepository->getList();
        $playlistCategory = $this->playlistCategoryRepository->getCategory();
        return view('playlist.create_update_playlist', compact('playlistUser', 'playlistmusic', 'playlistLevel', 'playlistCategory'));
    }
    public function editPagePlaylist(Request $request) {
        $playlistUser = $this->playlistRepository->getByPlaylist([['playlist_user_id', Auth::user()->id]])->get();
        return view('playlist.edit_playlist', compact('playlistUser'));
    }
    public function storePlaylist(Request $request) {
        $this->validate($request, [
            'playlist_title' => 'required|max:255',
            'sumbit_action' => 'required'
        ]);
        $id = $request->input('playlist_id');
        $action = $request->input('sumbit_action');
        if($action == 'edit') {
            $playlist = PlaylistModel::where([['playlist_id', $id], ['playlist_user_id', Auth::user()->id]]);
            if(!$playlist->exists()) {
                return view('errors.404');
            }
        }else{
            $playlist = new PlaylistModel();
        }
        $update = [
            'playlist_title' => $request->input('playlist_title'),
            'playlist_cat_id' => $request->input('playlist_cat_id') ?? 0,
            'playlist_cat_level' => $request->input('playlist_cat_level') ?? 0,
            'playlist_user_id' => Auth::user()->id,
            'playlist_time' => time()
        ];
        // remove music, update count
        if($request->input('remove_music')) {
            $arrMusic = explode(',', substr($request->input('remove_music'), 1));
            $countRemove = PlaylistMusicModel::where('playlist_id', $id)->whereIn('music_id', $arrMusic)->delete();
            $update['playlist_music_total'] = $playlist->first()->playlist_music_total - $countRemove;
        }
        // update cover
        if($request->input('playlist_cover')) {
            $fileNameCover = Helpers::saveBase64Image($request->input('playlist_cover'), MUSIC_PLAYLIST_PATH, $playlist->first()->playlist_id, 'png');
            $update['playlist_cover'] = 1;
        }
        if($action == 'edit') {
            $playlist->update($update);
            return redirect()->route('playlist.update_playlist', $id)->with('success', 'Đã Cập nhập playlist.');
        }else{
            $playlist->create($update);
            return redirect()->route('playlist.create_playlist', $id)->with('success', 'Đã tạo playlist.');
        }
    }
    public function deletePlaylist(Request $request) {
        $playlist = PlaylistModel::whereIn('playlist_id', $request->input('playlis_ids'))->where('playlist_user_id', Auth::user()->id);
        if(!$playlist->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy playlist',
            ]);
        }
        $playlist->delete();
        return response()->json([
            'status' => true,
            'message' => 'Đã xóa playlist thành công',
        ]);
    }
    public function createPagePlaylist(Request $request) {
        $playlistUser = [];
        $playlistmusic = [];
        $playlistLevel = $this->playlistCategoryRepository->getList();
        $playlistCategory = $this->playlistCategoryRepository->getCategory();
        return view('playlist.create_update_playlist', compact('playlistUser', 'playlistmusic', 'playlistLevel', 'playlistCategory'));
    }
}
