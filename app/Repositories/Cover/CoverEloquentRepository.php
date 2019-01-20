<?php
namespace App\Repositories\Cover;

use App\Repositories\EloquentRepository;
use DB;
class CoverEloquentRepository extends EloquentRepository implements CoverRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\CoverModel::class;
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
    public function getCoverNew($orderBy = 'album_last_updated')
    {
        $result = $this->_model::where('music_year', CURRENT_YEAR)
            ->where('album_music_total', '>', 0)
            ->join('csn_music', 'csn_music.cover_id', 'csn_cover.cover_id')
//            ->with('music')
            ->orderBy($orderBy, 'desc')->limit(20)->get();
        return $result;
    }
    public function findCover($id, $userId = null)
    {
        $result = $this
            ->_model
            ->where('cover_id', $id);
        if($userId){
            $result = $result->where('user_id', $userId);
        }
        return $result->first();
;
    }
    public function getCoverNew2()
    {
        $result = $this->_model::where('music_year', '<', CURRENT_YEAR)
            ->join('csn_music', 'csn_music.cover_id', 'csn_cover.cover_id')
//            ->with('music')
            ->orderBy('cover_id', 'desc')->limit(20)->get();
        return $result;
    }
    public function getCoverHot()
    {
        $result = $this->_model::where('music_year', CURRENT_YEAR)->with('music')->orderBy('cover_id', 'desc')->limit(20)->get();
        return $result;
    }
    public function getCoverMusicById($id) {
//        $result = $this->_model::where('cover_id', $id)->with('music', 'video')->first();
        $result = $this->_model::where('cover_id', $id)->with('music')->first();
        return $result;
    }
    public function getCategoryCover($catId, $catLevel, $year = null, $bitrate = null, $fillOrder, $typeOrder, $page)
    {
        $arrWhereCat[] = ['album_cat_id_1', $catId];
        $arrWhereCat2[] = ['album_cat_id_2', $catId];
        if($catLevel != 0) {
            $arrWhereCat[] = ['album_cat_level_1', $catLevel];
            $arrWhereCat2[] = ['album_cat_level_2', $catLevel];
        }
        $arrWhere[] = ['cover_id',  '!=', 0];
        if($year) {
            $arrWhere[] = $year;
        }
        if($bitrate) {
            $arrWhere[] = ['music_bitrate', $bitrate];
        }
        $result = $this->_model::where(function($q) use ($arrWhereCat, $arrWhereCat2) {
                $q->where($arrWhereCat)
                    ->orWhere($arrWhereCat2);
            })
            ->where($arrWhere)
            ->where('album_music_total', '>', 0)
            ->join('csn_music', 'csn_music.cover_id', 'csn_cover.cover_id')
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function findAlbumByArtist($artist, $fillOrder, $typeOrder, $page)
    {
        $result = $this
            ->_model::where(function($q) use ($artist) {
                $q->where('album_artist_id_1', 'like', '%'.$artist.'%')
                    ->orWhere('album_artist_id_2', 'like', '%'.$artist.'%');
            })
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function findCoverByUser($userId, $fillOrder, $typeOrder, $page)
    {
        $result = $this->_model::where('user_id', $userId)
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
    public function coverNews($fillOrder, $typeOrder, $page)
    {
        $result = $this
            ->_model
            ->orderBy($fillOrder, $typeOrder)
            ->paginate($page);
        return $result;
    }
}

