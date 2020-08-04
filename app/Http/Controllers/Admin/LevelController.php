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



class LevelController extends CrudController
{
    public function __construct()
    {
        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('user_level_(list)')) {
                $this->crud->denyAccess(['list']);
                $this->crud->denyAccess(['create']);
                $this->crud->denyAccess(['update']);
                $this->crud->denyAccess(['delete']);
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
        $this->crud->setModel("App\Models\LevelModel");
        $this->crud->setEntityNameStrings('Các gói cấp độ CSN', 'Các gói cấp độ CSN');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/level');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');

        $this->crud->addColumn([
            'name' => 'level_id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'level_packge',
            'label' => 'Level',
        ]);
        $this->crud->addColumn([
            'name' => 'level_name',
            'label' => 'Tên gói',
        ]);
        $this->crud->addColumn([
            'name' => 'level_time_expired',
            'label' => 'Thời hạn',
        ]);
        $this->crud->addColumn([
            'name' => 'level_cen',
            'type' => 'number',
            'label' => 'giá trị (cen)',
        ]);
        $this->crud->addColumn([
            'name' => 'level_money',
            'type' => 'number',
            'label' => 'giá trị (vnd)',
        ]);
        $this->crud->addColumn([
            'name' => 'level_money_promo',
            'type' => 'number',
            'label' => 'giá trị KM (vnd)',
        ]);
        $this->crud->addColumn([
            'name' => 'level_money_promo_status',
            'type' => 'check',
            'label' => 'Sử dụng KM',
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
            'name'  => 'level_name',
            'label' => 'Tên gói',
        ]);
        $this->crud->addField([
            'label' => 'Hạn mức hết hạn',
            'type' => 'select_from_array',
            'name' => 'level_time_expired',
            'options' => ['7 day' => '7 ngày', '30 day' => '30 ngày', '60 day' => '60 ngày', '90 day' => '90 ngày', '120 day' => '120 ngày', '180 day' => '180 ngày', '365 day' => '365 ngày (1 năm)'],
            'allows_null' => false,
            'default' => 1,
        ]);

        $this->crud->addField([
            'name'  => 'level_cen',
            'label' => 'Giá trị (cen)',
            'type' => 'number',
            'max' => 99999999,
            'min' => 0,
            'default' => 0,
        ]);
        $this->crud->addField([
            'name'  => 'level_money',
            'label' => 'Giá trị (vnd)',
            'type' => 'number',
            'max' => 99999999,
            'min' => 0,
            'default' => 0,
        ]);
        $this->crud->addField([
            'name'  => 'level_money_promo',
            'label' => 'Giá trị khuyến mãi (vnd)',
            'type' => 'number',
            'max' => 99999999,
            'min' => 0,
            'default' => 0,
        ]);
        $this->crud->addField([
            'label' => 'Cấp độ',
            'type' => 'select_from_array',
            'name' => 'level_status',
            'options' => [1 => 'Cấp độ 1', 2 => 'Cấp độ 2', 3 => 'Cấp độ 3'],
            'allows_null' => false,
            'default' => 1,
        ]);
        $this->crud->addField([
            'label' => 'Tình trạng Khuyến Mãi',
            'type' => 'select_from_array',
            'name' => 'level_money_promo_status',
            'options' => [0 => 'K.Sử dụng giá trị khuyến mãi', 1 => 'Sử dụng giá trị khuyến mãi'],
            'allows_null' => false,
            'default' => 0,
        ]);
        $this->crud->addField([
            'label' => 'Tình trạng',
            'type' => 'select_from_array',
            'name' => 'level_status',
            'options' => [1 => 'Hoạt động', 0 => 'K.hoạt động'],
            'allows_null' => false,
            'default' => 1,
        ]);

        $this->crud->addField([
            'name'  => 'level_note',
            'label' => 'Ghi chú',
            'type' => 'textarea',
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