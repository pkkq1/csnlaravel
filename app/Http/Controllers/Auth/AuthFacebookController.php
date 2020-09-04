<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/14/2018
 * Time: 2:50 PM
 */
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserModel as User;
use App\Models\UserSocialModel;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Session;
use App\Library\Helpers;
use Storage;

class AuthFacebookController extends Controller
{

    /**
     * Redirect the user to the Github authentication page
     *
     * @return Response
     */
    public function redirectToProvider() {
        Session::flash('redirect_flash', $_GET['back_url'] ?? url()->previous());
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Github
     *
     * @return Response
     */
    public function handleProviderCallback() {
        // Get github's user infomation
        $user = Socialite::driver('facebook')->user();
        // Create user
        $email = ($user->getEmail() ? $user->getEmail() : $user->getId() . '@chiasenhac.com');
        $existUser = User::where('user_fb_identity', '=', $user->getId())->orWhere('email', '=', $email)->first();
        if(!$existUser) {
            $existUser = User::firstOrCreate([
                'name' => $user->getName(),
                'email' => $email,
                'user_active' => ACTIVE_USER,
                'user_avatar' => $user->avatar_original,
                'username' => $user->getId(),
                'user_lastvisit' => time(),
                'user_regdate' => time(),
                'user_fb_identity' => $user->getId(),
                'user_phone_number' => ''
            ]);
            $existUser->user_id = $existUser->id;
            $existUser->save();
            if($existUser->user_avatar) {
                $url = $existUser->user_avatar;
                $fileName = $existUser->id.'.jpg';
                $dir_original = Storage::disk('public')->getAdapter()->getPathPrefix().Helpers::file_path($existUser->id, AVATAR_PATH, true);
                $dir_Thumb = Storage::disk('public')->getAdapter()->getPathPrefix().Helpers::file_path($existUser->id, AVATAR_THUMB_PATH, true);
                if (!file_exists($dir_original)) {
                    mkdir($dir_original, 0777, true);
                }
                if (!file_exists($dir_Thumb)) {
                    mkdir($dir_Thumb, 0777, true);
                }
                Helpers::createThumbnail($url, $dir_original . $fileName, 500, 500);
                Helpers::createThumbnail($url, $dir_Thumb . $fileName, 100, 100);
                $existUser->user_avatar = $fileName;
                $existUser->save();
            }
        }else{
            if(!$existUser->user_fb_identity) {
                $existUser->user_fb_identity = $user->getId();
                $existUser->save();
            }
            $existUser = $existUser;
        }
        Auth::login($existUser);
        return redirect(Session::get('redirect_flash') ?? '/');
    }
}