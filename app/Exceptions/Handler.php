<?php

namespace App\Exceptions;

use Exception;
use Jenssegers\Agent\Agent;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
//    public function render($request, Exception $exception)
//    {
//        return parent::render($request, $exception);
//    }
    public function render($request, Exception $exception)
    {
        $Agent = new Agent();
        $view = 'web.';
        if ($Agent->isMobile()) {
            $view = 'mobile.';
        }
        if ($exception->getMessage() == 'Unauthenticated.'){
            return $request->expectsJson()
                ? response()->json(['status' => false, 'message' => $exception->getMessage(), 'data' => null], 401)
                : redirect()->guest('?rq=login&back_url='.$request->getRequestUri());
        }
        if($exception->getStatusCode() == 403) {
            return response()->view($view.'errors.403', [], 403);
        }
        return parent::render($request, $exception);
    }
}
