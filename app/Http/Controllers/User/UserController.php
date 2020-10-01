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
use App\Repositories\QrCodeToken\QrCodeTokenRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Models\MailTokenModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Repositories\ArtistFavourite\ArtistFavouriteRepository;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Repositories\ReportComment\ReportCommentRepository;
use App\Repositories\ReportMusic\ReportMusicRepository;
use App\Repositories\Notification\NotificationEloquentRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\MessageUser\MessageUserEloquentRepository;
use DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;
    protected $playlistRepository;
    protected $artistFavouriteRepository;
    protected $qrCodeTokenRepository;
    protected $reportCommentRepository;
    protected $reportMusicRepository;
    protected $notifyRepository;
    protected $userMessageRepository;

    public function __construct(UserEloquentRepository $userRepository, PlaylistEloquentRepository $playlistRepository, ArtistFavouriteRepository $artistFavouriteRepository, QrCodeTokenRepository $qrCodeTokenRepository, ReportCommentRepository $reportCommentRepository, ReportMusicRepository $reportMusicRepository,
                                NotificationEloquentRepository $notifyRepository, MessageUserEloquentRepository $userMessageRepository)
    {
        $this->userRepository = $userRepository;
        $this->playlistRepository = $playlistRepository;
        $this->qrCodeTokenRepository = $qrCodeTokenRepository;
        $this->reportCommentRepository = $reportCommentRepository;
        $this->reportMusicRepository = $reportMusicRepository;
        $this->notifyRepository = $notifyRepository;
        $this->userMessageRepository = $userMessageRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id = null)
    {
        if(!$id) {
            if(Auth::check()    ) {
                return redirect('/user/' . Auth::user()->user_id);
            }else{
                return redirect('/?rq=login&back_url=/user');
            }
        }
        if(is_numeric($id)) {
            $user = $this->userRepository->getUserById($id)->first();
        }else{
            $user = $this->userRepository->getUserByUserName($id)->first();
        }
        if(!$user)
            return view('errors.text_error')->with('message', 'Người dùng đang được cập nhật.');
        $playlist = $this->playlistRepository->getByUser($user->id);
        return view('user.index', compact('user', 'playlist'));
    }
    public function store(Request $request) {
        $reqRefresh = false;
        $reqValid = [
            'name' => 'required|max:255|min:4',
            'user_birthday' => 'max:10',
            'user_identity_card' => 'numeric|max:999999999',
            'user_interests' => 'max:255',
        ];
        $setAttr = [
            'name' => 'Tên',
            'user_birthday' => 'Ngày sinh',
            'username' => 'Tên tài khoản',
            'password' => 'Mật khẩu',
            'user_interests' => 'Thông tin',
            'repassword' => 'Nhập lại mật khẩu',
            'current_password' => 'Mật khẩu cũ',
        ];
        if(!Auth::user()->username) {
            $request->merge([
                'username' => strtolower($request->username),
            ]);
            $reqValid['password'] = 'required|max:255|min:6';
            $reqValid['username'] = 'required|max:255|min:4|max:30|alpha_dash|unique:csn_users';
            $reqValid['repassword'] = 'required|max:255|min:6|same:password';
            $reqRefresh = true;
        }else{
            if($request->input('current_password')) {
                $reqValid['current_password'] = 'required|max:255|min:6';
                $reqValid['password'] = 'required|max:255|min:6';
                $setAttr['password'] = 'Mật khẩu mới';
            }
        }
        $validator = Validator::make($request->all(), $reqValid);
        $validator->setAttributeNames($setAttr);
        if($validator->fails()) {
            Helpers::ajaxResult(false, 'Lỗi', $validator->errors()->toArray());
        }
        $update = [
            'name' => $request->input('name'),
            'user_gender' => $request->input('user_gender'),
            'user_birthday' => $request->input('user_birthday'),
            'user_phone_number' => $request->input('user_phone_number'),
            'user_interests' => $request->input('user_interests'),
            'user_identity_card' => $request->input('user_identity_card')
        ];
        if(!Auth::user()->username) {
            $update['username'] = trim(strtolower($request->input('username')));
            $update['password'] = Hash::make($request->input('password'));
        }else{
            if($request->input('password') && $request->input('current_password')) {
                if(Hash::check($request->input('current_password'), Auth::User()->password))
                {
                    $update['password'] = Hash::make($request->input('password'));
                }
                else
                {
                    Helpers::ajaxResult(false, 'Lỗi', ['current_password' => ['Xác nhận mật khẩu cũ không chính xác']]);
                }
            }
        }
        if($request->input('user_avatar')){
            $path = Helpers::file_path(Auth::user()->id, AVATAR_PATH, true);
            $fileNameAvatar = Helpers::saveBase64ImageJpg($request->input('user_avatar'), $path, Auth::user()->id,
                [
                    ['dest' => Helpers::file_path(Auth::user()->id, AVATAR_THUMB_PATH, true), 'width' => 100, 'height' => null]
                ]);
            $update['user_avatar'] = $fileNameAvatar;
        }
        $user = UserModel::where('id', Auth::user()->id)->update($update);
        $update['refresh'] = $reqRefresh;
        Helpers::ajaxResult(true, 'Cập nhật tài khoản thành công', $update);
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url()->previous());
    }
    public function verifyEmail(Request $request, $token)
    {
        $tokenVerify = MailTokenModel::where('token', $token)->first();
        if(!$tokenVerify)
            return view('errors.text_error')->with('message', 'Mã xác nhận email của bạn không tồn tại. Có thể do tài khoản của bạn đã được kích hoạt thành công rồi.');
        $user = UserModel::where('email', $tokenVerify->email)->where('user_active', DEACTIVE_USER)->first();
        if(!$user)
            return view('errors.text_error')->with('message', 'Lỗi xác thực email, kiểm tra tình trạng tài khoản của bạn.');
        UserModel::find($user->id)->update([
            'user_active' => ACTIVE_USER
        ]);
        MailTokenModel::deleteToken($tokenVerify->email);
        Auth::login($user);
        return redirect('/');
    }
    public function qrCode(Request $request) {
        if(Auth::check() && session()->getId()) {
            $result = $this->qrCodeTokenRepository->createQrCode(session()->getId(), Auth::user()->id);
            echo QrCode::size(250)->generate($result->token);
        }
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
    function clickShowUserReport(Request $request) {
        $idReport = $request->id;
        $type = $request->type;
        if($type == 'music') {
            $data = $this->reportMusicRepository->getModel()::where([['id', $idReport], ['by_user_id', Auth::user()->id]])->first();
        }else{
            $data = $this->reportCommentRepository->getModel()::where([['id', $idReport], ['by_user_id', Auth::user()->id]])->first();
        }
        $data->notifi_read = 0;
        $data->save();
    }
    public function showNotify(Request $request) {
        $this->notifyRepository->getModel()::where('user_id', Auth::user()->id)->update([
            'read' => 1
        ]);
    }
    public function notifyUser(Request $request) {
        $user_id = Auth::user()->user_id;
        $result = $this->notifyRepository->getModel()::where('user_id', $user_id)->orderBy('id', 'desc')->paginate(LIMIT_PAGE_NOTIFY);
        return view('user.notification.index', compact('result'));
    }
    public function showMessageCsn(Request $request) {
        $user_id = Auth::user()->user_id;
        $result = $this->userMessageRepository->getModel()::where('user_by_id', $user_id)->orderBy('id', 'desc')->paginate(LIMIT_PAGE_USER_MSG);
        return view('user.message_csn.index', compact('result'));
    }
    public function sendMsg(Request $request) {
        if(backpack_user()->can('banned_user_message')){
            Helpers::ajaxResult(false, 'Lỗi truy cập, tài khoản bạn bị khóa chức năng nhắn tin', null);
        }
        if(!$request->text) {
            Helpers::ajaxResult(false, 'Không tìm thấy nội dung', null);
        }
        if(strlen($request->text) < 5 || strlen($request->text) > 3000) {
            Helpers::ajaxResult(false, 'Nội chỉ chấp nhận từ 5 đến 3000 từ', null);
        }
        $result = $this->userMessageRepository->addMsg($request->text, Auth::user()->id, Auth::user()->user_name);
        if($result)
            Helpers::ajaxResult(true, 'Gửi tin nhắn thành công', null);
        Helpers::ajaxResult(false, 'Lỗi ngoài hệ thống', null);

    }
    public function uploadImageBanner(Request $request) {
        if ($request->cover_img) {
            $path = Helpers::file_path(Auth::user()->id, USER_COVER_PATH, true);
            $fileName = $fileNameAvatar = Helpers::saveBase64ImageJpg($request->cover_img, $path, Auth::user()->id);
            $user = Auth::user();
            $user->user_cover = $fileNameAvatar;
            $user->save();
            Helpers::ajaxResult(true, 'Đăng tải ảnh thành công');
        }
        Helpers::ajaxResult(false, 'Lỗi đăng tải ảnh bìa');
    }
}
