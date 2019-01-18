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
use App\Repositories\Artist\ArtistRepository;
use App\Models\ArtistModel;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\PlaylistPublisher\PlaylistPublisherEloquentRepository;
use App\Repositories\ArtistFavourite\ArtistFavouriteRepository;

class ArtistController extends Controller
{
    protected $artistRepository;
    protected $musicRepository;
    protected $videoRepository;
    protected $coverRepository;
    protected $playlistPublisherRepository;
    protected $artistFavouriteRepository;

    public function __construct(ArtistRepository $artistRepository, MusicEloquentRepository $musicRepository, VideoEloquentRepository $videoRepository, CoverEloquentRepository $coverRepository,
                                PlaylistPublisherEloquentRepository $playlistPublisherRepository, ArtistFavouriteRepository $artistFavouriteRepository) {
        $this->artistRepository = $artistRepository;
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->coverRepository = $coverRepository;
        $this->playlistPublisherRepository = $playlistPublisherRepository;
        $this->artistFavouriteRepository = $artistFavouriteRepository;
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
        if(!$artist) {
            return view('errors.404');
        }
        $music =  $this->musicRepository->findMusicByArtist($artist->artist_id, 'music_last_update_time', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
            $musicHtml =  view('artist.music_item', compact('music'));
        $artistFavourite = false;
        if(Auth::check())
            $artistFavourite = $this->artistFavouriteRepository->getModel()::where([['user_id', Auth::user()->id], ['artist_id', $artist->artist_id]])->first();
        return view('artist.index', compact('artist', 'musicHtml', 'artistFavourite', 'artistUrl'));
    }
    public function getTabArtist(Request $request) {
        switch ($request->tab) {
            case "music":
                $music = $this->musicRepository->findMusicByArtist($request->artist_id, 'music_last_update_time', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
                return view('artist.music_item', compact('music'));
                break;
            case "video":
                $video = $this->videoRepository->findVideoByArtist($request->artist_id, 'music_last_update_time', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
                return view('artist.video_item', compact('video'));
                break;
            case "album":
                $cover = $this->coverRepository->findAlbumByArtist($request->artist_id, 'cover_id', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
                return view('artist.cover_item', compact('cover'));
                break;
            case "playlist":
                $playlist = $this->playlistPublisherRepository->getPlaylistPageByArtist($request->artist_id, 'playlist_artist_id', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
                return view('artist.playlist_item', compact('playlist'));
                break;
            default:
                return view('errors.404');
        }
    }
    public function favorite(Request $request) {
        $dataRes = null;
        if(!Auth::check())
            Helpers::ajaxResult(false, 'Chưa đăng nhập', null);
        if($request->type == 'true'){
            $msg = 'Đã bỏ ca sĩ '.$request->name.' ra khỏi danh sách yêu thích.';
            $dataRes = [];
            $this->artistFavouriteRepository->getModel()::where([['user_id', Auth::user()->id], ['artist_id', $request->artist_id]])->delete();
        }else{
            $msg = 'Đã thêm ca sĩ '.$request->name.' vào danh sách yêu thích.';
            $this->artistFavouriteRepository->getModel()::create(['user_id' => Auth::user()->id, 'artist_id' => $request->artist_id]);
        }
        Helpers::ajaxResult(true, $msg, $dataRes);
    }
}