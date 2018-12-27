<?php

namespace App\Http\Middleware;

use Closure;
use App\Library\Helpers;
use Jenssegers\Agent\Agent;

class CheckIsActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()->user_active == ACTIVE_USER){
            return $next($request);
        }
        $Agent = new Agent();
        $view = 'web.';
        $message = 'Tài khoản của bạn chưa được xác nhận bằng email để thực hiện thao tác này.';
        if ($Agent->isMobile()) {
            $view = 'mobile.';
        }
        if($request->method() == 'GET') {
            return response()->view($view.'errors.403', ['message'=> $message], 403);
        }else{
            if($request->format() == 'html') {
                return $response = response()->make($message, 403);
            }
            Helpers::ajaxResult(false, $message, null);
        }
    }
}
