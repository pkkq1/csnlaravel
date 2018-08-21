<?php
namespace App\Repositories\Upload;

use App\Repositories\EloquentRepository;
use DB;
class UploadEloquentRepository extends EloquentRepository implements UploadRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\UploadModel::class;
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

    /**
     * Create
     * @return mixed
     */
    public function create(array $attributes)
    {
        $attributes['music_last_update_time'] = strtotime(date('Y/m/d H:i:s'));
        $result = $this->_model::firstOrCreate($attributes);
        return $result;
    }
}

