<?php

namespace Backpack\NewsCRUD\app\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\NewsCRUD\app\Http\Requests\TagRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\TagRequest as UpdateRequest;

class TagCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('article_(list)')) {
                $this->crud->denyAccess(['list']);
            }
            if(!backpack_user()->can('article_(create)')) {
                $this->crud->denyAccess(['create']);
            }
            if(!backpack_user()->can('article_(update)')) {
                $this->crud->denyAccess(['update']);
            }
            if(!backpack_user()->can('article_(delete)')) {
                $this->crud->denyAccess(['delete']);
            }
            return $next($request);
        });
        parent::__construct();
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("Backpack\NewsCRUD\app\Models\Tag");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/tag');
        $this->crud->setEntityNameStrings('tag', 'tags');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'name',
                                'label' => 'Name',
                            ]);
        $this->crud->addColumn([
                                'name' => 'slug',
                                'label' => 'Slug',
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'name',
                                'label' => 'Name',
                            ]);
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'hint' => 'Will be automatically generated from your name, if left empty.',
                                // 'disabled' => 'disabled'
                            ]);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
