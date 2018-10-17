<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Sync\SolrSyncController;

class SolrCover extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'solr_cover';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Solr Cover';

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
        $Solr = new SolrSyncController();
        $Solr->syncCover();
    }
}
