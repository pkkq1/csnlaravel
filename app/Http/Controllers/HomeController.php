<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/9/2018
 * Time: 11:35 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function __construct() {

    }
    public function index() {

        return view('home');
    }
}