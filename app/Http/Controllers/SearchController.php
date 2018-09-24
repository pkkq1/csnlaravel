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
        $search = $request->q;
        $result = [];
        if($search) {
            $result = $this->Solr->search([
                'music_title_charset_str' => str_replace(' ','%20', $search)
            ], ($request->page ?? 1), ROWS_SEARCH_PAGING, array('music_title_str' => 'asc'));
        }
        $titleSearch = $search.' | ';
        $musicResult = [];
        if($result['data']) {
            $ids = [];
            foreach($result['data'] as $item) {
                $ids[] = $item->id;
            }
            $musicResult = $this->musicRepository->findMusicIds($ids)->toArray();
        }
        return view('search.index', compact('result', 'titleSearch', 'search', 'musicResult'));
    }
    public function ajaxSearch(Request $request) {
        $search = $request->q;
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
            $resultMusic = $this->Solr->search([
                'music_title_charset_str' => str_replace(' ','%20', $search),
            ], ($request->page ?? 1), $request->rows ?? ROWS_SEARCH_PAGING, array('music_listen_today' => 'desc'));
            $resultArtist = $this->Solr->search([
                'artist_nickname_charset_str' => str_replace(' ','%20', $search),
            ], ($request->page ?? 1), $request->rows ?? ROWS_SEARCH_PAGING, array('artist_nickname_str' => 'asc'));
            $resultAlbum = $this->Solr->search([
                'music_album_charset_str' => str_replace(' ','%20', $search)
            ], ($request->page ?? 1), $request->rows ?? ROWS_SEARCH_PAGING, array('music_title_str' => 'asc'));
            $resultVideo = $this->Solr->search([
                'video_title_charset_str' => str_replace(' ','%20', $search),
            ], ($request->page ?? 1), $request->rows ?? ROWS_SEARCH_PAGING, array('video_listen_today' => 'desc'));
            if($resultMusic) {
                foreach ($resultMusic['data'] as $item) {
                    $result[0]['music']['data'][] = [
                        'id' => Helpers::encodeID($item->id),
                        'music_title' => $item->music_title[0],
                        'music_artist' => $item->music_artist[0],
                        'music_bitrate' => $item->music_bitrate[0],
                        'music_link' => $item->music_link[0],
                        'music_cover' => $item->music_cover[0],
                    ];
                }
            }
            if($resultArtist) {
                foreach ($resultArtist['data'] as $item) {
                    $result[0]['artist']['data'][] = [
                        'id' => Helpers::encodeID($item->id),
                        'artist_nickname' => $item->artist_nickname[0],
                        'artist_link' => '#',
                        'artist_cover' => 'https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/5/c57f754298fb51e7afa9802433166db0_1508817474.jpg'
                    ];
                }
            }
            if($resultAlbum) {
                foreach ($resultAlbum['data'] as $item) {
                    $result[0]['album']['data'][] = [
                        'id' => Helpers::encodeID($item->id),
                        'music_album' => $item->music_album[0],
                        'album_link' => '#',
                        'album_bitrate' => 'Lossless',
                        'album_artist' => '<a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a>',
                        'album_cover' => 'https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/e/7/f/5e7fd038c6d33ec18a2bdd0267649315.jpg'
                    ];
                }
            }
            if($resultVideo) {
                foreach ($resultVideo['data'] as $item) {
                    $result[0]['video']['data'][] = [
                        'id' => Helpers::encodeID($item->id),
                        'video_title' => $item->video_title[0],
                        'video_artist' => $item->video_artist[0],
                        'video_bitrate' => $item->video_bitrate[0],
                        'video_link' => $item->video_link[0],
                        'video_cover' => $item->video_cover[0],
                    ];
                }
            }
        }
        return response((array)$result);
    }

}