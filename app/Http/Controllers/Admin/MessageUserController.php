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
use App\Repositories\MessageUser\MessageUserEloquentRepository;
use DB;

class MessageUserController extends CrudController
{
    protected $NotificationRepository;
    protected $userMessageRepository;

    public function __construct(NotificationEloquentRepository $NotificationRepository, MessageUserEloquentRepository $userMessageRepository)
    {
        $this->NotificationRepository = $NotificationRepository;
        $this->userMessageRepository = $userMessageRepository;

        $this->middleware(function ($request, $next)
        {
            $this->crud->denyAccess(['create']);
            if(!backpack_user()->can('user_message_(list)')) {
                $this->crud->denyAccess(['list']);
                $this->crud->denyAccess(['update']);
                $this->crud->denyAccess(['delete']);
            }
            if(!backpack_user()->can('user_message_(create)')) {
                $this->crud->denyAccess(['create']);
            }
            if(!backpack_user()->can('user_message_(delete)')) {
                $this->crud->denyAccess(['delete']);
            }
            if(!backpack_user()->can('user_message_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            return $next($request);
        });
        parent::__construct();

    }
    public function setup()
    {
        $this->crud->setModel("App\Models\MessageUserModel");
        $this->crud->setEntityNameStrings('Tin Nhắn User', 'Tin Nhắn User');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/user_message');
        $this->crud->addClause('whereIn', 'status', [0, 1]);
        $this->crud->orderBy('status', 'asc');
        $this->crud->orderBy('status', 'desc');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');

        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'label' => 'Tin nhắn User',
            'type' => 'select',
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => 'name',
            'model' => "App\User",
        ]);
        $this->crud->addColumn([
            'name' => 'text',
            'label' => 'Nội Dung',
        ]);
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'admin_username',
            'label' => 'Admin UserName',
        ]);
        $this->crud->addColumn([
            'name'  => 'status',
            'label' => 'Tình Trạng',
            'type' => 'closure',
            'function' => function($entry) {
                if($entry->status == 0) {
                    return '<span class="label label-warning">Chưa xem</span>';
                }elseif ($entry->status == 1) {
                    return '<span class="label label-default">Đã trả lời</span>';
                }
            },
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Cập nhật',
            'type' => 'date',
            'format' => 'd/m/Y H:i',
        ]);
        $this->crud->addField([
            'name'  => 'user_by_id',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'label' => 'Tình Trạng',
            'type' => 'select_from_array',
            'name' => 'status',
            'options' => [0 => 'Chưa Xem', 1 => 'Đã Trả Lời'],
            'allows_null' => false,
            'default' => 0,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);

        $this->crud->setEditView('vendor.backpack.user_message.user_message_edit');
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud($request);
    }

    public function update(UpdateRequest $request)
    {
        $this->crud->hasAccessOrFail('update');
        $this->crud->setOperation('update');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }
        // new row in the db
        if($request->text_new) {
            $this->userMessageRepository->getModel()::where('user_by_id', $request->user_by_id)->orderby('id', 'desc')->first()->update(['status' => 3]); // 0 chưa xem, 1 đã trả lời, 3 ẩn tn cũ đi
            $result = $this->userMessageRepository->addMsg($request->text_new, $request->user_by_id, '', Auth::user()->id, Auth::user()->username, $request->status);
            $this->NotificationRepository->pushNotif($request->user_by_id, $result->id, 'message', 'Tin nhắn bạn đã phản hồi', '/user/'.$request->user_by_id.'?tab=message_csn');
        }else{
            $this->userMessageRepository->getModel()::where('id', $request->id)->update(['status' => $request->status]);
        }

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        return $this->performSaveAction();
    }
    public function bannedUserMusic(UpdateRequest $request, $user_id) {
        $this->crud->hasAccessOrFail('update');
        $this->crud->setOperation('update');

        DB::table('csn_permission_user')->insert([
            'user_id' => $user_id,
            'permission_id' => 104,
        ]);

        \Alert::success('Chặn báo cáo thành công.')->flash();
        return \Redirect::to($this->crud->route);
    }
}