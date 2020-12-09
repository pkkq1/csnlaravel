<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\Helpers;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Repositories\PlaylistCategory\PlaylistCategoryEloquentRepository;
use App\Repositories\PlaylistMusic\PlaylistMusicEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\PlaylistMusicModel;
use App\Models\PlaylistModel;
use \Illuminate\Http\JsonResponse;
use App\Repositories\User\UserEloquentRepository;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Session\SessionEloquentRepository;

class PlaylistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $musicRepository;
    protected $playlistRepository;
    protected $playlistCategoryRepository;
    protected $playlistMusicRepository;
    protected $sessionRepository;
    protected $userRepository;

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, PlaylistCategoryEloquentRepository $playlistCategoryRepository,
                                PlaylistMusicEloquentRepository $playlistMusicRepository, SessionEloquentRepository $sessionRepository, UserEloquentRepository $userRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->playlistRepository = $playlistRepository;
        $this->playlistCategoryRepository = $playlistCategoryRepository;
        $this->playlistMusicRepository = $playlistMusicRepository;
        $this->sessionRepository = $sessionRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlayList(Request $request) {
        if (!$request->sid || !$request->music_id) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Vui lòng nhập đầy đủ thông tin.'], 400);
        }
        $userSess = $this->sessionRepository->getSessionById($request->sid);
        if (!$userSess) {
            return new JsonResponse(['message' => 'Fail', 'code' => 401, 'data' => [], 'error' => 'Bạn chưa đang nhập.'], 400);
        }
        $user = $this->userRepository->getModel()::where('id', $userSess->user_id)->first();
        if (!$user) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy User'], 400);
        }
        $playlist = $this->playlistRepository->getByUser($user->id);
        $result = [];
        foreach ($playlist as $item) {
            $result[] = [
              'playlist_id' => $item->playlist_id,
              'playlist_title' => $item->playlist_title,
              'playlist_music_total' => $item->playlist_music_total,
              'playlist_type' => $item->playlist_type,
              'playlist_time' => $item->playlist_time,
              'music_exists' => $item->findExistsMusic($request->music_id),
            ];
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($result), 'error' => ''], 200);
    }
    public function addMusicPlayList(Request $request)
    {
        if (!$request->sid || !$request->music_id || !$request->playlist_id) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Vui lòng nhập đầy đủ thông tin.'], 400);
        }
        $userSess = $this->sessionRepository->getSessionById($request->sid);
        if (!$userSess) {
            return new JsonResponse(['message' => 'Fail', 'code' => 401, 'data' => [], 'error' => 'Bạn chưa đang nhập.'], 400);
        }
        $user = $this->userRepository->getModel()::where('id', $userSess->user_id)->first();
        if (!$user) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy User'], 400);
        }
        // check banned user
        if ($user->hasPermissionsExtra('banned_user_playlist')) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Lỗi truy cập, tài khoản bạn bị khóa chức năng thêm nhạc vào playlist.'], 400);
        }
        $playlistUser = $this->playlistRepository->getByUser($user->id, $request->playlist_id)->first();
        if (!$playlistUser) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không tìm thấy playlist của bạn'], 400);
        }
        $music = $this->musicRepository->getModel()::where('music_id', $request->input('music_id'))->first();
        if(!$music) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không tìm thấy nhạc của bạn'], 400);
        }
        $countUpdate = 1;
        $dataResult = ['remove' => false];
        $mess = 'Đã thêm vào playlist.';
        $exist = PlaylistMusicModel::where([['playlist_id', $request->input('playlist_id')], ['music_id', $request->input('music_id')]]);
        if ($exist->exists()) {
            $exist->delete();
            $countUpdate = -1;
            $dataResult = ['remove' => true];
            $mess = 'Đã xóa bài hát khỏi playlist.';
        } else {
            $countPlaylist = PlaylistMusicModel::where(['playlist_id' => $request->input('playlist_id')])->count();
            if ($countPlaylist > LIMIT_ADD_PLAYLIST) {
                return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Playlist của bạn đã đạt quá 100 bài hát'], 400);
            }
            $result = PlaylistMusicModel::firstOrCreate([
                'playlist_id' => $request->input('playlist_id'),
                'music_id' => $request->input('music_id')
            ]);
        }
        $playlistUser->playlist_time = time();
        $playlistUser->playlist_music_total = $playlistUser->playlist_music_total + $countUpdate;
        // add and sort artist
        if ($request->input('artist')) {
            $artistNew = explode(';', htmlspecialchars_decode($request->input('artist'), ENT_QUOTES));
            if (!$request->input('artist_id')) {
                $artistIdNew = urlencode(htmlspecialchars_decode($request->input('artist'), ENT_QUOTES));
                $artistIdNew = explode('%3B+', $artistIdNew);
            } else {
                $artistIdNew = explode(';', htmlspecialchars_decode($request->input('artist_id'), ENT_QUOTES));
            }
            $artistOld = [];
            $arrNew = [];
            if ($playlistUser->playlist_artist) {
                $artistOld = unserialize(htmlspecialchars_decode($playlistUser->playlist_artist, ENT_QUOTES));
                foreach ($artistNew as $key => $val) {
                    $keyExits = $artistIdNew[$key] == -1 ? urlencode($val) : $artistIdNew[$key];
                    if (isset($artistOld[$keyExits])) {
                        // +1 duplicate
                        $artistOld[$keyExits]['order'] = $artistOld[$keyExits]['order'] + 1;
                    } else {
                        // add new artist
                        $artistOld[$keyExits] = [
                            'order' => 0,
                            'name' => $val
                        ];
                    }
                }
                arsort($artistOld);
            } else {
                foreach ($artistNew as $key => $val) {
                    $artistOld[$artistIdNew[$key] == -1 ? urlencode($val) : $artistIdNew[$key]] = [
                        'order' => 0,
                        'name' => $val
                    ];
                }
            }
            $playlistUser->playlist_artist = serialize($artistOld);
        }
        $playlistUser->save();
        return new JsonResponse(['message' => $mess, 'code' => 200, 'data' => $dataResult, 'error' => ''], 200);
    }
    public function editPlaylist(Request $request, $id) {
        if (!$request->sid) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Vui lòng nhập đầy đủ thông tin.'], 400);
        }
        $userSess = $this->sessionRepository->getSessionById($request->sid);
        if (!$userSess) {
            return new JsonResponse(['message' => 'Fail', 'code' => 401, 'data' => [], 'error' => 'Bạn chưa đang nhập.'], 400);
        }
        $user = $this->userRepository->getModel()::where('id', $userSess->user_id)->first();
        if (!$user) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy User'], 400);
        }
        $playlistUser = $this->playlistRepository->getByUser($user->id, $id)->with('music')->first();
        if(!$playlistUser) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không tìm thấy playlist'], 400);
        }
        $listMusicVideo = $playlistUser->music;
        $playlistLevel = $this->playlistCategoryRepository->getList();
        $playlistCategory = $this->playlistCategoryRepository->getCategory();
        $result = [
            'playlist_user' => Helpers::convertArrHtmlCharsDecode($playlistUser->toArray()),
            'list_music_video' => Helpers::convertArrHtmlCharsDecode($listMusicVideo->toArray()),
            'playlist_category' => Helpers::convertArrHtmlCharsDecode($playlistCategory->toArray()),
            'playlist_level' => Helpers::convertArrHtmlCharsDecode($playlistLevel->toArray()),
        ];
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => $result, 'error' => ''], 200);
    }
    public function storePlaylist(Request $request) {
        if (!$request->sid || !$request->playlist_title || !$request->submit_action || !$request->playlist_id) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Vui lòng nhập đầy đủ thông tin.'], 400);
        }
        $userSess = $this->sessionRepository->getSessionById($request->sid);
        if (!$userSess) {
            return new JsonResponse(['message' => 'Fail', 'code' => 401, 'data' => [], 'error' => 'Bạn chưa đang nhập.'], 400);
        }
        $user = $this->userRepository->getModel()::where('id', $userSess->user_id)->first();
        if (!$user) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy User'], 400);
        }
        // check banned user
        if ($user->hasPermissionsExtra('banned_user_playlist')) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Lỗi truy cập, tài khoản bạn bị khóa chức năng thêm nhạc vào playlist.'], 400);
        }

        $id = $request->input('playlist_id');
        $action = $request->input('submit_action');
        if($action == 'edit') {
            $playlist = PlaylistModel::where([['playlist_id', $id], ['user_id', $user->id]])->first();
            if(!$playlist) {
                return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không tìm thấy playlist'], 400);
            }
            if($playlist->playlist_title != $request->input('playlist_title')) {
                if(PlaylistModel::where([['playlist_title', $request->input('playlist_title')], ['user_id', $user->id], ['playlist_id', '!=', $playlist->playlist_id]])->first()) {
                    return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Tên playlist đã bị trùng danh sách bạn'], 400);
                }
            }
        }else{
            $playlist = new PlaylistModel();
        }
        $existName =
        $update = [
            'playlist_title' => $request->input('playlist_title'),
            'playlist_cat_id' => $request->input('playlist_cat_id') ?? 0,
            'playlist_cat_level' => $request->input('playlist_cat_level') ?? 0,
            'user_id' => $user->id,
            'playlist_time' => time()
        ];
        // remove music, update count
        if($request->input('remove_music')) {
            $arrMusic = array_filter(explode(',', $request->input('remove_music')));
            $countRemove = PlaylistMusicModel::where('playlist_id', $id)->whereIn('music_id', $arrMusic);
            $update['playlist_music_total'] = $playlist->playlist_music_total - $countRemove->count();
            $countRemove->delete();
            $removeArtist = str_replace(';', ',', substr($request->input('remove_artist'), 1));
            $removeArtistId = str_replace(';', ',', substr($request->input('remove_artist_id'), 1));
            $artistRemove = explode(',', $removeArtist);
            $artistIdRemove = explode(',', $removeArtistId);
            $artistOld = unserialize($playlist->playlist_artist);
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
            $imgPlaylist = '';
            // update cover
            if($request->input('playlist_cover')) {
                $fileNameCover = Helpers::saveBase64ImageJpg($request->input('playlist_cover'),
                    Helpers::file_path($id, MUSIC_PLAYLIST_PATH, true),
                    $id,
                    [
                        ['dest' => Helpers::file_path($id, MUSIC_PLAYLIST_THUMB_200_PATH, true), 'width' => 200, 'height' => null]

                    ]
                );
                $imgPlaylist = Helpers::file_path($id, PUBLIC_MUSIC_PLAYLIST_PATH, true). $fileNameCover;
            }
            return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => [], 'error' => ''], 200);
        }else{
            $update['playlist_status'] = SET_ACTIVE;

            $result = $playlist->create($update);
            $mes = 'Đã tạo playlist '.$result->playlist_title;
            // update cover
            if($request->input('playlist_cover')) {
                $fileNameCover = Helpers::saveBase64ImageJpg($request->input('playlist_cover'),
                    Helpers::file_path($result->playlist_id, MUSIC_PLAYLIST_PATH, true),
                    $result->playlist_id,
                    [
                        ['dest' => Helpers::file_path($result->playlist_id, MUSIC_PLAYLIST_THUMB_200_PATH, true), 'width' => 200, 'height' => null]
                    ]
                );
            }
            return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => [], 'error' => ''], 200);
        }
    }
    public function createPlayList(Request $request) {
        if (!$request->sid || !$request->playlist_title) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Vui lòng nhập đầy đủ thông tin.'], 400);
        }
        $userSess = $this->sessionRepository->getSessionById($request->sid);
        if (!$userSess) {
            return new JsonResponse(['message' => 'Fail', 'code' => 401, 'data' => [], 'error' => 'Bạn chưa đang nhập.'], 400);
        }
        $user = $this->userRepository->getModel()::where('id', $userSess->user_id)->first();
        if (!$user) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy User'], 400);
        }
        // check banned user
        if ($user->hasPermissionsExtra('banned_user_playlist')) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Lỗi truy cập, tài khoản bạn bị khóa chức năng thêm nhạc vào playlist.'], 400);
        }
        if(strlen($request->input('playlist_title')) <= 1 || strlen($request->input('playlist_title')) > 100){
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Tên playlist mới ít nhất 2 và nhỏ hơn 100 ký tự.'], 400);
        }
        if($this->playlistRepository->getModel()::where([['user_id', $user->id], ['playlist_title', $request->input('playlist_title')]])->first()){
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Tên playlist bị trùng'], 400);
        }
        $result = $this->playlistRepository->create([
            'user_id' => $user->id,
            'playlist_time' => time(),
            'playlist_music_total' => 0,
            'playlist_status' => SET_ACTIVE,
            'playlist_title' => $request->input('playlist_title')
        ]);
        return new JsonResponse(['message' => 'Đã tạo playlist.', 'code' => 200, 'data' => [], 'error' => ''], 200);
    }
    public function deletePlaylist(Request $request) {
        if (!$request->sid || !$request->playlist_id) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Vui lòng nhập đầy đủ thông tin.'], 400);
        }
        $userSess = $this->sessionRepository->getSessionById($request->sid);
        if (!$userSess) {
            return new JsonResponse(['message' => 'Fail', 'code' => 401, 'data' => [], 'error' => 'Bạn chưa đang nhập.'], 400);
        }
        $user = $this->userRepository->getModel()::where('id', $userSess->user_id)->first();
        if (!$user) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy User'], 400);
        }
        // check banned user
        if ($user->hasPermissionsExtra('banned_user_playlist')) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Lỗi truy cập, tài khoản bạn bị khóa chức năng chỉnh sửa playlist.'], 400);
        }
        $playlist = PlaylistModel::where('playlist_id', $request->playlist_id)->where('user_id', $user->id)->first();
        if(!$playlist) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không tìm thấy playlist'], 400);
        }
        $playlist->delete();
        return new JsonResponse(['message' => 'Đã xóa playlist thành công', 'code' => 200, 'data' => [], 'error' => ''], 200);
    }
}
