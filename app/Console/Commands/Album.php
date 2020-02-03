<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Sync\AlbumController;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;

class Album extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'album';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Album';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $musicRepository;
    protected $coverRepository;
    protected $videoRepository;
    protected $musicDownloadRepository;
    protected $musicListenRepository;

    public function __construct(MusicEloquentRepository $musicRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, MusicDownloadEloquentRepository $musicDownloadRepository, MusicListenEloquentRepository $musicListenRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->coverRepository = $coverRepository;
        $this->videoRepository = $videoRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
        $this->musicListenRepository = $musicListenRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $albumCat = new AlbumController($this->musicRepository, $this->coverRepository, $this->videoRepository, $this->musicDownloadRepository, $this->musicListenRepository);
        $albumCat->syncAlbum();
        $albumCat->albumHot();
    }
}
