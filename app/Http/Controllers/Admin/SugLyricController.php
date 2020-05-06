<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request as Request;
use App\Library\Helpers;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Requests\CrudRequest as StoreRequest;
use Backpack\CRUD\app\Http\Requests\CrudRequest as UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Artist\ArtistRepository;
use App\Solr\Solarium;
use App\Http\Controllers\Sync\SolrSyncController;
use App\Models\LyricSuggestionModel;
use App\Models\MusicModel;
use App\Models\UploadModel;

class SugLyricController extends CrudController
{
    protected $Solr;

    public function __construct(Solarium $Solr)
    {
        $this->Solr = $Solr;
        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('suggestion_lyric_(list)')) {
                $this->crud->denyAccess(['list']);
            }
            if(!backpack_user()->can('suggestion_lyric_(create)')) {
                $this->crud->denyAccess(['create']);
            }
            if(!backpack_user()->can('suggestion_lyric_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            if(!backpack_user()->can('suggestion_lyric_(delete)')) {
                $this->crud->denyAccess(['delete']);
            }
            return $next($request);
        });
        parent::__construct();

    }
    public function setup()
    {
        $this->crud->setModel("App\Models\LyricSuggestionModel");
        $this->crud->setEntityNameStrings('Lyric', 'Lyric');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/lyric');
        $this->crud->orderBy('id', 'asc');
        $this->crud->denyAccess(['create']);
        $this->crud->addFilter([ // dropdown filter
            'name' => 'status',
            'type' => 'dropdown',
            'label'=> 'Tình trạng'
        ], [
            0 => 'Chưa xem',
            1 => 'Đã xác nhận',
        ], function($value) { // if the filter is active
            $this->crud->addClause('where', 'status', $value);
        });
        $this->crud->setColumns([
            [
                'name'  => 'music_id',
                'label' => 'Music ID',
                'type' => 'closure',
                'function' => function($entry) {
                    return '<a href="/user/music_uploaded/redirect/'.$entry->music_id.'" target="_blank">'.$entry->music_id.'</a>';
                },
            ],
            [
                'name'  => 'music_time',
                'label' => 'Ngày tạo',
                'type' => 'date',
            ],
            [
                'name'  => 'music_title',
                'label' => 'Tên bài hát',
            ],
            [
                'label' => 'Người tạo',
                'type' => 'select',
                'name' => 'user_id',
                'entity' => 'user',
                'attribute' => 'name',
                'model' => "App\User",
            ],
            [
                'name'  => 'status',
                'label' => 'Tình Trạng',
                'type' => 'closure',
                'function' => function($entry) {
                    if($entry->status == 0) {
                        return '<span class="label label-warning">Chưa xem</span>';
                    }else{
                        return '<span class="label label-default">Đã xác nhận</span>';
                    }
                },
            ]
        ]);


        $this->crud->addField([
            'name'  => 'id',
            'type'  => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'music_id',
            'type'  => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'music_title',
            'type'  => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'music_artist',
            'type'  => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'music_lyric',
            'type'  => 'hidden',
        ]);
        $this->crud->addField([
            'name'  => 'user_id',
            'type'  => 'hidden',
        ]);
    }

    public function edit($id, $template = false)
    {
        $this->crud->hasAccessOrFail('update');
        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;

        // get the info for that entry
        $this->data['entry'] = $this->crud->getEntry($id);
        $this->data['crud'] = $this->crud;
        $this->data['saveAction'] = $this->getSaveAction();
        $this->data['fields'] = $this->crud->getUpdateFields($id);
        $this->data['title'] = trans('backpack::crud.edit').' '.$this->crud->entity_name;
        $this->data['id'] = $id;
        $music = MusicModel::find($this->data['fields']['music_id']['value']);
        if(!$music) {
            \Alert::error('Lỗi, bài hát đã bị xóa')->flash();
            return redirect()->back();
        }
        $this->data['music'] = $music;
        return view('vendor.backpack.lyric.edit', $this->data);
    }
    public function destroy($id)
    {
        return $this->crud->delete($id);
    }
    public function store(StoreRequest $request)
    {
        return parent::storeCrud($request);
    }
    public function update(UpdateRequest $request)
    {
        return parent::updateCrud($request);
    }
    public function approvalLyric(StoreRequest $request, $id) {
        $sugLyric = LyricSuggestionModel::find($id);
        if(!$sugLyric) {
            \Alert::error('Lỗi, gợi ý không tồn tại')->flash();
            return redirect()->back();
        }
        $upload = UploadModel::find($request->music_id);
        $upload->music_updated = 0;
        $upload->music_lyric = $request->music_lyric;
        $upload->music_last_update_time = time();
        $upload->music_last_update_by =  Auth::user()->id;
        $upload->save();
        $sugLyric->status = 1;
        $sugLyric->approval_by = Auth::user()->id;
        $sugLyric->save();
        \Alert::success('Cập nhật lyric mới thành công.')->flash();
        return \Redirect::to($this->crud->route);
    }
}