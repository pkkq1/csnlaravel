<?php
use Illuminate\Contracts\View\Factory as ViewFactory;
use Jenssegers\Agent\Agent;
function view($view = null, $data = [], $mergeData = [])
{
    $factory = app(ViewFactory::class);
    if (func_num_args() === 0) {
        return $factory;
    }
    $Agent = new Agent();
    if(strpos($_SERVER['REQUEST_URI'], '/admin') === false) {
        if ($Agent->isMobile()) {
            // you're a mobile device
            if(file_exists(resource_path('views/mobile').'\\'.str_replace('.', '\\', $view).'.blade.php') === false){
                $view = 'web.'.$view;
            }else{
                $view = 'mobile.'.$view;
            }
        }else{
            $view = 'web.'.$view;
        }
    }
    return $factory->make($view, $data, $mergeData);
}