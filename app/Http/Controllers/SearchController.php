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
use App\Repositories\Music\MusicEloquentRepository;
use App\Library\Helpers;
use App\Solr\Solarium;
use App\Repositories\Category\CategoryEloquentRepository;

class SearchController extends Controller
{
    protected $categoryListenRepository;
    protected $musicRepository;
    protected $Solr;

    public function __construct(CategoryEloquentRepository $categoryListenRepository, Solarium $Solr, MusicEloquentRepository $musicRepository) {
        $this->categoryListenRepository = $categoryListenRepository;
        $this->musicRepository = $musicRepository;
        $this->Solr = $Solr;
    }
    public function index(Request $request) {
        $search = mb_strtolower($request->q, 'UTF-8');
        $request->view_music = true;
        $request->view_album = true;
        $request->view_video = true;
        $request->view_artist= true;
        $result = $this->ajaxSearch($request, false);
        $titleSearch = $search.' | ';
        $result = $result[0];
        if(!$search)
            return redirect('/');
        return view('search.index', compact('result', 'titleSearch', 'search', 'result'));
    }
    public function ajaxSearch(Request $request, $quickSearch = true) {
//        $search = Helpers::strReplaceSolr($request->q);
        $search = trim(mb_strtolower($request->q, 'UTF-8'));
        $searchExp = explode(' ', $search);
        foreach ($searchExp as $key => $item) {
            if(mb_detect_encoding($item) != 'UTF-8')
                unset($searchExp[$key]);
        }
        $searchNotUtf8 = implode('+', $searchExp);
        $result[0] = [
            'q' =>  $search,
            'music' => [
                'data' => []
            ],
            'video' => [
                'data' => []
            ],
            'artist' => [
                'data' => []
            ],
            'album' => [
                'data' => []
            ],
        ];
        if($search) {
            $searchTool = Helpers::replaceKeySearch($search);
            //$searchTool = $search;
            $rawTiengViet = Helpers::rawTiengVietUrl($searchTool, ' ');
            $charsetNoSpace = str_replace(' ', '', $rawTiengViet);
            $titleCharset = str_replace(' ', '+', $rawTiengViet);
            $titleSearch = str_replace(' ', '+', $searchTool);//Helpers::replaceKeySearch($searchNotUtf8);
            // search key
            if(isset($request->view_all) || isset($request->view_music)) {
                $searchSolarium = [];
                //$searchSolarium['music_title_charset_nospace'] = $charsetNoSpace .'^1000';
                if ($quickSearch) {
                    $searchSolarium['music_title_charset_nospace'] = $charsetNoSpace . '^500';
                    $searchSolarium['music_title_artist_charset_nospace'] = $charsetNoSpace . '^100 | music_title_artist_charset_nospace:' . $charsetNoSpace . '*^50';
                }
    //            $searchSolarium['music_title_artist_charset'] = $titleCharset;
                if($titleSearch) {
                    //$searchSolarium['music_title_artist_search'] = $titleSearch;
                    $searchSolarium['music_title_charset'] = $titleCharset . '^2';
                    $searchSolarium['music_artist_charset'] = $titleCharset;

                    if ($titleSearch != $titleCharset) {
                        $searchSolarium['music_title_search'] = $titleSearch . '^2';
                        $searchSolarium['music_artist_search'] = $titleSearch;
                    }
                }

                $search_level = 1;

                search_music_2:
                if ($search_level == 2)
                {
                    $searchSolarium['music_artist_charset'] = '';
                    if ($titleSearch != $titleCharset) {
                        $searchSolarium['music_artist_search'] = '';
                    }
                }

                $resultMusic = $this->Solr->search($searchSolarium, ($request->page_music ?? 1), $request->rows ?? ROWS_MUSIC_SEARCH_PAGING, array('score' => 'desc', 'music_downloads_this_week' => 'desc', 'music_downloads_today' => 'desc', 'music_listen' => 'desc'));
                if($resultMusic['data']) {
                    foreach ($resultMusic['data'] as $item) {
                        $result[0]['music']['data'][] = [
                            'music_title' => $item['music_title'][0],// . ' | ' . $titleCharset . $item['score'] . ' { ' . $item['music_downloads_this_week'][0] . ' }' . $search_level,
                            'music_artist' => $item['music_artist'][0],
                            'music_bitrate' => $item['music_bitrate'][0],
                            'music_link' => $item['music_link'][0],
                            'music_listen' => $item['music_listen'][0],
                            'music_filename' => '', //$item['music_file_name'][0]
                            'music_cover' => $item['music_cover'][0],
                        ];

                        if ($search_level == 1)
                        {
                            if ($item['music_title_charset_nospace'][0] == $charsetNoSpace)
                            {
                                $search_level = 2;
                                $result[0]['music']['data'] = [];
                                goto search_music_2;
                            }
                        }
                    }
                }
                $result[0]['music']['rows'] = $resultMusic['rows'];
                $result[0]['music']['page'] = $resultMusic['page'];
                $result[0]['music']['row_total'] = $resultMusic['row_total'];
            }
            if(isset($request->view_all) || isset($request->view_artist)) {
                $searchSolarium = [];
                if($quickSearch)
                    $searchSolarium['artist_nickname_charset_nospace'] =  $charsetNoSpace . '^100 | artist_nickname_charset_nospace:'.$charsetNoSpace.'*^50';
                $searchSolarium['artist_nickname_charset'] = $titleCharset;
                if($titleSearch != $titleCharset) {
                    $searchSolarium['artist_nickname_search'] = $titleSearch;
                }
                $resultArtist = $this->Solr->search($searchSolarium, ($request->page_artist ?? 1), $request->rows ?? ROWS_ARTIST_SEARCH_PAGING, array('score' => 'desc', 'music_total' => 'desc'));
                if($resultArtist['data']) {
                    foreach ($resultArtist['data'] as $item) {
                        $result[0]['artist']['data'][] = [
                            'artist_nickname' => $item['artist_nickname'][0],
                            'artist_link' =>  $item['artist_link'][0],
                            'artist_cover' => $item['artist_cover'][0],
                            'artist_avatar' => $item['artist_avatar'][0],
                        ];
                    }
                }
                $result[0]['artist']['rows'] = $resultArtist['rows'];
                $result[0]['artist']['page'] = $resultArtist['page'];
                $result[0]['artist']['row_total'] = $resultArtist['row_total'];
            }
            if(isset($request->view_all) || isset($request->view_album)) {

                if($quickSearch)
                    $searchSolarium['music_album_charset_nospace'] =  $charsetNoSpace . '^100 | music_album_charset_nospace:'.$charsetNoSpace.'*^50';
                $searchSolarium['music_album_charset'] = $titleCharset;
                if($titleSearch)
                    $searchSolarium['music_album_search'] = $titleSearch;
                $resultAlbum = $this->Solr->search([
                    'music_album_charset' => $titleCharset,
                    'music_album' => $searchNotUtf8,
                ], ($request->page_album ?? 1), $request->rows ?? ROWS_ALBUM_SEARCH_PAGING, array('score' => 'desc'));
                if($resultAlbum['data']) {
                    foreach ($resultAlbum['data'] as $item) {
                        $result[0]['album']['data'][] = [
                            'music_album' => $item['music_album'][0],
                            'album_link' => $item['album_link'][0],
                            'album_id' => $request->view_album ? $item['id'] : '',
                            'album_bitrate' => $item['music_bitrate'][0],
                            'album_artist' => isset($item['music_artist']) ? $item['music_artist'][0] : '',
                            'album_cover' => isset($item['album_cover']) ? $item['album_cover'][0] : '',
                        ];
                    }
                }
                $result[0]['album']['rows'] = $resultAlbum['rows'];
                $result[0]['album']['page'] = $resultAlbum['page'];
                $result[0]['album']['row_total'] = $resultAlbum['row_total'];
            }
            if(isset($request->view_all) || isset($request->view_video)) {
                $searchSolarium = [];
                if($quickSearch) {
                    $searchSolarium['video_title_charset_nospace'] = $charsetNoSpace . '^500';
                    $searchSolarium['video_title_artist_charset_nospace'] = $charsetNoSpace . '^100 | video_title_artist_charset_nospace:' . $charsetNoSpace . '*^50';
                }
                if($titleSearch) {
                    $searchSolarium['video_title_charset'] = $titleCharset . '^2';
                    $searchSolarium['video_artist_charset'] = $titleCharset;

                    if ($titleSearch != $titleCharset) {
                        $searchSolarium['video_title_search'] = $titleSearch . '^2';
                        $searchSolarium['video_artist_search'] = $titleSearch;
                    }
                }

                $search_level = 1;

                search_video_2:
                if ($search_level == 2)
                {
                    $searchSolarium['video_artist_charset'] = '';
                    if ($titleSearch != $titleCharset) {
                        $searchSolarium['video_artist_search'] = '';
                    }
                }

                $resultVideo = $this->Solr->search($searchSolarium, ($request->page_video ?? 1), $request->rows ?? ROWS_VIDEO_SEARCH_PAGING, array('score' => 'desc', 'video_downloads_max_week' => 'desc', 'video_downloads_today' => 'desc', 'video_listen' => 'desc'));
                if($resultVideo['data']) {
                    foreach ($resultVideo['data'] as $item) {
                        $result[0]['video']['data'][] = [
                            'video_title' => $item['video_title'][0],
                            'video_artist' => $item['video_artist'][0],
                            'video_bitrate' => $item['video_bitrate'][0],
                            'video_link' => $item['video_link'][0],
                            'video_cover' => isset($item['video_cover']) ? $item['video_cover'][0] : '',
                            'video_listen' => $item['video_listen_total'][0],
                            'music_length' => $item['music_length'][0],
                        ];

                        if ($search_level == 1)
                        {
                            if ($item['video_title_charset_nospace'][0] == $charsetNoSpace)
                            {
                                $search_level = 2;
                                $result[0]['video']['data'] = [];
                                goto search_video_2;
                            }
                        }
                    }
                }
                $result[0]['video']['rows'] = $resultVideo['rows'];
                $result[0]['video']['page'] = $resultVideo['page'];
                $result[0]['video']['row_total'] = $resultVideo['row_total'];
            }
        }
        return ($request->type == 'json' ? response((array)$result) : $result);
    }

}