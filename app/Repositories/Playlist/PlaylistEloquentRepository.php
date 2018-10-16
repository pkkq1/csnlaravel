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
        $result = $this->_model::where('playlist_user_id', $id)->orderBy('playlist_id', 'asc')->get();
        return $result;
    }
    public function getMusicByUserId($id)
    {
        $result = $this->_model::where('playlist_user_id', $id)->orderBy('playlist_title', 'desc')->with('playlist_music')->get();
        return $result;
    }
    public function getMusicByPlaylistId($id)
    {
        $result = $this->_model::where('playlist_id', $id)->orderBy('playlist_title', 'desc')->with('music', 'video')->first();
        return $result;
    }
    public function getByPlayByUser($userId, $idPlaylist = null)
    {
        $result = $this->_model::where('playlist_user_id', $userId);
        if($idPlaylist) {
            $result = $result->where('playlist_id', $idPlaylist);
        }
        return $result->orderBy('playlist_title', 'desc');
    }
    public function updatePlaylist($where, array $attributes)
    {
        $result = $this->_model::where($where)
            ->update($attributes);
        return $result;
    }

}

