<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Sync\SolrSyncController;
use App\Solr\Solarium;
use App\Repositories\Music\MusicEloquentRepository;

class Solr extends Command
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

    public function __construct(Solarium $Solr)
    {
        $this->Solr = $Solr;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $Solr = new SolrSyncController($this->Solr);
        if($this->argument('type') == 'music') {
            $Solr->syncMusic(null, null, strtotime(TIME_SOLR_TO_ADD_ITEM));
        }elseif($this->argument('type') == 'video') {
            $Solr->syncVideo(null, null, strtotime(TIME_SOLR_TO_ADD_ITEM));
        }elseif($this->argument('type') == 'artist') {
//            $Solr->syncArtist(null, null, TIME_SOLR_TO_ADD_ITEM);
        }elseif($this->argument('type') == 'cover') {
            $Solr->syncCover(null, null, strtotime(TIME_SOLR_TO_ADD_ITEM));
        }
    }
}
