<?php
namespace App\Repositories\Video;

use App\Repositories\EloquentRepository;
use DB;
use App\Library\Helpers;
use App\Models\DeleteVideoModel;

class VideoEloquentRepository extends EloquentRepository implements VideoRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\VideoModel::class;
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
            ->where('id', $id)
            ->where('is_published', 1)
            ->first();

        return $result;
    }
    public function deleteSafe($video)
    {
        $result = $this
            ->_model
            ->delete($video->music_id);
        if($result)
            DeleteVideoModel::create($video);

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
    public function getCategoryVideo($catId, $catLevel, $year = null, $fillOrder, $typeOrder, $page)
    {
        $arrWhere[] = ['cat_id', $catId];
        if($catLevel != 0) {
            $arrWhere[] = ['cat_level', $catLevel];
        }
        if($year) {
            $arrWhere[] = $year;
        }
        $result = $this->_model::where($arrWhere)
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function videoNews($fillOrder, $typeOrder, $page)
    {
        $result = $this
            ->_model
            ->select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_bitrate', 'music_filename', 'music_length')
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function findVideoByArtist($artist_id, $fillOrder, $typeOrder, $page)
    {
        $result = $this
            ->_model
            ->select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_bitrate', 'music_filename', 'music_length', 'music_width', 'music_height')
            ->where('music_artist_id', 'like', $artist_id)
            ->orWhere('music_artist_id', 'like', $artist_id.';%')
            ->orWhere('music_artist_id', 'like', '%;'.$artist_id)
            ->orWhere('music_artist_id', 'like', '%;'.$artist_id.';%')
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }

}

