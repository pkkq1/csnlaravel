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
    public function index()
    {
        return view('home');
    }
    public function policy() {
        return view('page.policy');
    }
    public function convert_id_music(Request $request) {
        $code = $request->code ?? '';
        $result = '';
        if($code) {
            if(is_numeric($code)){
                $result = Helpers::encodeID($code);
            }else{
                $result = Helpers::decodeID($code);
            }
        }
        return view('conver_id_music', compact('result', 'code'));
    }
}
