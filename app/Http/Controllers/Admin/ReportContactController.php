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
use App\Models\PermissionUserModel;
use App\Repositories\Notification\NotificationEloquentRepository;
use DB;

class ReportContactController extends CrudController
{
    protected $NotificationRepository;

    public function __construct(NotificationEloquentRepository $NotificationRepository)
    {
        $this->NotificationRepository = $NotificationRepository;

        $this->middleware(function ($request, $next)
        {
            $this->crud->denyAccess(['create']);
            if(!backpack_user()->can('report_(list)')) {
                $this->crud->denyAccess(['list']);
                $this->crud->denyAccess(['update']);
                $this->crud->denyAccess(['delete']);
            }
            if(!backpack_user()->can('report_(create)')) {
                $this->crud->denyAccess(['create']);
            }
            $this->crud->denyAccess(['delete']);
            if(!backpack_user()->can('report_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            return $next($request);
        });
        parent::__construct();

    }
    public function setup()
    {
        $this->crud->setModel("App\Models\ReportContactModel");
        $this->crud->setEntityNameStrings('Báo cáo gợi ý', 'Báo cáo gợi ý');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/report_contact');
        $this->crud->orderBy('status', 'asc');
        $this->crud->orderBy('id', 'desc');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');
        $this->crud->addFilter([ // dropdown filter
            'name' => 'status',
            'type' => 'dropdown',
            'label'=> 'Tình trạng'
        ], [
            0 => 'Chưa xem',
            1 => 'Đợi Trả Lời',
            2 => 'Đã Đóng',
        ], function($value) { // if the filter is active
            $this->crud->addClause('where', 'status', $value);
        });
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
        ]);

        $this->crud->addColumn([
            'name'  => 'text',
            'label' => 'Nội Dung',
        ]);
        $this->crud->addColumn([
            'name'  => 'status',
            'label' => 'Tình Trạng',
            'type' => 'closure',
            'function' => function($entry) {
                if($entry->status == 0) {
                    return '<span class="label label-warning">Chưa xem</span>';
                }elseif ($entry->status == 1) {
                    return '<span class="label label-info">Đợi trả lời</span>';
                }elseif ($entry->status == 2) {
                    return '<span class="label label-default">Đã đóng</span>';
                }
            },
        ]);
        $this->crud->addColumn([
            'name' => 'ip',
            'label' => 'IP',
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Cập nhật',
            'type' => 'date',
            'format' => 'd/m/Y H:i',
        ]);


        $this->crud->addField([
            'name'  => 'email',
            'label' => 'Email',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'phone',
            'label' => 'Số Điện Thoại',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'text',
            'label' => 'Nội Dung',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'label' => 'Tình trạng',
            'type' => 'select_from_array',
            'name' => 'status',
            'options' => [0 => 'Chưa xem', 1 => 'Đợi trả lời', 2 => 'Đã đóng'],
            'allows_null' => false,
            'default' => 0,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);
        $this->crud->setEditView('vendor.backpack.report.edit_report_contact');
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud($request);
    }
    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}