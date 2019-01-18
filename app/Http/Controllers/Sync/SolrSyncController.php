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
use DB;

class SolrSyncController extends Controller
{
    protected $Solr;

    public function __construct(Solarium $Solr) {
        $this->Solr = $Solr;
    }
    public function ping() {
        return $this->Solr->ping();
    }

    public function syncMusic(Request $req) {
        $searchMusic = MusicModel::select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
        'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_downloads', 'music_filename', 'music_bitrate', 'music_downloads_today', 'music_downloads_max_week', 'music_downloads_this_week', 'music_lyric')
            ->where('cat_id', '!=', CAT_VIDEO)
            ->where('music_deleted', '<', 1)
            ->where('music_id', '>', intval($req->m_start))
            ->orderBy('music_id', 'asc')
//            ->offset(0)
            ->limit(10000)
            ->get();
        DB::disconnect('mysql');
        $datas = array();
        foreach ($searchMusic as $item) {
            $titleSearch = Helpers::replaceKeySearch($item->music_title);
            $artistSearch = Helpers::replaceKeySearch($item->music_artist);
            $titleCharset = Helpers::rawTiengVietUrl($titleSearch, ' ');
            $artistCharset = Helpers::rawTiengVietUrl($artistSearch, ' ');
            $lyricSearch = Helpers::replaceKeySearch($item->music_lyric);
            $lyricCharset = Helpers::rawTiengVietUrl(str_replace("\n", ' ', $lyricSearch), ' ');
            $data = [
                'id' => 'musicz_'.$item->music_id,
                'music_title' => $item->music_title,
                'music_title_search' => $titleSearch,
                'music_title_artist_search' => $titleSearch,
                'music_artist_search' => $artistSearch .' '. $artistSearch,
                'music_title_charset_nospace' => str_replace(' ', '', $titleCharset),
                'music_artist_charset_nospace' => str_replace(' ', '', $artistCharset),
                'music_title_artist_charset_nospace' => str_replace(' ', '', $titleCharset) . ' ' . str_replace(' ', '', $artistCharset),
                'music_title_charset' => $titleCharset,
                'music_artist_charset' => $artistCharset,
                'music_title_artist_charset' => $titleCharset . ' '. $artistCharset,
                'music_lyric' => $item->music_lyric,
                'music_lyric_search' => $lyricSearch,
                'music_lyric_charset' => $lyricCharset,
                'music_bitrate' => Helpers::bitrate2str($item->music_bitrate),
                'music_cover' => Helpers::cover_url($item->cover_id),
                'music_link' => '/'.Helpers::listen_url($item->toArray(), false),
                'music_filename' => $item->music_filename,
                'music_artist' => $item->music_artist,
                'music_artist_id' => str_replace(';', ',', $item->music_artist_id),
                'music_artist_html' => Helpers::rawHtmlArtists($item->music_artist_id, $item->music_artist),
                'music_listen' => $item->music_listen,
                'music_download' => $item->music_downloads,
                'music_downloads_today' => $item->music_downloads_today,
                'music_downloads_max_week' => $item->music_downloads_max_week,
                'music_downloads_this_week' => $item->music_downloads_this_week,

            ];

            $datas[] = $data;
            //$this->Solr->addDocuments($data);

            echo $item->music_id . "\n <br>";
        }
        $this->Solr->addMultiDocuments($datas);

