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
use App\Repositories\Artist\ArtistEloquentRepository;

class UploadController extends Controller
{
    protected $artist_repository;
    public function __construct(ArtistEloquentRepository $artist_repository) {
        $this->artist_repository = $artist_repository;
    }
    public function index() {

        return view('upload.index');
    }
    public function uploadArtist() {
        return view('upload.upload_artist');
    }
    public function storeArtist(Request $request) {
        $v = $this->validate($request, [
            'artist_nickname' => 'required|max:255',
            'artist_birthday' => 'required|max:15|date',
            'artist_gender' => 'required|max:1',
            'artist_avatar' => 'required',
            'choose_artist_avatar' => 'required|mimes:jpeg,bmp,png,gif|max:10000kb|file:1',
            'artist_cover' => 'required',
            'choose_artist_cover' => 'required|mimes:jpeg,bmp,png,gif|max:10000kb|file:1'
        ]);
        $artist = [
            'artist_nickname' => $request->input('artist_nickname'),
            'artist_birthday' => date("Y/m/d", strtotime($request->input('artist_birthday'))),
            'artist_gender' => $request->input('artist_gender')
        ];
        $result = $this->artist_repository->createArtist($artist);
        //save image
        $typeImageAvatar = array_last(explode('.', $_FILES['choose_artist_avatar']['name']));
        $typeImageCover = array_last(explode('.', $_FILES['choose_artist_cover']['name']));
        Helpers::saveBase64Image($request->input('artist_avatar'), AVATAR_ARTIST_CROP_PATH, $result->artist_id, $typeImageAvatar);
        Helpers::copySourceImage($request->file('choose_artist_avatar'), AVATAR_ARTIST_SOURCE_PATH, $result->artist_id, $typeImageAvatar);
        Helpers::saveBase64Image($request->input('artist_cover'), COVER_ARTIST_CROP_PATH, $result->artist_id, $typeImageCover);
        Helpers::copySourceImage($request->file('choose_artist_cover'), COVER_ARTIST_SOURCE_PATH, $result->artist_id, $typeImageCover);
        return view('upload.upload_artist', compact('result'));
    }
}