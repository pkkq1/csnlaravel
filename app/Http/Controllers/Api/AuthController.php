<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/14/2018
 * Time: 2:50 PM
 */
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request as Request;
use App\Http\Controllers\Controller;
use App\Models\UserModel as User;
use App\Models\UserSocialModel;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Session;
use \Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginFacebook(Request $req) {

        $validator = Validator::make($req->all(), [
            'token' => 'required',
            'driver' => 'required',
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return new JsonResponse($messages->all(), 500);
        }
        $user = Socialite::driver('facebook')->userFromToken($req->token);
        // Create user
        $email = ($user->getEmail() ? $user->getEmail() : $user->getId() . '@chiasenhac.com');
        $existUser = User::where('user_fb_identity', '=', $user->getId())->orWhere('email', '=', $email)->first();
        if(!$existUser) {
            $existUser = User::firstOrCreate([
                'name' => $user->getName(),
                'email' => $email,
                'user_active' => ACTIVE_USER,
                'user_avatar' => $user->avatar_original,
//                'username' => $user->getId(),
                'user_fb_identity' => $user->getId(),
                'user_phone_number' => ''
            ]);
            $existUser->user_id = $existUser->id;
            $existUser->save();
        }else{
            if(!$existUser->user_fb_identity) {
                $existUser->user_fb_identity = $user->getId();
                $existUser->save();
            }
            $existUser = $existUser;
        }
        // create session login
        // null

        return new JsonResponse($existUser, 200);
    }
    public function loginGoogle(Request $req) {

        $validator = Validator::make($req->all(), [
            'token' => 'required',
            'driver' => 'required',
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return new JsonResponse($messages->all(), 500);
        }
        $user = Socialite::driver('google')->userFromToken($req->token);
        dd($user);
        // Create user
        $email = ($user->getEmail() ? $user->getEmail() : $user->getId() . '@chiasenhac.com');
        $existUser = User::where('user_fb_identity', '=', $user->getId())->orWhere('email', '=', $email)->first();
        if(!$existUser) {
            $existUser = User::firstOrCreate([
                'name' => $user->getName(),
                'username' => '',
                'email' => $email,
                'user_active' => ACTIVE_USER,
                'user_avatar' => $user->avatar_original,
                'user_identity' => $user->getId(),
                'user_phone_number' => ''
            ]);
            $existUser->user_id = $existUser->id;
            $existUser->save();
        }else{
            if(!$existUser->user_fb_identity) {
                $existUser->user_fb_identity = $user->getId();
                $existUser->save();
            }
            $existUser = $existUser;
        }
        // create session login
        // null

        return new JsonResponse($existUser, 200);
    }

}