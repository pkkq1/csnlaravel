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

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;

    public function __construct(UserEloquentRepository $userRepository)
    {
        $this->userRepository = $userRepository;

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

        return view('user.index', compact('user'));
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
            $fileNameAvatar = Helpers::saveBase64Image($request->input('user_avatar'), AVATAR_PATH, Auth::user()->id, 'png');
            $update['user_avatar'] = $fileNameAvatar;
        }
        $user = UserModel::where('id', Auth::user()->id)->update($update);

        Helpers::ajaxResult(true, 'Cập nhật tài khoản thành công', $update);
    }

}
