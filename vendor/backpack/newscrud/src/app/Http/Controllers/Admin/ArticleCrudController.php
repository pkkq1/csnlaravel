<?php

namespace Backpack\NewsCRUD\app\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\NewsCRUD\app\Http\Requests\ArticleRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\ArticleRequest as UpdateRequest;
use Backpack\NewsCRUD\app\Models\Tag;
use App\Models\ArticleTagsModel;
use Backpack\NewsCRUD\app\Models\Category;
use Illuminate\Http\Request as Request;
use Artisan;

class ArticleCrudController extends CrudController
{
    public function __construct()
    {
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

    }
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("Backpack\NewsCRUD\app\Models\Article");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/article');
        $this->crud->setEntityNameStrings('Tin tức', 'Tin tức');
        $this->crud->orderBy('id', 'desc');
        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */
        $this->crud->addFilter([ // select2_multiple filter
            'name' => 'type_article',
            'type' => 'select2_multiple',
            'label'=> 'Danh mục',
            'placeholder' => 'Tìm Danh mục tin tức'
        ], function () {
            return Category::orderBy('name')->pluck('name', 'id')->toArray();
        }, function ($values) {
            $values = json_decode(htmlspecialchars_decode($values, ENT_QUOTES));
            if (!empty($values)) {
                $this->crud->addClause('whereIn', 'category_id', $values);
            }
        });
        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'from_to',
            'label'=> 'Hiển thị theo thời gian'
        ],
            false,
            function($value) {
                $dates = json_decode(htmlspecialchars_decode($value, ENT_QUOTES));
                $this->crud->addClause('whereDate', 'date', '>=', $dates->from);
                $this->crud->addClause('whereDate', 'date', '<=', $dates->to);
            });
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'date_publish',
            'label' => 'Ngày X.Bản',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a href="/tin-tuc/'.$entry->slug.'-p-'.$entry->id.'.html" target="_blank">'.date_format(date_create($entry->date_publish),"H:i d/m/Y").'</a>';
            },
        ]);


        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Trạng thái',
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Tiêu đề',
        ]);
        $this->crud->addColumn([
            'name' => 'featured',
            'label' => 'Nỗi bật',
            'type' => 'check',
        ]);
        $this->crud->addColumn([
            'label' => 'Danh Mục',
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "Backpack\NewsCRUD\app\Models\Category",
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // TEXT
            'name' => 'title',
            'label' => 'Tiêu đề',
            'type' => 'text',
            'placeholder' => 'Your title here',
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type' => 'text',
            'hint' => 'Will be automatically generated from your title, if left empty.',
            // 'disabled' => 'disabled'
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'date_publish',
            'label' => 'Xuất bản',
            'type' => 'datetime',
//            'value' => date('Y-m-d H:i'),
        ]);
//        $this->crud->addField([    // TEXT
//            'name' => 'date',
//            'label' => 'Date',
//            'type' => 'date',
//        ], 'update');
        $this->crud->addField([
            'name' => 'short_content',
            'label' => 'Nội dung ngắn',
            'type' => 'textarea',
            'placeholder' => 'Nhập lời bài hát ngắn',
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([    // WYSIWYG
            'name' => 'content',
            'label' => 'Nội dung',
            'type' => 'ckeditor',
            'placeholder' => 'Your textarea text here',
        ]);
        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Ảnh đại diện tin',
            'type' => 'browse',
        ]);
        $this->crud->addField([    // SELECT
            'label' => 'Danh mục',
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "Backpack\NewsCRUD\app\Models\Category",
        ]);
//        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
//            'label' => 'Tags',
//            'type' => 'select2_multiple',
//            'name' => 'tags', // the method that defines the relationship in your Model
//            'entity' => 'tags', // the method that defines the relationship in your Model
//            'attribute' => 'name', // foreign key attribute that is shown to user
//            'model' => "Backpack\NewsCRUD\app\Models\Tag", // foreign key model
//            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
//        ]);

        //        $this->crud->addField([
