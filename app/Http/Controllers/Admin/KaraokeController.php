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

class KaraokeController extends CrudController
{
    protected $artistRepository;
    protected $Solr;

    public function __construct(ArtistRepository $artistRepository, Solarium $Solr)
    {
        $this->artistRepository = $artistRepository;
        parent::__construct();

        $this->crud->setModel("App\Models\MusicKaraokeModel");
        $this->crud->setEntityNameStrings('Danh Sách Karaoke', 'Danh Sách Karaoke');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/list_karaoke');
        $this->crud->orderBy('music_update_time', 'desc');
        $this->crud->orderBy('music_time', 'desc');
        $this->crud->denyAccess(['create']);

        $this->Solr = $Solr;

        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('suggestion_karaoke_(list)')) {
                $this->crud->denyAccess(['list']);
            }
            $this->crud->denyAccess(['create']);
            if(!backpack_user()->can('suggestion_karaoke_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            if(!backpack_user()->can('suggestion_karaoke_(delete)')) {
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
                'label' => 'Người tạo',
                'type' => 'select',
                'name' => 'user_id',
                'entity' => 'user',
                'attribute' => 'name',
                'model' => "App\User",
            ],
            [
                'name'  => 'music_lyric_karaoke',
                'label' => 'karaoke',
            ],
        ]);

        $this->crud->addField([
            'name' => 'music_lyric_karaoke',
            'label' => 'Karaoke',
            'type' => 'textarea',
            'placeholder' => 'Nhập thông tin karaoke',
            // 'disabled' => 'disabled'
        ]);

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

}