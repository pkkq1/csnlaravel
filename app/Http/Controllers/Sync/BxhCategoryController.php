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
            $ressult[$item->cat_id] = $music->toArray();
        }
        file_put_contents(resource_path().'/views/cache/def_home_bxh.blade.php',
            '<?php 
if ( !ENV(\'IN_PHPBB\') )
{
    die(\'Hacking attempt\');
    exit;
}
global $bxh_category;
    
$bxh_category = ' . var_export($ressult, true) . ';
?>');
        return response(['Ok']);
    }
}