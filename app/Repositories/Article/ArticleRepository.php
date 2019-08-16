<?php
namespace App\Repositories\Article;

use App\Repositories\EloquentRepository;
use DB;
class ArticleRepository extends EloquentRepository implements ArticleRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \Backpack\NewsCRUD\app\Models\Article::class;
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
            ->whereDate('date_publish', '<=', date("Y-m-d h:i"))
            ->where('status', STATUS_PUBLISHED)
            ->first();

        return $result;
    }

    public function getCategory($id) {
        $result = $this
            ->_model
            ->select('id', 'category_id', 'title', 'slug', 'short_content', 'image', 'date_publish', 'featured', 'views', 'article_by_user_name', 'article_by_user_id', 'article_by_user_id_update', 'tags_name', 'tags_slug', 'tags_id')
            ->where('category_id', $id)
            ->whereDate('date_publish', '<=', date("Y-m-d h:i"))
            ->where('status', STATUS_PUBLISHED);
        return $result;
    }

    /**
     * Create
     * @return mixed
     */

}

