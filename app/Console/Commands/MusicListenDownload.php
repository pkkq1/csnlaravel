<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Sync\MusicListenDownloadController;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;

class MusicListenDownload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'music_listen_download';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync music count listen download';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $albumCat = new MusicListenDownloadController();
        $albumCat->syncMusicListen();
        $albumCat->syncMusicDownload();
        $albumCat->syncVideoListen();
        $albumCat->syncVideoDownload();
    }
}
