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
        return view('user.warehouse_music.index', compact('music', 'stage'));
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
        if($request->page_tab == 'upload') {
            $stage = $request->input('stage');

            if($stage == 'all' || $stage == 'uncensor') {
                // chờ xử lý
                $music['stage_uncensor'] = $this->uploadRepository->musicByUser($id, [UPLOAD_STAGE_UNCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
            }
            if($stage == 'all' || $stage == 'fullcensor') {
                // đã duyệt
                $music['stage_fullcensor'] = $this->uploadRepository->musicByUser($id, [UPLOAD_STAGE_FULLCENSOR, UPLOAD_STAGE_FULLCONVERT], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
            }
            if($stage == 'all' || $stage == 'delete') {
                // đã xóa
                $music['stage_delete'] = $this->uploadRepository->musicByUser($id, [UPLOAD_STAGE_DELETED], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
            }
            if($stage == 'all' || $stage == 'album') {
                // album
                $music['album'] = $this->coverRepository->findCoverByUser($id, 'cover_id', 'desc', LIMIT_PAGE_MUSIC_UPLOADED);
            }
            return view('user.music_uploaded', compact('music', 'stage'));
        }elseif($request->page_tab == 'approval'){
            $stage = $request->input('stage');
            if($stage == 'all' || $stage == 'fullconvert') {
                // chờ duyệt
                $music['stage_fullconvert'] = $this->uploadRepository->musicByStage([UPLOAD_STAGE_FULLCONVERT], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL);
            }
            if($stage == 'all' || $stage == 'uncensor') {
                // chờ xử lý
                $music['stage_uncensor'] = $this->uploadRepository->musicByStage([UPLOAD_STAGE_UNCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL);
            }
            if($stage == 'all' || $stage == 'fullcensor') {
                // đã duyệt
                $music['stage_fullcensor'] = $this->uploadRepository->musicByStage([UPLOAD_STAGE_FULLCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL);
            }
            if($stage == 'all' || $stage == 'fullcensor_by') {
                // đã duyệt theo user lần cuối cùng
                $music['stage_fullcensor_by'] = $this->uploadRepository->musicByStage([UPLOAD_STAGE_FULLCENSOR], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL, Auth::user()->id);
            }
            if($stage == 'all' || $stage == 'delete') {
                // đã xóa
                $music['stage_delete'] = $this->uploadRepository->musicByStage([UPLOAD_STAGE_DELETED], 'music_last_update_time', 'desc', LIMIT_PAGE_MUSIC_APPROVAL);
            }
            return view('user.music_approval', compact('music', 'stage'));
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
        $musicRecent = $_COOKIE['music_history'] ?? '';
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
    public function reportUser(Request $request) {
        $user_id = Auth::user()->user_id;
        $page = $request->get('page', 1);
        $paginate = LIMIT_PAGE_MUSIC_FAVOURITE;
        $reportMusic = $this->reportMusicRepository->getModel()::where('by_user_id', $user_id)->select(DB::raw('id, 0 as comment_id, 0 as comment_type, report_option, music_id, report_text, music_name, 0 as comment_text, username, created_at, updated_at, status, notifi_read,\'music\' as report_type'));
        $reportComment = $this->reportCommentRepository->getModel()::where('by_user_id', $user_id)->select(DB::raw('id, comment_id, comment_type, report_option, music_id, report_text, music_name, comment_text, username, created_at, updated_at, status, notifi_read,\'comment\' as report_type'));
        $reportData = $reportMusic->union($reportComment)->orderBy('updated_at', 'desc')->get();
        $slice = array_slice($reportData->toArray(), $paginate * ($page - 1), $paginate);
        $result = new LengthAwarePaginator($slice, count($reportData), $paginate, null, ['path' => '/user/report_tab']);
        return view('user.report_user.index', compact('result'));
    }
    public function reportReply(Request $request) {
        $user_id = Auth::user()->user_id;
        $content = $request->input('content');
        $reply_type = $request->input('reply_type');
        $report_id= $request->input('report_id');
        if($reply_type == 'music') {
            $reportData = $this->reportMusicRepository;
        }else {
            $reportData = $this->reportCommentRepository;
        }
        $reportData = $reportData->getModel()::where([['by_user_id', $user_id], ['id', $report_id]])->first();
        if($reportData->status == 2) {
            abort(403, 'Lỗi báo cáo này đã đóng');
        }
        if(!$reportData){
            abort(403, 'Lỗi không tìm thấy báo cáo');
        }
        $contentReport = unserialize($reportData->report_text);
        $newContent = [
            'time' => time(),
            'user_id' => Auth::user()->id,
            'content' => $content,
        ];
        $contentReport[time()]['user'] = $newContent;
        $reportData->report_text = serialize($contentReport);
        $reportData->status = 0;
        $reportData->save();
        return view('user.report_user.report_children', compact('newContent'));
    }
}
