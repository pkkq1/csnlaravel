<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Helpers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(strpos($request->getHttpHost(), 'gocsaoviet') !== false ) {
            if($request->getRequestUri() == '/') {
                return view('news.home');
            }
        }
        return view('home');
    }
    public function policy() {
        return view('page.policy');
    }
    public function convert_id_music(Request $request) {

    }
}