        if (sizeof($searchMusic) > 0)
        {
            die('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><script type="text/javascript">window.location = "?m_start='. $item->music_id .'"; </script></head><body></body></html>');
        }
        return response(['Ok']);
    }
    public function syncVideo(Request $req) {
        $searchVideo = VideoModel::select('music_id', 'music_title_search', 'music_artist_search', 'music_composer_search', 'music_album_search', 'music_title', 'music_artist',
            'cat_id', 'cat_level', 'cat_sublevel', 'cover_id', 'music_title_url', 'music_artist_id', 'music_album', 'music_listen', 'music_downloads', 'music_filename', 'music_bitrate', 'music_downloads_today', 'music_downloads_max_week', 'music_width', 'music_height', 'music_last_update_time', 'music_length', 'music_time')
            ->offset(0)
            ->limit(10)
            ->get();
        DB::disconnect('mysql');
        foreach ($searchVideo as $item) {
            $titleSearch = Helpers::replaceKeySearch($item->music_title);
            $artistSearch = Helpers::replaceKeySearch($item->music_artist);
            $titleCharset = Helpers::rawTiengVietUrl($titleSearch, ' ');
            $artistCharset = Helpers::rawTiengVietUrl($artistSearch, ' ');
            $data = [
                'id' => 'video_'.$item->music_id,
                'video_title' => $item->music_title,
                'video_title_search' => $titleSearch,
                'video_artist_search' => $artistSearch,
                'video_title_artist_search' => $titleSearch .' '. $artistSearch,
                'video_title_charset_nospace' => str_replace(' ', '', $titleCharset),
                'video_artist_charset_nospace' => str_replace(' ', '', $artistCharset),
                'video_title_artist_charset_nospace' => str_replace(' ', '', $titleCharset) .' '. str_replace(' ', '', $artistCharset),
                'video_title_charset' => $titleCharset,
                'video_artist_charset' => $artistCharset,
                'video_title_artist_charset' => $titleCharset .' '. $artistCharset,
                'video_bitrate' => Helpers::size2str($item->music_width, $item->music_height, false, true),
                'video_width' => $item->music_width,
                'video_height' => $item->music_height,
                'video_cover' => Helpers::thumbnail_url($item->toArray()),
                'video_link' => '/'.Helpers::listen_url($item->toArray(), false),
                'video_filename' => $item->music_filename,
                'video_artist' => $item->music_artist,
                'video_artist_id' => str_replace(';', ',', $item->music_artist_id),
                'video_artist_html' => Helpers::rawHtmlArtists($item->music_artist_id, $item->music_artist),
                'video_listen' => $item->music_listen,
                'music_length' => $item->music_length >= 3600 ? gmdate("H:i:s", $item->music_length) : gmdate("i:s", $item->music_length),
                'video_download' => $item->music_downloads,
                'video_downloads_today' => $item->music_downloads_today,
                'video_downloads_max_week' => $item->music_downloads_max_week,
                'video_downloads_this_week' => $item->music_downloads_this_week,

            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncArtist($id = null, $artistItem = null) {
        if($id) {
            $artist = ArtistModel::where('artist_id', $id)->offset(0)->limit(100000)->get();
        }elseif($artistItem){
            $artist[] = $artistItem;
        }else {
            $artist = ArtistModel::offset(0)->limit(100000)->get();
        }
        DB::disconnect('mysql');
        foreach ($artist as $item) {
            $artist_nickname_charset = Helpers::rawTiengVietUrl(mb_strtolower($item->artist_nickname, 'UTF-8'), ' ');
            $data = [
                'id' => 'artist_'.$item->artist_id,
                'artist_nickname' => $item->artist_nickname,
                'artist_nickname_search' => Helpers::replaceKeySearch($item->artist_nickname),
                'artist_nickname_charset' => $artist_nickname_charset,
                'artist_nickname_charset_nospace' => str_replace(' ', '', $artist_nickname_charset),
                'artist_link' => Helpers::artistUrl($item->artist_id, $item->artist_nickname),
                'artist_cover' => $item->artist_cover ? Helpers::file_path($item->artist_id, PUBLIC_COVER_ARTIST_PATH, true).$item->artist_cover : '/imgs/no_cover_artist.jpg',
                'artist_avatar' => $item->artist_avatar ? Helpers::file_path($item->artist_id, PUBLIC_AVATAR_ARTIST_PATH, true).$item->artist_avatar : '/imgs/no_cover.jpg',
            ];
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }
    public function syncCover() {
        $cover = CoverModel::orderBy('cover_id', 'asc')->offset(74769)->limit(100000)->get();
        DB::disconnect('mysql');
        foreach ($cover as $item) {
            $music_artist = $item->album_artist_1;
            $music_artist_id = $item->album_artist_id_1;
            if($item->album_artist_2) {
                $music_artist = $music_artist.';'.$item->album_artist_2;
                $music_artist_id = $music_artist_id.';'.$item->album_artist_id_2;
            }
            $album_cat = $item->album_cat_id_1;
            if($album_cat) {
                $album_cat = $album_cat.'_'.$item->album_cat_level_1;
                if($item->album_cat_id_2)
                    $album_cat = $album_cat.';'.$item->album_cat_id_2.'_'.$item->album_cat_level_1;
            }
            $titleSearch = Helpers::replaceKeySearch($item->music_album);
            $titleCharset = Helpers::rawTiengVietUrl($item->music_album, ' ');

            $data = [
                'id' => 'cover_'.$item->cover_id,
                'music_album' => $item->music_album,
                'music_album_search' => $titleSearch,
                'music_album_charset' =>$titleCharset,
                'music_album_charset_nospace' => str_replace(' ', '', $titleCharset),
                'album_cover' => Helpers::cover_url($item->cover_id),
                'cover_filename' => $item->cover_filename,
                'album_cat' => !empty($album_cat) ? $album_cat : '',
                'music_year' => $item->music_year,
                'album_link' => Helpers::album_url($item->toArray()),
                'music_artist' => '',
                'music_artist_search' => '',
                'music_artist_charset' => '',
                'music_artist_nospace' => '',
                'album_bitrate' => $item->music_bitrate,
                'music_artist_html' => '',
                'album_bitrate_html' => $item->music_bitrate ? Helpers::bitrate2str($item->music_bitrate) : '',
            ];
            if($music_artist) {
                $artistSearch = Helpers::replaceKeySearch($music_artist);
                $artistCharset = Helpers::rawTiengVietUrl($music_artist, ' ');
                $data['music_artist'] = $music_artist;
                $data['music_artist_search'] = $artistSearch;
                $data['music_artist_charset'] = $artistCharset;
                $data['music_artist_nospace'] = str_replace(' ', '', $artistCharset);
                $data['music_artist_html'] = Helpers::rawHtmlArtists($music_artist_id, $music_artist);
            }
            $this->Solr->addDocuments($data);
        }
        return response(['Ok']);
    }

}