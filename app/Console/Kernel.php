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
        Commands\MusicListenDownload::class,
        Commands\Uploader::class,
        Commands\Solr::class,
        Commands\TopArtist::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
//        $schedule->call('\App\Http\Controllers\Sync\SolrSyncController@syncCover');

        $schedule->command('music_listen_download:type real')->hourly(5); // gán giá trị listen và download
        $schedule->command('music_listen_download:type today')->dailyAt('00:01');


        $schedule->command('album')->hourlyAt(12);
        $schedule->command('album_cat')->hourlyAt(15);
        $schedule->command('music_download')->hourlyAt(20);
        $schedule->command('suggestion_cat')->hourlyAt(25);
        $schedule->command('bxh_cat:type cat today')->hourly(10);  // bảng xếp hạng hôm nay, tính bằng download_today ->hourly(5)
        $schedule->command('bxh_cat:type cat week')->dailyAt('00:10');   // bảng xếp hạng trong tuần
        $schedule->command('uploader:type 7day')->dailyAt('00:15');   // bảng xếp hạng uploader
        $schedule->command('uploader:type cache_upload')->dailyAt('00:17');   // xóa files cache upload


        $schedule->command('bxh_cat:type cat_month ' . CURRENT_MONTH . ' 2019')->dailyAt('00:20');  // bảng xếp hạng tháng trong năm, (all sẽ lấy tất cả trong năm, all_month sẽ lấy tất cả tháng, số sẽ lấy đúng tháng)
        $schedule->command('bxh_cat:type cat_month all 2019')->dailyAt('00:25');   // bảng xếp hạng của năm
        $schedule->command('top_artist')->dailyAt('00:30');   // top ca sĩ


//        $schedule->command('solr:type music')->hourlyAt(30); // đồng bộ search solr nhạc
//        $schedule->command('solr:type video')->hourlyAt(35); // đồng bộ search solr video
//        $schedule->command('solr:type artist'); // đồng bộ search solr ca sĩ
        $schedule->command('solr:type cover')->hourlyAt(40); // đồng bộ search solr album

        $schedule->command('sync_music_new')->everyFiveMinutes(); // đồng bộ nhạc mới cho solr và update total_music cover

//        $schedule->command('solr:type all')->everyMinute()->twiceDaily(1, 15); // đồng bộ lại toàn bộ nhac, video, cover, artist
        $schedule->command('solr:type all')->cron('* 1,14 * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');
        require base_path('routes/console.php');
    }
}
