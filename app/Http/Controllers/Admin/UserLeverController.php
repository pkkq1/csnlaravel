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
use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Requests\CrudRequest as StoreRequest;
use Backpack\CRUD\app\Http\Requests\CrudRequest as UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use DB;

class UserLeverController extends CrudController
{
    public function __construct()
    {
        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('user_level_(list)')) {
                $this->crud->denyAccess(['list']);
            }
            if(!backpack_user()->can('user_level_(create)')) {
                $this->crud->denyAccess(['create']);
            }
            if(!backpack_user()->can('user_level_(delete)')) {
                $this->crud->denyAccess(['delete']);
            }
            if(!backpack_user()->can('user_level_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            return $next($request);
        });
        parent::__construct();
    }
    public function setup()
    {
        $this->crud->setModel("App\Models\UserLevelModel");
        $this->crud->setEntityNameStrings('Cấp độ user đã mua', 'Cấp độ user đã mua');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/history_level');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');

//        $this->crud->addColumn([
//            'name' => 'user_id',
//            'label' => 'User ID',
//        ]);
        $this->crud->addColumn([
            'name'  => 'id',
            'label' => 'ID',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a href="/user/'.$entry->user_id.'" target="_blank">'.$entry->id.'</a>';
            },
        ]);
        $this->crud->addColumn([
            'label' => 'Người tạo',
            'type' => 'select',
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => 'name',
        ]);

        $this->crud->addColumn([
            'label' => 'Gói đang sử dụng',
            'type' => 'select',
            'name' => 'level_id',
            'entity' => 'level',
            'attribute' => 'level_name',
        ]);
        $this->crud->addColumn([
            'label' => 'Hạn mức của gói',
            'type' => 'select',
            'name' => 'level_id_2',
            'entity' => 'level',
            'attribute' => 'level_time_expried',
        ]);
        $this->crud->addColumn([
            'name' => 'level_expried',
            'label' => 'Ngày hết hạn',
            'type' => 'date',
            'format' => 'd-m-Y H:i'
        ]);
        $this->crud->addColumn([
            'name'  => 'level_status',
            'label' => 'Tình Trạng',
            'type' => 'closure',
            'function' => function($entry) {
                return $entry->level_status == 1 ? '<span class="label label-success">Hoạt động</span>' : '<span class="label label-default">K.hoạt dộng</span>';
            },
        ]);



        $this->crud->addField([
            'label' => "Chọn người dùng", // Table column heading
            'type' => "select2_from_ajax",
            'name' => 'user_id', // the column that contains the ID of that connected entity
            'entity' => 'user', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'data_source' => url("admin/history_level/search_user"), // url to controller search function (with /{id} should return model)
            'placeholder' => "Lựa chọn người dùng", // placeholder for the select
            'minimum_input_length' => 2, // minimum characters to type before querying results
        ]);

    }

    public function searchUser(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = UserModel::select(DB::raw("CONCAT(name, ' - ', email) as name, user_id, user_id as id"))->where('name', 'LIKE', '%'.$search_term.'%')->orWhere('email', 'LIKE', '%'.$search_term.'%')->paginate(10);
        }
        else
        {
            $results = UserModel::paginate(10);
        }

        return $results;
    }

    public function showUser($id)
    {
        return UserModel::find($id);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud($request);
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud($request);
    }
}