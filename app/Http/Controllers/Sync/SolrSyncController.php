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
use App\Models\MusicSolrModel;
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
        $searchMusic = MusicSolrModel::select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
        'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_downloads', 'music_filename', 'music_bitrate')
            ->offset(158318)
            ->limit(100000)
            ->get();
        foreach ($searchMusic as $item) {
            $data = [
                'id' => 'music_'.$item->music_id,
                'music_title' => $item->music_title,
                'music_title_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->music_title, 'UTF-8'), ' '),
                'music_bitrate' => Helpers::bitrate2str($item->music_bitrate),
                'music_cover' => Helpers::cover_url($item->cover_id),
                'music_link' => '/'.Helpers::listen_url($item->toArray(), false),
                'type' => 'music',
                'music_filename' => $item->music_filename,
                'music_artist' => Helpers::rawHtmlArtists($item->music_artist_id, $item->music_artist),
                'music_listen' => $item->music_listen,
                'music_download' => $item->music_downloads,
                'music_downloads_today' => $item->music_downloads_today,
                'music_downloads_max_week' => $item->music_downloads_max_week,

            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncVideo(Request $request) {
        $searchVideo = VideoModel::with('musicListen')->select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
            'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_downloads', 'music_filename', 'music_bitrate')
            ->where('music_id', 1251071)
            ->offset(40031)
            ->limit(100000)
            ->get();
        foreach ($searchVideo as $item) {
            $data = [
                'id' => 'video_'.$item->music_id,
                'video_title' => $item->music_title,
                'video_title_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->music_title, 'UTF-8'), ' '),
                'video_bitrate' => Helpers::bitrate2str($item->music_bitrate),
                'video_cover' => Helpers::thumbnail_url($item->cover_id),
                'video_link' => '/'.Helpers::listen_url($item->toArray(), false),
                'type' => 'video',
                'video_filename' => $item->music_filename,
                'video_artist' => Helpers::rawHtmlArtists($item->music_artist_id, $item->music_artist),
                'video_listen' => $item->music_listen,
                'video_download' => $item->music_downloads,
                'video_downloads_today' => $item->music_downloads_today,
                'video_downloads_max_week' => $item->music_downloads_max_week,
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncArtist(Request $request) {
        $artist = ArtistModel::offset(31961)->limit(100000)->get();
        foreach ($artist as $item) {
            $data = [
                'id' => 'artist_'.$item->artist_id,
                'artist_nickname' => $item->artist_nickname,
                'artist_nickname_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->artist_nickname, 'UTF-8'), ' '),
                'artist_link' => Helpers::artistUrl($item->artist_id, $item->artist_nickname),
                'artist_cover' => '/imgs/no_cover.jpg',
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
                'cover_id' => 'cover_'.$item->cover_id,
                'music_album' => $item->music_album,
                'music_album_charset' => Helpers::rawTiengVietUrl(mb_strtolower($item->music_album, 'UTF-8'), ' '),
                'cover' => Helpers::album_url($item->toArray()),
                'cover_filename' => $item->cover_filename,
                'type' => 'album',
                'album_link' => Helpers::album_url($item->toArray()),
                'music_artist' => !empty($artistDup) ? Helpers::rawHtmlArtists(array_keys($artistIdDup)[0], array_keys($artistDup)[0]) : '',
                'music_bitrate' => !empty($bitrateDup) ? Helpers::bitrate2str(array_keys($bitrateDup)[0]) : '',
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }

}