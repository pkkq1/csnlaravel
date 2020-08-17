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
//            $this->crud->denyAccess(['update']);
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
//        $this->crud->removeAllButtons();

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
        $this->crud->addFilter([ // select2_multiple filter
            'name' => 'status',
            'type' => 'select2_multiple',
            'label'=> 'Tìm theo gói',
            'placeholder' => 'Tình trạng'
        ], function () {
            return [
                'SUCCESS' => 'Thành Công',
                'EDIT_SUCCESS' => 'Chỉnh Sửa Thành Công',
                'WRONG_NOTE' => 'Sai Cú Pháp',
                'WRONG_MONEY' => 'Tiền Nạp Không Đúng',
                'NOT_FOUND_USER_ID' => 'UserID Không Tìm Thấy',
                'NOT_MATCH_PAGE_LOG' => 'Không Tìm Thấy Truy Cập Page',
                'REFUNDED' => 'Đã Hoàn Tiền',
                'ERROR' => 'Lỗi',
                'RECEIVED' => 'Nhận API',
            ];
        }, function ($values) {
            $values = json_decode(htmlspecialchars_decode($values, ENT_QUOTES));
            if (!empty($values)) {
                $this->crud->addClause('whereIn', 'status', $values);
            }
        });
//        $this->crud->addClause('where', 'status', '!=', 'SUCCESS');



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
                }elseif ($entry->status == 'EDIT_SUCCESS') {
                    return '<span class="label label-success">C.sửa thành công</span>';
                }elseif ($entry->status == 'WRONG_NOTE') {
                    return '<span class="label label-warning">Sai cú pháp</span>';
                }elseif ($entry->status == 'WRONG_MONEY') {
                    return '<span class="label label-warning">Tiền nạp k.đúng</span>';
                }elseif ($entry->status == 'NOT_FOUND_USER_ID') {
                    return '<span class="label label-warning">K.tìm thấy userID</span>';
                }elseif ($entry->status == 'NOT_MATCH_PAGE_LOG') {
                    return '<span class="label label-warning">K.tìm thấy log page</span>';
                }elseif ($entry->status == 'REFUNDED') {
                    return '<span class="label label-warning">Đã hoàn tiền</span>';
                }else{
                    return '<span class="label label-danger">'.$entry->status.'</span>';
                }
            },
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
        $this->crud->addColumn([
            'name' => 'note',
            'label' => 'Ghi chú',
        ]);
        $this->crud->addColumn([
            'name' => 'note_admin',
            'label' => 'Ghi chú admin',
        ]);

        $this->crud->addField([
            'name' => 'note_admin',
            'label' => 'Ghi chú admin',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'label' => 'Tình trạng',
            'type' => 'select_from_array',
            'name' => 'status',
            'options' => [
                'SUCCESS' => 'Thành Công',
                'EDIT_SUCCESS' => 'Chỉnh Sửa Thành Công',
                'WRONG_NOTE' => 'Sai Cú Pháp',
                'WRONG_MONEY' => 'Tiền Nạp Không Đúng',
                'NOT_FOUND_USER_ID' => 'UserID Không Tìm Thấy',
                'NOT_MATCH_PAGE_LOG' => 'Không Tìm Thấy Truy Cập Page',
                'REFUNDED' => 'Đã Hoàn Tiền',
                'ERROR' => 'Lỗi',
                'RECEIVED' => 'Nhận API',
            ],
            'allows_null' => false,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
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