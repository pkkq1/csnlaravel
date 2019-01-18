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
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\Upload\UploadEloquentRepository;
use App\Repositories\Album\AlbumEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Artist\ArtistRepository;
use Illuminate\Support\Facades\Storage;
use File;
use Exception;
use App\Exceptions;

class UploadController extends Controller
{
    protected $artistUploadRepository;
    protected $artistRepository;
    protected $musicRepository;
    protected $videoRepository;
    protected $uploadRepository;
    protected $albumRepository;
    protected $coverRepository;

    public function __construct(ArtistUploadEloquentRepository $artistUploadRepository, MusicEloquentRepository $musicRepository, ArtistRepository $artistRepository,
                                UploadEloquentRepository $uploadRepository, AlbumEloquentRepository $albumRepository, VideoEloquentRepository $videoRepository, CoverEloquentRepository $coverRepository) {
        $this->artistUploadRepository = $artistUploadRepository;
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->uploadRepository = $uploadRepository;
        $this->albumRepository = $albumRepository;
        $this->artistRepository = $artistRepository;
        $this->coverRepository = $coverRepository;
        $this->middleware(function ($request, $next)
        {
            if(backpack_user()->can('banned_user_upload')){
                abort(403, 'Lỗi truy cập, tài khoản bạn bị khóa chức năng upload.');
            }
            return $next($request);
        });
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
            $id = Auth::user()->id;
            $arrStage = [UPLOAD_STAGE_DELETED, UPLOAD_STAGE_UNCENSOR, UPLOAD_STAGE_INCONVERT, UPLOAD_STAGE_FULLCONVERT];
            if(Auth::user()->hasPermission('duyet_sua_nhac')) {
                $id = 'permission_duyet_csn';
                $arrStage[] = UPLOAD_STAGE_FULLCENSOR;
            }
            $music = $this->uploadRepository->findMusicStatus($id, $musicId, $arrStage);
            if(!$music)
                return view('errors.404');
        }
        return view('upload.upload_music', compact('typeUpload', 'music'));
    }
    public function createVideo(Request $request, $musicId = null) {
        $typeUpload = 'video';
        if($musicId) {
            $id = Auth::user()->id;
            $arrStage = [UPLOAD_STAGE_DELETED, UPLOAD_STAGE_UNCENSOR, UPLOAD_STAGE_INCONVERT, UPLOAD_STAGE_FULLCONVERT];
            if(Auth::user()->hasPermission('duyet_sua_nhac')) {
                $id = 'permission_duyet_csn';
                $arrStage[] = UPLOAD_STAGE_FULLCENSOR;
            }
            $music = $this->uploadRepository->findMusicStatus($id, $musicId, $arrStage);
            if(!$music)
                return view('errors.404');
        }
        return view('upload.upload_music', compact('typeUpload', 'music'));
    }
    public function createAlbum(Request $request, $coverId = null) {
        if($coverId) {
            if(Auth::user()->hasPermission('duyet_sua_nhac')) {
                $album = $this->coverRepository->findCover($coverId);
            }else{
                $album = $this->coverRepository->findCover($coverId, Auth::user()->id);
            }
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
            $fileNameAvt = Helpers::saveBase64Image($request->input('artist_avatar'), Helpers::file_path($result->artist_id, CACHE_AVATAR_ARTIST_CROP_PATH, true), $result->artist_id, $typeImageAvatar);
            Helpers::copySourceImage($request->file('choose_artist_avatar'), Helpers::file_path($result->artist_id, AVATAR_ARTIST_SOURCE_PATH, true), $result->artist_id, $typeImageAvatar);
            $result->artist_avatar = $fileNameAvt;
        }
        if($request->input('artist_cover') && $request->file('choose_artist_cover')) {
            $typeImageCover = array_last(explode('.', $_FILES['choose_artist_cover']['name']));
            $fileNameCover = Helpers::saveBase64Image($request->input('artist_cover'), Helpers::file_path($result->artist_id, CACHE_COVER_ARTIST_CROP_PATH, true), $result->artist_id, $typeImageCover);
            Helpers::copySourceImage($request->file('choose_artist_cover'), Helpers::file_path($result->artist_id, COVER_ARTIST_SOURCE_PATH, true), $result->artist_id, $typeImageCover);
            $result->artist_cover = $fileNameCover;
        }
        $result->save();
        return redirect()->route('upload.createArtist')->with('success', 'Cám ơn bạn đã đóng góp thông tin ca sĩ '.$result->artist_nickname.'.<br/>Thông tin ca sĩ đã được gửi thành công lên hệ thống và đang chờ mod kiểm duyệt.<br/>Click <a href="/">vào đây</a> để trở về trang chủ.');

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
            'music_title' => 'required|max:255',
            'music_composer' => 'required|max:255',
            'music_artist' => 'required',
            'drop_files' => 'required',
            'music_year' => 'required|max:6',
            'music_source_url' => 'required|max:255',
        ]);
        $typeUpload = $request->input('type_upload');
        $mess = $typeUpload == 'music' ? 'bài hát' : 'video';
        if($request->input('action_upload') == 'edit') {
            $userId = Auth::user()->id;
            $arrStage = [UPLOAD_STAGE_DELETED, UPLOAD_STAGE_UNCENSOR, UPLOAD_STAGE_INCONVERT, UPLOAD_STAGE_FULLCONVERT];
            $per_Xet_Duyet = Auth::user()->hasPermission('duyet_sua_nhac');
            $per_Xet_Duyet_Chat_luong = Auth::user()->hasPermission('duyet_sua_chat_luong_nhac');
            if($per_Xet_Duyet) {
                $userId = 'permission_duyet_csn';
                $arrStage[] = UPLOAD_STAGE_FULLCENSOR;
            }
            $result = $this->uploadRepository->findMusicStatus($userId, $musicId, $arrStage);
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
            if($per_Xet_Duyet) {
                $result->music_state = $request->input('music_state');
            }
            if($per_Xet_Duyet_Chat_luong) {
                $result->music_bitrate_fixed = $request->input('music_bitrate_fixed');
                $result->music_bitrate_fixed_by = Auth::user()->id;
            }
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
                'music_state' => UPLOAD_STAGE_UNCENSOR,
            ];
            $result = $this->uploadRepository->create($csnMusic);
        }
        if(!$result)
            return redirect()->route('upload.createMusic')->with('error', 'tạo '.$mess.' thất bại');
        $fileName = $result->music_id.'.'.last(explode('.', $request->input('drop_files')));
        Storage::disk('public')->move(DEFAULT_STORAGE_CACHE_MUSIC_PATH.$request->input('drop_files'), Helpers::file_path($result->music_id, SOURCE_STORAGE_PATH, true).$fileName);
        $result->music_filename_upload = $fileName;
        $result->save();
        return redirect()->route($typeUpload == 'music' ? 'upload.createMusic' : 'upload.createVideo')->with('success', 'Đã tạo '.$mess.' ' . $csnMusic['music_title'] . '<a href="/dang-tai/'.($typeUpload == 'music' ? 'nhac' : 'video').'/'.$result->music_id.'"> quay lại chỉnh sửa</a>');
    }

    public function storeAlbum(Request $request, $coverId = null) {
        if($request->input('action_upload') == 'edit') {
            $this->validate($request, [
                'music_album' => 'required|max:255',
//                'music_product`ion' => 'required',
//                'music_album_id' => 'required',
                'music_year' => 'required|max:5',
            ]);
            $album = $this->coverRepository->findCover(Auth::user()->id, $coverId);
            if(!$album)
                return view('errors.404');
            $album->music_album = $request->input('music_album');
            $album->music_production = $request->input('music_production');
//            $album->album_code = $request->input('music_album_id');
            $album->music_year = $request->input('music_year');
            $album->save();
            if($request->input('album_cover')) {
                $typeImageCover = array_last(explode('.', $_FILES['choose_album_cover']['name']));
                $fileNameCovert = Helpers::saveBase64Image($request->input('album_cover'), Helpers::file_path($album->cover_id, AVATAR_ALBUM_CROP_PATH, true), $album->cover_id, $typeImageCover);
                Helpers::copySourceImage($request->file('choose_album_cover'), Helpers::file_path($album->cover_id, COVER_ALBUM_SOURCE_PATH, true), $album->artist_id, $fileNameCovert);
            }
            return redirect()->route('upload.storeAlbum', ['musicId' => $coverId])->with('success', 'Đã chỉnh sửa album ' . $album->album_name);;
        }
        $this->validate($request, [
            'music_album' => 'required|max:255',
            'music_composer' => 'required|max:255',
            'music_artist' => 'required',
            'drop_files' => 'required',
            'album_cover' => 'required',
            'music_year' => 'required|max:5',
        ]);
        $fileUploads = explode(';', $request->input('drop_files'));
        $fileSize = explode(';', $request->input('music_filesize'));
        $album = $this->coverRepository->getmodel()::create([
            'music_album' => $request->input('music_album') ?? '',
            'music_production' => $request->input('music_production') ?? '',
            'music_year' => $request->input('music_year') ?? '',
            'album_cat_id_1' => $request->input('cat_id') ?? 0,
            'album_cat_level_1' => $request->input('cat_level') ?? 0,
            'cover_filename' => '',
            'album_last_updated' => time(),
            'album_listen' => 0,
            'album_avg' => 0,
            'album_music_total' => count($fileUploads),
            'user_id' => Auth::user()->id,
            'last_user_id' => Auth::user()->id,
        ]);
        foreach(explode(';', $request->input('music_artist')) as $key => $item) {
            $album['album_artist_' . ++ $key] = $item;
        }
        foreach(explode(';', $request->input('music_artist_id')) as $key => $item) {
            $album['album_artist_id_' . ++ $key] = $item;
        }
        if(!$album)
            return redirect()->route('upload.upload_album')->with('error', 'tạo album thất bại');
        $typeImageCover = array_last(explode('.', $_FILES['choose_album_cover']['name']));
        $fileNameCovert = Helpers::saveBase64Image($request->input('album_cover'), Helpers::file_path($album->cover_id, AVATAR_ALBUM_CROP_PATH, true), $album->cover_id, $typeImageCover);
        Helpers::copySourceImage($request->file('choose_album_cover'), Helpers::file_path($album->cover_id, COVER_ALBUM_SOURCE_PATH, true), $fileNameCovert, null);
        $album->cover_filename = $fileNameCovert;
        $album->save();
        $csnMusic = [
            'music_title' => '',
            'cover_id' => $album->cover_id,
            'music_album' => $album->music_album,
            'music_artist' => $request->input('music_artist'),
            'music_artist_id' => $request->input('music_artist_id'),
            'music_user_id' => Auth::user()->id,
            'music_username' => Auth::user()->name,
            'music_production' => $request->input('music_production') ?? '',
            'music_composer' => $request->input('music_composer') ?? '',
            'music_album_id' => $request->input('music_album_id') ?? '',
            'music_year' => $request->input('music_year') ?? 0,
            'cat_id' => $request->input('cat_id') ?? 0,
            'cat_level' => $request->input('cat_level') ?? 0,
            'cat_sublevel' => $request->input('cat_sublevel') ?? 0,
            'cat_custom' => $request->input('cat_custom') ?? 0,
            'music_lyric' => '',
            'music_note' => $request->input('music_note') ?? '',
            'music_source_url' => $request->input('music_source_url') ?? '',
        ];
        foreach ($fileUploads as $key => $item) {
            $csnMusic['music_filename_upload'] = $item;
            $csnMusic['music_filesize'] = $fileSize[$key];
            $result = $this->uploadRepository->create($csnMusic);
            $fileName = $result->music_id.'.'.last(explode('.', $item));
            Storage::disk('public')->move(DEFAULT_STORAGE_CACHE_MUSIC_PATH.$item, Helpers::file_path($result->music_id, SOURCE_STORAGE_PATH, true).$fileName);
            $result->music_filename_upload = $fileName;
            $result->save();
        }
        return redirect()->route('upload.createMusic')->with('success', 'Đã tạo album mới ' . $request->input('music_album'). '<a href="/user/'.Auth::user()->id.'?tab=tu-nhac"> vào tủ nhạc</a>');
    }
    function suggest(Request $request) {

        $arrUrl = Helpers::splitMusicUrl($request->url);
        if(!$arrUrl['id'])
            Helpers::ajaxResult(false, 'Không tìm thấy id', null);
        if($arrUrl['type'] == 'music') {
            $result = $this->musicRepository->getModel()::where('music_id', $arrUrl['id'])->select('cat_id', 'cat_level', 'cat_sublevel', 'cat_custom', 'music_title', 'music_composer', 'music_lyric')->first();
        }else {
            $result = $this->videoRepository->getModel()::where('music_id', $arrUrl['id'])->select('cat_id', 'cat_level', 'cat_sublevel', 'cat_custom', 'music_title', 'music_composer', 'music_lyric')->first();
        }
        if(!$result)
            Helpers::ajaxResult(false, 'Không tìm thấy nội dung', null);
        Helpers::ajaxResult(true, '', $result->toArray());
    }

}