<?php

namespace Backpack\Base\app\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (backpack_auth()->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response(trans('backpack::base.unauthorized'), 401);
            } else {
                return redirect()->guest(backpack_url('login'));
            }
        }
        if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('manager')) {
            return $next($request);
        }else{
            return response(trans('backpack::base.unauthorized'), 401);
        }
    }
}
