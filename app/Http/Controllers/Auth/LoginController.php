<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToProvider() {

        return Socialite::driver('facebook')->redirect();
    }
    protected function attemptLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::once($credentials)) {
            $user = Auth::getUser();
            if($user->user_active == 1) {
                return $this->guard()->attempt(
                    $this->credentials($request), $request->has('remember')
                );
            }else{
                return false;
            }
        }
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        $user = Auth::getUser();
        if($user) {
            if($user->user_active == 0) {
                $errors = ['email' => 'Tài Khoản chưa được kích hoạt'];
            }
        }else{
            $errors = ['password' => trans('auth.failed')];
        }
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }
}
