<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Album::class,
        Commands\AlbumCat::class,
        Commands\BxhCategory::class,
        Commands\MusicDownload::class,
        Commands\SuggestionCat::class,
        Commands\Solr::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call('\App\Http\Controllers\Sync\SolrSyncController@syncVideo');

//        $schedule->command('album')->hourlyAt(10);
//        $schedule->command('album_cat')->hourlyAt(15);
//        $schedule->command('music_download')->hourlyAt(20);
//        $schedule->command('suggestion_cat')->hourlyAt(25);
//        $schedule->command('bxh_cat:type cat today')->everyFiveMinutes();  // bảng xếp hạng hôm nay
//        $schedule->command('bxh_cat:type cat week')->dailyAt('00:10');   // bảng xếp hạng trong tuần
//
////        $schedule->command('bxh_cat:type cat_month 1 2019');  // bảng xếp hạng tháng trong năm, (all sẽ lấy tất cả)
//        $schedule->command('bxh_cat:type cat_month all 2019')->dailyAt('00:15'); ;   // bảng xếp hạng của năm
//        $schedule->command('bxh_cat:type cat_month all 2018')->dailyAt('00:20'); ;   // bảng xếp hạng của năm
//        $schedule->command('bxh_cat:type cat_month all 2017')->dailyAt('00:25'); ;   // bảng xếp hạng của năm


//        $schedule->command('solr:type music'); // đồng bộ search solr nhạc
//        $schedule->command('solr:type video'); // đồng bộ search solr video
//        $schedule->command('solr:type artist'); // đồng bộ search solr ca sĩ
//        $schedule->command('solr:type cover'); // đồng bộ search solr album

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
