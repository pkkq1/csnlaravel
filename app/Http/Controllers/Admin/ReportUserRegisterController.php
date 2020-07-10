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
use App\Models\UserModel;
use DB;

class ReportUserRegisterController extends CrudController
{

    public function __construct()
    {
        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('report_user_login_(list)')) {
                $this->crud->denyAccess(['list']);
            }
            return $next($request);
        });

        parent::__construct();

    }

    public function setup()
    {
//        parent::__construct();
        $this->crud->setModel("App\Models\UserModel");
        $this->crud->setEntityNameStrings('Kết quả tìm kiếm', 'User đăng ký');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/report_user_register');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');


        $this->crud->denyAccess(['create', 'update', 'reorder', 'delete']);
        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();
        $this->crud->removeAllButtons();

        $this->crud->orderBy('user_regdate', 'desc');

        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'from_to',
            'label'=> 'Thời gian đăng ký'
        ],
            false,
            function($value) {
                $dates = json_decode(htmlspecialchars_decode($value, ENT_QUOTES));
                $this->crud->addClause('where', 'user_regdate', '>=', strtotime($dates->from . ' 00:00'));
                $this->crud->addClause('where', 'user_regdate', '<=', strtotime($dates->to . ' 23:59'));
            });
        $this->crud->addFilter([ // daterange filter
            'type' => 'range',
            'name' => 'user_regdate',
            'label'=> 'Năm sinh'
        ],
            false,
//            function() {
//                return UserModel::select(DB::raw("SUBSTR(user_birthday, 1, 4) as user_birthday"))->get()->toArray();
//            },
            function($value) {
                $dates = json_decode(htmlspecialchars_decode($value, ENT_QUOTES));
                $dateTo = $dates->to + 1;
                $this->crud->addClause('whereDate', 'user_birthday', '>=', $dates->from);
                $this->crud->addClause('whereDate', 'user_birthday', '<=', (string)$dateTo);
            });
        $this->crud->addFilter([ // dropdown filter
            'name' => 'type',
            'type' => 'dropdown',
            'label'=> 'Thể loại đăng ký'
        ], [
            1 => 'Facebook',
            2 => 'Google',
            3 => 'Tài khoản CSN',
        ], function($value) { // if the filter is active
            if ($value == 0) {

            } elseif ($value == 1) {
                $this->crud->addClause('where', 'user_fb_identity', '<>', '');

            } elseif ($value == 2) {
                $this->crud->addClause('where', 'user_identity', '<>', '');

            } else {
                $this->crud->addClause('where', 'user_fb_identity', '<>', '');
                $this->crud->addClause('where', 'user_identity', '<>', '');
            }
        });

        $this->crud->addColumn([
            'name'  => 'id',
            'label' => 'User',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a href="/user/'.$entry->id.'" target="_blank">'.$entry->id.'</a>';
            },
        ]);
        $this->crud->addColumn([
            'name'  => 'user_avatar',
            'label' => 'Ảnh',
            'type' => 'closure',
            'function' => function($entry) {
                return '<img style=" max-height: 25px; width: auto; border-radius: 3px;" class="mr-3" src="'. Helpers::pathAvatar($entry->user_avatar, $entry->id) .'"/>';
            },
        ]);
        $this->crud->addColumn([
            'name' => 'user_regdate',
            'label' => 'Đăng ký',
            'type' => "datetime",
            'format' => 'Y-m-d H:i'
        ]);
        $this->crud->addColumn([
            'name' => 'user_birthday',
            'label' => 'Năm Sinh',
            'type' => 'closure',
            'function' => function($entry) {
                return ($entry->user_birthday == '0000-00-00' ? '-' : substr($entry->user_birthday, 0, 4));
            },
        ]);
        $this->crud->addColumn([
            'name' => 'username',
            'label' => 'User name',
        ]);
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Tên người dùng',
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
        ]);
        $this->crud->addColumn([
            'name'  => 'user_fb_identity',
            'label' => 'Dạng đăng ký',
            'type' => 'closure',
            'function' => function($entry) {
                if($entry->user_fb_identity != '') {
                    return 'Facebook';
                }elseif ($entry->user_identity != '') {
                    return 'Facebook';
                }else {
                    return 'CSN';
                }
            },
        ]);
//        $this->crud->addButtonFromView('line', 'view', 'show', 'end');
    }
    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }
    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;
        return $this->crud->delete($id);
    }
    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}