<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use App\Solr\Solarium;
use Socialite;
use Session;
use App\Repositories\Category\CategoryEloquentRepository;
use \Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Session as SessionModel;
use App\Repositories\Notification\NotificationEloquentRepository;
use App\Repositories\Upload\UploadEloquentRepository;
use App\Http\Controllers\SearchController as SearchSolr;

class NotifyController extends Controller
{
    protected $notifyRepository;
    protected $uploadRepository;

    public function __construct(NotificationEloquentRepository $notifyRepository, UploadEloquentRepository $uploadRepository) {
        $this->notifyRepository = $notifyRepository;
        $this->uploadRepository = $uploadRepository;
    }
    public function uploadStatusNotify(Request $request) {
        if(!$request->music_id)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => null, 'error' => 'vui lòng nhập id upload'], 400);
        if(!$request->user_id)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => null, 'error' => 'vui lòng nhập id user upload'], 400);
        if(!$request->status)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => null, 'error' => 'vui lòng nhập status upload'], 400);

        $musicUpload = $this->uploadRepository->getModel()::where([['music_id', $request->music_id], ['music_user_id', $request->user_id]])->first();
        if(!$musicUpload) {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => null, 'error' => 'Không tìm thấy upload music'], 400);
        }
        $url = Helpers::listen_url($musicUpload);
        $mesage = '';
        $type = '';
        if ($request->status == UPLOAD_STAGE_FULLCENSOR) {
            $mesage = ' mới bạn được phê duyệt.';
            $type = 'upload_success';
        } elseif ($request->status == UPLOAD_STAGE_DELETED) {
            $mesage = ' mới bạn đã bị xóa.';
            $type = 'upload_false';
            $url = '/dang-tai/nhac/' . $musicUpload->music_id;
        } else {
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => null, 'error' => 'Không tìm thấy trạng thái thông báo'], 400);
        }
        $result = $this->notifyRepository->pushNotif($request->user_id, $musicUpload->music_id, $type, ($musicUpload->cat_id == CAT_VIDEO ? 'Video' : 'Bài hát') . $mesage, $url,  $musicUpload->music_id);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => ['success_notify' => ($result ? 'Thành Công' : 'Trùng thông báo')], 'error' => null], 200);
    }

}