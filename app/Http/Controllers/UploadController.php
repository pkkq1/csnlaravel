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
use App\Library\Helpers;
use App\Repositories\ArtistUpload\ArtistUploadEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Upload\UploadEloquentRepository;
use App\Repositories\Album\AlbumEloquentRepository;
use App\Repositories\Artist\ArtistRepository;
use Illuminate\Support\Facades\Storage;
use File;

class UploadController extends Controller
{
    protected $artistUploadRepository;
    protected $artistRepository;
    protected $musicRepository;
    protected $uploadRepository;
    protected $albumRepository;

    public function __construct(ArtistUploadEloquentRepository $artistUploadRepository, MusicEloquentRepository $musicRepository, ArtistRepository $artistRepository,
                                UploadEloquentRepository $uploadRepository, AlbumEloquentRepository $albumRepository) {
        $this->artistUploadRepository = $artistUploadRepository;
        $this->musicRepository = $musicRepository;
        $this->uploadRepository = $uploadRepository;
        $this->albumRepository = $albumRepository;
        $this->artistRepository = $artistRepository;
    }
    public function index() {
        return view('upload.index');
    }
    public function createArtist(Request $request) {
        return view('upload.upload_artist');
    }
    public function createMusic(Request $request, $musicId = null) {
        $typeUpload = 'music';
        if($musicId) {
            $music = $this->uploadRepository->findMusicStatus(Auth::user()->id, $musicId, [UPLOAD_STAGE_UNCENSOR]);
            if(!$music)
                return view('errors.404');
        }
        return view('upload.upload_music', compact('typeUpload', 'music'));
    }
    public function createVideo(Request $request, $musicId = null) {
        $typeUpload = 'video';
        if($musicId) {
            $music = $this->uploadRepository->findMusicStatus(Auth::user()->id, $musicId, [UPLOAD_STAGE_UNCENSOR]);
            if(!$music)
                return view('errors.404');
        }
        return view('upload.upload_music', compact('typeUpload', 'music'));
    }
    public function createAlbum(Request $request, $albumId = null) {
        if($albumId) {
            $album = $this->albumRepository->findAlbum(Auth::user()->id, $albumId);
            if(!$album)
                return view('errors.404');
        }
        return view('upload.upload_album', compact('album'));
    }
    function storeArtist(Request $request) {
        $this->validate($request, [
            'artist_nickname' => 'required|max:255',
            'artist_birthday' => 'required|max:15|date',
            'artist_gender' => 'required|max:1',
            'artist_avatar' => 'required',
            'choose_artist_avatar' => 'required|mimes:jpeg,bmp,png,gif|max:10000kb|file:1',
            'artist_cover' => 'required',
            'choose_artist_cover' => 'required|mimes:jpeg,bmp,png,gif|max:10000kb|file:1',
            'artist_avatar_crop_x' => 'required',
            'artist_avatar_crop_y' => 'required',
            'artist_cover_crop_x' => 'required',
            'artist_cover_crop_y' => 'required',
        ]);
        $artist = [
            'artist_nickname' => $request->input('artist_nickname'),
            'artist_birthday' => date("Y/m/d", strtotime($request->input('artist_birthday'))),
            'artist_gender' => $request->input('artist_gender'),
            'last_update_user_id' => Auth::user()->id,
            'artist_avatar_crop_x' => $request->input('artist_avatar_crop_x'),
            'artist_avatar_crop_y' => $request->input('artist_avatar_crop_y'),
            'artist_cover_crop_x' => $request->input('artist_cover_crop_x'),
            'artist_cover_crop_y' => $request->input('artist_cover_crop_y'),
            'type' => 1,

        ];
        $result = $this->artistUploadRepository->create($artist);
        if(!$result)
            return redirect()->route('upload.createArtist')->with('error', 'tạo ca sĩ thất bại');
        //save image
        $typeImageAvatar = array_last(explode('.', $_FILES['choose_artist_avatar']['name']));
        $typeImageCover = array_last(explode('.', $_FILES['choose_artist_cover']['name']));
//        dd($request->input('artist_avatar'));
        $fileNameAvt = Helpers::saveBase64Image($request->input('artist_avatar'), Helpers::file_path($result->artist_id, CACHE_AVATAR_ARTIST_CROP_PATH, true), $result->artist_id, $typeImageAvatar);
        Helpers::copySourceImage($request->file('choose_artist_avatar'), Helpers::file_path($result->artist_id, AVATAR_ARTIST_SOURCE_PATH, true), $result->artist_id, $typeImageAvatar);
        $fileNameCover = Helpers::saveBase64Image($request->input('artist_cover'), Helpers::file_path($result->artist_id, CACHE_COVER_ARTIST_CROP_PATH, true), $result->artist_id, $typeImageCover);
        Helpers::copySourceImage($request->file('choose_artist_cover'), Helpers::file_path($result->artist_id, COVER_ARTIST_SOURCE_PATH, true), $result->artist_id, $typeImageCover);
        $result->artist_avatar = $fileNameAvt;
        $result->artist_cover = $fileNameCover;
        $result->save();
        return redirect()->route('upload.createArtist')->with('success', 'Đã tạo ca sĩ ' . $result->artist_nickname);
    }
    function storeSuggestArtist(Request $request, $urlArtist) {
        $arrUrl = Helpers::splitArtistUrl($urlArtist);
        $artistExist = $this->artistRepository->findOnlyPublished($arrUrl['id']);
        if(!$artistExist && $arrUrl['id'])
            return view('errors.404');
        if(!$request->artist_nickname && !$request->artist_birthday && !$request->artist_avatar && !$request->artist_cover && !$request->input('artist_id')) {
            return view('errors.text_error')->with('message', 'Nhập ít nhất các thông tin cho ca sĩ '.$artistExist->artist_nickname);
        }
        $artist = [
            'artist_nickname' => $artistExist->artist_nickname,
            'artist_birthday' => date("Y/m/d", strtotime($request->input('artist_birthday'))),
            'artist_gender' => $request->input('artist_gender'),
            'last_update_user_id' => Auth::user()->id,
            'artist_avatar_crop_x' => $request->input('artist_avatar_crop_x'),
            'artist_avatar_crop_y' => $request->input('artist_avatar_crop_y'),
            'artist_cover_crop_x' => $request->input('artist_cover_crop_x'),
            'artist_cover_crop_y' => $request->input('artist_cover_crop_y'),
            'artist_id_suggest' => $request->input('artist_id'),
            'type' => 0,
        ];
        $result = $this->artistUploadRepository->create($artist);
        if(!$result)
            return redirect()->route('upload.createArtist')->with('error', 'cập nhật ca sĩ thất bại');
        //save image
        if($request->input('artist_avatar') && $request->file('choose_artist_avatar')) {
            $typeImageAvatar = array_last(explode('.', $_FILES['choose_artist_avatar']['name']));
            $typeImageCover = array_last(explode('.', $_FILES['choose_artist_cover']['name']));
            $fileNameAvt = Helpers::saveBase64Image($request->input('artist_avatar'), Helpers::file_path($result->artist_id, CACHE_AVATAR_ARTIST_CROP_PATH, true), $result->artist_id, $typeImageAvatar);
            Helpers::copySourceImage($request->file('choose_artist_avatar'), Helpers::file_path($result->artist_id, AVATAR_ARTIST_SOURCE_PATH, true), $result->artist_id, $typeImageAvatar);
            $result->artist_avatar = $fileNameAvt;
        }
        if($request->input('artist_cover') && $request->file('choose_artist_cover')) {
            $fileNameCover = Helpers::saveBase64Image($request->input('artist_cover'), Helpers::file_path($result->artist_id, CACHE_COVER_ARTIST_CROP_PATH, true), $result->artist_id, $typeImageCover);
            Helpers::copySourceImage($request->file('choose_artist_cover'), Helpers::file_path($result->artist_id, COVER_ARTIST_SOURCE_PATH, true), $result->artist_id, $typeImageCover);
            $result->artist_cover = $fileNameCover;
        }
        $result->save();
        return redirect()->route('upload.createArtist')->with('success', 'Đã gửi gợi ý ca sĩ ' . $result->artist_nickname);

    }
    function suggestArtist(Request $request, $urlArtist) {
        $arrUrl = Helpers::splitArtistUrl($urlArtist);
        $artistExist = $this->artistRepository->findOnlyPublished($arrUrl['id']);
        if(!$artistExist)
            return view('errors.404');
        return view('upload.upload_artist', compact('artistExist'));
//        $this->artistSuggestRepository
    }
    function uploadFileMusic(Request $request) {
        $fileU = $request->file('file');
        $type = substr($_FILES['file']['type'], 0, 5);
        if($type != 'audio' && $type != 'video') {
            return response()->json([
                'status' => false,
                'message' => 'Định dạng file "'.$_FILES['file']['name'].'" bị sai, chỉ chấp nhận file nhạc hoặc video',
            ]);
        }
        $fileName = Helpers::moveFile($request->file('file'), $_SERVER['DOCUMENT_ROOT'].DEFAULT_ROOT_CACHE_MUSIC_PATH, $_FILES['file']['name']);
        return response()->json([
            'status' => true,
            'message' => 'Upload Success',
            'file_name' => $fileName,
            'file_size' => $_FILES['file']['size']
        ]);
    }
    public function storeMusic(Request $request, $musicId = null) {
        $this->validate($request, [
            'music_title' => 'required',
            'music_composer' => 'required',
            'music_artist' => 'required',
            'drop_files' => 'required',
            'music_year' => 'required',
            'music_source_url' => 'required',
        ]);
        $typeUpload = $request->input('type_upload');
        $mess = $typeUpload == 'music' ? 'bài hát' : 'video';
        if($request->input('action_upload') == 'edit') {
            $result = $this->uploadRepository->findMusicStatus(Auth::user()->id, $musicId, [UPLOAD_STAGE_UNCENSOR]);
            if(!$result)
                return view('errors.404');
            $result->music_title = $request->input('music_title') ?? '';
            $result->music_artist = $request->input('music_artist') ?? '';
            $result->music_artist_id = $request->input('music_artist_id') ?? '';
//            $result->music_production = $request->input('music_production') ?? '';
            $result->music_composer = $request->input('music_composer') ?? '';
//            $result->music_album_id = $request->input('music_album_id') ?? '';
//            $result->music_year = $request->input('music_year') ?? 0;
            $result->cat_id = $request->input('cat_id') ?? 0;
            $result->cat_level = $request->input('cat_level') ?? 0;
            $result->cat_sublevel = $request->input('cat_sublevel') ?? 0;
            $result->cat_custom = $request->input('cat_custom') ?? 0;
            $result->music_lyric = $request->input('music_lyric') ?? '';
            $result->music_source_url = $request->input('music_source_url') ?? '';
            $result->music_note = $request->input('music_note') ?? '';
            $result->save();
            return redirect()->route('upload.storeMusic', ['musicId' => $musicId])->with('success', 'Đã chỉnh sửa '.$mess.' ' . $result->music_title);
        }else{
            $csnMusic = [
                'music_title' => $request->input('music_title'),
                'music_artist' => $request->input('music_artist'),
                'music_artist_id' => $request->input('music_artist_id'),
                'music_user_id' => Auth::user()->id,
                'music_username' => Auth::user()->name,
                'music_production' => $request->input('music_production') ?? '',
                'music_composer' => $request->input('music_composer') ?? '',
                'music_album_id' => $request->input('music_album_id') ?? '',
                'music_year' => $request->input('music_year') ?? 0,
                'cat_id' => $request->input('cat_id'),
                'cat_level' => $request->input('cat_level') ?? 0,
                'cat_sublevel' => $request->input('cat_sublevel') ?? 0,
                'cat_custom' => $request->input('cat_custom') ?? 0,
                'music_lyric' => $request->input('music_lyric') ?? '',
                'music_note' => $request->input('music_note') ?? '',
                'music_filesize' => $request->input('music_filesize') ?? 0,
                'music_source_url' => $request->input('music_source_url') ?? '',
                'music_filename_upload' => $request->input('drop_files'),
            ];
            $result = $this->uploadRepository->create($csnMusic);
        }
        if(!$result)
            return redirect()->route('upload.createMusic')->with('error', 'tạo '.$mess.' thất bại');
        $pathSource = MUSIC_STORAGE_PATH;
        if($request->input('cat_id') == CAT_VIDEO)
            $pathSource = VIDEO_STORAGE_PATH;
        Storage::disk('public')->move(DEFAULT_STORAGE_CACHE_MUSIC_PATH.$request->input('drop_files'), Helpers::file_path($result->music_id, $pathSource, true).$request->input('drop_files'));
        return redirect()->route($typeUpload == 'music' ? 'upload.createMusic' : 'upload.createVideo')->with('success', 'Đã tạo '.$mess.' ' . $csnMusic['music_title'] . '<a href="/dang-tai/'.($typeUpload == 'music' ? 'nhac' : 'video').'/'.$result->music_id.'"> quay lại chỉnh sửa</a>');
    }

