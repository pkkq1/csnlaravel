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

class AlbumController extends Controller
{
    protected $musicRepository;
    protected $coverRepository;

    public function __construct(MusicEloquentRepository $musicRepository, CoverEloquentRepository $coverRepository) {
        $this->musicRepository = $musicRepository;
        $this->coverRepository = $coverRepository;
    }
    public function syncAlbumHot(Request $request) {
        $cache = $this->coverRepository->getCoverHot();
        $result = [];
        foreach($cache as $item) {
            $artists = [];
            $bitrates = [];
            if($item->music) {
                foreach ($item->music as $music) {
                    $artists[] = trim($music->music_artist);
                    $bitrates[] = $music->music_bitrate;
                }
                $artistDup = array_count_values($artists);
                $bitrateDup = array_count_values($bitrates);

                arsort($artistDup);
                arsort($bitrateDup);
                $result[] = [
                    'cover_id' => $item->cover_id,
                    'music_album' => $item->music_album,
                    'music_artist' => array_keys($artistDup)[0],
                    'music_bitrate' => array_keys($bitrateDup)[0],
                ];
            }
        }
        file_put_contents(resource_path().'/views/cache/def_home_album.blade.php',
'<?php 
if ( !ENV(\'IN_PHPBB\') )
{
    die(\'Hacking attempt\');
    exit;
}
global $album_hot;
global $album_new;
global $album_old;
global $music_new_uploads;
global $video_new_uploads;
    
$album_hot = ' . var_export($result, true) . ';
$album_new = ' . var_export($result, true) . ';
$album_old = ' . var_export($result, true) . ';
$music_new_uploads = ' . var_export($result, true) . ';   
$video_new_uploads = ' . var_export($result, true) . ';     
?>');
        return response(['Ok']);
    }
}