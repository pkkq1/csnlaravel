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
use App\Repositories\SearchResult\SearchResultEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\User\UserEloquentRepository;

class SearchResultController extends CrudController
{
    protected $searchResultRepository;

    public function __construct(SearchResultEloquentRepository $searchResultRepository)
    {
        $this->searchResultRepository = $searchResultRepository;
        parent::__construct();

        $this->crud->setModel("App\Models\SearchResultModel");
        $this->crud->setEntityNameStrings('Kết quả tìm kiếm', 'Kết quả tìm kiếm');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/search_results');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');
        $this->crud->orderBy('updated_at', 'desc');
        $this->crud->denyAccess(['create']);
        $this->crud->denyAccess(['edit']);
        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('search_results(list)')) {
                $this->crud->denyAccess(['list']);
            }
            return $next($request);
        });
        $this->crud->addColumn([
            'name'  => 'id',
            'label' => 'ID',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a href="/user/music_uploaded/redirect/'.$entry->music_id.'" target="_blank">'.$entry->id.'</a>';
            },
        ]);
        $this->crud->addColumn([
            'name' => 'key_search',
            'label' => 'Từ khóa',
        ]);
        $this->crud->addColumn([
            'name' => 'type',
            'label' => 'Thể loại',
        ]);
        $this->crud->addColumn([
            'name' => 'type_id',
            'label' => 'id',
        ]);
        $this->crud->addColumn([
            'name' => 'count',
            'label' => 'Truy cập',
        ]);
        $this->crud->addColumn([
            'name' => 'updated_at',
            'label' => 'Cập nhật',
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
        return $this->crud->delete($id);
    }
    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}