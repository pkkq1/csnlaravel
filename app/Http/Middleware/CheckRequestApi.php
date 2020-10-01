<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Config;
use \Illuminate\Http\JsonResponse;

class CheckRequestApi {

    public function handle($request, Closure $next)
    {
//        return new JsonResponse(['message' => 'Fail', 'code' => 400, 'data' => [], 'error' => 'Hiện tại các api đang bảo trì'], 400);
        return $next($request);
    }
}