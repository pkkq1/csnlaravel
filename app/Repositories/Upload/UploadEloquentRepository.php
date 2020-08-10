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
            ->where('music_id', $id)
            ->first();

        return $result;
    }
    public function findMusicStatus($userId, $id, $stageArr = [])
    {
        $result = $this
            ->_model
            ->where('music_id', $id);
        if($userId != 'permission_duyet_csn') {
            $result = $result->where('music_user_id', $userId);
        }
        if($stageArr) {
            $result = $result->whereIn('music_state', $stageArr);
        }
        return $result->first();
    }
    /**
     * Create
     * @return mixed
     */
    public function create(array $attributes)
    {
        $attributes['music_time'] = time();
        $result = $this->_model::firstOrCreate($attributes);
        return $result;
    }
    public function musicByUser($userId, $stageArr, $fillOrder, $typeOrder, $page)
    {
        $result = $this->_model::select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_bitrate', 'music_filename', 'music_updated', 'music_last_update_time', 'music_note', 'music_time', 'music_username')
            ->where('music_user_id', $userId);
        if(count($stageArr) == 1) {
            $result = $result->where('music_state', $stageArr[0]);
        }elseif(count($stageArr) == 2){
            $result = $result->where(function($q) use ($stageArr) {
                $q->where('music_state', $stageArr[0])
                    ->orWhere('music_state', $stageArr[1]);
            });
        }elseif(count($stageArr) == 3){
            $result = $result->where(function($q) use ($stageArr) {
                $q->where('music_state', $stageArr[0])
                    ->orWhere('music_state', $stageArr[1])
                    ->orWhere('music_state', $stageArr[2]);
            });
        }elseif(count($stageArr) == 4){
            $result = $result->where(function($q) use ($stageArr) {
                $q->where('music_state', $stageArr[0])
                    ->orWhere('music_state', $stageArr[1])
                    ->orWhere('music_state', $stageArr[2])
                    ->orWhere('music_state', $stageArr[3]);
            });
        }
        $result = $result->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function musicByStage($where = [], $stageArr, $fillOrder, $typeOrder, $page, $user = null, $timeLimit = SHORT_TIME_7_DAY, $relationshipMusic = false)
    {
        $result = $this->_model::select('csn_upload.music_id', 'csn_upload.cat_id', 'csn_upload.cat_level', 'csn_upload.cover_id', 'csn_upload.music_title', 'csn_upload.music_artist', 'csn_upload.music_artist_id', 'csn_upload.music_album_id', 'csn_upload.music_bitrate', 'csn_upload.music_filename', 'csn_upload.music_updated', 'csn_upload.music_last_update_time', 'csn_upload.music_note', 'csn_upload.music_time', 'csn_upload.music_username');
//            ->where('music_time', '>=', time() - $timeLimit);
        if($user) {
            $result = $result->where('csn_upload.music_last_update_by', $user);
        }
        if($where) {
            $result = $result->where($where);
        }
        if(count($stageArr) == 1) {
            $result = $result->where('csn_upload.music_state', $stageArr[0]);
        }elseif(count($stageArr) == 2){
            $result = $result->where(function($q) use ($stageArr) {
                $q->where('csn_upload.music_state', $stageArr[0])
                    ->orWhere('csn_upload.music_state', $stageArr[1]);
            });
        }elseif(count($stageArr) == 3){
            $result = $result->where(function($q) use ($stageArr) {
                $q->where('csn_upload.music_state', $stageArr[0])
                    ->orWhere('csn_upload.music_state', $stageArr[1])
                    ->orWhere('csn_upload.music_state', $stageArr[2]);
            });
        }elseif(count($stageArr) == 4){
            $result = $result->where(function($q) use ($stageArr) {
                $q->where('csn_upload.music_state', $stageArr[0])
                    ->orWhere('csn_upload.music_state', $stageArr[1])
                    ->orWhere('csn_upload.music_state', $stageArr[2])
                    ->orWhere('csn_upload.music_state', $stageArr[3]);
            });
        }
        if($relationshipMusic) {
            $result = $result->join('csn_music_listen', 'csn_upload.music_id', 'csn_music_listen.music_id');
        }
        $result = $result->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
//        if($result->total <= 30) {
//            if($timeLimit == SHORT_TIME_3_DAY) {
//                $timeLimit = SHORT_TIME_7_DAY;
//            }elseif($timeLimit == SHORT_TIME_7_DAY) {
//                $timeLimit = SHORT_TIME_30_DAY;
//            }
//            self::musicByStage($stageArr, $fillOrder, $typeOrder, $page, $user, $timeLimit);
//        }
        return $result;
    }
}

