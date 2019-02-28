<?php
namespace App\Repositories\Music;

use App\Repositories\EloquentRepository;
use DB;
use App\Library\Helpers;
use App\Solr\Solarium;
use App\Models\MusicSuggestModel;
use App\Models\DeleteMusicModel;
use App\Models\VideoSuggestModel;

class MusicEloquentRepository extends EloquentRepository implements MusicRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    protected $Solr;

    public function __construct(Solarium $Solr) {
        parent::__construct();
        $this->Solr = $Solr;
    }

    public function getModel()
    {
        return \App\Models\MusicModel::class;
    }
    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished()
    {
        $result = $this->_model->where('is_published', 1)->get();

        return $result;
    }
    public function getQueryPublished()
    {
        return $result = $this->_model
            ->where('cat_id', '!=', CAT_VIDEO)
            ->where('music_deleted', '<', 1);

    }

    /**
     * Get post only published
     * @param $id int Post ID
     * @return mixed
     */
    public function findOnlyPublished($id)
    {
        $result = $this
            ->_model
            ->where('music_id', $id)
            ->first();

        return $result;
    }

    public function findOnlyMusicUrl($url)
    {
        $result = $this
            ->_model
            ->where('music_title_url', $url)
            ->first();

        return $result;
    }
    public function findOnlyMusicId($id)
    {
        $result = $this
            ->_model
            ->where('music_id', $id)
            ->with('musicKara')
            ->first();

        return $result;
    }
    public function deleteSafe($music)
    {
        $result = $this
            ->_model
            ->find($music->music_id);
        if($result) {
            $result->delete();
            DeleteMusicModel::create($music->toArray());

        }
        return $result;
    }
    public function findMusicIds($ids)
    {
        $result = $this
            ->_model
            ->whereIn('music_id', $ids)
            ->get();

        return $result;
    }
    public function findMusicByArtist($artist_id, $page = 1,$fillOrder, $typeOrder, $rows)
    {
//        $result = $this->_model::select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_bitrate', 'music_filename', 'music_length')
//            ->where('music_artist_id_search', 'like', '%;'.$artist_id.';%')
////            ->orWhere('music_artist_id', 'like', $artist_id.';%')
////            ->orWhere('music_artist_id', 'like', '%;'.$artist_id)
////            ->orWhere('music_artist_id_search', 'like', $artist_id)
//            ->orderBy($fillOrder, $typeOrder)
//            ->paginate($page);
        $music = $this->Solr->search(['music_artist_id' => $artist_id . ' AND -music_cat_id: ' . CAT_VIDEO], $page, $rows, ['_version_' => 'desc']);
        $result = [];
        foreach ($music['data'] as $item) {
            $result[] = [
                'music_id' => $item['music_id'][0],
                'cat_id' => $item['cover_id'][0],
                'cat_level' => $item['cat_level'][0],
                'cover_id' => $item['music_id'][0],
                'music_title' => $item['music_title'][0],
                'music_bitrate_html' => $item['music_bitrate_html'][0],
                'music_artist' => $item['music_artist'][0],
                'music_artist_id' => $item['music_artist_id'][0],
                'music_listen' => $item['music_listen'][0],
                'music_filename' => $item['music_filename'][0],
            ];
        }
        return $result;
    }
    public function musicNews($fillOrder, $typeOrder, $page)
    {
        $result = $this
            ->_model
            ->select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_bitrate', 'music_filename', 'music_length')
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function incrementCol($id, $field)
    {
        $result = $this
            ->_model
            ->where('music_id', $id)
            ->Increment($field);
        return $result;
    }
    public function decrementCol($id, $field)
    {
        $result = $this
            ->_model
            ->where('music_id', $id)
            ->decrement($field);
        return $result;
    }
    public function getCategoryMusic($catId, $catLevel, $fillOrder, $typeOrder, $page)
    {
        $arrWhere[] = ['cat_id', $catId];
        if($catLevel != 0) {
            $arrWhere[] = ['cat_level', $catLevel];
        }
        $result = $this->_model::where($arrWhere)
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function suggestion($music, $type = 'music') {
        $model = $this->_model;
        if($type == 'video') {
            $model = app()->make(
                \App\Models\VideoModel::class
            );
        }
//        $model = app()->make(
//            \App\Models\MusicSuggestModel::class
//        );
//        if($type == 'video') {
//            $model = app()->make(
//                \App\Models\VideoSuggestModel::class
//            );
//        }
        $pathDir = resource_path() . '/views/cache/suggestion/' . ceil($music->music_id / 1000) . '/';
        $file = $pathDir . $music->music_id . '.blade.php';
        if (!file_exists($pathDir)) {
            mkdir($pathDir, 0777, true);
        }else{
            if(file_exists($file)) {
                // update time to file case
                if(UPDATE_CASE_SUGGESTION_MUSIC_ONCE || (time() - filemtime($file)) < UPDATE_CASE_SUGGESTION_MUSIC) {
                    return false;
                }
            }
        }
        $select = ['music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_listen', 'music_bitrate', 'music_filename', 'music_width', 'music_height', 'music_length']; //, 'music_shortlyric'
        $artistIds = explode(';', $music->music_artist_id);


        // nhạc cùng ca sĩ
//        $MusicSameArtistEloquent = \App\Models\MusicSuggestModel::where(function($q) use ($artistIds) {
//            foreach ($artistIds as $key => $id) {
//                if($key == 0){
//                    $q->where('music_artist_id_search', 'like', '%;'.$id.';%');
////                    ->orWhere('music_artist_id', 'like', $id.';%')
////                    ->orWhere('music_artist_id', 'like', '%;'.$id)
////                    ->orWhere('music_artist_id_search', 'like', $id);
//                }else{
//                    $q->orWhere('music_artist_id_search', 'like', '%;'.$id.';%');
////                    ->orWhere('music_artist_id', 'like', $id.';%')
////                    ->orWhere('music_artist_id', 'like', '%;'.$id)
////                    ->orWhere('music_artist_id_search', 'like', $id);
//                }
//            }
//        })->select($select)
////            ->distinct('music_title')
//            ->where('music_id', '!=', $music->music_id);
////            ->orderBy('music_id', 'desc');
//        $MusicSameArtist = $MusicSameArtistEloquent->where('cover_id', '>', 0)
//            ->select($select)
//            ->limit(5)
////            ->orderBy('music_downloads_today', 'desc')
////            ->orderBy('music_downloads_this_week', 'desc')
////            ->orderBy('music_downloads', 'desc')
//            ->get()->toArray();
//        if($MusicSameArtist <= 5) {
//            $MusicSameArtist = $MusicSameArtistEloquent
//                ->limit(5 - count($MusicSameArtist))
//                ->get()->toArray();
//        }

        $searchSolarium = [];
        $searchSolarium['-id'] = 'music_'.$music->music_id. ' AND '.$type.'_id :['.ID_OLD_MUSIC.' TO *]';
        $searchSolarium['music_artist_id'] = '('.implode(' OR ', $artistIds).')';
        $MusicSameArtist= $this->Solr->search($searchSolarium, 1, 5, array('score' => 'desc', 'music_downloads_today' => 'desc', 'music_downloads_this_week' => 'desc', 'music_download' => 'desc'));
        $MusicSameArtist = $MusicSameArtist['data'];

        $searchSolarium = [];
        $searchSolarium['-id'] = 'video_'.$music->music_id. ' AND video_id :['.ID_OLD_MUSIC.' TO *]';
        $searchSolarium['video_artist_id'] = '('.implode(' OR ', $artistIds).')';
        $VideoSameArtist= $this->Solr->search($searchSolarium, 1, 5, array('score' => 'desc', 'video_downloads_today' => 'desc', 'video_downloads_this_week' => 'desc', 'video_download' => 'desc'));
        $VideoSameArtist = $VideoSameArtist['data'];
//        // video cùng ca sĩ
//        $VideoSameArtist = \App\Models\VideoSuggestModel::where(function($q) use ($artistIds) {
//            foreach ($artistIds as $key => $id) {
//                if($key == 0){
//                    $q->where('music_artist_id_search', 'like', '%;'.$id.';%');
////                        ->orWhere('music_artist_id', 'like', $id.';%')
////                        ->orWhere('music_artist_id', 'like', '%;'.$id)
////                        ->orWhere('music_artist_id', 'like', $id);
//                }else{
//                    $q->orWhere('music_artist_id_search', 'like', '%;'.$id.';%');
////                        ->orWhere('music_artist_id', 'like', $id.';%')
////                        ->orWhere('music_artist_id', 'like', '%;'.$id)
////                        ->orWhere('music_artist_id', 'like', $id);
//                }
//            }
//        })->where('music_id', '!=', $music->music_id)
//            ->select($select)
////            ->distinct('music_title')
//            ->limit(5)
////            ->orderBy('music_id', 'desc')
////            ->orderBy('music_downloads_today', 'desc')
////            ->orderBy('music_downloads_this_week', 'desc')
////            ->orderBy('music_downloads', 'desc')
//            ->get()->toArray();



//        // cùng tên khác sáng tác
//        $whereTitleDup = [['music_id', '!=',$music->music_id], ['video_download', '>=', MIN_DOWNLOAD_SUG_TITLE_SAME]];
//        if($music->music_composer) {
//            $whereTitleDup[] = ['music_composer', 'like',explode(';', $music->music_composer)[0]];
//        }
//        $titleDup = $model->where('music_title', 'like', $music->music_title)
//            ->where($whereTitleDup)
//            ->select($select)
//            ->limit(2)
////            ->orderBy('music_bitrate', 'desc')
////            ->orderBy('music_downloads_today', 'desc')
////            ->orderBy('music_downloads_this_week', 'desc')
////            ->orderBy('music_downloads', 'desc')
//            ->get()->toArray();
//
//        if($music->music_composer && !$titleDup) {
//            // remove music_composer
//            array_pop($whereTitleDup);
//            $titleDup = $model->where('music_title', 'like', $music->music_title)
//                ->where($whereTitleDup)
//                ->select($select)
//                ->limit(2)
////                ->orderBy('music_bitrate', 'desc')
////                ->orderBy('music_downloads_today', 'desc')
////                ->orderBy('music_downloads_this_week', 'desc')
////                ->orderBy('music_downloads', 'desc')
//                ->get()->toArray();
//        }
        $searchSolarium = [];
        $searchSolarium['-id'] = $type.'_'.$music->music_id. ' AND '.$type.'_id :['.ID_OLD_MUSIC.' TO *]';
        $searchSolarium[$type.'_download'] = '[' . MIN_DOWNLOAD_SUG_TITLE_SAME . ' TO *]';
        if($music->music_composer) {
            $searchSolarium[$type.'_composer'] = '("' . implode('" OR "', explode(';', $music->music_composer)).'")';
        }
//        $searchSolarium['-music_cover_id'] = 0;
        $titleDup= $this->Solr->search($searchSolarium, 1, 2, array('score' => 'desc', $type.'_bitrate_' => 'desc', $type.'_downloads_today' => 'desc', $type.'_downloads_this_week' => 'desc', $type.'_downloads' => 'desc'));
        if($music->music_composer && !$titleDup['data']) {
            unset($searchSolarium[$type.'_composer']);
            $titleDup = $this->Solr->search($searchSolarium, 1, 2, array('score' => 'desc', $type.'_bitrate_' => 'desc', $type.'_downloads_today' => 'desc', $type.'_downloads_this_week' => 'desc', $type.'_downloads' => 'desc'));
        }
        $titleDup = $titleDup['data'];



        // cùng thể loại
//        $whereTypeDup[] = $music->music_id;
//        if($titleDup) {
//            foreach ($titleDup as $item) {
//                $whereTypeDup[] = $item['music_id'][0] ?? $item['video_id'][0];
//            }
//        }
        $video = [];
        if($type != 'video') {
//            $video = \App\Models\VideoSuggestModel::where('music_title', 'like', $music->music_title)
//                ->where('music_artist', $music->music_artist)
//                ->select($select)
//                ->first();

            $titleSearch = Helpers::replaceKeySearch($music->music_title);
            $artistSearch = Helpers::replaceKeySearch($music->music_artist);
            $titleCharset = Helpers::khongdau($titleSearch, ' ');
            $artistCharset = Helpers::khongdau($artistSearch, ' ');
//            $video = $this->Solr->search(['video_title' => '("'.$music->music_title.'")', 'video_artist' => '("'.$music->music_artist.'")'], 1, 1);
            $video = $this->Solr->search(['video_title_artist_charset_nospace' => '"'.str_replace(' ', '', $titleCharset) .''. str_replace(' ', '', $artistCharset).'"'], 1, 1);
            $video = $video['data'];
        }
        // close connect database
//        DB::disconnect('mysql_beta');
//        DB::disconnect('mysql');
        $MusicSameArtistResult = [];
        foreach ($MusicSameArtist as  $key => $item) {
            foreach ($item as $ele => $val) {
                $MusicSameArtistResult[$key][$ele] = $val[0];
            }
            unset($MusicSameArtistResult[$key]['id']);
        }
        $VideoSameArtistResult = [];
        foreach ($VideoSameArtist as  $key => $item) {
            foreach ($item as $ele => $val) {
                $VideoSameArtistResult[$key][$ele] = $val[0];
            }
            unset($VideoSameArtistResult[$key]['id']);
        }
        $titleDupResult = [];
        foreach ($titleDup as  $key => $item) {
            foreach ($item as $ele => $val) {
                $titleDupResult[$key][$ele] = $val[0];
            }
            unset($titleDupResult[$key]['id']);
        }
        $videoResult = [];
        if($video){
            foreach ($video as  $key => $item) {
                foreach ($item as $ele => $val) {
                    $videoResult[$ele] = $val[0];
                }
                unset($videoResult['id']);
            }
        }
        $pathDir = resource_path() . '/views/cache/suggestion/' . ceil($music->music_id / 1000) . '/';
        file_put_contents($pathDir . $music->music_id . '.blade.php',
            '<?php 
if ( !ENV(\'IN_PHPBB\') )
{
    die(\'Hacking attempt\');
    exit;
}
global $MusicSameArtist;
global $VideoSameArtist;
global $titleDup;
global $video;
    
$MusicSameArtist = ' .str_replace('video_', 'music_',  var_export($MusicSameArtistResult, true)) . ';
$VideoSameArtist = ' .str_replace('video_', 'music_',  var_export($VideoSameArtistResult, true)) . ';
$titleDup = ' . str_replace('video_', 'music_',  var_export($titleDupResult, true)) . ';
$video = ' . str_replace('video_', 'music_',  var_export($videoResult, true)) . ';
?>');
    }
    public static function getHistoryRecents($tempStr) {
        $query  = "SELECT *
            FROM
            (
            (SELECT music_id, cat_id, cat_level, cover_id, music_title, music_title_url, music_artist, 'music' as type
            FROM csn_music
            WHERE music_id in (".$tempStr."))
            UNION All
            (SELECT music_id, cat_id, cat_level, cover_id, music_title, music_title_url, music_artist, 'video' as type
            FROM csn_video
            WHERE music_id in (".$tempStr."))
            ) tbl
            ORDER BY FIELD(music_id, ".$tempStr.")";
        $result = DB::connection( 'mysql' )->select( $query );
        return $result;
    }
}

