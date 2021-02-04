<?php

namespace Backpack\NewsCRUD\app\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as UpdateRequest;

class CategoryCrudController extends CrudController
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
        $this->crud->setModel("Backpack\NewsCRUD\app\Models\Category");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/category');
        $this->crud->setEntityNameStrings('category', 'Danh Mục Tin Tức');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('name', 2);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'name',
                                'label' => 'Name',
                            ]);
        $this->crud->addColumn([
                                'name' => 'slug',
                                'label' => 'Slug',
                            ]);
        $this->crud->addColumn([
                                'label' => 'Parent',
                                'type' => 'select',
                                'name' => 'parent_id',
                                'entity' => 'parent',
                                'attribute' => 'name',
                                'model' => "Backpack\NewsCRUD\app\Models\Category",
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
        $this->crud->addField([
                                'label' => 'Parent',
                                'type' => 'select',
                                'name' => 'parent_id',
                                'entity' => 'parent',
                                'attribute' => 'name',
                                'model' => "Backpack\NewsCRUD\app\Models\Category",
                            ]);
    }

    public function store(StoreRequest $request)
    {
        $this->crud->hasAccessOrFail('create');
        $this->crud->setOperation('create');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }

        // insert item in the db
        $item = $this->crud->create($request->except(['save_action', '_token', '_method', 'current_tab', 'http_referrer']));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        $str_cat = '';
        foreach($this->crud->model->get() as $item) {
            $str_cat = $str_cat . '<li><a href="{{URL::to(\'/\')}}/tin-tuc/'.$item->slug.'.html" title="Sao Việt"><span>'.$item->name.'</span></a></li>';
        }
        file_put_contents(resource_path().'/views/cache/news_category.blade.php',
            $str_cat);

        return $this->performSaveAction($item->getKey());
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
            $request->except('save_action', '_token', '_method', 'current_tab', 'http_referrer'));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        $str_cat = '';
        foreach($this->crud->model->get() as $item) {
            $str_cat = $str_cat . '<li><a href="{{URL::to(\'/\')}}/tin-tuc/'.$item->slug.'.html" title="Sao Việt"><span>'.$item->name.'</span></a></li>';
        }
        file_put_contents(resource_path().'/views/cache/news_category.blade.php',
            $str_cat);

        return $this->performSaveAction($item->getKey());
    }
    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');
        $this->crud->setOperation('delete');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;
        $result = $this->crud->delete($id);
        $str_cat = '';
        foreach($this->crud->model->get() as $item) {
            $str_cat = $str_cat . '<li><a href="{{URL::to(\'/\')}}/tin-tuc/'.$item->slug.'.html" title="Sao Việt"><span>'.$item->name.'</span></a></li>';
        }
        file_put_contents(resource_path().'/views/cache/news_category.blade.php',
            $str_cat);

        return $result;
    }
}
