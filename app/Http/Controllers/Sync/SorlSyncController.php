<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Sync;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use App\Models\MusicModel;
use App\Models\VideoModel;
use App\Models\CoverModel;
use App\Solr\Solarium;
use App\Models\ArtistModel;
use App\Repositories\Music\MusicEloquentRepository;

class SorlSyncController extends Controller
{
    protected $Solr;
    protected $musicRepository;

    public function __construct(Solarium $Solr, MusicEloquentRepository $musicRepository) {
        $this->Solr = $Solr;
        $this->musicRepository = $musicRepository;
    }
    public function syncMusic(Request $request) {
        $searchMusic = MusicModel::with('musicListen')->select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
        'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_filename', 'music_bitrate')
            ->offset(0)
            ->limit(4000)
            ->get();
        foreach ($searchMusic as $item) {
            $data = [
                'id' => $item->music_id,
                'music_title' => strtolower($item->music_title),
                'music_title_no_space' => str_replace(' ','%20', strtolower($item->music_title)),
                'music_title_charset' => Helpers::rawTiengVietUrl(strtolower($item->music_title), '%20'),
                'music_bitrate' => Helpers::bitrate2str($item->music_bitrate),
                'music_cover' => Helpers::coverImg($item->cover_id),
                'music_link' => Helpers::listen_url($item->toArray()),
                'type' => 'music',
                'music_artist' => '<a href="#">'.implode(',</a><a href="#">', explode(';', $item->music_artist)).'</a>',
                'music_listen_today' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_today : 0),
                'music_listen_ago' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_ago : 0),
                'music_listen_3day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_3day : 0),
                'music_listen_7day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_7day : 0),
                'music_listen_total' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_total : 0),
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncVideo(Request $request) {
        $searchVideo = VideoModel::with('musicListen')->select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
            'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_filename', 'music_bitrate')
            ->offset(4000)
            ->limit(4000)
            ->get();
        foreach ($searchVideo as $item) {
            $data = [
                'id' => $item->music_id,
                'video_title' => strtolower($item->music_title),
                'video_title_no_space' => str_replace(' ','%20', strtolower($item->music_title)),
                'video_title_charset' => Helpers::rawTiengVietUrl(strtolower($item->music_title), '%20'),
                'video_bitrate' => Helpers::bitrate2str($item->music_bitrate),
                'video_cover' => Helpers::coverImg($item->cover_id),
                'video_link' => Helpers::listen_url($item->toArray()),
                'type' => 'video',
                'video_artist' => '<a href="#">'.implode(',</a><a href="#">', explode(';', $item->music_artist)).'</a>',
                'video_listen_today' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_today : 0),
                'video_listen_ago' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_ago : 0),
                'video_listen_3day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_3day : 0),
                'video_listen_7day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_7day : 0),
                'video_listen_total' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_total : 0),
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncArtist(Request $request) {
        $artist = ArtistModel::get();
        foreach ($artist as $item) {
            $data = [
                'id' => $item->artist_id,
                'artist_nickname' => $item->artist_nickname,
                'artist_nickname_no_space' => str_replace(' ','%20', strtolower($item->artist_nickname)),
                'artist_nickname_charset' => Helpers::rawTiengVietUrl(strtolower($item->artist_nickname), '%20'),
                'type' => 'artist',
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncCover(Request $request) {
        $cover = CoverModel::get();
        foreach ($cover as $item) {
            $data = [
                'id' => $item->cover_id,
                'music_album' => $item->music_album,
                'music_album_no_space' => str_replace(' ','%20', strtolower($item->music_album)),
                'music_album_charset' => Helpers::rawTiengVietUrl(strtolower($item->music_album), '%20'),
                'cover_filename' => $item->cover_filename,
                'type' => 'album',
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }

}