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



class ReportCommentController extends CrudController
{
    public function __construct()
    {
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
        $this->crud->setModel("App\Models\ReportCommentModel");
        $this->crud->setEntityNameStrings('Báo cáo bình luận', 'Báo cáo bình luận');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/report_comment');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');

        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'comment_id',
            'label' => 'ID Bình luận',
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
        $this->crud->addColumn([
            'name' => 'report_text',
            'label' => 'Nội dung gửi',
        ]);
        $this->crud->addColumn([
            'name' => 'comment_type',
            'label' => 'Cấp độ BL',
        ]);
        $this->crud->addColumn([
            'name' => 'comment_text',
            'label' => 'Nội dung bình luận',
        ]);
        $this->crud->addColumn([
            'name' => 'username',
            'label' => 'Người gửi',
        ]);
        $this->crud->addColumn([
            'name' => 'username',
            'label' => 'Người gửi',
        ]);
        $this->crud->addColumn([
            'name' => 'ip',
            'label' => 'IP',
        ]);
        $this->crud->addColumn([
            'name' => 'mod',
            'label' => 'Giao diện',
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Ngày tạo',
            'type' => 'date',
            'format' => 'd/m/Y H:i',
        ]);
        $this->crud->addField([
            'name'  => 'report_option',
            'label' => 'Lý do gửi',
            'type' => 'textarea',
        ]);
        $this->crud->addField([
            'name'  => 'url_music',
            'label' => 'URL đang nghe',
        ]);
        $this->crud->addField([
            'name'  => 'link_file_jw',
            'label' => 'File đang nghe',
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