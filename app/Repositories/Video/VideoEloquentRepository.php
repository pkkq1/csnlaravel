<?php
namespace App\Repositories\Video;

use App\Repositories\EloquentRepository;
use DB;
use App\Library\Helpers;

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

}

