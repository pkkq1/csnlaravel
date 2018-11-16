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
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Models\MailTokenModel;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;
    protected $playlistRepository;

    public function __construct(UserEloquentRepository $userRepository, PlaylistEloquentRepository $playlistRepository)
    {
        $this->userRepository = $userRepository;
        $this->playlistRepository = $playlistRepository;
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
            return view('errors.404');
        $playlist = $this->playlistRepository->getByUser($user->id);
        return view('user.index', compact('user', 'playlist'));
    }
    public function store(Request $request) {
        $update = [
            'name' => $request->input('name'),
            'user_gender' => $request->input('user_gender'),
            'user_birthday' => $request->input('user_birthday'),
            'user_phone_number' => $request->input('user_phone_number'),
            'user_interests' => $request->input('user_interests')
        ];
        if($request->input('user_avatar')){
            $path = Helpers::file_path(Auth::user()->id, AVATAR_PATH, true);
            $fileNameAvatar = Helpers::saveBase64Image($request->input('user_avatar'), $path, Auth::user()->id, 'png');
            $update['user_avatar'] = $fileNameAvatar;
        }
        $user = UserModel::where('id', Auth::user()->id)->update($update);

        Helpers::ajaxResult(true, 'Cập nhật tài khoản thành công', $update);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
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
}
