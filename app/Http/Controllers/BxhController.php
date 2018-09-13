<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use App\Repositories\Artist\ArtistEloquentRepository;

class BxhController extends Controller
{
    protected $artistRepository;

    public function __construct(ArtistEloquentRepository $artistRepository) {
        $this->artistRepository = $artistRepository;
    }
    public function now(Request $request) {
        return view('bxh.now', compact('bxh'));
    }
    public function month(Request $request, $cat, $sub) {
        return view('bxh.month', compact('bxh'));
    }
    public function year(Request $request, $cat, $sub) {
        return view('bxh.year', compact('bxh'));
    }
    public function cat(Request $request, $cat, $sub) {
        return view('bxh.cat', compact('bxh'));
    }
}