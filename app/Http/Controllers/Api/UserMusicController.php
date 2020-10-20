<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\Helpers;
use App\Repositories\User\UserEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Repositories\Album\AlbumEloquentRepository;
use \Illuminate\Http\JsonResponse;
use App\Models\MailTokenModel;
use App\Repositories\Upload\UploadEloquentRepository;
use App\Repositories\ArtistFavourite\ArtistFavouriteRepository;
use App\Repositories\MusicFavourite\MusicFavouriteRepository;
use App\Repositories\VideoFavourite\VideoFavouriteRepository;
use App\Repositories\Cover\CoverEloquentRepository;

class UserMusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;
    protected $musicRepository;
    protected $playlistRepository;
    protected $uploadRepository;
    protected $albumRepository;
    protected $artistFavouriteRepository;
    protected $musicFavouriteRepository;
    protected $videoFavouriteRepository;
    protected $coverRepository;

    public function __construct(UserEloquentRepository $userRepository, PlaylistEloquentRepository $playlistRepository, MusicEloquentRepository $musicRepository,
                                UploadEloquentRepository $uploadRepository, AlbumEloquentRepository $albumRepository, ArtistFavouriteRepository $artistFavouriteRepository, MusicFavouriteRepository $musicFavouriteRepository,
                                VideoFavouriteRepository $videoFavouriteRepository, CoverEloquentRepository $coverRepository)
    {
        $this->userRepository = $userRepository;
        $this->playlistRepository = $playlistRepository;
        $this->musicRepository = $musicRepository;
        $this->uploadRepository = $uploadRepository;
        $this->albumRepository = $albumRepository;
        $this->artistFavouriteRepository = $artistFavouriteRepository;
        $this->musicFavouriteRepository = $musicFavouriteRepository;
        $this->videoFavouriteRepository = $videoFavouriteRepository;
        $this->coverRepository = $coverRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function musicRecent(Request $request) {
        $musics = [];
        $musicRecent = $_COOKIE['music_history'] ?? '';
        if(Auth::check()) {
            $musicRecent = Auth::user()->user_music_recent;
        }
        if($musicRecent) {
            $musicHistory = array_reverse(unserialize($musicRecent));
            $tempStr = implode(',', $musicHistory);
            $musics = $this->musicRepository->getHistoryRecents($tempStr);
        }
        return view('user.music_recents', compact('musics'));
    }
    public function artistFavourite(Request $request) {
        $user_id = $request->user_id;
        $artistFavourite = $this->artistFavouriteRepository->getModel()::where('user_id', $user_id)->with('artist')->orderBy('id', 'desc')->paginate(LIMIT_PAGE_ARTIST_FAVOURITE)->toArray();
        foreach ($artistFavourite['data'] as &$item) {
            $item['artist']['artist_image'] = $item['artist']['artist_avatar'] ? Helpers::file_path($item['artist']['artist_id'], AVATAR_ARTIST_CROP_PATH) . $item['artist']['artist_avatar'] : '/imgs/avatar_default.png';
            $item['artist']['artist_thumb_image'] = str_replace('artist_avatar', 'artist_avatar_thumb', $item['artist']['artist_image']);
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['artistFavourite' => Helpers::convertArrHtmlCharsDecode($artistFavourite)], 'error' => []], 200);
    }
    public function videoFavourite(Request $request) {
        $user_id = $request->user_id;
        $videoFavourite = $this->videoFavouriteRepository->getModel()::where('user_id', $user_id)->with('video')->orderBy('id', 'desc')->paginate(LIMIT_PAGE_MUSIC_FAVOURITE)->toArray();
        foreach ($videoFavourite['data'] as $key => &$item) {
            if($item['video']) {
                $item['video']['video_image'] = Helpers::thumbnail_url($item['video'], 'preview');
                $item['video']['bitrate_video'] = Helpers::size2str($item['video']['music_width'], $item['video']['music_height']);
            }
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['videoFavourite' => Helpers::convertArrHtmlCharsDecode($videoFavourite)], 'error' => []], 200);
    }
    public function musicFavourite(Request $request) {
        $user_id = $request->user_id;
        $musicFavourite = $this->musicFavouriteRepository->getModel()::where('user_id', $user_id)->with('music')->orderBy('id', 'desc')->paginate(LIMIT_PAGE_MUSIC_FAVOURITE)->toArray();
        foreach ($musicFavourite['data'] as $key => &$item) {
            if($item['music']) {
                $item['music']['cover_image'] = Helpers::cover_url($item['music']['cover_id'], 0, 'orginal');
                $item['music']['cover_thumb_image'] = Helpers::coverThumb($item['music']['cover_image'], MUSIC_COVER_THUMB_200_PATH);
                $item['music']['bitrate_music'] = Helpers::bitrate2str($item['music']['music_bitrate']);
            }
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['musicFavourite' => Helpers::convertArrHtmlCharsDecode($musicFavourite)], 'error' => []], 200);
    }

}
