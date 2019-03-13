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

class LyricController extends CrudController
{
    protected $artistRepository;
    protected $Solr;

    public function __construct(ArtistRepository $artistRepository, Solarium $Solr)
    {
        $this->artistRepository = $artistRepository;
        parent::__construct();

        $this->crud->setModel("App\Models\LyricSuggestionModel");
        $this->crud->setEntityNameStrings('Lyric', 'Lyric');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/lyric');
        $this->crud->orderBy('music_time', 'desc');
        $this->crud->denyAccess(['create']);

        $this->Solr = $Solr;

//        $this->crud->setEntityNameStrings('menu item', 'menu items');

        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('xoa_nhac')) {
                $this->crud->denyAccess(['list']);
            }
            if(!backpack_user()->can('danh_sach_ca_si_(create)')) {
                $this->crud->denyAccess(['create']);
            }
            if(!backpack_user()->can('danh_sach_ca_si_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            if(!backpack_user()->can('danh_sach_ca_si_(delete)')) {
                $this->crud->denyAccess(['delete']);
            }
            return $next($request);
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
                'name'  => 'music_lyric',
                'label' => 'lyric',
            ],
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
        return parent::updateCrud();
    }
}