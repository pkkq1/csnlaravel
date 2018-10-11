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
    public function bxhCategory($idCategory)
    {
        $result = $this->_model->join('csn_music', 'csn_music_listen.music_id', 'csn_music.music_id')
            ->where('csn_music.cat_id', $idCategory)
            ->orderBy('csn_music_listen.music_listen_today', 'desc')
            ->orderBy('csn_music_listen.music_listen_ago', 'desc')
            ->select('csn_music_listen.music_listen_today', 'csn_music.music_id', 'csn_music.music_title_url', 'csn_music.music_title', 'csn_music.music_artist', 'csn_music.cat_id', 'csn_music.cat_level', 'csn_music.cat_sublevel', 'csn_music.cat_custom', 'csn_music.cover_id', 'csn_music.music_download_time', 'csn_music.music_last_update_time', 'csn_music.music_title_url',
                'csn_music.music_title_search', 'csn_music.music_artist_search', 'csn_music.music_album_search', 'csn_music.music_composer', 'csn_music.music_album', 'csn_music.music_listen', 'csn_music.music_track_id', 'csn_music.music_track_id', 'csn_music.music_filename', 'csn_music.music_bitrate', 'csn_music.music_shortlyric', 'csn_music.music_last_update_time')
            ->limit(20)
            ->get();
        return $result;
    }
}

