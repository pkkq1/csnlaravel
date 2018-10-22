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

class SolrSyncController extends Controller
{
    protected $Solr;
    protected $musicRepository;

    public function __construct(Solarium $Solr, MusicEloquentRepository $musicRepository) {
        $this->Solr = $Solr;
        $this->musicRepository = $musicRepository;
    }
    public function ping() {
        return $this->Solr->ping();
    }
    public function syncMusic(Request $request) {
        $searchMusic = MusicModel::select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
        'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_filename', 'music_bitrate')
            ->offset(684601)
            ->limit(100000)
            ->get();
        foreach ($searchMusic as $item) {
            $data = [
                'music_id' => $item->music_id,
                'music_title' => $item->music_title,
                'music_title_no_space' => str_replace(' ','', mb_strtolower($item->music_title, 'UTF-8')),
                'music_title_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->music_title, 'UTF-8'), ''),
                'music_bitrate' => Helpers::bitrate2str($item->music_bitrate),
                'music_cover' => Helpers::cover_url($item->cover_id),
                'music_link' => Helpers::listen_url($item->toArray()),
                'type' => 'music',
                'music_artist' => Helpers::rawHtmlArtists($item->music_artist_id, $item->music_artist),
                'music_listen_today' => 0,
                'music_listen_ago' => 0,
                'music_listen_3day' => 0,
                'music_listen_7day' => 0,
                'music_listen_total' => 0,
//                'music_listen_today' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_today : 0),
//                'music_listen_ago' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_ago : 0),
//                'music_listen_3day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_3day : 0),
//                'music_listen_7day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_7day : 0),
//                'music_listen_total' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_total : 0),
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncVideo(Request $request) {
        $searchVideo = VideoModel::with('musicListen')->select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
            'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_filename', 'music_bitrate')
            ->offset(0)
            ->limit(50000)
            ->get();
        foreach ($searchVideo as $item) {
            $data = [
                'video_id' => $item->music_id,
                'video_title' => $item->music_title,
                'video_title_no_space' => str_replace(' ','', mb_strtolower($item->music_title, 'UTF-8')),
                'video_title_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->music_title, 'UTF-8'), ''),
                'video_bitrate' => Helpers::bitrate2str($item->music_bitrate),
                'video_cover' => Helpers::thumbnail_url($item->cover_id),
                'video_link' => Helpers::listen_url($item->toArray()),
                'type' => 'video',
                'video_artist' => Helpers::rawHtmlArtists($item->music_artist_id, $item->music_artist),
                'video_listen_today' => 0,
                'video_listen_ago' => 0,
                'video_listen_3day' => 0,
                'video_listen_7day' => 0,
                'video_listen_total' => 0,
//                'video_listen_today' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_today : 0),
//                'video_listen_ago' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_ago : 0),
//                'video_listen_3day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_3day : 0),
//                'video_listen_7day' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_7day : 0),
//                'video_listen_total' => (isset($item->music_listen->music_listen_today) ? $item->music_listen->music_listen_total : 0),
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncArtist(Request $request) {
        $artist = ArtistModel::offset(0)->limit(1)->get();
        foreach ($artist as $item) {
            $data = [
                'artist_id' => $item->artist_id,
                'artist_nickname' => $item->artist_nickname,
                'artist_nickname_no_space' => str_replace(' ','', mb_strtolower($item->artist_nickname, 'UTF-8')),
                'artist_nickname_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->artist_nickname, 'UTF-8'), ''),
                'artist_link' => Helpers::artistUrl($item->artist_id, $item->artist_nickname),
                'artist_cover' => '',
                'type' => 'artist',
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncCover(Request $request) {
        $cover = CoverModel::with('music')->orderBy('cover_id', 'asc')->offset(0)->limit(1)->get();
        foreach ($cover as $item) {
            foreach ($item->music as $music) {
                $artists[] = trim($music->music_artist);
                $artist_ids[] = $music->music_artist_id;
                $bitrates[] = $music->music_bitrate;
            }
            $artistDup = array_count_values($artists);
            $artistIdDup = array_count_values($artist_ids);
            $bitrateDup = array_count_values($bitrates);
            arsort($artistDup);
            arsort($artistIdDup);
            arsort($bitrateDup);
            $data = [
                'cover_id' => $item->cover_id,
                'cover' => Helpers::album_url($item->toArray()),
                'music_album' => $item->music_album,
                'music_album_no_space' => str_replace(' ','', mb_strtolower($item->music_album, 'UTF-8')),
                'music_album_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->music_album, 'UTF-8'), ''),
                'cover_filename' => $item->cover_filename,
                'type' => 'album',
                'music_artist' => !empty($artistDup) ? Helpers::rawHtmlArtists(array_keys($artistIdDup)[0], array_keys($artistDup)[0]) : '',
                'music_bitrate' => !empty($bitrateDup) ? Helpers::bitrate2str(array_keys($bitrateDup)[0]) : '',
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }

}