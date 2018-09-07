<?php
namespace App\Repositories\MusicListen;

use App\Repositories\EloquentRepository;
use DB;
class MusicListenEloquentRepository extends EloquentRepository implements MusicListenRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\MusicListenModel::class;
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

    public function incrementListen($id)
    {
        $result = $this
            ->_model
            ->where('music_id', $id)
            ->update([
                'music_listen_total' => DB::raw('music_listen_total + 1'),
                'music_listen_today' => DB::raw('music_listen_today + 1'),
                'music_listen_time' => time(),
            ]);
        return $result;
    }

    /**
     * Create
     * @return mixed
     */

    /**
     * Get post only published
     * @return mixed
     */
    public function findOnlyPublished($id)
    {
        // TODO: Implement findOnlyPublished() method.
    }
}

