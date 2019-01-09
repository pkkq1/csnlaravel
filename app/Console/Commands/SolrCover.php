<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Sync\SolrSyncController;
use App\Solr\Solarium;
use App\Repositories\Music\MusicEloquentRepository;

class SolrCover extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'solr:type {type?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Solr';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $Solr;
    protected $musicRepository;

    public function __construct(Solarium $Solr, MusicEloquentRepository $musicRepository)
    {
        $this->Solr = $Solr;
        $this->musicRepository = $musicRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $Solr = new SolrSyncController($this->Solr, $this->musicRepository);
        if($this->argument('type') == 'music') {
            $Solr->syncMusic();
        }elseif($this->argument('type') == 'video') {
            $Solr->syncVideo();
        }elseif($this->argument('type') == 'artist') {
            $Solr->syncArtist();
        }elseif($this->argument('type') == 'cover') {
            $Solr->syncCover();
        }
    }
}
