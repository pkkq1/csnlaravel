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
use App\Repositories\Category\CategoryEloquentRepository;

class SuggestionCatController extends Controller
{
    protected $musicRepository;
    protected $coverRepository;
    protected $videoRepository;
    protected $categoryRepository;

    public function __construct(MusicEloquentRepository $musicRepository, CoverEloquentRepository $coverRepository, VideoEloquentRepository $videoRepository, CategoryEloquentRepository $categoryRepository) {
        $this->musicRepository = $musicRepository;
        $this->coverRepository = $coverRepository;
        $this->videoRepository = $videoRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function suggestion($music, $type = 'music') {
        $catregory = $this->categoryRepository->getCategoryParent();
        foreach ($catregory as $item) {
            $childrenCat = $this->categoryRepository->getAllCatId($item->cat_id);
            $model = $this->musicRepository->getModel();
            if($item->cat_id == 1) {
                $model = $this->videoRepository->getModel();
            }
            foreach ($childrenCat as $level) {
                $typeDup = $model::where(['cat_id' => $item->cat_id, 'cat_level' => $level->cat_level])
                    ->select('music_id', 'cat_id', 'cat_level', 'cover_id', 'music_title_url', 'music_title', 'music_artist', 'music_artist_id', 'music_album_id', 'music_listen', 'music_bitrate', 'music_filename')
                    ->distinct('music_title')
                    ->limit(200)
                    ->orderBy('music_downloads_today', 'desc')
                    ->orderBy('music_downloads_this_week', 'desc')
                    ->orderBy('music_downloads', 'desc')
                    ->get()->toArray();
                $pathDir = resource_path() . '/views/cache/suggestion_cat/';
                file_put_contents($pathDir.$item->cat_id .'_'. $level->cat_level . '.blade.php',
                    '<?php 
if ( !ENV(\'IN_PHPBB\') )
{
    die(\'Hacking attempt\');
    exit;
}
global $typeDup;
$typeDup = ' . var_export($typeDup, true) . ';
?>');
            }
        }
        return response(['Ok']);
    }
}