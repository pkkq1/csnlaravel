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
use App\Models\ArtistModel;

class ArtistController extends Controller
{
    protected $artistRepository;

    public function __construct(ArtistEloquentRepository $artistRepository) {
        $this->artistRepository = $artistRepository;
    }

    public function getTermArtist(Request $request) {
        $result = array();
        if($request->input('term')) {
            $result = ArtistModel::searchArtist($request->input('term'));
        }
        return response($result);
    }
    public function index(Request $request, $artistUrl) {
        try {
            $arrUrl = Helpers::splitArtistUrl($artistUrl);
        } catch (Exception $e) {
            return view('errors.errors')->with('e');
        }
        $artist = $this->artistRepository->find($arrUrl['id']);
        if(!$artist)
            return view('errors.404');
        return view('artist.index', compact('artist'));
    }
}