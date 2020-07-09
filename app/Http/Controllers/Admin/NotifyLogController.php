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
use App\Models\ActionLogModel;

class NotifyLogController extends CrudController
{

    public function __construct()
    {

        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('log_(list)')) {
                $this->crud->denyAccess(['list']);
            }
//            $this->crud->denyAccess(['update']);
            $this->crud->denyAccess(['delete']);
            $this->crud->denyAccess(['create']);
            return $next($request);
        });
        parent::__construct();
    }
    public function setup()
    {
        $this->crud->setModel("App\Models\NotificationModel");
        $this->crud->setEntityNameStrings('Quản lý thông báo', 'Quản lý thông báo');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/notify_log');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');
        $this->crud->orderBy('id', 'desc');

        $this->crud->addFilter([ // dropdown filter
            'name' => 'type',
            'type' => 'dropdown',
            'label'=> 'Mục đích'
        ], [
            'upload_success' => 'Upload thành công',
            'upload_false' => 'Upload thất bại',
            'merge_music' => 'Nhập nhạc',
            'new_comment' => 'Bình luận mới',
            'reply_comment' => 'Trả lời bình luận',
            'report_music' => 'Báo cáo nhạc',
            'report_comment' => 'Báo cáo bình luận',
        ], function($value) { // if the filter is active
            $this->crud->addClause('where', 'type', $value);
        });
        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'from_to',
            'label'=> 'Hiển thị theo thời gian'
        ],
            false,
            function($value) {
                $dates = json_decode(htmlspecialchars_decode($value, ENT_QUOTES));
                $this->crud->addClause('whereDate', 'created_at', '>=', $dates->from);
                $this->crud->addClause('whereDate', 'created_at', '<=', $dates->to);
            });


        $this->crud->addColumn([
            'name'  => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name'  => 'notification_id',
            'label' => 'ID Notify',
        ]);
        $this->crud->addColumn([
            'name'  => 'type',
            'label' => 'Name',
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Ngày tạo',
        ]);
        $this->crud->addColumn([
            'name' => 'text',
            'label' => 'Nội dung bình luận',
        ]);
        $this->crud->addColumn([
            'name' => 'music_id',
            'label' => 'music_id',
        ]);
        $this->crud->addColumn([
            'label' => 'Người tạo',
            'type' => 'select',
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => 'name',
            'model' => "App\User",
        ]);
        $this->crud->addColumn([
            'name'  => 'link_url',
            'label' => 'Kết nối',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a href="'.$entry->link_url.'" target="_blank">'.substr($entry->link_url, 0, 10).'</a>';
            },
        ]);
        $this->crud->addField([
            'name' => 'text',
            'type' => 'textarea',
            'label' => 'Nội dung Log',
        ]);
        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'name' => 'link_url',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'text',
        ]);
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
        $comment = $this->crud->getModel()::where('comment_id', $id)->first();
        $this->musicRepository->decrementCol($comment->music_id, 'music_comment');
        $this->userRepository->decrementCol($comment->user_id, 'user_comments');
        return $this->crud->delete($id);
    }
    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}