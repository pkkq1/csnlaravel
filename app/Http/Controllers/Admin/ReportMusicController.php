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

class ReportMusicController extends CrudController
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
            if(!backpack_user()->can('report_(delete)')) {
                $this->crud->denyAccess(['delete']);
            }
            if(!backpack_user()->can('report_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            return $next($request);
        });
        parent::__construct();

    }
    public function setup()
    {
        $this->crud->setModel("App\Models\ReportMusicModel");
        $this->crud->setEntityNameStrings('Báo lỗi nhạc', 'Báo lỗi nhạc');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/report_music');
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
        $this->crud->addFilter([ // dropdown filter
            'name' => 'report_option',
            'type' => 'dropdown',
            'label'=> 'Lý do gửi'
        ], [
            'Spam' => 'Spam',
            'Vi phạm bản quyền' => 'Vi phạm bản quyền',
            'Không tải được' => 'Không tải được',
            'Chất lượng kém' => 'Chất lượng kém',
            'Thông tin chưa chính xác' => 'Thông tin chưa chính xác',
            'Bài hát bị lặp lại' => 'Bài hát bị lặp lại',
            'Lời bài hát chưa chính xác' => 'Lời bài hát chưa chính xác',
            'Karaoke chưa chính xác' => 'Karaoke chưa chính xác',
            'Lỗi khác' => 'Lỗi khác',
        ], function($value) { // if the filter is active
            $this->crud->addClause('where', 'report_option', $value);
        });
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'music_id',
            'label' => 'ID Bài hát',
        ]);
        $this->crud->addColumn([
            'name' => 'music_name',
            'label' => 'Tên bài hát',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a href="/user/music_uploaded/redirect/'.$entry->music_id.'" target="_blank">'.$entry->music_name.'</a>';
            },
        ]);
        $this->crud->addColumn([
            'name'  => 'report_option',
            'label' => 'Lý do gửi',
        ]);
//        $this->crud->addColumn([
//            'name' => 'report_text',
//            'label' => 'Nội dung gửi',
//            'type' => 'closure',
//            'function' => function($entry) {
//                $firstContent = last(unserialize($entry->report_text));
//                return $firstContent['user']['content'];
//            },
//        ]);
        $this->crud->addColumn([
            'name' => 'updated_at',
            'label' => 'Cập nhật',
            'type' => 'date',
            'format' => 'd/m/Y H:i',
        ]);
        $this->crud->addColumn([
            'name' => 'username',
            'label' => 'Người gửi',
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
//        $this->crud->addColumn([
//            'name' => 'ip',
//            'label' => 'IP',
//        ]);
//        $this->crud->addColumn([
//            'name' => 'mod',
//            'label' => 'Giao diện',
//        ]);
        $this->crud->addField([
            'name'  => 'report_option',
            'label' => 'Lý do gửi',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'report_text',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'username',
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

        $this->crud->addField([
            'name'  => 'music_name',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'url_music',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'link_file_jw',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'mod',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'created_at',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'ip',
            'type' => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'by_user_id',
            'type' => 'hidden',
        ]);
        $this->crud->setEditView('vendor.backpack.report.edit_report_music');
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
        // update the row in the db
        $item = $this->crud->update($request->get($this->crud->model->getKeyName()),
            $request->except('save_action', '_token', '_method', 'current_tab', 'http_referrer', 'id', 'link_file_jw', 'url_music', 'report_option', 'report_text'));

        $contentReport = unserialize($item->report_text);
        if($request->report_text_new) {
            $contentReport[]['support'] = [
                'time' => time(),
                'user_id' => Auth::user()->id,
                'name' => Auth::user()->name,
                'content' => $request->report_text_new,
            ];
            $item->report_text = serialize($contentReport);
            $item->save();
        }
        if(($request->status_old != $item->status) & ($item->notifi_read == 0)) {
            $item->notifi_read = 1;
            $item->save();
            if(ENABLE_NOTIFICATION == 1) {
                $this->NotificationRepository->pushNotif($item->by_user_id, $item->id, 'report_music', 'Báo cáo Nhạc của bạn đã phản hồi');
            }
        }
        $this->data['entry'] = $this->crud->entry = $item;
        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        return $this->performSaveAction($item->getKey());
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