<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Helpers;

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
//        dd(Helpers::artistUrl(33, 'Lê Hiếu'));
        return view('home');
    }
}
