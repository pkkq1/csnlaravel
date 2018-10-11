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
use App\Models\CategoryCsnModel;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Category\CategoryEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;

class BxhCategoryController extends Controller
{
    protected $musicRepository;
    protected $categoryRepository;
    protected $musicListenRepository;

    public function __construct(MusicEloquentRepository $musicRepository, CategoryEloquentRepository $categoryRepository, MusicListenEloquentRepository $musicListenRepository) {
        $this->musicRepository = $musicRepository;
        $this->categoryRepository = $categoryRepository;
        $this->musicListenRepository = $musicListenRepository;
    }
    public function syncBxhCategoryDownload(Request $request) {

        $ressult = [];
        $catregory =$this->categoryRepository->getCategoryParent();
        foreach ($catregory as $item) {
            $music = $this->musicListenRepository->bxhCategory($item->cat_id);
            dd($music->toArray());
        }


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
global $bxh_category;
    
$download_rows = ' . var_export($ressult, true) . ';
?>');
        return response(['Ok']);
    }
}