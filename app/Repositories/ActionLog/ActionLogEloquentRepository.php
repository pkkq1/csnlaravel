<?php
namespace App\Repositories\ActionLog;

use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;
use DB;
class ActionLogEloquentRepository extends EloquentRepository implements ActionLogRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\ActionLogModel::class;
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
    public function addAction($name, $text, $music_id = null) {
        $Agent = new Agent();
        $result = $this
            ->_model
            ->create([
                'name' => $name,
                'text' => $text,
                'music_id' => $music_id,
                'mod' => $Agent->isMobile() ? 'mobile' : 'web',
                'user_id' => (Auth::check() ? Auth::user()->id : ''),
                'permission_current' => implode(', ', backpack_user()->getAllPermissions()->pluck('name')->toArray()),
            ]);
        return $result;
    }

}

