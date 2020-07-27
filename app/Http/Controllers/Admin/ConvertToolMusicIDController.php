<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request as Request;

use App\Http\Requests;
use App\Library\Helpers;
use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Requests\CrudRequest as StoreRequest;
use Backpack\CRUD\app\Http\Requests\CrudRequest as UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\SearchResult\SearchResultEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\User\UserEloquentRepository;
use App\Models\UserLogModel;
use DB;

class ConvertToolMusicIController extends CrudController
{

    public function __construct()
    {

        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('advanced_(list)')) {
                $this->crud->denyAccess(['list']);
            }
//            $this->crud->denyAccess(['update']);
            $this->crud->denyAccess(['delete']);
            $this->crud->denyAccess(['create']);
            return $next($request);
        });
        parent::__construct();
    }
    public function index()
    {
        $this->crud->hasAccessOrFail('list');
        $this->crud->setOperation('list');

        $this->data['crud'] = $this->crud;
        $this->data['title'] = $this->crud->getTitle() ?? mb_ucfirst($this->crud->entity_name_plural);
        $code = $_POST['code'] ?? '';
        $result = '';
        if($code) {
            if(is_numeric($code)){
                $result = Helpers::encodeID($code);
            }else{
                $result = Helpers::decodeID($code);
            }
        }
        $this->data['code'] = $code;
        $this->data['result'] = $result;
        return view('vendor.backpack.advanced.convert_music_id', $this->data);
    }

    public function setup()
    {
//        parent::__construct();
        $this->crud->setModel("App\Models\UserLogModel");
        $this->crud->setEntityNameStrings('Kết quả tìm kiếm', 'Chuyển đổi Code Music ID');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/convert_music_id');

    }
}