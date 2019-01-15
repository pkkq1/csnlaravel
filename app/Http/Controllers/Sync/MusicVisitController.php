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
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use DB;

class MusicVisitController extends Controller
{
    protected $musicRepository;
    protected $videoRepository;
    protected $musicListenRepository;
    protected $musicDownloadRepository;

    public function __construct(MusicEloquentRepository $musicRepository, MusicListenEloquentRepository $musicListenRepository, MusicDownloadEloquentRepository $musicDownloadRepository, VideoEloquentRepository $videoRepository) {
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
    }
    public function syncMusicDownload() {
        $this->musicListenRepository->getModel()::where('');

    }
}