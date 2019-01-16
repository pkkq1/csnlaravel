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
use DB;

class MusicVisitController extends Controller
{
    protected $musicRepository;
    protected $videoRepository;
    protected $musicListenRepository;
    protected $musicDownloadRepository;
    protected $videoListenRepository;
    protected $videoDownloadRepository;

    public function __construct(MusicEloquentRepository $musicRepository, MusicListenEloquentRepository $musicListenRepository, MusicDownloadEloquentRepository $musicDownloadRepository, VideoEloquentRepository $videoRepository,
                                VideoListenEloquentRepository $videoListenRepository, VideoDownloadEloquentRepository $videoDownloadRepository) {
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
        $this->videoListenRepository = $videoListenRepository;
        $this->videoDownloadRepository = $videoDownloadRepository;
    }
    public function syncMusicListen() {
        $result = $this->musicListenRepository->getModel()::where('music_listen_today_0', '>', 0)->get();
        foreach ($result as $item) {
            $item->update([
                'music_listen' => DB::raw('music_listen + 1'),
                'music_listen_ago' => $item->music_listen_today_0,
                'music_listen_today' => DB::raw('(music_listen + '.$item->music_listen_today_0.') / 2'),
                'music_listen_today_0' => 0,
                'music_listen_today_1' => $item->music_listen_today_0,
                'music_listen_today_2' => $item->music_listen_today_1,
                'music_listen_today_3' => $item->music_listen_today_2,
                'music_listen_today_4' => $item->music_listen_today_3,
                'music_listen_today_5' => $item->music_listen_today_4,
                'music_listen_today_6' => $item->music_listen_today_5,
                'music_listen_today_7' => $item->music_listen_today_6,
                'music_listen_this_week' => $item->music_listen_today_7,
                'music_listen_max_week' => 0,
                'music_listen_time' => time(),
            ]);
        }

        $query  = "";
        $result = DB::connection( 'mysql' )->select( $query );
        return $result;
    }
}