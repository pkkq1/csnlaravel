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
use Illuminate\Support\Facades\Storage;

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
        if(!Auth::check()){
            Helpers::ajaxResult(false, 'Bạn chưa đang nhập.', null);
        }
        $result = $this->playlistRepository->getByUser(Auth::user()->id)->toArray();
        return Helpers::ajaxResult(true, '', $result);
    }
    public function createPlayList(Request $request) {
        if(!Auth::check()){
            Helpers::ajaxResult(false, 'Bạn chưa đang nhập.', null);
        }
        if(!$request->input('playlist_title')){
            Helpers::ajaxResult(false, 'Bạn chưa nhập tên playlist mới.', null);
        }
        if(strlen($request->input('playlist_title')) <= 1){
            Helpers::ajaxResult(false, 'Tên playlist mới ít nhất 2 ký tự.', null);
        }
        $result = $this->playlistRepository->create([
            'user_id' => Auth::user()->id,
            'playlist_time' => time(),
            'playlist_music_total' => 0,
            'playlist_status' => 1,
            'playlist_title' => trim($request->input('playlist_title'))
        ]);
        Helpers::ajaxResult(true, 'Đã thêm vào playlist.', $result);
    }
    public function addMusicPlayList(Request $request) {
        if(!Auth::check()){
            Helpers::ajaxResult(false, 'Bạn chưa đang nhập.', null);
        }
        $playlistUser = $this->playlistRepository->getByUser(Auth::user()->id, $request->input('playlist_id'))->first();
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
            if(!$request->input('artist_id')) {
                $artistIdNew = urlencode($request->input('artist'));
                $artistIdNew = explode('%3B+', $artistIdNew);
            }else{
                $artistIdNew = explode(';', $request->input('artist_id'));
            }
            $artistOld = [];
            $arrNew = [];
            if($playlistUser->playlist_artist) {
                $artistOld = unserialize($playlistUser->playlist_artist);
                foreach($artistNew as $key => $val) {
                    $keyExits = $artistIdNew[$key] == -1 ? urlencode($val): $artistIdNew[$key];
                    if(isset($artistOld[$keyExits])) {
                        // +1 duplicate
                        $artistOld[$keyExits]['order'] = $artistOld[$keyExits]['order'] + 1;
                    }else{
                        // add new artist
                        $artistOld[$keyExits] = [
                            'order' => 0,
                            'name' => $val
                        ];
                    }
                }
                arsort($artistOld);
            }else {
                foreach ($artistNew as $key => $val) {
                    $artistOld[$artistIdNew[$key] == -1 ? urlencode($val): $artistIdNew[$key]] = [
                        'order' => 0,
                        'name' => $val
                    ];
                }
            }
            $playlistUser->playlist_artist = serialize($artistOld);
        }
        $playlistUser->save();
        Helpers::ajaxResult(true, 'Đã thêm vào playlist.', null);
    }
    public function editPlaylist(Request $request, $id) {
//        $playlistUser = $this->playlistRepository->getByUser(Auth::user()->id, $id)->with('playlist_arr_ids')->first();
        $playlistUser = $this->playlistRepository->getByUser(Auth::user()->id, $id)->with('music')->first();
        if(!$playlistUser) {
            return view('errors.404');
        }
//        $listMusicVideo = $this->playlistRepository->getMusicVideo(array_column($playlistUser->playlist_arr_ids->toArray(), 'music_id'));
        $listMusicVideo = $playlistUser->music;
        $playlistLevel = $this->playlistCategoryRepository->getList();
        $playlistCategory = $this->playlistCategoryRepository->getCategory();
        return view('user.playlist.create_update_playlist', compact('playlistUser', 'playlistLevel', 'playlistCategory', 'listMusicVideo'));
    }
    public function editPagePlaylist(Request $request) {
        $playlistUser = $this->playlistRepository->getByUser(Auth::user()->id);
        return view('user.playlist.edit_playlist', compact('playlistUser'));
    }
    public function storePlaylist(Request $request) {
        $this->validate($request, [
            'playlist_title' => 'required|max:255|min:2',
            'sumbit_action' => 'required'
        ]);
        $id = $request->input('playlist_id');
        $action = $request->input('sumbit_action');
        $playlistData = [];
        if($action == 'edit') {
            $playlist = PlaylistModel::where([['playlist_id', $id], ['user_id', Auth::user()->id]]);
            $playlistData = $playlist->first();
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
            'user_id' => Auth::user()->id,
            'playlist_time' => time()
        ];
        // remove music, update count
        if($request->input('remove_music')) {
            $arrMusic = explode(',', substr($request->input('remove_music'), 1));
            $countRemove = PlaylistMusicModel::where('playlist_id', $id)->whereIn('music_id', $arrMusic)->delete();
            $update['playlist_music_total'] = $playlist->first()->playlist_music_total - $countRemove;
            $removeArtist = str_replace(';', ',', substr($request->input('remove_artist'), 1));
            $removeArtistId = str_replace(';', ',', substr($request->input('remove_artist_id'), 1));
            $artistRemove = explode(',', $removeArtist);
            $artistIdRemove = explode(',', $removeArtistId);
            $artistOld = unserialize($playlistData->playlist_artist);
            foreach ($artistIdRemove as $key => $val) {
                $keyExits = $val == -1 ? urlencode($artistRemove[$key]): $val;
                if(isset($artistOld[$keyExits])) {
                    if($artistOld[$keyExits]['order'] == 0){
                        unset($artistOld[$keyExits]);
                    }else{
                        $artistOld[$keyExits]['order'] = $artistOld[$keyExits]['order'] - 1;
                    }
                }
            }
            arsort($artistOld);
            $update['playlist_artist'] = serialize($artistOld);

        }
        if($request->input('order_music')) {
            $arrMusic = explode(',', substr($request->input('order_music'), 1));
            foreach ($arrMusic as $key => $item) {
                $this->playlistMusicRepository->getModel()::where('music_id', $item)->update(['playlist_order' => $key]);
            }
        }
        if($request->input('playlist_cover'))
            $update['playlist_cover'] = SET_ACTIVE;
        if($action == 'edit') {
            $result = $playlist->update($update);
            $mes = 'Đã Cập nhập playlist.';
            // update cover
            if($request->input('playlist_cover')) {
                $fileNameCover = Helpers::saveBase64Image($request->input('playlist_cover'), Helpers::file_path($id, MUSIC_PLAYLIST_PATH, true), $id, 'png');
            }
            return redirect()->route('playlist.update_playlist', $id)->with('success', $mes);
        }else{
            $update['playlist_status'] = SET_ACTIVE;

            $result = $playlist->create($update);
            $mes = 'Đã tạo playlist '.$result->playlist_title;
            // update cover
            if($request->input('playlist_cover')) {
                $fileNameCover = Helpers::saveBase64Image($request->input('playlist_cover'), Helpers::file_path($result->playlist_id, MUSIC_PLAYLIST_PATH, true), $result->playlist_id, 'png');
            }
            return redirect('/user/playlist/chinh-sua')->with('success', $mes);
        }
    }
    public function deletePlaylist(Request $request) {
        if(!Auth::check()){
            return response()->json([
                'status' => false,
                'message' => 'Bạn chưa đăng nhập',
            ]);
        }
        $playlist = PlaylistModel::whereIn('playlist_id', $request->input('playlis_ids'))->where('user_id', Auth::user()->id);
        if(!$playlist->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy playlist',
            ]);
        }
        foreach($playlist->get() as $item) {
            if($item->playlist_cover)
                Storage::delete('public' . Helpers::file_path($item->playlist_id, MUSIC_PLAYLIST_PATH, true) . $item->playlist_id.'.png');
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
        return view('user.playlist.create_update_playlist', compact('playlistUser', 'playlistmusic', 'playlistLevel', 'playlistCategory'));
    }
}
