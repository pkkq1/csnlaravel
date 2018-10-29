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
        $result = $this->ajaxSearch($request);
        $titleSearch = $search.' | ';
        $result = $result[0];
        if(!$search)
            return redirect('/');
        return view('search.index', compact('result', 'titleSearch', 'search', 'result'));
    }
    public function ajaxSearch(Request $request) {
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
//            $searchNoSpace = str_replace(' ','', mb_strtolower($search, 'UTF-8'));
//            $searchCharset = Helpers::rawTiengVietUrl(mb_strtolower($search, 'UTF-8'), '');
            if(isset($request->view_all) || isset($request->view_music)) {
//                dd([
//                    'music_title_charset' => Helpers::rawTiengVietUrl($search, '+'),
//                    'music_title' => $searchNotUtf8,
//                ]);
                $resultMusic = $this->Solr->search([
                    'music_title_charset' => str_replace(' ', '+', $search) . '^2',
                    'music_title' => $searchNotUtf8,
                ], ($request->page_music ?? 1), $request->rows ?? ROWS_MUSIC_SEARCH_PAGING, array('score' => 'desc','music_listen_total' => 'desc'));

                if($resultMusic['data']) {
                    foreach ($resultMusic['data'] as $item) {
                        $result[0]['music']['data'][] = [
                            'music_title' => $item['music_title'][0],
                            'music_artist' => $item['music_artist'][0],
                            'music_bitrate' => $item['music_bitrate'][0],
                            'music_link' => $item['music_link'][0],
                            'music_listen' => $item['music_listen_total'][0],
                            'music_filename' => '', //$item['music_file_name'][0]
                            'music_cover' => $item['music_cover'][0],
                        ];
                    }
                }
                $result[0]['music']['rows'] = $resultMusic['rows'];
                $result[0]['music']['page'] = $resultMusic['page'];
                $result[0]['music']['row_total'] = $resultMusic['row_total'];
            }
            if(isset($request->view_all) || isset($request->view_artist)) {
                $resultArtist = $this->Solr->search([
                    'artist_nickname' => str_replace(' ', '+', $search),
//                    'artist_nickname_no_space' => $searchNoSpace,
//                    'artist_nickname_charset' => $searchCharset,
                ], ($request->page_artist ?? 1), $request->rows ?? ROWS_ARTIST_SEARCH_PAGING, array('score' => 'desc'));
                if($resultArtist['data']) {
                    foreach ($resultArtist['data'] as $item) {
                        $result[0]['artist']['data'][] = [
                            'artist_nickname' => $item['artist_nickname'][0],
                            'artist_link' =>  $item['artist_link'][0],
                            'artist_cover' => isset($item['artist_cover']) ? $item['artist_cover'][0] : 'https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/5/c57f754298fb51e7afa9802433166db0_1508817474.jpg'
                        ];
                    }
                }
                $result[0]['artist']['rows'] = $resultArtist['rows'];
                $result[0]['artist']['page'] = $resultArtist['page'];
                $result[0]['artist']['row_total'] = $resultArtist['row_total'];
            }
            if(isset($request->view_all) || isset($request->view_album)) {
                $resultAlbum = $this->Solr->search([
                    'music_album' => str_replace(' ', '+', $search),
//                    'music_album_no_space' => $searchNoSpace,
//                    'music_album_charset' => $searchCharset
                ], ($request->page_album ?? 1), $request->rows ?? ROWS_ALBUM_SEARCH_PAGING, array('score' => 'desc'));
                if($resultAlbum['data']) {
                    foreach ($resultAlbum['data'] as $item) {
                        $result[0]['album']['data'][] = [
                            'music_album' => $item['music_album'][0],
                            'album_link' => '#',
                            'album_bitrate' => 'Lossless',
                            'album_artist' => '<a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a>',
                            'album_cover' => 'https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/e/7/f/5e7fd038c6d33ec18a2bdd0267649315.jpg'
                        ];
                    }
                }
                $result[0]['album']['rows'] = $resultAlbum['rows'];
                $result[0]['album']['page'] = $resultAlbum['page'];
                $result[0]['album']['row_total'] = $resultAlbum['row_total'];
            }
            if(isset($request->view_all) || isset($request->view_video)) {
                $resultVideo = $this->Solr->search([
                    'video_title' => str_replace(' ', '+', $search),
//                    'video_title_no_space' => $searchNoSpace,
//                    'video_title_charset' => $searchCharset,
                ], ($request->page_video ?? 1), $request->rows ?? ROWS_VIDEO_SEARCH_PAGING, array('score' => 'desc','music_listen_total' => 'desc'));
                if($resultVideo['data']) {
                    foreach ($resultVideo['data'] as $item) {
                        $result[0]['video']['data'][] = [
                            'video_title' => $item['video_title'][0],
                            'video_artist' => $item['video_artist'][0],
                            'video_bitrate' => $item['video_bitrate'][0],
                            'video_link' => $item['video_link'][0],
                            'video_cover' => isset($item['video_cover']) ? $item['video_cover'][0] : '',
                            'video_listen' => $item['video_listen_total'][0],
                        ];
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