//            'label' => "Tags", // Table column heading
//            'type' => "select2_from_ajax_multiple",
//            'name' => 'id', // the column that contains the ID of that connected entity
//            'entity' => 'tags', // the method that defines the relationship in your Model
//            'attribute' => "name", // foreign key attribute that is shown to user
//            'data_source' => url("admin/article_tag/search_tag"), // url to controller search function (with /{id} should return model)
//            'placeholder' => "Lựa chọn nhiều tags cho bài viết", // placeholder for the select
//            'model' => "Backpack\NewsCRUD\app\Models\Tag", // foreign key model
//            'pivot' => true,
//            'minimum_input_length' => 1, // minimum characters to type before querying results
//        ]);

        $this->crud->addField([    // ENUM
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum',
        ]);
        $this->crud->addField([    // CHECKBOX
            'name' => 'featured',
            'label' => 'Featured item',
            'type' => 'checkbox',
        ]);

        $this->crud->addField([    // ENUM
            'name' => 'tags_name',
            'type' => 'hidden',
        ]);
        $this->crud->addField([    // ENUM
            'name' => 'tags_id',
            'type' => 'hidden',
        ]);



        $this->crud->enableAjaxTable();
        $this->crud->setEditView('vendor.backpack.article.edit');
        $this->crud->setCreateView('vendor.backpack.article.create');
    }
    public function searchTags(Request $request)
    {
        $search_term = $request->input('term');
        $results = [];
        if ($search_term)
        {
            $result = Tag::select('name', 'id')
                ->where(function($q) use ($search_term) {
                    $q->where('name', 'LIKE', '%'.$search_term.'%')
                        ->orWhere('slug', 'LIKE', '%'.$search_term.'%');
                })
                ->limit(10)->get()->toArray();
        }
        else
        {
            $result = Tag::select('name', 'id')
                ->limit(10)->get()->toArray();
        }
        return response($result);
    }
    public function edit($id, $template = false)
    {
        $this->crud->hasAccessOrFail('update');
        $this->crud->setOperation('update');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;
        $data = $this->crud->getEntry($id);
        // get the info for that entry
        $this->data['entry'] = $this->crud->getEntry($id);
        $this->data['crud'] = $this->crud;
        $this->data['saveAction'] = $this->getSaveAction();
        $this->data['fields'] = $this->crud->getUpdateFields($id);
        $this->data['title'] = $this->crud->getTitle() ?? trans('backpack::crud.edit').' '.$this->crud->entity_name;

        $this->data['id'] = $id;

        // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
        return view($this->crud->getEditView(), $this->data);
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
        $request->merge(['article_by_user_name' => $request->article_by_user_name_]);
        $request->merge(['article_by_user_id' => $request->article_by_user_id_]);
        $item = $this->crud->create($request->except(['save_action', '_token', '_method', 'current_tab', 'http_referrer']));
        if($request->tags_id) {
            $tags_slug = [];
            $tags_name = explode(';', $request->tags_name);
            $tags_id = [];
            foreach (explode(';', $request->tags_id) as $key => $itemTag) {
                if($itemTag > 0) {
                    $tagElm = Tag::find($itemTag);
                }else {
                    $tagElm = Tag::create([
                        'name' => $tags_name[$key]
                    ]);
                }
                $tags_id[] = $tagElm->id;
                $tags_slug[] = $tagElm->slug;
                ArticleTagsModel::create([
                    'article_id' => $item->id,
                    'tag_id' => $tagElm->id,
                ]);
            }
            $item->tags_name = $request->tags_name;
            $item->tags_id = implode(';', $tags_id);
            $item->tags_slug = implode(';', $tags_slug);
        }
        $item->article_by_user_name = backpack_user()->name;
        $item->article_by_user_id = backpack_user()->user_id;
        $item->save();

        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();
        $result = $this->performSaveAction($item->getKey());
//        Artisan::call('sync_news:type new_news');
        return $result;
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
            $request->except('save_action', '_token', '_method', 'current_tab', 'http_referrer', 'tags_id', 'tags_name'));
        if($request->old_tags_id != $request->tags_id) {
            ArticleTagsModel::where('article_id', $request->get($this->crud->model->getKeyName()))->delete();
            $tags_slug = [];
            $tags_name = explode(';', $request->tags_name);
            $tags_id = [];
            foreach (explode(';', $request->tags_id) as $key => $itemTag) {
                if($itemTag > 0) {
                    $tagElm = Tag::find($itemTag);
                }else {
                    $tagElm = Tag::create([
                        'name' => $tags_name[$key]
                    ]);
                }
                $tags_id[] = $tagElm->id;
                $tags_slug[] = $tagElm->slug;
                ArticleTagsModel::create([
                    'article_id' => $item->id,
                    'tag_id' => $tagElm->id,
                ]);
            }
            $item->tags_name = $request->tags_name;
            $item->tags_id = implode(';', $tags_id);
            $item->tags_slug = implode(';', $tags_slug);
        }
        $item->article_by_user_id_update = backpack_user()->user_id;
        $item->save();

        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        $result = $this->performSaveAction($item->getKey());
//        Artisan::call('sync_news:type new_news');
        return $result;
    }
    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');
        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;
        ArticleTagsModel::where('article_id', $id)->delete();
        $result = $this->crud->delete($id);
//        Artisan::call('sync_news:type new_news');
        return $result;
    }
}
