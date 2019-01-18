<?php
namespace App\Repositories\Music;

use App\Repositories\EloquentRepository;
use DB;
use App\Library\Helpers;

class MusicEloquentRepository extends EloquentRepository implements MusicRepositoryInterface
{
    /**
     * get model
     * @return string
     */
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
    public function findMusicIds($ids)
    {
        $result = $this
            ->_model
            ->whereIn('music_id', $ids)
            ->get();

        return $result;
    }
    public function findMusicByArtist($artist_id, $fillOrder, $typeOrder, $page)
    {
        $result = $this
            ->_model
            ->select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_bitrate', 'music_filename', 'music_length')
            ->where('music_artist_id', 'like', $artist_id)
            ->orWhere('music_artist_id', 'like', $artist_id.';%')
            ->orWhere('music_artist_id', 'like', '%,'.$artist_id)
            ->orWhere('music_artist_id', 'like', '%;'.$artist_id.';%')
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
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
        $pathDir = resource_path() . '/views/cache/suggestion/' . ceil($music->music_id / 1000) . '/';
        $file = $pathDir . $music->music_id . '.blade.php';
        if (!file_exists($pathDir)) {
            mkdir($pathDir, 0777, true);
        }else{
            if(file_exists($file)) {
                // update time to file case
                if((time() - filemtime($file)) < UPDATE_CASE_SUGGESTION_MUSIC || UPDATE_CASE_SUGGESTION_MUSIC_ONCE) {
                    return false;
                }
            }
        }
        $select = ['music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_bitrate', 'music_filename', 'music_width', 'music_height', 'music_length']; //, 'music_shortlyric'
        $artistIds = explode(';', $music->music_artist_id);
        // nhạc cùng ca sĩ
        $MusicSameArtistEloquent = \App\Models\MusicModel::where(function($q) use ($artistIds) {
            foreach ($artistIds as $key => $id) {
                if($key == 0){
                    $q->where('music_artist_id', 'like', $id)
                    ->orWhere('music_artist_id', 'like', $id.';%')
                    ->orWhere('music_artist_id', 'like', '%,'.$id)
                    ->orWhere('music_artist_id', 'like', '%;'.$id.';%');
                }else{
                    $q->orWhere('music_artist_id', 'like', $id)
                    ->orWhere('music_artist_id', 'like', $id.';%')
                    ->orWhere('music_artist_id', 'like', '%,'.$id)
                    ->orWhere('music_artist_id', 'like', '%;'.$id.';%');
                }
            }
        })->select($select)
            ->where('music_id', '!=', $music->music_id)
            ->distinct('music_title')
            ->orderBy('music_id', 'desc');

        $MusicSameArtist = $MusicSameArtistEloquent->where('cover_id', '>', 0)
            ->select($select)
            ->limit(5)
//            ->orderBy('music_downloads_today', 'desc')
//            ->orderBy('music_downloads_this_week', 'desc')
//            ->orderBy('music_downloads', 'desc')
            ->get()->toArray();
        if($MusicSameArtist <= 5) {
            $MusicSameArtist = $MusicSameArtistEloquent
                ->limit(5 - count($MusicSameArtist))
                ->get()->toArray();
        }
        // video cùng ca sĩ
        $VideoSameArtist = \App\Models\VideoModel::where(function($q) use ($artistIds) {
            foreach ($artistIds as $key => $id) {
                if($key == 0){
                    $q->where('music_artist_id', 'like', $id)
                        ->orWhere('music_artist_id', 'like', $id.';%')
                        ->orWhere('music_artist_id', 'like', '%,'.$id)
                        ->orWhere('music_artist_id', 'like', '%;'.$id.';%');
                }else{
                    $q->orWhere('music_artist_id', 'like', $id)
                        ->orWhere('music_artist_id', 'like', $id.';%')
                        ->orWhere('music_artist_id', 'like', '%,'.$id)
                        ->orWhere('music_artist_id', 'like', '%;'.$id.';%');
                }
            }
        })->where('music_id', '!=', $music->music_id)
            ->select($select)
            ->distinct('music_title')
            ->limit(5)
            ->orderBy('music_id', 'desc')
//            ->orderBy('music_downloads_today', 'desc')
//            ->orderBy('music_downloads_this_week', 'desc')
//            ->orderBy('music_downloads', 'desc')
            ->get()->toArray();
        // cùng tên khác ca sĩ
        $whereTitleDup = [['music_id', '!=',$music->music_id], ['music_downloads', '>=', MIN_DOWNLOAD_SUG_TITLE_SAME]];
        if($music->music_composer) {
            $whereTitleDup[] = ['music_composer', 'like',explode(';', $music->music_composer)[0]];
        }
        $titleDup = $model->where('music_title', 'like', $music->music_title)
            ->where($whereTitleDup)
            ->select($select)
            ->limit(2)
            ->orderBy('music_bitrate', 'desc')
            ->orderBy('music_downloads_today', 'desc')
            ->orderBy('music_downloads_this_week', 'desc')
            ->orderBy('music_downloads', 'desc')
            ->get()->toArray();

        if($music->music_composer && !$titleDup) {
            // remove music_composer
            array_pop($whereTitleDup);
            $titleDup = $model->where('music_title', 'like', $music->music_title)
                ->where($whereTitleDup)
                ->select($select)
                ->limit(2)
                ->orderBy('music_bitrate', 'desc')
                ->orderBy('music_downloads_today', 'desc')
                ->orderBy('music_downloads_this_week', 'desc')
                ->orderBy('music_downloads', 'desc')
                ->get()->toArray();
        }
        // cùng thể loại
        $whereTypeDup = [['music_id', '!=', $music->music_id]];
        if($titleDup) {
            foreach ($titleDup as $item) {
                $whereTypeDup[] = ['music_id', '!=', $item['music_id']];
            }
        }

        $video = [];
        if($type != 'video') {
            $video = \App\Models\VideoModel::where('music_title', 'like', $music->music_title)
                ->where('music_artist', $music->music_artist)
                ->select($select)
                ->orderBy('music_listen', 'desc')->first();
        }

        foreach ($MusicSameArtist as  $key => $item) {
            $MusicSameArtist[$key]['music_bitrate_html'] = Helpers::bitrate2str($item['music_bitrate']);
            $MusicSameArtist[$key]['music_artist_html'] = Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']);
        }
        foreach ($VideoSameArtist as  $key => $item) {
            $VideoSameArtist[$key]['music_bitrate_html'] = Helpers::size2str($item['music_artist_id'], $item['music_artist']);
            $VideoSameArtist[$key]['music_artist_html'] = Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']);
        }
        foreach ($titleDup as  $key => $item) {
            $titleDup[$key]['music_bitrate_html'] = Helpers::bitrate2str($item['music_bitrate']);
            $titleDup[$key]['music_artist_html'] = Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']);
        }
        if($video){
            $video['music_bitrate_html'] = Helpers::size2str($video['music_width'], $video['music_height']);
            $video['music_artist_html'] = Helpers::rawHtmlArtists($video['music_artist_id'], $video['music_artist']);
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
    
$MusicSameArtist = ' . var_export($MusicSameArtist, true) . ';
$VideoSameArtist = ' . var_export($VideoSameArtist, true) . ';
$titleDup = ' . var_export($titleDup, true) . ';
$video = ' . var_export($video ? $video->toArray(): [], true) . ';
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