    public function storeAlbum(Request $request, $albumId = null) {
        if($request->input('action_upload') == 'edit') {
            $this->validate($request, [
                'music_album' => 'required',
                'music_production' => 'required',
                'music_album_id' => 'required',
                'music_year' => 'required|max:5',
            ]);
            $album = $this->albumRepository->findAlbum(Auth::user()->id, $albumId);
            if(!$album)
                return view('errors.404');
            $album->album_name = $request->input('music_album');
            $album->album_production = $request->input('music_production');
            $album->album_code = $request->input('music_album_id');
            $album->album_year = $request->input('music_year');
            $album->save();
            if($request->input('album_cover')) {
                $typeImageCover = array_last(explode('.', $_FILES['choose_album_cover']['name']));
                $fileNameCovert = Helpers::saveBase64Image($request->input('album_cover'), Helpers::file_path($album->album_id, AVATAR_ALBUM_CROP_PATH, true), $album->album_id, $typeImageCover);
                Helpers::copySourceImage($request->file('choose_album_cover'), Helpers::file_path($album->album_id, COVER_ALBUM_SOURCE_PATH, true), $album->artist_id, $fileNameCovert);
            }
            return redirect()->route('upload.storeAlbum', ['musicId' => $albumId])->with('success', 'Đã chỉnh sửa album ' . $album->album_name);;
        }
        $this->validate($request, [
            'music_album' => 'required',
            'music_composer' => 'required',
            'music_artist' => 'required',
            'drop_files' => 'required',
            'album_cover' => 'required',
            'music_year' => 'required|max:5',
        ]);
        $fileUploads = explode(';', $request->input('drop_files'));
        $fileSize = explode(';', $request->input('music_filesize'));
        $album = $this->albumRepository->create([
            'album_name' => $request->input('music_album'),
            'album_production' => $request->input('music_production'),
            'album_code' => $request->input('music_album_id'),
            'album_year' => $request->input('music_year'),
            'cover_filename' => '',
            'album_music_total' => count($fileUploads),
            'user_id' => Auth::user()->id,
        ]);
        if(!$album)
            return redirect()->route('upload.upload_album')->with('error', 'tạo album thất bại');
        $typeImageCover = array_last(explode('.', $_FILES['choose_album_cover']['name']));
        $fileNameCovert = Helpers::saveBase64Image($request->input('album_cover'), Helpers::file_path($album->album_id, AVATAR_ALBUM_CROP_PATH, true), $album->album_id, $typeImageCover);
        Helpers::copySourceImage($request->file('choose_album_cover'), Helpers::file_path($album->album_id, COVER_ALBUM_SOURCE_PATH, true), $album->artist_id, $fileNameCovert);
        $album->cover_filename = $fileNameCovert;
        $album->save();
        $csnMusic = [
            'music_title' => '',
            'album_id' => $album->album_id,
            'music_album' => $album->album_name,
            'music_artist' => $request->input('music_artist'),
            'music_artist_id' => $request->input('music_artist_id'),
            'music_user_id' => Auth::user()->id,
            'music_username' => Auth::user()->name,
            'music_production' => $request->input('music_production') ?? '',
            'music_composer' => $request->input('music_composer') ?? '',
            'music_album_id' => $request->input('music_album_id'),
            'music_year' => $request->input('music_year') ?? 0,
            'cat_id' => $request->input('cat_id') ?? 0,
            'cat_level' => $request->input('cat_level') ?? 0,
            'cat_sublevel' => $request->input('cat_sublevel') ?? 0,
            'cat_custom' => $request->input('cat_custom') ?? 0,
            'music_lyric' => '',
            'music_note' => $request->input('music_note') ?? '',
            'music_source_url' => $request->input('music_source_url') ?? '',
        ];
        $pathSource = MUSIC_STORAGE_PATH;
        if($request->input('cat_id') == CAT_VIDEO)
            $pathSource = VIDEO_STORAGE_PATH;
        foreach ($fileUploads as $key => $item) {
            $csnMusic['music_filename_upload'] = $item;
            $csnMusic['music_filesize'] = $fileSize[$key];
            $result = $this->uploadRepository->create($csnMusic);
            Storage::disk('public')->move(DEFAULT_STORAGE_CACHE_MUSIC_PATH.$item, Helpers::file_path($result->music_id, $pathSource, true).$item);
        }
        return redirect()->route('upload.createMusic')->with('success', 'Đã tạo album mới ' . $request->input('music_album'). '<a href="/user/'.Auth::user()->id.'?tab=tu-nhac"> vào tủ nhạc</a>');
    }

}