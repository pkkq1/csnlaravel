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
use App\Repositories\ArtistFavourite\ArtistFavouriteRepository;
use App\Repositories\MusicFavourite\MusicFavouriteRepository;
use App\Repositories\VideoFavourite\VideoFavouriteRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\ReportMusic\ReportMusicRepository;
use App\Repositories\ReportComment\ReportCommentRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

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
    protected $artistFavouriteRepository;
    protected $musicFavouriteRepository;
    protected $videoFavouriteRepository;
    protected $coverRepository;
    protected $reportMusicRepository;
    protected $reportCommentRepository;

    public function __construct(UserEloquentRepository $userRepository, PlaylistEloquentRepository $playlistRepository, MusicEloquentRepository $musicRepository,
                                UploadEloquentRepository $uploadRepository, AlbumEloquentRepository $albumRepository, ArtistFavouriteRepository $artistFavouriteRepository, MusicFavouriteRepository $musicFavouriteRepository,
                                VideoFavouriteRepository $videoFavouriteRepository, CoverEloquentRepository $coverRepository, ReportMusicRepository $reportMusicRepository, ReportCommentRepository $reportCommentRepository)
    {
        $this->userRepository = $userRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicRepository = $musicRepository;
        $this->uploadRepository = $uploadRepository;
        $this->albumRepository = $albumRepository;
        $this->artistFavouriteRepository = $artistFavouriteRepository;
        $this->musicFavouriteRepository = $musicFavouriteRepository;
        $this->videoFavouriteRepository = $videoFavouriteRepository;
        $this->coverRepository = $coverRepository;
        $this->reportMusicRepository = $reportMusicRepository;
        $this->reportCommentRepository = $reportCommentRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function openTabUploaded(Request $request) {
        $user_name = $request->user_name;
        return view('user.uploaded_music.index', compact('music', 'stage', 'user_name'));
    }
    public function openTabApproval(Request $request) {
        return view('user.approval_music.index', compact('music', 'stage'));
    }
    public function musicPlaylist (Request $request) {
        $user = $this->userRepository->getUserById($request->user_id)->first();
        if(!$user)
            return view('errors.text_error')->with('message', 'Người dùng đang được cập nhật.');
        $user = $this->userRepository->getUserById($request->user_id)->first();
        $mySelf = (Auth::check() && Auth::user()->id == $user->user_id);
        $playlist = $this->playlistRepository->getByUser($user->id);
        return view('user.playlist', compact('playlist', 'mySelf', 'user'));
    }
    public function musicUploaded(Request $request)
    {
        if(!Auth::check()) {
            return 'Lỗi User';
        }else{
            $id = $request->user_id;
            if(Auth::user()->hasPermission('duyet_sua_nhac')) {
                $id = $request->user_id;
            }
        }
        if(Auth::user()->id != $id && !Auth::user()->hasPermission('duyet_sua_nhac')) {
            return 'Lỗi User';
        }
        $titleMes = '';
        $page_tab = $request->page_tab;
        if($page_tab == 'upload') {
            $stage = $request->input('stage');

            if($stage == 'all' || $stage == 'uncensor') {
                // chờ xử lý
                $stageData['stage_uncensor'] = $this->uploadRepository->musicByUser($id, [UPLOAD_STAGE_UNCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
                $titleMes = 'chờ xử lý';
            }
            if($stage == 'all' || $stage == 'fullcensor') {
                // đã duyệt
                $stageData['stage_fullcensor'] = $this->uploadRepository->musicByUser($id, [UPLOAD_STAGE_FULLCENSOR, UPLOAD_STAGE_FULLCONVERT], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
                $titleMes = 'đã duyệt';
            }
            if($stage == 'all' || $stage == 'delete') {
                // đã xóa
                $stageData['stage_delete'] = $this->uploadRepository->musicByUser($id, [UPLOAD_STAGE_DELETED], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
                $titleMes = 'đã xóa';
            }
            if($stage == 'all' || $stage == 'album') {
                // album
                $stageData['album'] = $this->coverRepository->findCoverByUser($id, 'cover_id', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
            }
            if($stage == 'all' || $stage == 'fullcensor_by') {
                // đã duyệt theo user lần cuối cùng
                $stageData['stage_fullcensor_by'] = $this->uploadRepository->musicByStage([['music_id', '>', 1000000]], [UPLOAD_STAGE_FULLCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL, $request->user_id);
                $titleMes = 'đã duyệt theo user';
            }
            if($stage == 'all' || $stage == 'delete_by') {
                // đã duyệt theo user lần cuối cùng
                $stageData['stage_delete_by'] = $this->uploadRepository->musicByStage([['music_id', '>', 1000000]], [UPLOAD_STAGE_DELETED], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL, $request->user_id);
                $titleMes = 'đã xóa theo user';
            }
            return view('user.music_upload_approval', compact('stageData', 'stage', 'titleMes', 'page_tab'));
        }elseif($page_tab == 'approval'){
            $stage = $request->input('stage');
            if($stage == 'all' || $stage == 'fullconvert') {
                // chờ duyệt
                $stageData['stage_fullconvert'] = $this->uploadRepository->musicByStage([['csn_upload.cat_id', '!=', CAT_VIDEO], ['csn_upload.music_id', '>', 1000000]], [UPLOAD_STAGE_FULLCONVERT], 'csn_music_listen.music_listen_today', 'desc', LIMIT_PAGE_MUSIC_APPROVAL, null, SHORT_TIME_7_DAY, true);
                $titleMes = 'chờ duyệt';
            }
            if($stage == 'all' || $stage == 'fullconvert_video') {
                // chờ duyệt video
                $stageData['stage_fullconvert'] = $this->uploadRepository->musicByStage([['cat_id', CAT_VIDEO], ['music_id', '>', 1000000]], [UPLOAD_STAGE_FULLCONVERT], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL);
                $titleMes = 'chờ duyệt';
            }
            if($stage == 'all' || $stage == 'uncensor') {
                // chờ xử lý
                $stageData['stage_uncensor'] = $this->uploadRepository->musicByStage([['music_id', '>', 1000000]], [UPLOAD_STAGE_UNCENSOR], 'music_last_update_time', 'asc', LIMIT_PAGE_MUSIC_APPROVAL);
                $titleMes = 'chờ xử lý';
            }
            if($stage == 'all' || $stage == 'fullcensor') {
                // đã duyệt
                $stageData['stage_fullcensor'] = $this->uploadRepository->musicByStage([['music_id', '>', 1000000]], [UPLOAD_STAGE_FULLCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL);
                $titleMes = 'đã duyệt';
            }
            if($stage == 'all' || $stage == 'fullcensor_by') {
                // đã duyệt theo user lần cuối cùng
                $stageData['stage_fullcensor_by'] = $this->uploadRepository->musicByStage([['music_id', '>', 1000000]], [UPLOAD_STAGE_FULLCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL, Auth::user()->id);
                $titleMes = 'đã duyệt theo user';
            }
            if($stage == 'all' || $stage == 'delete') {
                // đã xóa
                $stageData['delete'] = $this->uploadRepository->musicByStage([['music_id', '>', 1000000]], [UPLOAD_STAGE_DELETED], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL);
                $titleMes = 'đã xóa';
            }
            return view('user.music_upload_approval', compact('stageData', 'stage', 'titleMes', 'page_tab'));
        }
    }
    public function musicUploadedRedirect(Request $request, $music_id) {
//        , 'music_user_id' => $user_id
        $music = $this->musicRepository->getModel()::where(['music_id' => $music_id])->first();
        if($music) {
            $url = Helpers::listen_url($music->toArray());
            return redirect($url);
        }
        return view('errors.404')->with('message', 'Nhạc đang cập nhật.');
    }
    public function musicRecent(Request $request) {
        $musics = [];
        $musicRecent = $_COOKIE['music_history_list'] ?? '';
        if(Auth::check()) {
            $musicRecent = Auth::user()->user_music_recent;
        }
        if($musicRecent) {
            $musicHistory = array_reverse(unserialize($musicRecent));
            $tempStr = implode(',', $musicHistory);
            $musics = $this->musicRepository->getHistoryRecents($tempStr);
        }
        return view('user.music_recents', compact('musics'));
    }
    public function artistFavourite(Request $request) {
        $user_id = $request->user_id;
        $artistFavourite = $this->artistFavouriteRepository->getModel()::where('user_id', $user_id)->with('artist')->orderBy('id', 'desc')->paginate(LIMIT_PAGE_ARTIST_FAVOURITE);
        return view('user.artist_favourite', compact('artistFavourite', 'user_id'));
    }
    public function videoFavourite(Request $request) {
        $user_id = $request->user_id;
        $videoFavourite = $this->videoFavouriteRepository->getModel()::where('user_id', $user_id)->with('video')->orderBy('id', 'desc')->paginate(LIMIT_PAGE_MUSIC_FAVOURITE);
        return view('user.video_favourite', compact('videoFavourite', 'user_id'));
    }
    public function musicFavourite(Request $request) {
        $user_id = $request->user_id;
        $musicFavourite = $this->musicFavouriteRepository->getModel()::where('user_id', $user_id)->with('music')->orderBy('id', 'desc')->paginate(LIMIT_PAGE_MUSIC_FAVOURITE);
        return view('user.music_favourite', compact('musicFavourite', 'user_id'));
    }
}
