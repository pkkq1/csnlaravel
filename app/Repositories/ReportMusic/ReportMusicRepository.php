<?php
namespace App\Repositories\ReportMusic;

use App\Repositories\EloquentRepository;
use DB;
class ReportMusicRepository extends EloquentRepository implements ReportMusicRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\ReportMusicModel::class;
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
            ->where('artist_id', $id)
            ->first();

        return $result;
    }

    /**
     * Create
     * @return mixed
     */

}

