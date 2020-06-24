<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Helpers;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Playlist\PlaylistEloquentRepository;
use App\Repositories\PlaylistPublisher\PlaylistPublisherEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;
use App\Repositories\VideoListen\VideoListenEloquentRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use App\Repositories\VideoDownload\VideoDownloadEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\Category\CategoryEloquentRepository;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Artist\ArtistRepository;
use App\Repositories\SearchResult\SearchResultEloquentRepository;
use App\Repositories\MusicFavourite\MusicFavouriteRepository;
use App\Repositories\VideoFavourite\VideoFavouriteRepository;
use App\Repositories\KaraokeSuggestion\KaraokeSuggestionEloquentRepository;
use App\Repositories\Upload\UploadEloquentRepository;
use App\Repositories\User\UserEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\PlaylistMusicModel;
use Jenssegers\Agent\Agent;
use App\Models\ErrorLogModel;
use App\Repositories\Karaoke\KaraokeEloquentRepository;
use App\Repositories\MusicDeleted\MusicDeletedEloquentRepository;
use App\Repositories\LyricSuggestion\LyricSuggestionEloquentRepository;
use App\Repositories\MusicSearchResult\MusicSearchResultEloquentRepository;
use App\Repositories\Comment\CommentEloquentRepository;
use App\Repositories\CommentReply\CommentReplyEloquentRepository;
use Session;
use Response;
use DB;

class MusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
    protected $karaokeSuggestionRepository;
    protected $lyricSuggestionRepository;
    protected $musicSearchResultRepository;
    protected $musicDeletedRepository;
    protected $uploadRepository;
    protected $userRepository;
    protected $categoryRepository;
    protected $commentRepository;
    protected $commentReplyRepository;

    public function __construct(MusicEloquentRepository $musicRepository, PlaylistEloquentRepository $playlistRepository, MusicListenEloquentRepository $musicListenRepository,
                                CategoryEloquentRepository $categoryListenRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, ArtistRepository $artistRepository,
                                MusicFavouriteRepository $musicFavouriteRepository, VideoFavouriteRepository $videoFavouriteRepository, MusicDownloadEloquentRepository $musicDownloadRepository, KaraokeEloquentRepository $karaokeRepository,
                                VideoListenEloquentRepository $videoListenRepository, VideoDownloadEloquentRepository $videoDownloadRepository, PlaylistPublisherEloquentRepository $playlistPublisherRepository, SearchResultEloquentRepository $searchResultRepository,
                                KaraokeSuggestionEloquentRepository $karaokeSuggestionRepository, LyricSuggestionEloquentRepository $lyricSuggestionRepository, MusicSearchResultEloquentRepository $musicSearchResultRepository, MusicDeletedEloquentRepository $musicDeletedRepository,
                                UploadEloquentRepository $uploadRepository, UserEloquentRepository $userRepository, CategoryEloquentRepository $categoryRepository, CommentEloquentRepository $commentRepository, CommentReplyEloquentRepository $commentReplyRepository)
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
        $this->karaokeSuggestionRepository = $karaokeSuggestionRepository;
        $this->lyricSuggestionRepository = $lyricSuggestionRepository;
        $this->karaokeRepository = $karaokeRepository;
        $this->searchResultRepository = $searchResultRepository;
        $this->musicSearchResultRepository = $musicSearchResultRepository;
        $this->musicDeletedRepository = $musicDeletedRepository;
        $this->uploadRepository = $uploadRepository;
        $this->userRepository = $userRepository;
        $this->categoryRepository = $categoryRepository;
        $this->commentRepository = $commentRepository;
        $this->commentReplyRepository = $commentReplyRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
    public function oldListenSingleMusic(Request $request, $cat, $sub, $musicUrl) {
        $url = explode('~', $musicUrl);
//        if(count($url) == 1) {
//            // không có casi và tenbaihat
//            $musicUrl = $musicUrl;
//        }elseif (count($url) == 2) {
//            // 1 trong 2 là casi và tenbaihat
//            $musicUrl = $musicUrl;
//        }else {
//            $musicUrl = $musicUrl;
//        }
        return $this->listenSingleMusic($request, '', '', $musicUrl);
    }
    public function listenSingleMusic(Request $request, $cat = '', $sub = '', $musicUrl) {
        try {
            $arrUrl = Helpers::splitMusicUrl($musicUrl);
        } catch (Exception $e) {
            return view('errors.errors')->with('e');
        }
        if($arrUrl['type'] == 'video') {
            $music = $this->videoRepository->findOnlyMusicId($arrUrl['id']);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        }
        if(!$music) {
            // redirect ca-si // category
            if(!isset($arrUrl['id']) || $arrUrl['id'] == 0) {
                $artistUrl = trim(str_replace(['~', '-'], ' ', last(explode('/', $musicUrl))));
                $artistData =  $this->artistRepository->getModel()::where('artist_nickname', $artistUrl)->first();
                if($artistData) {
                    $urlRed = Helpers::artistUrl($artistData->artist_id, $artistData->artist_nickname);
                    return redirect($urlRed);
                }else{
                    $cat_url = trim(str_replace(['~'], '-', last(explode('/', $musicUrl))));
                    $catData =  $this->categoryRepository->getModel()::where('cat_url', $cat_url)->first();
                    if($catData) {
                        return redirect('/mp3/'.$cat_url.'.html');
                    }
                    return view('errors.404_timeout_10s');
                }
            }
            return $this->musicRepository->checkDeleteMusic($arrUrl['id']);
        }
        $urlOriginal = Helpers::listen_url($music->toArray());
        if(url()->current() != $urlOriginal) {
            return redirect($urlOriginal);
        }
//        if(!(isset($arrUrl['url'][0]) && isset($arrUrl['url'][1])) || ($music->music_title_url && ($arrUrl['url'][0] . ($arrUrl['url'][1] ? '~' .$arrUrl['url'][1] : '')) != $music->music_title_url)) {
//            return redirect(Helpers::listen_url($music->toArray()));
//        }
        // +1 view
        if(Helpers::sessionCountTimesMusic($arrUrl['id'])){
            if($arrUrl['type'] == 'video') {
                $this->videoListenRepository->incrementListen($arrUrl['id']);
            }else{
                $this->musicListenRepository->incrementListen($arrUrl['id']);
            }
            if($_COOKIE['search_search'] ?? '') {
                unset($_COOKIE['search_search']);
                $this->musicSearchResultRepository->createSearch($music);
            }
        }
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        // update cookie music history
        $cookie = Helpers::MusicCookie($request, $music);
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);
        $musicSet = [
            'type_listen' => 'single', // single | playlist | album
            'type_jw' =>  $type,  // music | video
            'playlist_music' => [],
            'music_history' => $cookie
        ];
