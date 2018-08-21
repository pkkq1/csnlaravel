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
}