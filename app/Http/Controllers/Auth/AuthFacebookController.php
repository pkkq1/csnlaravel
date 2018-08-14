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

class AuthFacebookController extends Controller
{

    /**
     * Redirect the user to the Github authentication page
     *
     * @return Response
     */
    public function redirectToProvider() {

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
        $createdUser = User::firstOrNew([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'avatar' => $user->avatar_original,
            'phone' => ''
        ]);
        UserSocialModel::firstOrNew([
            'user_id' => $createdUser->id,
            'app' => 'facebook',
            'data' => json_encode($user)
        ]);
        Auth::login($createdUser);
        return redirect('/');
    }
}