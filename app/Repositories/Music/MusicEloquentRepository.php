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
    public function incrementCol($id, $field)
    {
        $result = $this
            ->_model
            ->where('music_id', $id)
            ->Increment($field);
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
        $select = ['music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_shortlyric', 'music_bitrate', 'music_filename'];
        $artists = explode(';', $music->music_artist);
        // nhạc cùng ca sĩ
        $MusicSameArtist = $model->whereIn('music_artist', $artists)
            ->where('music_id', '!=', $music->music_id)
            ->select($select)
            ->distinct('music_title')
            ->limit(10)
//            ->orderBy('music_id', 'desc')
            ->orderBy('music_downloads_today', 'desc')
            ->orderBy('music_downloads_this_week', 'desc')
            ->orderBy('music_downloads', 'desc')
            ->get()->toArray();
        // video cùng ca sĩ
        $VideoSameArtist = \App\Models\VideoModel::whereIn('music_artist', $artists)
            ->where('music_id', '!=', $music->music_id)
            ->select($select)
            ->distinct('music_title')
            ->limit(10)
//            ->orderBy('music_id', 'desc')
            ->orderBy('music_downloads_today', 'desc')
            ->orderBy('music_downloads_this_week', 'desc')
            ->orderBy('music_downloads', 'desc')
            ->get()->toArray();
        // cùng tên khác ca sĩ
        $titleDup = $model->where('music_title', 'like', $music->music_title)
            ->whereNotIn('music_artist', $artists)
            ->where('music_id', '!=', $music->music_id)
            ->where('music_downloads', '>=', MIN_DOWNLOAD_SUG_TITLE_SAME)
            ->select($select)
            ->limit(2)
            ->orderBy('music_downloads_today', 'desc')
            ->orderBy('music_downloads_this_week', 'desc')
            ->orderBy('music_downloads', 'desc')
            ->get()->toArray();
        // cùng thể loại
        $typeDup = $model->where(['cat_id' => $music->cat_id, 'cat_level' => $music->cat_level])
            ->where('music_id', '!=', $music->music_id)
            ->select($select)
            ->distinct('music_title')
            ->limit(50)
//            ->orderBy('music_id', 'desc')
            ->orderBy('music_downloads_today', 'desc')
            ->orderBy('music_downloads_this_week', 'desc')
            ->orderBy('music_downloads', 'desc')
            ->get()->toArray();
        if($type != 'video') {
            $video = \App\Models\VideoModel::where('music_title', $music->music_title)
                ->where('music_artist', $music->music_artist)
                ->select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_shortlyric', 'music_bitrate', 'music_filename')
                ->orderBy('music_listen', 'desc')->first();
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
global $typeDup;
global $video;
    
$MusicSameArtist = ' . var_export($MusicSameArtist, true) . ';
$VideoSameArtist = ' . var_export($VideoSameArtist, true) . ';
$titleDup = ' . var_export($titleDup, true) . ';
$typeDup = ' . var_export($typeDup, true) . ';
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

