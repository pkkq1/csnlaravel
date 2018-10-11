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
use App\Models\MusicModel;
use App\Models\VideoModel;
use App\Models\CoverModel;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Models\ArtistModel;
use App\Repositories\Music\MusicEloquentRepository;

class MusicDownloadController extends Controller
{
    protected $musicRepository;

    public function __construct(MusicEloquentRepository $musicRepository) {
        $this->musicRepository = $musicRepository;
    }
    public function syncMusicDownload(Request $request) {

        $cache = $this->musicRepository->getModel()::orderBy('music_last_update_time', 'desc')
            ->select('music_id', 'music_title_url', 'music_title', 'music_artist', 'cat_id', 'cat_level', 'cat_sublevel', 'cat_custom', 'cover_id', 'music_download_time', 'music_last_update_time', 'music_title_url',
                'music_title_search', 'music_artist_search', 'music_album_search', 'music_composer', 'music_album', 'music_listen', 'music_track_id', 'music_track_id', 'music_filename', 'music_bitrate', 'music_shortlyric', 'music_last_update_time')
            ->limit(20)->get();
        $download_rows = $cache->toArray();

        file_put_contents(resource_path().'/views/cache/def_home_download.blade.blade.php',
            '<?php 
if ( !ENV(\'IN_PHPBB\') )
{
    die(\'Hacking attempt\');
    exit;
}
global $download_rows;
    
$download_rows = ' . var_export($download_rows, true) . ';
?>');
        return response(['Ok']);
    }
}