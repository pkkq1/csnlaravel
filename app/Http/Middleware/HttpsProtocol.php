<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Config;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        if (!$request->secure() && App::environment() === 'beta') {
            return redirect()->secure($request->getRequestUri());
        }
        if(strpos($request->url(), '_download') !== false) {
            return redirect()->route('home');
        }
        if(in_array($request->ip(), Config::get('checkip.deny'))){
            return redirect()->route('home');
//            exit;
//            abort(403, 'Lỗi truy cập');
        }

        return $next($request);
    }
}