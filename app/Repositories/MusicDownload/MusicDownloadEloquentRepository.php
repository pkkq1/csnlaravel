<?php
namespace App\Repositories\MusicDownload;

use App\Repositories\EloquentRepository;
use DB;
class MusicDownloadEloquentRepository extends EloquentRepository implements MusicDownloadRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\MusicDownloadModel::class;
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

    public function incrementDownload($id)
    {
        $result = $this
            ->_model->where('music_id', $id)
            ->first();
        if(!$result){
            $this
                ->_model
                ->create([
                    'music_id' => $id,
                    'music_downloads' => 1,
                    'music_downloads_today' => 1,
                    'music_downloads_today_0' => 1,
                    'music_downloads_time' => time(),
                ]);
        }else{
            $result->update([
                'music_downloads' => DB::raw('music_downloads + 1'),
                'music_downloads_today' => DB::raw('music_downloads_today + 1'),
                'music_downloads_today_0' => DB::raw('music_downloads_today_0 + 1'),
                'music_downloads_time' => time(),
            ]);
        }
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

