<?php
namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;
use DB;
class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\CategoryCsnModel::class;
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
    public function getCategoryParentByUrl($url)
    {
        $result = $this
            ->_model
            ->where('cat_url', $url)
            ->where('cat_level', 0)
            ->first();
        return $result;
    }
    public function getCategorySub($idParent, $url)
    {
        $result = $this
            ->_model
            ->where('cat_id', $idParent)
            ->where('cat_url', $url)
            ->first();
        return $result;
    }


}

