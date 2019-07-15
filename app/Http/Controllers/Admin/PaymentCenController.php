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



class PaymentCenController extends CrudController
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
        $this->crud->setModel("App\Models\PaymentCenModel");
        $this->crud->setEntityNameStrings('Lịch sử giao dịch CEN', 'Lịch sử giao dịch CEN');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/cen_payment');
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
            'label' => 'Hạn mức',
            'type' => 'select',
            'name' => 'level_id_2',
            'entity' => 'level',
            'attribute' => 'level_time_expried',
        ]);
        $this->crud->addColumn([
            'label' => 'Voucher',
            'type' => 'select',
            'name' => 'level_id_2',
            'entity' => 'voucher',
            'attribute' => 'voucher_name',
        ]);
        $this->crud->addColumn([
            'name' => 'cen_value',
            'type' => 'number',
            'label' => 'Giá trị gói',
        ]);
        $this->crud->addColumn([
            'name' => 'cen_promotion',
            'type' => 'number',
            'label' => 'Giá đã KM',
        ]);
        $this->crud->addColumn([
            'name' => 'cen_total',
            'type' => 'number',
            'label' => 'Tổng chi',
        ]);
        $this->crud->addColumn([
            'name' => 'cen_current_user',
            'type' => 'number',
            'label' => 'Cen User Hiện tại',
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