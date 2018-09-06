<?php
namespace App\Repositories\Playlist;

use App\Repositories\EloquentRepository;
use DB;
class PlaylistEloquentRepository extends EloquentRepository implements PlaylistRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\PlaylistModel::class;
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

    public function getByUserId($id)
    {
        $result = $this->_model::where('playlist_user_id', $id)->orderBy('playlist_title', 'desc')->get();
        return $result;
    }
    public function getByPlaylist($arr)
    {
        $result = $this->_model::where($arr)->orderBy('playlist_title', 'desc')->first();
        return $result;
    }
    public function incrementCol($id, $field)
    {
        $result = $this
            ->_model
            ->where('playlist_id', $id)
            ->Increment($field);
        return $result;
    }
    public function create(array $attributes)
    {
        $attributes['playlist_time'] = time();
        $attributes['playlist_status'] = 1;
        $attributes['playlist_music_total'] = 0;
        $attributes['playlist_desc'] = 'desc';
        $result = $this->_model::firstOrCreate($attributes);
        return $result;
    }

}

