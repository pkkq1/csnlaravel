<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use App\Repositories\CodeAds\CodeAdsEloquentRepository;
use App\Http\Controllers\Controller;
use \Illuminate\Http\JsonResponse;

class CodeAdsController extends Controller
{
    protected $codeAdsRepository;

    public function __construct(CodeAdsEloquentRepository $codeAdsRepository) {
        $this->codeAdsRepository = $codeAdsRepository;
    }
    public function index(Request $request) {
        if(!$request->key)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'không tìm thấy từ khóa'], 400);
        $result = $this->codeAdsRepository->getModel()::where('key', $request->key)->first();
        if(!$result)
            return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'không tìm thấy Code quảng cáo'], 400);
        $ranD = rand(1, 10);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => [
            'name' => $result->name,
            'key' => $result->key,
            'description' => $result->description,
            'code' => $result['code'.$ranD],
            'updated_at' => $result->updated_at,
        ], 'error' => ''], 200);
    }

}