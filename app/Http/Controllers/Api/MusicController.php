<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Music\MusicEloquentRepository;
use App\Library\Helpers;
use App\Solr\Solarium;
use Socialite;
use Session;
use App\Repositories\Category\CategoryEloquentRepository;
use \Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Session as SessionModel;
use App\Http\Controllers\SearchController as SearchSolr;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Repositories\PlaylistPublisher\PlaylistPublisherEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;
use App\Repositories\VideoListen\VideoListenEloquentRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use App\Repositories\VideoDownload\VideoDownloadEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Artist\ArtistRepository;
use App\Repositories\SearchResult\SearchResultEloquentRepository;
use App\Repositories\MusicFavourite\MusicFavouriteRepository;
use App\Repositories\VideoFavourite\VideoFavouriteRepository;
use App\Repositories\Karaoke\KaraokeEloquentRepository;
use App\Repositories\Session\SessionEloquentRepository;
use App\Http\Controllers\Sync\SolrSyncController;

class MusicController extends Controller
{
    protected $musicRepository;
    protected $videoRepository;
    protected $playlistRepository;
    protected $playlistPublisherRepository;
    protected $musicListenRepository;
    protected $musicDownloadRepository;
    protected $videoListenRepository;
    protected $videoDownloadRepository;
    protected $categoryListenRepository;
    protected $coverRepository;
    protected $artistRepository;
    protected $musicFavouriteRepository;
    protected $videoFavouriteRepository;
    protected $karaokeRepository;
    protected $searchResultRepository;
    protected $sessionRepository;
    protected $Solr;

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository,
                                CategoryEloquentRepository $categoryListenRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, ArtistRepository $artistRepository,
                                MusicFavouriteRepository $musicFavouriteRepository, VideoFavouriteRepository $videoFavouriteRepository, MusicDownloadEloquentRepository $musicDownloadRepository, KaraokeEloquentRepository $karaokeRepository,
                                VideoListenEloquentRepository $videoListenRepository, VideoDownloadEloquentRepository $videoDownloadRepository, PlaylistPublisherEloquentRepository $playlistPublisherRepository, SearchResultEloquentRepository $searchResultRepository,
                                Solarium $Solr, SessionEloquentRepository $sessionRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->playlistRepository = $playlistRepository;
        $this->playlistPublisherRepository = $playlistPublisherRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
        $this->videoListenRepository = $videoListenRepository;
        $this->videoDownloadRepository = $videoDownloadRepository;
        $this->categoryListenRepository = $categoryListenRepository;
        $this->coverRepository = $coverRepository;
        $this->artistRepository = $artistRepository;
        $this->musicFavouriteRepository = $musicFavouriteRepository;
        $this->videoFavouriteRepository = $videoFavouriteRepository;
        $this->karaokeRepository = $karaokeRepository;
        $this->searchResultRepository = $searchResultRepository;
        $this->sessionRepository = $sessionRepository;
        $this->Solr = $Solr;
    }
    public function urlAlbum(Request $request, $musicUrl) {
        if(strpos($musicUrl, '~') !== false) {
            // old URL playlist
            $arrUrl = Helpers::splitPlaylistUrl($musicUrl);
            return $this->getAlbumInfo($request, $arrUrl);
        }else {
            $id = last(explode('-', $musicUrl));
            $urlAlbum = str_replace($id, '', $musicUrl);
            $arrUrl = Helpers::splitPlaylistUrl(substr($urlAlbum, 0, -1) . '~' . $id);
            return $this->getAlbumInfo($request, $arrUrl);
        }
    }
    public function getAlbumInfo(Request $request, $musicUrl) {
        $album = $this->coverRepository->getCoverMusicById($musicUrl['id']);

        if(!$album)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'không tìm thấy album'], 400);
        $playlistMusic = [];
        if(($album->music)) {
            $playlistMusic = $album->music->toArray();
        }
        if($playlistMusic) {
            $offsetPl = $playlistMusic[$request->playlist ? ($request->playlist > count($playlistMusic) ? count($playlistMusic) : $request->playlist) - 1 : 0];
            if($offsetPl['cat_id'] == CAT_VIDEO) {
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id']);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id']);
            }
        }else{
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Nội dung playlist không có'], 400);
        }
        if(!$music)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Bài hát không tìm thấy'], 400);
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        // +1 view
        if(Helpers::sessionCountTimesMusic($music->music_id)){
            if($type == 'video') {
                $this->videoListenRepository->incrementListen($music->music_id);
            }else{
                $this->musicListenRepository->incrementListen($music->music_id);
            }
        }
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);

        $music['cover_image'] = Helpers::cover_url($music->cover_id, $music->music_artist_id, 'orginal');
        $music['cover_thumb_image'] = Helpers::coverThumb($music['cover_image'], MUSIC_COVER_THUMB_200_PATH);


        //Check favourite | Sorry, this content is not available in your country
        $music['auth_listen'] = true;
        $music['music_favourite'] = false;
        if($request->sid) {
            $userSess = $this->sessionRepository->getSessionById($request->sid);
            if($userSess) {
                // favourite music
                $getModelFavourite = $this->musicFavouriteRepository;
                if($type == 'video')
                    $getModelFavourite = $this->videoFavouriteRepository;
                $music['music_favourite'] = $getModelFavourite->getModel()::where([['user_id', $userSess->user_id], ['music_id', $music->music_id]])->exists();
                // check country can listen
                $memberVip = Helpers::checkMemberVip();
                $isVNIP = Helpers::isVNIP();
                if( !$memberVip && !$isVNIP )
                {
                    if ( $music->cat_id > 3 ) {
                        $music['auth_listen'] = false;
                    } else if ($music->cat_id < 3) {
                        if ($music->cat_level != 1) {
                            $music['auth_listen'] = false;
                        }
                    }
                }
            }
        }

        //check quality music deleted
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        if($music->music_new_id > 0 && isset($musicNew) && $musicNew) {
            $file_url = Helpers::file_url($musicNew);
        }else{
            $file_url = Helpers::file_url($music);
        }
        $music['file_urls'] = $file_url;
        /// suggestion music
        ///
        global $titleDup;
        global $typeDup;
        $sug = [];

        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        include(app_path() . '/../resources/views/cache/suggestion_cat/'.$music->cat_id.'_'.$music->cat_level.'.blade.php');
        $sug = Helpers::getRandLimitArr($typeDup ?? [], LIMIT_SUG_MUSIC - count($titleDup) + 3);
        if(isset($titleDup[0])) {
            $sug1 = array_merge(array_slice($sug, 0, 3), [$titleDup[0]]);
            shuffle($sug1);
            if(isset($titleDup[1])) {
                $sug2 = array_merge(array_slice($sug, 4, 5), [$titleDup[1]]);
                shuffle($sug2);
            }else{
                $sug2 = array_slice($typeDup, 4, 6);
            }
            $sug = array_merge($sug1, $sug2);
        }else{
            $sug = array_slice($sug, 0, LIMIT_SUG_MUSIC);
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        //lyric
        $music->music_lyric = Helpers::lyric_to_app($music);
        // karaoke
        $music_lyric_karaoke = $music->musicKara;
        if($music_lyric_karaoke) {
            $music->musicKara->music_lyric_karaoke = str_replace(["\n[t1]", "\n[t2]", "\n[t3]"], '<br/>', $music->musicKara->music_lyric_karaoke);
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => Helpers::convertArrHtmlCharsDecode($music->toArray()), 'playlist' => Helpers::convertArrHtmlCharsDecode($playlistMusic), 'sug' => Helpers::convertArrHtmlCharsDecode($sug)], 'error' => []], 200);
    }
    public function getPlaylistInfo(Request $request, $musicUrl, $name) {
        $arrUrl = Helpers::splitPlaylistUrl($musicUrl, 'playlist');
        $playlist = $this->playlistRepository->getMusicByPlaylistId($arrUrl['id']);
        if(!$playlist)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'không tìm thấy playlist'], 400);
        $playlistMusic = [];
        if(($playlist->music)) {
            $playlistMusic = $playlist->music->toArray();
        }
        if($playlistMusic) {
            $offsetPl = $playlistMusic[$request->playlist ? ($request->playlist > count($playlistMusic) ? count($playlistMusic) : $request->playlist) - 1 : 0];
            if($offsetPl['cat_id'] == CAT_VIDEO) {
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id']);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id']);
            }
        }else{
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Nội dung playlist không có'], 400);
        }
        if(!$music)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Bài hát không tìm thấy'], 400);

        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        // +1 view
        if(Helpers::sessionCountTimesMusic($arrUrl['id'])){
            if($type == 'video') {
                $this->videoListenRepository->incrementListen($music->music_id);
            }else{
                $this->musicListenRepository->incrementListen($music->music_id);
            }
        }
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);


        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);

        $music['cover_image'] = Helpers::cover_url($music->cover_id, $music->music_artist_id, 'orginal');
        $music['cover_thumb_image'] = Helpers::coverThumb($music['cover_image'], MUSIC_COVER_THUMB_200_PATH);


        //Check favourite | Sorry, this content is not available in your country
        $music['auth_listen'] = true;
        $music['music_favourite'] = false;
        if($request->sid) {
            $userSess = $this->sessionRepository->getSessionById($request->sid);
            if($userSess) {
                // favourite music
                $getModelFavourite = $this->musicFavouriteRepository;
                if($type == 'video')
                    $getModelFavourite = $this->videoFavouriteRepository;
                $music['music_favourite'] = $getModelFavourite->getModel()::where([['user_id', $userSess->user_id], ['music_id', $music->music_id]])->exists();
                // check country can listen
                $memberVip = Helpers::checkMemberVip();
                $isVNIP = Helpers::isVNIP();
                if( !$memberVip && !$isVNIP )
                {
                    if ( $music->cat_id > 3 ) {
                        $music['auth_listen'] = false;
                    } else if ($music->cat_id < 3) {
                        if ($music->cat_level != 1) {
                            $music['auth_listen'] = false;
                        }
                    }
                }
            }
        }

        //check quality music deleted
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        if($music->music_new_id > 0 && isset($musicNew) && $musicNew) {
            $file_url = Helpers::file_url($musicNew);
        }else{
            $file_url = Helpers::file_url($music);
        }
        $music['file_urls'] = $file_url;
        /// suggestion music
        ///
        global $titleDup;
        global $typeDup;
        $sug = [];

        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        include(app_path() . '/../resources/views/cache/suggestion_cat/'.$music->cat_id.'_'.$music->cat_level.'.blade.php');
        $sug = Helpers::getRandLimitArr($typeDup ?? [], LIMIT_SUG_MUSIC - count($titleDup) + 3);
        if(isset($titleDup[0])) {
            $sug1 = array_merge(array_slice($sug, 0, 3), [$titleDup[0]]);
            shuffle($sug1);
            if(isset($titleDup[1])) {
                $sug2 = array_merge(array_slice($sug, 4, 5), [$titleDup[1]]);
                shuffle($sug2);
            }else{
                $sug2 = array_slice($typeDup, 4, 6);
            }
            $sug = array_merge($sug1, $sug2);
        }else{
            $sug = array_slice($sug, 0, LIMIT_SUG_MUSIC);
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        //lyric
        $music->music_lyric = Helpers::lyric_to_app($music);
        // karaoke
        $music_lyric_karaoke = $music->musicKara;
        if($music_lyric_karaoke) {
            $music->musicKara->music_lyric_karaoke = str_replace(["\n[t1]", "\n[t2]", "\n[t3]"], '<br/>', $music->musicKara->music_lyric_karaoke);
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => Helpers::convertArrHtmlCharsDecode($music->toArray()), 'playlist' => Helpers::convertArrHtmlCharsDecode($playlistMusic), 'sug' => Helpers::convertArrHtmlCharsDecode($sug)], 'error' => []], 200);
    }
    public function newListenSingleMusic(Request $request, $cat, $sub, $id, $artist = '', $urlMusic = '') {
        if($urlMusic == '') {
//            $id = last($url = explode('-', $artist));
//            $urlMusicTitle = str_replace('-' . $id, '', $artist);
//            $urlMusic = $urlMusicTitle . '~' . $id;
            $urlMusic = $artist . '~' . $id;
        }else{
            $urlMusic = $urlMusic . '~' . $artist . '~' . $id;
        }
        return $this->listenSingleMusic($request, $cat, $sub, $urlMusic);
    }
    public function newLinkListenSingleMusic(Request $request, $artist = '', $urlMusic = '') {
        $id = last(explode('-', $urlMusic));
        $urlMusicTitle = str_replace('-' . $id, '', $urlMusic);
        if($urlMusic == '') {
            $arrArtist = explode('-', $artist);
            if(count($arrArtist) == 1) {
                // không có casi và tenbaihat
                $musicUrl = '~' . $artist;
            }else{
                // 1 trong 2 là casi và tenbaihat
                $id = last($arrArtist);
                $urlMusicTitle = str_replace('-' . $id, '', $artist);
                $musicUrl = $urlMusicTitle . '~' . $id;
            }
        }else{
            $musicUrl = $artist . '~' .$urlMusicTitle . '~' . $id;
        }
        return $this->listenSingleMusic($request, '', '', $musicUrl);
    }
    public function listenSingleMusic(Request $request, $cat, $sub, $musicUrl) {
        try {
            $arrUrl = Helpers::splitMusicUrl($musicUrl);
        } catch (Exception $e) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'url sai cú pháp'], 400);
        }
        if($cat == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId($arrUrl['id']);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        }
        if(!$music) {
            $music = $this->musicRepository->checkDeleteMusic($arrUrl['id'], false);
        }
        // +1 view
        if(Helpers::sessionCountTimesMusic($music->music_id)){
            if($cat == CAT_VIDEO_URL) {
                $this->videoListenRepository->incrementListen($music->music_id);
            }else{
                $this->musicListenRepository->incrementListen($music->music_id);
            }
        }
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);

        // cover image music/video

        $music['cover_image'] = $music->cat_id != CAT_VIDEO ?  Helpers::cover_url($music->cover_id, $music->music_artist_id, 'orginal') : Helpers::thumbnail_url($music->toArray(), 'preview');
        $music['cover_thumb_image'] = Helpers::coverThumb($music['cover_image'], MUSIC_COVER_THUMB_200_PATH);
        $music['auth_listen'] = true;

        //Check favourite | Sorry, this content is not available in your country
        $music['auth_listen'] = true;
        $music['music_favourite'] = false;
        if($request->sid) {
            $userSess = $this->sessionRepository->getSessionById($request->sid);
            if($userSess) {
                // favourite music
                $getModelFavourite = $this->musicFavouriteRepository;
                if($type == 'video')
                    $getModelFavourite = $this->videoFavouriteRepository;
                $music['music_favourite'] = $getModelFavourite->getModel()::where([['user_id', $userSess->user_id], ['music_id', $music->music_id]])->exists();
                // check country can listen
                $memberVip = Helpers::checkMemberVip();
                $isVNIP = Helpers::isVNIP();
                if( !$memberVip && !$isVNIP )
                {
                    if ( $music->cat_id > 3 ) {
                        $music['auth_listen'] = false;
                    } else if ($music->cat_id < 3) {
                        if ($music->cat_level != 1) {
                            $music['auth_listen'] = false;
                        }
                    }
                }
            }
        }
        //check quality music deleted
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        if($music->music_new_id > 0 && isset($musicNew) && $musicNew) {
            $file_url = Helpers::file_url($musicNew);
        }else{
            $file_url = Helpers::file_url($music);
        }
        $music['file_urls'] = $file_url;
        /// suggestion music
        ///
        global $titleDup;
        global $typeDup;
        $sug = [];

        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        $sug = Helpers::getRandLimitArr($typeDup ?? [], LIMIT_SUG_MUSIC - count($titleDup) + 3);
        include(app_path() . '/../resources/views/cache/suggestion_cat/'.$music->cat_id.'_'.$music->cat_level.'.blade.php');
        $sug = Helpers::getRandLimitArr($typeDup ?? [], LIMIT_SUG_MUSIC - count($titleDup) + 3);
        if(isset($titleDup[0])) {
            $sug1 = array_merge(array_slice($sug, 0, 3), [$titleDup[0]]);
            shuffle($sug1);
            if(isset($titleDup[1])) {
                $sug2 = array_merge(array_slice($sug, 4, 5), [$titleDup[1]]);
                shuffle($sug2);
            }else{
                $sug2 = array_slice($typeDup, 4, 6);
            }
            $sug = array_merge($sug1, $sug2);
        }else{
            $sug = array_slice($sug, 0, LIMIT_SUG_MUSIC);
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        //lyric
        $music->music_lyric = Helpers::lyric_to_app($music);
        // karaoke
        $music_lyric_karaoke = $music->musicKara;
        if($music_lyric_karaoke) {
            $music->musicKara->music_lyric_karaoke = str_replace(["\n[t1]", "\n[t2]", "\n[t3]"], '<br/>', $music->musicKara->music_lyric_karaoke);
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => Helpers::convertArrHtmlCharsDecode($music->toArray()), 'sug' => Helpers::convertArrHtmlCharsDecode($sug)], 'error' => []], 200);

    }
    public function listenBxhNow(Request $request, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'now', $catLevel);
    }
    public function listenBxhWeek(Request $request, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'week', $catLevel);
    }
    public function listenBxhMonth(Request $request, $month, $year, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'month', $catLevel, $month, $year);
    }
    public function listenBxhYear(Request $request, $year, $catUrl, $catLevel = '') {
        return $this->listenBxhMusic($request, str_replace('.html', '', $catUrl), 'year', $catLevel, 'all', $year);
    }
    public function listenBxhMusic($request, $catUrl, $typeBxh = 'now', $catLevel = '', $month = 0, $year = 0) {
        $id = $request->id;
        $type = 'music';
        $playlistMusic = [];
        // cache array
        global $hot_music_rows;
        global $hot_video_rows;
        $month = sprintf('%02d', $month);
        if($typeBxh == 'now') {
            include(app_path() . '/../resources/views/cache/bxh/bxh_today.blade.php');
        }elseif($typeBxh == 'week') {
            include(app_path() . '/../resources/views/cache/bxh/bxh_week.blade.php');
        }elseif($typeBxh == 'month') {
            include(app_path() . '/../resources/views/cache/bxh/bxh_'.$month.'_'.$year.'.blade.php');
        }elseif($typeBxh == 'year') {
            $month = 'all';
            include(app_path() . '/../resources/views/cache/bxh/bxh_'.$month.'_'.$year.'.blade.php');
        }
        $category = $this->categoryListenRepository->getCategoryUrl($catUrl == CAT_VIDEO_URL ? $catLevel : $catUrl);
        if(!$category)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Danh mục không tìm thấy'], 400);
        if($catUrl == CAT_VIDEO_URL) {
            // video (sub category videoclip)
            $type = 'video';
            $playlistMusic = $hot_video_rows[$category->cat_level];
        }else{
            // music (category music level 0)
            $playlistMusic = $hot_music_rows[$category->cat_id];
        }
        if(!$id) {
            $firstMusic = $playlistMusic[$request->playlist ? $request->playlist - 1 : 0];
            $id = $firstMusic['music_id'];
        }
        if($catUrl == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId(Helpers::decodeID($id));
        }else{
            $music = $this->musicRepository->findOnlyMusicId(Helpers::decodeID($id));
        }
        if(!$music) {
            $music = $this->musicRepository->checkDeleteMusic($id, false);
        }
        // +1 view
        if(Helpers::sessionCountTimesMusic($id)){
            if($catUrl == CAT_VIDEO) {
                $this->videoListenRepository->incrementListen($id);
            }else{
                $this->musicListenRepository->incrementListen($id);
            }
        }
        // update cookie music history
        $cookie = Helpers::MusicCookie($request, $music);
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);

        $musicFavourite = false;
        if($request->sid) {
            $userSess = $this->sessionRepository->getSessionById($request->sid);
            if($userSess) {
                $getModelFavourite = $this->musicFavouriteRepository;
                if($type == 'video')
                    $getModelFavourite = $this->videoFavouriteRepository;
                $musicFavourite = $getModelFavourite->getModel()::where([['user_id',$userSess->user_id], ['music_id', $music->music_id]])->first();
            }

        }
        //check quality music deleted
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        if($music->music_new_id > 0 && isset($musicNew) && $musicNew) {
            $file_url = Helpers::file_url($musicNew);
        }else{
            $file_url = Helpers::file_url($music);
        }
        $music['file_urls'] = $file_url;

        /// suggestion music
        ///
        global $titleDup;
        global $typeDup;
        $sug = [];

        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        include(app_path() . '/../resources/views/cache/suggestion_cat/'.$music->cat_id.'_'.$music->cat_level.'.blade.php');
        $sug = Helpers::getRandLimitArr($typeDup ?? [], LIMIT_SUG_MUSIC - count($titleDup) + 3);
        if(isset($titleDup[0])) {
            $sug1 = array_merge(array_slice($sug, 0, 3), [$titleDup[0]]);
            shuffle($sug1);
            if(isset($titleDup[1])) {
                $sug2 = array_merge(array_slice($sug, 4, 5), [$titleDup[1]]);
                shuffle($sug2);
            }else{
                $sug2 = array_slice($typeDup, 4, 6);
            }
            $sug = array_merge($sug1, $sug2);
        }else{
            $sug = array_slice($sug, 0, LIMIT_SUG_MUSIC);
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        //lyric
        $music->music_lyric = Helpers::lyric_to_app($music);
        // karaoke
        $music_lyric_karaoke = $music->musicKara;
        if($music_lyric_karaoke) {
            $music->musicKara->music_lyric_karaoke = str_replace(["\n[t1]", "\n[t2]", "\n[t3]"], '<br/>', $music->musicKara->music_lyric_karaoke);
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['musicFavourite' => $musicFavourite ? true : false, 'music' => Helpers::convertArrHtmlCharsDecode($music->toArray()), 'playlist' => Helpers::convertArrHtmlCharsDecode($playlistMusic), 'sug' => Helpers::convertArrHtmlCharsDecode($sug)], 'error' => []], 200);
    }
    function musicFavourite (Request $request) {
        if($request->sid) {
            $userSess = $this->sessionRepository->getSessionById($request->sid);
            if(!$userSess)
                return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Lỗi User'], 400);
        }else {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Lỗi User'], 400);
        }
        $typeMes = 'bài hát';
        $getModelFavourite = $this->musicFavouriteRepository;
        if($request->type_of == 'video') {
            $typeMes = 'video';
            $getModelFavourite = $this->videoFavouriteRepository;
        }
        if($request->type == 'false'){
            $msg = 'Đã bỏ '.$typeMes.' '.$request->name.' ra khỏi danh sách yêu thích.';
            $getModelFavourite->getModel()::where([['user_id', $userSess->user_id], ['music_id', $request->music_id]])->delete();
        }else{
            $msg = 'Đã thêm '.$typeMes.' '.$request->name.' vào danh sách yêu thích.';
            $getModelFavourite->create(['user_id' => $userSess->user_id, 'music_id' => $request->music_id]);
        }
        return new JsonResponse(['message' => $msg, 'code' => 200, 'data' => [], 'error' => []], 200);
    }
    public function infoMusicId(Request $request) {
        return $this->listenSingleMusic($request, $request->type ?? 'music', '', $request->music_id);
    }
    public function listenFavourite (Request $request) {
        $arrUrl['type'] = 'nghe-bat-hat-yeu-thich';
        return $this->listenPlaylistMusic($request, $arrUrl);
    }
    public function caSiPlaylist(Request $request, $artistUrl) {

        if(strpos($artistUrl, '~') !== false) {
            // old URL playlist
            return redirect(strtolower(str_replace('~', '-', url()->current())));
        }else {
            $id = last(explode('-', $artistUrl));
            $artistUrl = str_replace('-' . $id, '~' . $id, $artistUrl);
            $arrUrl = Helpers::splitPlaylistUrl($artistUrl, 'nghe-bat-hat-ca-si');
            return $this->listenPlaylistMusic($request, $arrUrl);
        }
    }
    public function listenPlaylistMusic($request, $arrUrl) {
        $playlistMusic = [];
        $music = [];
        $playlist = [];
        $typeListen = 'single';
        $musicSet = [];
        $userSess = [];
        if($arrUrl['type'] == 'nghe-album') {
            $album = $this->coverRepository->getCoverMusicById($arrUrl['id']);
            if(!$album)
                return new JsonResponse(['message' => 'Album không tìm thấy', 'code' => 400, 'data' => [], 'error' => []], 400);
            $typeListen = 'album';
            if($album->music) {
                $playlistMusic = $album->music->toArray();
            }
            if(!$playlistMusic && $album->album_music_total > 0) {
                $album->album_music_total = 0;
                $album->save();
                $Solr = new SolrSyncController($this->Solr);
                $Solr->deleteCustom('cover_' . $album->cover_id);
            }
        }elseif($arrUrl['type'] == 'playlist'){
            $playlist = $this->playlistRepository->getMusicByPlaylistId($arrUrl['id']);
            if(!$playlist)
                return new JsonResponse(['message' => 'Playlist không tìm thấy', 'code' => 400, 'data' => [], 'error' => []], 400);
            $typeListen = 'playlist';
            if($playlist->music) {
                $playlistMusic = $playlist->music->toArray();
            }
            $playlist->playlist_cover = $playlist->playlist_cover ? Helpers::file_path($playlist->playlist_id, env('DATA_URL').MUSIC_PLAYLIST_PATH, true).$playlist->playlist_id . '.jpg' : env('IMG_DATA_URL').'imgs/no_cover.jpg';
        }elseif($arrUrl['type'] == 'playlist_publisher'){
            $playlist = $this->playlistPublisherRepository->getMusicByPlaylistId($arrUrl['id']);
            if(!$playlist)
                return new JsonResponse(['message' => 'Playlist không tìm thấy', 'code' => 400, 'data' => [], 'error' => []], 400);
            $typeListen = 'playlist';
            if(($playlist->music)) {
                $playlistMusic = $playlist->music->toArray();
            }
            $playlist->playlist_cover = $playlist->playlist_cover ? env('APP_URL').Helpers::file_path($playlist->playlist_id, env('DATA_URL').MUSIC_PLAYLIST_PATH, true).$playlist->playlist_id . '.jpg' : env('IMG_DATA_URL').'imgs/no_cover.jpg';
        }elseif($arrUrl['type'] == 'nghe-bat-hat-ca-si'){
            $artist = $this->artistRepository->find($arrUrl['id']);
            if(!$artist)
                return new JsonResponse(['message' => 'Ca sĩ chưa được phát hành.', 'code' => 400, 'data' => [], 'error' => []], 400);
            $musicSet['page'] = $request->trang ?? 1;
            $playlistMusic = $this->musicRepository->findMusicByArtist($artist->artist_id, $musicSet['page'],'music_last_update_time', 'desc', LIMIT_LISTEN_MUSIC_ARTIST_MOBILE);
            if(!$playlistMusic)
                return new JsonResponse(['message' => 'Ca sĩ chưa có bài hát nào phát hành.', 'code' => 400, 'data' => [], 'error' => []], 400);
            $typeListen = 'playlist';
            $playlist = new \stdClass();
            $playlist->playlist_cover = $artist->artist_avatar ? env('APP_URL').Helpers::file_path($artist->artist_id, PUBLIC_COVER_ARTIST_PATH, true).$artist->artist_avatar : env('APP_URL').'/imgs/no_cover_artist2.jpg';
            $playlist->playlist_title = 'Tất cả bài hát ca sĩ '.$artist->artist_nickname;
        }
        elseif($arrUrl['type'] == 'nghe-bat-hat-yeu-thich'){
            $type = last(explode('/', $request->path()));
            if($request->sid) {
                $userSess = $this->sessionRepository->getSessionById($request->sid);
                if (!$userSess) {
                    return new JsonResponse(['message' => 'Bạn cần phải đăng nhập để hiển thị bài hát.', 'code' => 400, 'data' => [], 'error' => []], 400);
                }
            }
            if($type == 'music') {
                $musicFavourite = $this->musicFavouriteRepository->getModel()::where('user_id', $userSess->user_id)->with('music')->orderBy('id', 'desc')->limit(LIMIT_LISTEN_MUSIC_FAVOURITE)->get();
            }else{
                $musicFavourite = $this->videoFavouriteRepository->getModel()::where('user_id', $userSess->user_id)->with('video')->orderBy('id', 'desc')->limit(LIMIT_LISTEN_MUSIC_FAVOURITE)->get();
            }
            if(!count($musicFavourite))
                return new JsonResponse(['message' => 'Bạn chưa có bài hát nào yêu thích', 'code' => 400, 'data' => [], 'error' => []], 400);
            foreach ($musicFavourite->toArray() as $item) {
                $playlistMusic[] = $item[$type];
            }
            $typeListen = 'album';
        }
        if($playlistMusic) {
            $offsetPlaylist = intval($request->playlist ?? 1);
            $maxNumPlaylist = count($playlistMusic);
//            if($offsetPlaylist > $maxNumPlaylist){
//                return redirect(url()->current() . '?playlist=' . 1);
//            }
            $offsetPl = $playlistMusic[$offsetPlaylist - 1];
            if($offsetPl['cat_id'] == CAT_VIDEO) {
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id']);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id']);
            }
            if(!$music) {
                $music = $this->musicRepository->checkDeleteMusic($music, false);
//                if(!$music) {
//                    if($offsetPlaylist >= $maxNumPlaylist) {
//                        $offsetPlaylist = 1;
//                    }else{
//                        $offsetPlaylist ++;
//                    }
//                    return redirect(url()->current() . '?playlist=' . $offsetPlaylist);
//                }
//                $playlistMusic[$offsetPlaylist - 1] = $music->toArray();
            }
        }else{
            return new JsonResponse(['message' => 'Nội dung playlist không có', 'code' => 400, 'data' => [], 'error' => []], 400);
        }

        // +1 view
        if(Helpers::sessionCountTimesMusic($music->music_id)){
            if($music->cat_id == CAT_VIDEO) {
                $this->videoListenRepository->incrementListen($music->music_id);
            }else{
                $this->musicListenRepository->incrementListen($music->music_id);
            }
        }
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);

        // cover image music/video

        $music['cover_image'] = $music->cat_id != CAT_VIDEO ?  Helpers::cover_url($music->cover_id, $music->music_artist_id, 'orginal') : Helpers::thumbnail_url($music->toArray(), 'preview');
        $music['cover_thumb_image'] = Helpers::coverThumb($music['cover_image'], MUSIC_COVER_THUMB_200_PATH);
        $music['auth_listen'] = true;

        //Check favourite | Sorry, this content is not available in your country
        $music['auth_listen'] = true;
        $music['music_favourite'] = false;
        if($request->sid && !$userSess) {
            $userSess = $this->sessionRepository->getSessionById($request->sid);
            if($userSess) {
                // favourite music
                $getModelFavourite = $this->musicFavouriteRepository;
                if($type == 'video')
                    $getModelFavourite = $this->videoFavouriteRepository;
                $music['music_favourite'] = $getModelFavourite->getModel()::where([['user_id', $userSess->user_id], ['music_id', $music->music_id]])->exists();
                // check country can listen
                $memberVip = Helpers::checkMemberVip();
                $isVNIP = Helpers::isVNIP();
                if( !$memberVip && !$isVNIP )
                {
                    if ( $music->cat_id > 3 ) {
                        $music['auth_listen'] = false;
                    } else if ($music->cat_id < 3) {
                        if ($music->cat_level != 1) {
                            $music['auth_listen'] = false;
                        }
                    }
                }
            }
        }
        //check quality music deleted
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        if($music->music_new_id > 0 && isset($musicNew) && $musicNew) {
            $file_url = Helpers::file_url($musicNew);
        }else{
            $file_url = Helpers::file_url($music);
        }
        $music['file_urls'] = $file_url;
        /// suggestion music
        ///
        global $titleDup;
        global $typeDup;
        $sug = [];

        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        include(app_path() . '/../resources/views/cache/suggestion_cat/'.$music->cat_id.'_'.$music->cat_level.'.blade.php');
        $sug = Helpers::getRandLimitArr($typeDup ?? [], LIMIT_SUG_MUSIC - count($titleDup) + 3);
        if(isset($titleDup[0])) {
            $sug1 = array_merge(array_slice($sug, 0, 3), [$titleDup[0]]);
            shuffle($sug1);
            if(isset($titleDup[1])) {
                $sug2 = array_merge(array_slice($sug, 4, 5), [$titleDup[1]]);
                shuffle($sug2);
            }else{
                $sug2 = array_slice($typeDup, 4, 6);
            }
            $sug = array_merge($sug1, $sug2);
        }else{
            $sug = array_slice($sug, 0, LIMIT_SUG_MUSIC);
        }
        foreach ($sug as &$item) {
            $item['cover_image'] = $item['cat_id'] != CAT_VIDEO ?  Helpers::cover_url($item['cover_id'], $item['music_artist_id'], 'orginal') : Helpers::thumbnail_url($item, 'preview');
        }
        //lyric
        $music->music_lyric = Helpers::lyric_to_app($music);
        // karaoke
        $music_lyric_karaoke = $music->musicKara;
        if($music_lyric_karaoke) {
            $music->musicKara->music_lyric_karaoke = str_replace(["\n[t1]", "\n[t2]", "\n[t3]"], '<br/>', $music->musicKara->music_lyric_karaoke);
        }
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['music' => Helpers::convertArrHtmlCharsDecode($music->toArray()), 'playlist' => Helpers::convertArrHtmlCharsDecode($playlistMusic), 'sug' => Helpers::convertArrHtmlCharsDecode($sug)], 'error' => []], 200);
    }
}