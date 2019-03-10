<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Sync;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;
use App\Repositories\VideoListen\VideoListenEloquentRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use App\Repositories\VideoDownload\VideoDownloadEloquentRepository;
use App\Solr\Solarium;
use App\Http\Controllers\Sync\SolrSyncController;
use DB;

class MusicController extends Controller
{
    protected $musicRepository;
    protected $videoRepository;
    protected $musicListenRepository;
    protected $musicDownloadRepository;
    protected $videoListenRepository;
    protected $videoDownloadRepository;
    protected $coverRepository;
    protected $Solr;

    public function __construct(MusicEloquentRepository $musicRepository, MusicListenEloquentRepository $musicListenRepository, MusicDownloadEloquentRepository $musicDownloadRepository, VideoEloquentRepository $videoRepository,
                                VideoListenEloquentRepository $videoListenRepository, VideoDownloadEloquentRepository $videoDownloadRepository, Solarium $Solr, CoverEloquentRepository $coverRepository) {
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
        $this->videoListenRepository = $videoListenRepository;
        $this->videoDownloadRepository = $videoDownloadRepository;
        $this->coverRepository = $coverRepository;
        $this->Solr = $Solr;
    }
   public function syncNewMusicVideo() {
       $music = $this->musicRepository->getQueryPublished()->where('music_time', '>',  strtotime(TIME_EXPIRED_UPLOAD_NEW))->get();
       $video = $this->musicRepository->getQueryPublished()->where('music_time', '>',  strtotime(TIME_EXPIRED_UPLOAD_NEW))->get();
       $Solr = new SolrSyncController($this->Solr);
       $arrCover = [];
       if(!$music->isEmpty()) {
           $Solr->syncMusic(null, $music);
           foreach ($music as $item) {
               $arrCover[$item->cover_id] = $item->cat_id;
           }
       }
       if(!$video->isEmpty()) {
           $Solr->syncVideo(null, $video);
           foreach ($video as $item) {
               $arrCover[$item->cover_id] = $item->cat_id;
           }
       }
       unset($arrCover[0]);
       foreach ($arrCover as $key => $item) {
           if($item == CAT_VIDEO) {
               $cntCover = $this->videoRepository->getQueryPublished()->where('cover_id', $key)->count();
           }else{
               $cntCover = $this->musicRepository->getQueryPublished()->where('cover_id', $key)->count();
           }
           $this->coverRepository->getModel()::where('cover_id', $key)->update(['album_music_total' => $cntCover]);
       }
       return response(['Ok']);
   }
}