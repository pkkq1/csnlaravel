<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helpers;
use App\Repositories\User\UserEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\QrCodeToken\QrCodeTokenRepository;
use App\Models\UserModel;
use App\Models\UserModel as User;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Models\MailTokenModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Http\JsonResponse;
use App\Repositories\ArtistFavourite\ArtistFavouriteRepository;
use App\Repositories\Session\SessionEloquentRepository;
use App\Repositories\ContactUser\ContactUserEloquentRepository;
use App\Repositories\Notification\NotificationEloquentRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\MessageUser\MessageUserEloquentRepository;
use App\Repositories\ReportComment\ReportCommentRepository;
use App\Repositories\ReportMusic\ReportMusicRepository;
use Session;

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
    protected $sessionEloquentRepository;
    protected $sessionRepository;
    protected $notifyRepository;
    protected $userMessageRepository;
    protected $contactUserRepository;
    protected $reportCommentRepository;
    protected $reportMusicRepository;

    public function __construct(UserEloquentRepository $userRepository, PlaylistEloquentRepository $playlistRepository, ArtistFavouriteRepository $artistFavouriteRepository, SessionEloquentRepository $sessionEloquentRepository, QrCodeTokenRepository $qrCodeTokenRepository, SessionEloquentRepository $sessionRepository,
                                NotificationEloquentRepository $notifyRepository, MessageUserEloquentRepository $userMessageRepository, ContactUserEloquentRepository $contactUserRepository, ReportCommentRepository $reportCommentRepository, ReportMusicRepository $reportMusicRepository)
    {
        $this->userRepository = $userRepository;
        $this->playlistRepository = $playlistRepository;
        $this->sessionEloquentRepository = $sessionEloquentRepository;
        $this->qrCodeTokenRepository = $qrCodeTokenRepository;
        $this->sessionRepository = $sessionRepository;
        $this->notifyRepository = $notifyRepository;
        $this->userMessageRepository = $userMessageRepository;
        $this->contactUserRepository = $contactUserRepository;
        $this->reportCommentRepository = $reportCommentRepository;
        $this->reportMusicRepository = $reportMusicRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $user = $this->userRepository->getUserById($id)->first();
        if(!$user)
            return new JsonResponse(['message' => 'Người dùng đang được cập nhật.', 'code' => 400, 'data' => [], 'error' => []], 400);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['user' => Helpers::convertArrHtmlCharsDecode($user)], 'error' => []], 200);
    }
    public function store(Request $request, $id) {
        if (!$request->sid) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Vui lòng nhập đầy đủ thông tin.'], 400);
        }
        $userSess = $this->sessionRepository->getSessionById($request->sid);
        if (!$userSess || ($userSess->user_id != $id)) {
            return new JsonResponse(['message' => 'Fail', 'code' => 401, 'data' => [], 'error' => 'Bạn chưa đang nhập.'], 400);
        }
        $user = $this->userRepository->getModel()::where('id', $userSess->user_id)->first();
        if (!$user) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy User'], 400);
        }
        $reqValid = [
            'user_birthday' => 'max:10',
            'user_identity_card' => 'min:8|max:20',
            'user_interests' => 'max:250',
        ];
        if($request->input('name')) {
            $reqValid['name'] = 'max:255|min:4';
        }
        $setAttr = [
            'name' => 'Tên',
            'user_birthday' => 'Ngày sinh',
            'username' => 'Tên tài khoản',
            'password' => 'Mật khẩu',
            'user_interests' => 'Thông tin',
            'repassword' => 'Nhập lại mật khẩu',
            'current_password' => 'Mật khẩu cũ'
        ];
        if(!$user->username) {
            $reqValid['password'] = 'required|max:255|min:6';
            $reqValid['username'] = 'required|max:255|min:4|max:30|alpha_dash|unique:csn_users';
            $reqValid['repassword'] = 'required|max:255|min:6|same:password';
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
            return new JsonResponse(['message' => 'Lỗi thông tin nhập', 'code' => 400, 'data' => $validator->errors()->toArray(), 'error' => []], 400);
        }
        $update = [
            'name' => $request->input('name') ?? $user->name,
            'user_gender' => $request->input('user_gender') ?? $user->user_gender,
            'user_birthday' => $request->input('user_birthday')?? $user->user_birthday,
            'user_phone_number' => $request->input('user_phone_number')?? $user->user_phone_number,
            'user_interests' => $request->input('user_interests') ?? $user->user_interests,
            'user_identity_card' => $request->input('user_identity_card') ?? $user->user_identity_card
        ];
        if(!$user->username) {
            $update['username'] = trim(strtolower($request->input('username')));
            $update['password'] = bcrypt($request->input('password'));
        }else{
            if($request->input('password') && $request->input('current_password')) {
                if(bcrypt($request->input('current_password')) == $user->password)
                {
                    $update['password'] = bcrypt($request->input('password'));
                }
                else
                {
                    return new JsonResponse(['message' => 'Lỗi thông tin nhập', 'code' => 400, 'data' => ['current_password' => ['Xác nhận mật khẩu cũ không chính xác']], 'error' => []], 400);
                }
            }
        }
        $user = UserModel::where('id', $user->id)->update($update);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' =>  Helpers::convertArrHtmlCharsDecode($update), 'error' => []], 200);
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
            return view('errors.text_error')->with('message', 'Mã xác nhận email của bạn không tồn tại.');
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
    public function qrCodeLogin(Request $request, $token) {
        if($token) {
            $qrToken = $this->qrCodeTokenRepository->getModel()::where('token', $token)->first();
            if($qrToken) {
                if($qrToken->time_expired < time()) {
                    return new JsonResponse(['message' => 'Đăng nhập thất bại, Qr code đã hết hạn', 'code' => 400, 'data' => [], 'error' => []], 400);
                }
                $sess = $this->sessionEloquentRepository->getModel()::where('id', $qrToken->session_id)->first();
                if($sess && $sess->user_id) {
                    $existUser = User::where('user_id', '=', $sess->user_id)->first();
                    $existUser->sid = session()->getId();
                    $qrToken->status = 'close';
                    $qrToken->save();
                    return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($existUser), 'error' => []], 200);
                }
            }

        }
        return new JsonResponse(['message' => 'Đăng nhập thất bại', 'code' => 400, 'data' => [], 'error' => []], 400);
    }
    public function playlist(Request $request, $id) {
        if(!$id)
            return new JsonResponse(['message' => 'vui lòng nhập user_id', 'code' => 400, 'data' => [], 'error' => []], 400);
        $playlist = $this->playlistRepository->getByUser($id);
        $result = [];
        if($playlist) {
            foreach ($playlist as $item) {
                $artists = [];
                $artistPlaylist = unserialize($item->playlist_artist);
                if($artistPlaylist) {
                    $artistNames = [];
                    $artistIds = [];
                    $i = 0;
                    foreach($artistPlaylist as $key => $item2) {
                        $artistNames[] = $item2['name'];
                        $artistIds[] = $key;
                        if(++$i == 2)
                            break;
                    }
                    $artists = Helpers::rawArrayArtists(implode(';', $artistIds), implode(';', $artistNames));
                }
                $result[] = [
                    'title' => $item->playlist_title,
                    'url' => Helpers::playlist_url($item->toArray()),
                    'playlist_music_total' => $item->playlist_music_total,
                    'playlist_cover' => $item->playlist_cover ? Helpers::file_path($item->playlist_id, env('DATA_URL').MUSIC_PLAYLIST_THUMB_200_PATH, true).$item->playlist_id . '.jpg' : env('IMG_DATA_URL').'imgs/avatar_default.png',
                    'artists' => $artists,
                    'playlist_id' => $item->playlist_id,
                ];
            }
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($result), 'error' => ''], 200);
    }
    public function notifyUser(Request $request) {
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
        $user_id = $user->user_id;
        $result = $this->notifyRepository->getModel()::where('user_id', $user_id)->orderBy('id', 'desc')->paginate(LIMIT_PAGE_NOTIFY)->toArray();
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($result), 'error' => ''], 200);
    }

    public function notifyRead(Request $request) {
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
        $user_id = $user->user_id;
        if($request->id) {
            $this->notifyRepository->getModel()::where('user_id', $user_id)->where('id', $request->id)->update([
                'read' => 1
            ]);
        }else{
            $this->notifyRepository->getModel()::where('user_id', $user_id)->update([
                'read' => 1
            ]);
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => [], 'error' => ''], 200);
    }
    public function showInfoContact(Request $request) {
        if (!$request->sid || !$request->type || !$request->notification_id) {
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
        $this->notifyRepository->getModel()::where('user_id', $user->user_id)->where('id', $request->id)->update([
            'read' => 1
        ]);
        if($request->type == 'contact') {
            $result = $this->contactUserRepository->getModel()::where('id', $request->notification_id)->where('by_user_id', $user->user_id)->first();
            $report_text = unserialize($result->report_text);
            $report_text_arr = [];
            foreach ($report_text as $item){
                $report_text_arr[] = $item;
            }
            $result->report_text = $report_text_arr;
            return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($result->toArray()), 'error' => ''], 200);
        }elseif($request->type == 'message') {
            $result = $this->userMessageRepository->getModel()::where('user_by_id', $user->user_id)->orderBy('id', 'desc')->limit(10)->get();
            return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($result->toArray()), 'error' => ''], 200);
        }elseif($request->type == 'report_comment') {
            $result = $this->reportCommentRepository->getModel()::where('id', $request->notification_id)->where('by_user_id', $user->user_id)->first();
            if($result) {
                $report_text = unserialize($result->report_text);
                $report_text_arr = [];
                foreach ($report_text as $item){
                    $report_text_arr[] = $item;
                }
                $result->report_text = $report_text_arr;
                return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($result->toArray()), 'error' => ''], 200);

            }
        }elseif($request->type == 'report_music') {
            $result = $this->reportMusicRepository->getModel()::where('id', $request->notification_id)->where('by_user_id', $user->user_id)->first();
            if($result) {
                $report_text = unserialize($result->report_text);
                $report_text_arr = [];
                foreach ($report_text as $item){
                    $report_text_arr[] = $item;
                }
                $result->report_text = $report_text_arr;
                return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => Helpers::convertArrHtmlCharsDecode($result->toArray()), 'error' => ''], 200);
            }
        }
        return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Không Tìm Thấy Thể Loại Thông Báo'], 400);

    }
}
