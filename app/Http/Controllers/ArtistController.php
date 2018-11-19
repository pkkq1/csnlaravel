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
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\PlaylistPublisher\PlaylistPublisherEloquentRepository;

class ArtistController extends Controller
{
    protected $artistRepository;
    protected $musicRepository;
    protected $videoRepository;
    protected $coverRepository;
    protected $playlistPublisherRepository;

    public function __construct(ArtistEloquentRepository $artistRepository, MusicEloquentRepository $musicRepository, VideoEloquentRepository $videoRepository, CoverEloquentRepository $coverRepository,
                                PlaylistPublisherEloquentRepository $playlistPublisherRepository) {
        $this->artistRepository = $artistRepository;
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->coverRepository = $coverRepository;
        $this->playlistPublisherRepository = $playlistPublisherRepository;
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
        $music =  $this->musicRepository->findMusicByArtist($artist->artist_nickname, 'music_id', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
            $musicHtml =  view('artist.music_item', compact('music'));
        return view('artist.index', compact('artist', 'musicHtml'));
    }
    public function getTabArtist(Request $request) {
        switch ($request->tab) {
            case "music":
                $music = $this->musicRepository->findMusicByArtist($request->artist, 'music_id', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
                return view('artist.music_item', compact('music'));
                break;
            case "video":
                $video = $this->videoRepository->findVideoByArtist($request->artist, 'music_id', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
                return view('artist.video_item', compact('video'));
                break;
            case "album":
                $cover = $this->coverRepository->findAlbumByArtist($request->artist, 'cover_id', 'desc', LIMIT_MUSIC_PAGE_ARTIST);
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
}