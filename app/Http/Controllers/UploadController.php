<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/9/2018
 * Time: 11:35 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtistUploadModel;
use App\Library\Helpers;


class UploadController extends Controller
{
    public function __construct() {

    }
    public function index() {

        return view('upload.index');
    }
    public function uploadArtist() {
        return view('upload.upload_artist');
    }
    public function storeArtist(Request $request) {
        $artist = new ArtistUploadModel();
        Helpers::saveBase64Image($request->input('artist_avatar'), AVATAR_ARTIST_CROP_PATH);

        dd(1);

        $this->validate($request, [
            'artist_nickname' => 'required',
            'artist_birthday' => 'required',
            'artist_gender' => 'required',
            'artist_avatar' => 'required',
            'artist_cover' => 'required'
        ]);
        $artist->artist_nickname = $request->input('artist_nickname');
        $artist->artist_birthday = date("dd/mm/yyyy", strtotime($request->input('artist_birthday')));
        $artist->artist_nickname = $request->input('artist_gender');
        //save image
        $artist->artist_cover  = Helpers::saveBase64Image($request->input('artist_avatar'));


    }
}