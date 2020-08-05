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
use App\Models\LevelModel;
use App\Models\VoucherModel;


class RequestApiVipLogController extends CrudController
{
    public function __construct()
    {
        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('user_level_(list)')) {
                $this->crud->denyAccess(['list']);
            }
            $this->crud->denyAccess(['delete']);
            $this->crud->denyAccess(['create']);
            $this->crud->denyAccess(['update']);
            return $next($request);
        });

        parent::__construct();
    }
    public function setup()
    {
        $this->crud->setModel("App\Models\RequestApiVipModel");
        $this->crud->setEntityNameStrings('Lịch sử gọi Api Vip', 'Lịch sử gọi Api Vip');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/request_api_vip_log');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');
        $this->crud->orderBy('id', 'desc');
        $this->crud->removeAllButtons();

        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'from_to',
            'label'=> 'Tìm theo ngày tạo'
        ],
            false,
            function($value) {
                $dates = json_decode(htmlspecialchars_decode($value, ENT_QUOTES));
                $this->crud->addClause('where', 'time_create', '>=', strtotime($dates->from . ' 00:00'));
                $this->crud->addClause('where', 'time_create', '<=', strtotime($dates->to . ' 23:59'));
            });
        $this->crud->addFilter([ // dropdown filter
            'name' => 'status',
            'type' => 'dropdown',
            'label'=> 'Tình trạng'
        ], [
            'SUCCESS' => 'Thành Công',
            'WRONG_NOTE' => 'Sai Mã Gửi',
            'NOT_FOUND_USER_ID' => 'UserID Không Tìm Thấy',
            'NOT_MATCH_PAGE_LOG' => 'Không Tìm Thấy Truy Cập Page',
            'ERROR' => 'Lỗi',
            'RECEIVED' => 'Nhận API',
        ], function($value) { // if the filter is active
            $this->crud->addClause('where', 'status', $value);
        });
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title',
        ]);

        $this->crud->addColumn([
            'name'  => 'status',
            'label' => 'Tình Trạng',
            'type' => 'closure',
            'function' => function($entry) {
                if($entry->status == 'SUCCESS') {
                    return '<span class="label label-success">Thành Công</span>';
                }elseif ($entry->status == 'WRONG_NOTE') {
                    return '<span class="label label-warning">Sai cú pháp</span>';
                }elseif ($entry->status == 'NOT_FOUND_USER_ID') {
                    return '<span class="label label-warning">K.tìm thấy userID</span>';
                }elseif ($entry->status == 'NOT_MATCH_PAGE_LOG') {
                    return '<span class="label label-warning">K.tìm thấy log page</span>';
                }else{
                    return '<span class="label label-danger">'.$entry->status.'</span>';
                }
            },
        ]);
        $this->crud->addColumn([
            'name' => 'note',
            'label' => 'Note',
        ]);
        $this->crud->addColumn([
            'name' => 'amount',
            'type' => 'number',
            'label' => 'Amount',
        ]);
        $this->crud->addColumn([
            'name' => 'time',
            'label' => 'time',
        ]);
        $this->crud->addColumn([
            'name' => 'code',
            'label' => 'Code',
        ]);
        $this->crud->addColumn([
            'name' => 'phone',
            'label' => 'Phone',
        ]);
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