//        // update search analytics
//        if(isset($request->ref) && isset($request->key_search)&& isset($request->type_search) && $request->ref == 'search') {
//            $this->searchResultRepository->createAnalytics($request->ref, $request->key_search, $music->music_id, $request->type_search);
//        }
        $musicFavourite = false;
        if(Auth::check()){
            $getModelFavourite = $this->musicFavouriteRepository;
            if($type == 'video')
                $getModelFavourite = $this->videoFavouriteRepository;
            $musicFavourite = $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $music->music_id]])->first();
        }
        global $MusicSameArtist;
        global $VideoSameArtist;
        global $titleDup;
        global $video;
        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        return view('jwplayer.music', compact('music', 'musicNew', 'musicSet', 'musicFavourite', 'MusicSameArtist', 'VideoSameArtist', 'titleDup', 'video'));
    }
    public function oldUrlPlayList(Request $request, $musicUrl) {
        $albumUrlEx = explode('~', $musicUrl);
        $redReplace = $albumUrlEx[1] . '/' . $albumUrlEx[0];
        $redUrl = str_replace($musicUrl, $redReplace, url()->current());
        return redirect(str_replace('.html', '', $redUrl));
    }
    public function newUrlPlayList(Request $request, $musicId, $musicUrl) {
        $url = $musicUrl . '~' . $musicId;
        $arrUrl = Helpers::splitPlaylistUrl($url);
        return $this->listenPlaylistMusic($request, $arrUrl);
    }
    public function urlAlbum(Request $request, $musicUrl) {
        if(strpos($musicUrl, '~') !== false) {
            // old URL playlist
            $arrUrl = Helpers::splitPlaylistUrl($musicUrl);
            return $this->listenPlaylistMusic($request, $arrUrl);
        }else {
            $id = last(explode('-', $musicUrl));
            $urlAlbum = str_replace($id, '', $musicUrl);
            $arrUrl = Helpers::splitPlaylistUrl(substr($urlAlbum, 0, -1) . '~' . $id);
            return $this->listenPlaylistMusic($request, $arrUrl);
        }
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
            $arrUrl = Helpers::splitPlaylistUrl($artistUrl);
            return $this->listenPlaylistMusic($request, $arrUrl);
        }
    }
    public function listenPlaylistMusic($request, $arrUrl) {
        $playlistMusic = [];
        $music = [];
        $playlist = [];
        $typeListen = 'single';
        $musicSet = [];
        if($arrUrl['type'] == 'nghe-album') {
            $album = $this->coverRepository->getCoverMusicById($arrUrl['id']);
            if(!$album)
                return view('errors.text_error')->with('message', 'Album không tìm thấy.');
            $urlOriginal = Helpers::album_url($album->toArray());
            if(url()->current() != ENV('LISTEN_URL').substr($urlOriginal, 1)) {
                return redirect(ENV('LISTEN_URL').substr($urlOriginal, 1));
            }
            $typeListen = 'album';
            if($album->music) {
                $playlistMusic = $album->music->toArray();
            }
        }elseif($arrUrl['type'] == 'playlist'){
            $playlist = $this->playlistRepository->getMusicByPlaylistId($arrUrl['id']);
            if(!$playlist)
                return view('errors.404');
            $typeListen = 'playlist';
            if($playlist->music) {
                $playlistMusic = $playlist->music->toArray();
            }
            $playlist->playlist_cover = $playlist->playlist_cover ? Helpers::file_path($playlist->playlist_id, env('DATA_URL').MUSIC_PLAYLIST_PATH, true).$playlist->playlist_id . '.jpg' : env('IMG_DATA_URL').'imgs/no_cover.jpg';
        }elseif($arrUrl['type'] == 'playlist_publisher'){
            $playlist = $this->playlistPublisherRepository->getMusicByPlaylistId($arrUrl['id']);
            if(!$playlist)
                return view('errors.404');
            $typeListen = 'playlist';
            if(($playlist->music)) {
                $playlistMusic = $playlist->music->toArray();
            }
            $playlist->playlist_cover = $playlist->playlist_cover ? env('APP_URL').Helpers::file_path($playlist->playlist_id, env('DATA_URL').MUSIC_PLAYLIST_PATH, true).$playlist->playlist_id . '.jpg' : env('IMG_DATA_URL').'imgs/no_cover.jpg';
        }elseif($arrUrl['type'] == 'nghe-bat-hat-ca-si'){
            $artist = $this->artistRepository->find($arrUrl['id']);
            if(!$artist)
                return view('errors.text_error')->with('message', 'Ca sĩ chưa được phát hành.');
            $musicSet['page'] = $request->trang ?? 1;
            $Agent = new Agent();
            $playlistMusic = $this->musicRepository->findMusicByArtist($artist->artist_id, $musicSet['page'],'music_last_update_time', 'desc', $Agent->isMobile() ? LIMIT_LISTEN_MUSIC_ARTIST_MOBILE : LIMIT_LISTEN_MUSIC_ARTIST);
            if(!$playlistMusic)
                return view('errors.text_error')->with('message', 'Ca sĩ chưa có bài hát nào phát hành.');
            $typeListen = 'playlist';
            $playlist = new \stdClass();
            $playlist->playlist_cover = $artist->artist_avatar ? env('APP_URL').Helpers::file_path($artist->artist_id, PUBLIC_COVER_ARTIST_PATH, true).$artist->artist_avatar : env('APP_URL').'/imgs/no_cover_artist2.jpg';
            $playlist->playlist_title = 'Tất cả bài hát ca sĩ '.$artist->artist_nickname;
        }
        elseif($arrUrl['type'] == 'nghe-bat-hat-yeu-thich'){
            $type = last(explode('/', $request->path()));
            if(!Auth::check())
                return view('errors.text_error')->with('message', 'Bạn cần phải đăng nhập để hiển thị bài hát.');
            if($type == 'music') {
                $musicFavourite = $this->musicFavouriteRepository->getModel()::where('user_id', Auth::user()->id)->with('music')->orderBy('id', 'desc')->limit(LIMIT_LISTEN_MUSIC_FAVOURITE)->get();
            }else{
                $musicFavourite = $this->videoFavouriteRepository->getModel()::where('user_id', Auth::user()->id)->with('video')->orderBy('id', 'desc')->limit(LIMIT_LISTEN_MUSIC_FAVOURITE)->get();
            }
            if(!count($musicFavourite))
                return view('errors.text_error')->with('message', 'Bạn chưa có bài hát nào yêu thích');
            foreach ($musicFavourite->toArray() as $item) {
                $playlistMusic[] = $item[$type];
            }
            $typeListen = 'album';
        }
        if($playlistMusic) {
            $offsetPlaylist = intval($request->playlist ?? 1);
            $maxNumPlaylist = count($playlistMusic);
            if($offsetPlaylist > $maxNumPlaylist){
                return redirect(url()->current() . '?playlist=' . 1);
            }
            $offsetPl = $playlistMusic[$offsetPlaylist - 1];
            if($offsetPl['cat_id'] == CAT_VIDEO) {
                $music = $this->videoRepository->findOnlyMusicId($offsetPl['music_id']);
            }else{
                $music = $this->musicRepository->findOnlyMusicId($offsetPl['music_id']);
            }
            if(!$music) {
                $music = $this->musicRepository->checkDeleteMusic($music, false);
                if(!$music) {
                    if($offsetPlaylist >= $maxNumPlaylist) {
                        $offsetPlaylist = 1;
                    }else{
                        $offsetPlaylist ++;
                    }
                    return redirect(url()->current() . '?playlist=' . $offsetPlaylist);
                }
                $playlistMusic[$offsetPlaylist - 1] = $music->toArray();
            }
        }else{
            if(Auth::check() && backpack_user()->can('duyet_sua_nhac')){
                abort(403, '<a href="/dang-tai/album/'.$arrUrl['id'].'" style="font-size: 18px; display: block">Qua trang chỉnh sửa upload</a>Nhạc đang cập nhật.');
            }
            return view('errors.text_error')->with('message', 'Nội dung playlist không có.');
        }

        // +1 view
        if(Helpers::sessionCountTimesMusic($music->music_id)){
            if($music->cat_id == CAT_VIDEO) {
                $this->videoListenRepository->incrementListen($music->music_id);
            }else{
                $this->musicListenRepository->incrementListen($music->music_id);
            }
            if($_COOKIE['search_search'] ?? '') {
                unset($_COOKIE['search_search']);
                $this->musicSearchResultRepository->createSearch($music);
            }
        }
        $type = 'music';
        if($music->cat_id == CAT_VIDEO)
            $type = 'video';
        // update cookie music history
        $cookie = Helpers::MusicCookie($request, $music);
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);
//        // update search analytics
//        if(isset($request->ref) && isset($request->key_search)&& isset($request->type_search) && $request->ref == 'search') {
//            $this->searchResultRepository->createAnalytics($request->ref, $request->key_search, $music->music_id, $request->type_search);
//        }
        $musicSet = array_merge($musicSet, [
            'type_listen' => $typeListen, // single | playlist | album
            'type_jw' =>  $type,  // playlist | music | video
            'playlist_music' => $playlistMusic,
            'music_history' => $cookie,
            'playlist' => $playlist,
            'page' => 1
        ]);
        $musicFavourite = false;
        if(Auth::check()){
            $getModelFavourite = $this->musicFavouriteRepository;
            if($type == 'video')
                $getModelFavourite = $this->videoFavouriteRepository;
            $musicFavourite = $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $music->music_id]])->first();
        }
        global $MusicSameArtist;
        global $VideoSameArtist;
        global $titleDup;
        global $video;
        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        return view('jwplayer.music', compact('music', 'musicNew', 'musicSet', 'musicFavourite', 'MusicSameArtist', 'VideoSameArtist', 'titleDup', 'video'));
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
            return view('errors.text_error')->with('message', 'Danh mục không tìm thấy.');
        if($catUrl == CAT_VIDEO_URL) {
            // video (sub category videoclip)
            $type = 'video';
            $playlistMusic = $hot_video_rows[$category->cat_level] ?? [];
        }else{
            // music (category music level 0)
            $playlistMusic = $hot_music_rows[$category->cat_id] ?? [];
        }
        if(!$playlistMusic)
            return view('errors.text_error')->with('message', 'Hiện tại bảng xếp hạng tháng này chưa đầy đủ');
        $offsetPlaylist = intval($request->playlist ?? 1);
        $maxNumPlaylist = count($playlistMusic);
        if($offsetPlaylist > $maxNumPlaylist) {
            return redirect(url()->current() . '?playlist=' . 1);
        }
        $firstMusic = $playlistMusic[$offsetPlaylist - 1];
        if($catUrl == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId($firstMusic['music_id']);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($firstMusic['music_id']);
        }
        if(!$music) {
            $music = $this->musicRepository->checkDeleteMusic($firstMusic['music_id'], false);
            if(!$music) {
                if($offsetPlaylist >= $maxNumPlaylist) {
                    $offsetPlaylist = 1;
                }else{
                    $offsetPlaylist ++;
                }
                return redirect(url()->current() . '?playlist=' . $offsetPlaylist);
            }
            $playlistMusic[$offsetPlaylist - 1] = $music->toArray();
        }

        // +1 view
        if(Helpers::sessionCountTimesMusic($music->music_id)){
            if($catUrl == CAT_VIDEO) {
                $this->videoListenRepository->incrementListen($music->music_id);
            }else{
                $this->musicListenRepository->incrementListen($music->music_id);
            }
        }
        // update cookie music history
        $cookie = Helpers::MusicCookie($request, $music);
        //update cache file suggestion
        $this->musicRepository->suggestion($music, $type);
        $musicSet = [
            'type_listen' => 'album', // single | playlist | album
            'type_jw' =>  $type,  // music | video
            'playlist_music' => $playlistMusic,
            'music_history' => $cookie
        ];
        $musicFavourite = false;
        if(Auth::check()){
            $getModelFavourite = $this->musicFavouriteRepository;
            if($type == 'video')
                $getModelFavourite = $this->videoFavouriteRepository;
            $musicFavourite = $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $music->music_id]])->first();
        }
        global $MusicSameArtist;
        global $VideoSameArtist;
        global $titleDup;
        global $video;
        include(app_path() . '/../resources/views/cache/suggestion/'.ceil($music->music_id / 1000).'/'.$music->music_id.'.blade.php');
        if($music->music_new_id > 0)
            $musicNew = $this->musicDeletedRepository->getModel()::where('music_id', $music->music_new_id)->first();
        return view('jwplayer.music', compact('music', 'musicNew', 'musicSet', 'musicFavourite', 'MusicSameArtist', 'VideoSameArtist', 'titleDup', 'video'));
    }
    public function embed(Request $request, $cat, $sub, $musicUrl) {
        try {
            $arrUrl = Helpers::splitMusicUrl($musicUrl);
        } catch (Exception $e) {
            return view('errors.errors')->with('e');
        }
        if($cat == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId($arrUrl['id']);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($arrUrl['id']);
        }
        if(!$music)
            return view('errors.404')->with('message', 'Nhạc đang cập nhật.');
        // +1 view
        if(Helpers::sessionCountTimesMusic($arrUrl['id'])){
            if($cat == CAT_VIDEO_URL) {
                $this->videoListenRepository->incrementListen($arrUrl['id']);
            }else{
                $this->musicListenRepository->incrementListen($arrUrl['id']);
            }
        }
        if(!$music)
            return view('errors.404');
        return view('jwplayer.embed_mp3', compact('music'));
    }
    public function historyListen(Request $request) {
        $result = [];
        $musics = [];
        $musicRecent = $_COOKIE['music_history'] ?? '';
        if(Auth::check()) {
            $musicRecent = Auth::user()->user_music_recent;
        }
        if($musicRecent) {
            $musicHistory = unserialize($musicRecent);
            $tempStr = implode(',', $musicHistory);
            $musics = $this->musicRepository->getHistoryRecents($tempStr);
            if($request->isMethod('post')) {
                foreach ($musics as $key => $item) {
                    $result[] = [
                        'title' => ++$key . '. ' . $item->music_title . ' - '. str_replace(';', ', ', $item->music_artist),
                        'link' => Helpers::listen_url([
                            'music_id'=> $item->music_id,
                            'cat_id' => $item->cat_id,
                            'cat_level' => $item->cat_level,
                            'music_title_url' => $item->music_title_url,
                        ])
                    ];
                }
            }else {

            }

        }
        if($request->isMethod('post'))
            return response($result);
        return view('catalog.history', compact('musics'));
    }
    function musicFavourite (Request $request) {
        $dataRes = null;
        if(!Auth::check())
            return 'Lỗi User';
        $typeMes = 'bài hát';
        $getModelFavourite = $this->musicFavouriteRepository;
        if($request->type_of == 'video') {
            $typeMes = 'video';
            $getModelFavourite = $this->videoFavouriteRepository;
        }
        if($request->type == 'true'){
            $msg = 'Đã bỏ '.$typeMes.' '.$request->name.' ra khỏi danh sách yêu thích.';
            $dataRes = [];
            $getModelFavourite->getModel()::where([['user_id', Auth::user()->id], ['music_id', $request->music_id]])->delete();
        }else{
            $msg = 'Đã thêm '.$typeMes.' '.$request->name.' vào danh sách yêu thích.';
            $getModelFavourite->create(['user_id' => Auth::user()->id, 'music_id' => $request->music_id]);
        }
        Helpers::ajaxResult(true, $msg, $dataRes);
    }
    public function countDownload(Request $request) {
        // +1 download
        if($request->music_id) {
            if(Helpers::sessionCountTimesMusic($request->music_id, 'download')){
                if($request->cat_id == CAT_VIDEO) {
                    $this->videoDownloadRepository->incrementDownload($request->music_id);
                }else{
                    $this->musicDownloadRepository->incrementDownload($request->music_id);
                }
            }
        }
        Helpers::ajaxResult(true, '', null);
    }
    public function suggestionLyric(Request $request) {

        if($request->cat_id == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId($request->id);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($request->id);
        }
        if(!$music) {
            Helpers::ajaxResult(false, 'Nhạc không tìm thấy', null);
        }
        if($request->submit == 'get') {
            Helpers::ajaxResult(true, '', ['lyric' => $music->music_lyric]);
        }else{
            if(!$request->lyric) {
                Helpers::ajaxResult(false, 'vui lòng nhập thông tin lyric', null);
            }
            if($request->submit == 'store') {
                if(!backpack_user()->can('duyet_sua_nhac')){
                    abort(403, 'Lỗi truy cập, tài khoản bạn không có chỉnh sửa lyric.');
                }
                $music->music_lyric = $request->lyric;
                $music->save();
                Helpers::ajaxResult(true, 'Sửa lyric thành công', ['lyric' => $music->music_lyric]);
            }else {
                $this->lyricSuggestionRepository->getModel()::where(['music_id' => $music->music_id, 'user_id' => Auth::user()->id])->delete();
                if($music->music_lyric == $request->lyric)
                    Helpers::ajaxResult(false, 'thông tin nhập không thay đổi', null);
                $this->lyricSuggestionRepository->create([
                    'music_id' => $music->music_id,
                    'music_title' => $music->music_title,
                    'music_artist' => $music->music_artist,
                    'music_time' => time(),
                    'music_length' => $music->music_length,
                    'music_lyric' => $request->lyric,
                    'user_id' => Auth::user()->id,
                ]);
                Helpers::ajaxResult(true, 'Gửi gợi ý lyric cho bài hát thành công', null);
            }

        }
    }
    public function suggestionKaraoke(Request $request) {

        if($request->cat_id == CAT_VIDEO_URL) {
            $music = $this->videoRepository->findOnlyMusicId($request->id);
        }else{
            $music = $this->musicRepository->findOnlyMusicId($request->id);
        }
        if(!$music) {
            Helpers::ajaxResult(false, 'Karaoke không tìm thấy', null);
        }
        if($request->submit == 'get') {
            Helpers::ajaxResult(true, '', ['lyric' => $music->musicKara->music_lyric_karaoke ?? '']);
        }else{
            if(!$request->karaoke) {
                Helpers::ajaxResult(false, 'Vui lòng nhập thông tin karaoke', null);
            }
            if($request->submit == 'store') {
                if(!backpack_user()->can('duyet_sua_karaoke')){
                    abort(403, 'Lỗi truy cập, tài khoản bạn không có chỉnh sửa karaoke.');
                }
                if(!$music->musicKara) {
                    $this->karaokeRepository->create([
                        'music_id' => $music->music_id,
                        'music_title' => $music->music_title,
                        'music_artist' => $music->music_artist,
                        'music_downloads_this_week' => $music->music_downloads_this_week,
                        'music_time' => time(),
                        'music_length' => $music->music_length,
                        'music_lyric_karaoke' => $request->karaoke,
                    ]);
                }else{
                    $music->musicKara->music_lyric_karaoke = $request->karaoke;
                    $music->musicKara->save();
                }
                Helpers::ajaxResult(true, 'Sửa lyric thành công', null);
            }else{
                if(!$request->karaoke) {
                    Helpers::ajaxResult(false, 'Vui lòng nhập thông tin karaoke', null);
                }
                $this->karaokeSuggestionRepository->getModel()::where(['music_id' => $music->music_id, 'user_id' => Auth::user()->id])->delete();
                if($music->musicKara)
                    if($music->musicKara->music_lyric_karaoke == $request->karaoke)
                        Helpers::ajaxResult(false, 'Thông tin nhập không thay đổi', null);
                $this->karaokeSuggestionRepository->create([
                    'music_id' => $music->music_id,
                    'music_title' => $music->music_title,
                    'music_artist' => $music->music_artist,
                    'music_downloads_this_week' => $music->music_downloads_this_week,
                    'music_time' => time(),
                    'music_length' => $music->music_length,
                    'music_lyric_karaoke' => $request->karaoke,
                    'user_id' => Auth::user()->id,
                ]);
                Helpers::ajaxResult(true, 'Gửi gợi ý karaoke cho bài hát thành công', null);
            }
        }
    }
    public function downloadAlbum(Request $request) {
        $memberVip = Helpers::checkMemberVip();
        if(!$memberVip) {
            Helpers::ajaxResult(false, 'Bạn chưa có quyền download tất cả nhạc album', null);
        }
        $arrUrl = Helpers::splitPlaylistUrl($request->album_url, $request->type);
        $playlistMusic = [];
        $music = [];
        $playlist = [];
        $typeListen = 'single';
        $musicDownload = [];
        if($arrUrl['type'] == 'album') {
            $album = $this->coverRepository->getCoverMusicById($arrUrl['id']);
            if(!$album)
                Helpers::ajaxResult(false, 'Album không tìm thấy.', null);
            $music = $album->musicDownload;
            if($music) {
                $playlistMusic = $music->toArray();
            }
        }elseif($arrUrl['type'] == 'playlist'){
            $playlist = $this->playlistRepository->getMusicByPlaylistId($arrUrl['id']);
            if(!$playlist)
                Helpers::ajaxResult(false, 'Playlist không tìm thấy.', null);
            $music = $playlist->musicDownload;
            if($music) {
                $playlistMusic = $music->toArray();
            }
        }
        foreach ($playlistMusic as $key => $item) {
            $item['music_file_cache'] = '';
            $musicDownload[] = last(Helpers::file_url($item));
        }
        $statusCode = 200;
        $content = view('javascript.download_album')->with('musicDownload', $musicDownload);
        $response = Response::make($content, $statusCode);
        $response->header('Content-Type', 'application/javascript');
        return $response;
    }
    public function mergeMusic(Request $request) {
        if(Auth::check() && backpack_user()->can('duyet_sua_nhac')){
            $music = $this->musicRepository->getModel()::where('music_id', $request->id)->first();
            if(!$music && $music->cat_id == CATEGORY_ID_VIDEO)
                Helpers::ajaxResult(false, 'Nhạc không tồn tại.', null);
//            , ['music_deleted', '<=', 0]
            $musicSame = $this->musicRepository->getModel()::where(function($q) use ($music) {
                    $q->whereRaw('LOWER(`music_title`) like ?', [trim(strtolower($music->music_title))])
                        ->WhereRaw('LOWER(`music_artist`) like ?', [trim(strtolower($music->music_artist))]);
                })->where([['cat_id', '!=', CATEGORY_ID_VIDEO], ['music_id', '!=', $music->music_id], ['music_deleted', '<=', 0]])->orderby('music_id', 'asc')->limit(10)->get();
            if(!$musicSame)
                Helpers::ajaxResult(false, 'Không có nhạc để nhập.', null);

            $data = [];
            foreach ($musicSame as $item) {
                $qualityMax = Helpers::file_url($item);
                $coverTitle = '';
                if($item->cover_id > 0) {
                    $coverTitle = $this->coverRepository->getModel()::where('cover_id', $item->cover_id)->pluck('music_album');
                    if($coverTitle)
                        $coverTitle = $coverTitle[0];
                }
                $data[] = [
                    'music_id' => $item['music_id'],
                    'cover_title' => $coverTitle,
                    'listen_url' => Helpers::listen_url($item),
                    'id_de' => Helpers::encodeID($item->music_id),
                    'music_username' => $item->music_username,
                    'music_title_url' => $item->music_title_url,
                    'music_title' => $item->music_title,
                    'music_artist' => $item->music_artist,
                    'music_listen' => number_format($item->music_listen),
                    'music_downloads' => number_format($item->music_downloads),
                    'max_quality_label' => end($qualityMax)['label'],
                ];
            }
            Helpers::ajaxResult(true, '', $data);
        }
    }
    public function findIdMusicMerge(Request $request) {
        if(Auth::check() && backpack_user()->can('duyet_sua_nhac')){
            $id = Helpers::decodeID($request->id);
            if(!$id)
                Helpers::ajaxResult(false, 'Nhạc không tồn tại.', null);
            $item = $this->musicRepository->getModel()::where([['cat_id', '!=', CATEGORY_ID_VIDEO], ['music_id', $id], ['music_deleted', '<=', 0]])->first();

            $qualityMax = Helpers::file_url($item);
            $coverTitle = '';
            if($item->cover_id > 0) {
                $coverTitle = $this->coverRepository->getModel()::where('cover_id', $item->cover_id)->pluck('music_album');
                if($coverTitle)
                    $coverTitle = $coverTitle[0];
            }
            $data = [
                'music_id' => $item['music_id'],
                'cover_title' => $coverTitle,
                'listen_url' => Helpers::listen_url($item),
                'id_de' => Helpers::encodeID($item->music_id),
                'music_username' => $item->music_username,
                'music_title_url' => $item->music_title_url,
                'music_title' => $item->music_title,
                'music_artist' => $item->music_artist,
                'music_listen' => number_format($item->music_listen),
                'music_downloads' => number_format($item->music_downloads),
                'max_quality_label' => end($qualityMax)['label'],
            ];
            Helpers::ajaxResult(true, 'Nhập bài hát thành công', $data);
        }
    }
    public function approveMusic(Request $request) {
        if(Auth::check() && backpack_user()->can('duyet_sua_nhac')){
            $idMusic = $request->id;
            $idMerge = $request->id_merge;
            if(!$idMusic || !$idMerge || ($idMusic == $idMerge)) {
                Helpers::ajaxResult(false, 'Lỗi ngoài hệ thống nhập', null);
            }
            $music = $this->musicRepository->getModel()::where([['music_id', $idMusic], ['music_deleted', '<=', 0]])->first();
            $musicListen = $this->musicListenRepository->getModel()::where('music_id', $idMusic)->first();
            $musicDownload = $this->musicDownloadRepository->getModel()::where('music_id', $idMusic)->first();
            $musicQualityMax = $music->music_bitrate;
            $merge = $this->musicRepository->getModel()::where([['music_id', $idMerge], ['music_deleted', '<=', 0]])->first();
            $mergeListen = $this->musicListenRepository->getModel()::where('music_id', $idMusic)->first();
            $mergeDownload = $this->musicDownloadRepository->getModel()::where('music_id', $idMusic)->first();
            $mergeQualityMax = $merge->music_bitrate;

//            dd($idMusic, $idMerge, $musicQualityMax, $mergeQualityMax);
            $url = '';
            if($idMusic > $idMerge) {
                //  Trường hợp ID1 > ID2
                // add listen & downlaod
                $merge->music_listen = $merge->music_listen + $music->music_listen;
                $merge->music_downloads = $merge->music_downloads + $music->music_downloads;
                $mergeListen->music_listen = $mergeListen->music_listen + $musicListen->music_listen;
                $mergeListen->music_listen_today = $mergeListen->music_listen_today + $musicListen->music_listen_today;
                $mergeListen->music_downloads = $mergeListen->music_downloads + $mergeDownload->music_downloads;
                $mergeListen->music_downloads_today = $mergeListen->music_downloads_today + $mergeDownload->music_downloads_today;
                // add comment & search * comment
                $merge->music_search_result = $merge->music_search_result + $music->music_search_result;
                $merge->music_favourite = $merge->music_favourite + $music->music_favourite;
                $merge->music_comment = $merge->music_comment + $music->music_comment;
                $this->musicFavouriteRepository->getModel()::where('music_id', $music->music_id)->update(['music_id' => $merge->music_id]);
                $this->commentRepository->getModel()::where('music_id', $music->music_id)->update(['music_id' => $merge->music_id]);
                $this->commentReplyRepository->getModel()::where('music_id', $music->music_id)->update(['music_id' => $merge->music_id]);


                // check quality
                if($mergeQualityMax < $musicQualityMax) {
                    $merge->music_new_id = $music->music_id;
                }
                $merge->save();
                $music->music_deleted = $merge->music_id;
                $this->musicDeletedRepository->getModel()::create($music->toArray());
                $music->delete();
                $url = Helpers::listen_url($merge->toArray());
            }else{
                //  Trường hợp ID1 < ID2
                // add listen & downlaod
                $music->music_listen = $music->music_listen + $merge->music_listen;
                $music->music_downloads = $music->music_downloads + $merge->music_downloads;
                $musicListen->music_listen = $musicListen->music_listen + $mergeListen->music_listen;
                $musicListen->music_listen_today = $musicListen->music_listen_today + $mergeListen->music_listen_today;
                $musicDownload->music_downloads = $mergeDownload->music_downloads + $mergeListen->music_downloads;
                $musicDownload->music_downloads_today = $mergeDownload->music_downloads_today + $mergeListen->music_downloads_today;
                // add comment & search * comment
                $music->music_search_result = $music->music_search_result + $merge->music_search_result;
                $music->music_favourite = $music->music_favourite + $merge->music_favourite;
                $music->music_comment = $music->music_comment + $merge->music_comment;
                $this->musicFavouriteRepository->getModel()::where('music_id', $merge->music_id)->update(['music_id' => $music->music_id]);
                $this->commentRepository->getModel()::where('music_id', $merge->music_id)->update(['music_id' => $music->music_id]);
                $this->commentReplyRepository->getModel()::where('music_id', $merge->music_id)->update(['music_id' => $music->music_id]);

                // check quality
                if($musicQualityMax < $mergeQualityMax) {
                    $music->music_new_id = $merge->music_id;
                }
                $merge->music_deleted = $music->music_id;
                $music->save();
                $this->musicDeletedRepository->getModel()::create($merge->toArray());
                $merge->delete();
                $url = Helpers::listen_url($music->toArray());
            }
            Helpers::ajaxResult(true, 'Nhập bài hát thành công', ['url' => $url]);
        }
        Helpers::ajaxResult(false, 'Lỗi ngoài hệ thống nhập', null);
    }
    public function checkMusicBitrate(Request $request) {
        if($request->music_id) {
            $upload = $this->uploadRepository->findOnlyPublished($request->music_id);
            if($upload && $upload->music_bitrate_fixed_by > 0) {
                $user = $this->userRepository->findOnlyPublished($upload->music_bitrate_fixed_by)->first();
                Helpers::ajaxResult(true, '', ['user_bitrate_fixed' => $user->username]);
            }
        }
        Helpers::ajaxResult(false, '', []);
    }
}
