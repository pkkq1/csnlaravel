<?php

namespace Backpack\PermissionManager\app\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Requests\CrudRequest;
use Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest as StoreRequest;
use Backpack\PermissionManager\app\Http\Requests\UserUpdateCrudRequest as UpdateRequest;
use App\Models\Role;
use App\Models\PermissionUserModel;
use App\Models\Permission;

class UserCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(config('backpack.permissionmanager.user_model'));
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.user'), trans('backpack::permissionmanager.users'));
        $this->crud->setRoute(config('backpack.base.route_prefix').'/user');
//        $this->crud->orderBy('created_at', 'desc');
        $this->crud->enableAjaxTable();
        // Columns.
        if(!backpack_user()->can('user_(list)')) {
            $this->crud->denyAccess(['list']);
        }
        if(!backpack_user()->can('user_(create)')) {
            $this->crud->denyAccess(['create']);
        }
        if(!backpack_user()->can('user_(update)')) {
            $this->crud->denyAccess(['update']);
        }
        if(!backpack_user()->can('user_(delete)')) {
            $this->crud->denyAccess(['delete']);
        }

        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'from_to',
            'label'=> 'Thời gian tạo'
        ],
            false,
            function($value) {
                $dates = json_decode(htmlspecialchars_decode($value, ENT_QUOTES));
                $this->crud->addClause('whereDate', 'created_at', '>=', $dates->from);
                $this->crud->addClause('whereDate', 'created_at', '<=', $dates->to);
            });
        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'from_to_2',
            'label'=> 'Thời gian đăng nhập'
        ],
            false,
            function($value) {
                $dates = json_decode(htmlspecialchars_decode($value, ENT_QUOTES));
                $this->crud->addClause('where', 'user_lastvisit', '>=', strtotime($dates->from));
                $this->crud->addClause('where', 'user_lastvisit', '<=', strtotime($dates->to));
            });

        $this->crud->addFilter([ // select2_multiple filter
            'name' => 'roles',
//            'type' => 'dropdown',
            'type' => 'select2_multiple',
            'label'=> 'Roles',
            'placeholder' => 'Tìm phân quyền truy cập (Roles)'
        ], function () {
            return Role::orderBy('name')->get()->pluck('name', 'id')->toArray();
        }, function ($values) {
            $values = json_decode(htmlspecialchars_decode($values, ENT_QUOTES));
            if (!empty($values)) {
                // $this->crud->addClause('where', 'roles.name', 'IN', $values);
                $this->crud->query = $this->crud->query->whereHas('roles',
                    function ($query) use ($values) {
                        $query->whereIn('csn_roles.id', $values);
                    });
            }
        });
        $this->crud->addFilter([ // select2_multiple filter
            'name' => 'permissions',
            'type' => 'select2_multiple',
            'label'=> 'Extra Permissions',
            'placeholder' => 'Tìm phân quyền truy cập (Extra Permissions)'
        ], function () {
            return Permission::orderBy('name')->get()->pluck('name', 'id')->toArray();
        }, function ($values) {
            $values = json_decode(htmlspecialchars_decode($values, ENT_QUOTES));
            if (!empty($values)) {
                $this->crud->query = $this->crud->query->whereHas('permissions',
                    function ($query) use ($values) {
                        $query->whereIn('csn_permissions.id', $values);
                    });
            }
        });



//        $this->crud->addFilter([ // select2 filter
//            'name' => 'status',
//            'type' => 'select2',
//            'label'=> 'Status'
//        ], function() {
//            return [
//                1 => 'In stock',
//                2 => 'In provider stock',
//                3 => 'Available upon ordering',
//                4 => 'Not available',
//            ];
//        }, function($value) { // if the filter is active
//            // $this->crud->addClause('where', 'status', $value);
//        });


//
//        $this->crud->addFilter([ // select2_ajax filter
//            'name' => 'role_id',
//            'type' => 'select2_ajax',
//            'label'=> 'Roles',
//            'placeholder' => 'Tìm phân quyền truy cập'
//        ],
//            url('admin/ajax-role-options'), // the ajax route
//            function($value) { // if the filter is active
//                $this->crud->query = $this->crud->query->with(['Role' => function ($query) {
//                    $query->where('user_id', '=', 1);
//                }]);
//            });


        $this->crud->setColumns([
            [
                'name'  => 'id',
                'label' => 'ID',
                'type' => 'closure',
                'function' => function($entry) {
                    return '<a href="/user/'.$entry->user_id.'" target="_blank">'.$entry->user_id.'</a>';
                },
            ],
            [
                'name'  => 'created_at',
                'label' => 'Ngày tạo',
                'type'  => 'date',
            ],
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'username',
                'label' => 'User name',
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [ // n-n relationship (with pivot table)
                'label'     => trans('backpack::permissionmanager.roles'), // Table column heading
                'type'      => 'select_multiple',
                'name'      => 'roles', // the method that defines the relationship in your Model
                'entity'    => 'roles', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model'     => config('laravel-permission.models.role'), // foreign key model
            ],
            [ // n-n relationship (with pivot table)
                'label'     => trans('backpack::permissionmanager.extra_permissions'), // Table column heading
                'type'      => 'select_multiple',
                'name'      => 'permissions', // the method that defines the relationship in your Model
                'entity'    => 'permissions', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model'     => config('laravel-permission.models.permission'), // foreign key model
            ],

//            [ // n-n relationship (with pivot table)
//                'label'     => trans('backpack::permissionmanager.roles'), // Table column heading
//                'type'      => 'select',
//                'name'      => 'roles', // the method that defines the relationship in your Model
//                'entity'    => 'roles', // the method that defines the relationship in your Model
//                'attribute' => 'name', // foreign key attribute that is shown to user
//                'model'     => config('laravel-permission.models.role'), // foreign key model
//            ],
//            [ // n-n relationship (with pivot table)
//               'label'     => trans('backpack::permissionmanager.extra_permissions'), // Table column heading
//               'type'      => 'select_multiple',
//               'name'      => 'permissions', // the method that defines the relationship in your Model
//               'entity'    => 'permissions', // the method that defines the relationship in your Model
//               'attribute' => 'name', // foreign key attribute that is shown to user
//               'model'     => config('laravel-permission.models.permission'), // foreign key model
//            ],
        ]);

        // Fields
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'username',
                'label' => 'User name',
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [
                'name'  => 'password',
                'label' => trans('backpack::permissionmanager.password'),
                'type'  => 'password',
            ],
            [
                'name'  => 'password_confirmation',
                'label' => trans('backpack::permissionmanager.password_confirmation'),
                'type'  => 'password',
            ],
            [
            // two interconnected entities
            'label'             => trans('backpack::permissionmanager.user_role_permission'),
            'field_unique_name' => 'user_role_permission',
            'type'              => 'checklist_dependency',
            'name'              => 'roles_and_permissions', // the methods that defines the relationship in your Model
            'subfields'         => [
                    'primary' => [
                        'label'            => trans('backpack::permissionmanager.roles'),
                        'name'             => 'roles', // the method that defines the relationship in your Model
                        'entity'           => 'roles', // the method that defines the relationship in your Model
                        'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
                        'attribute'        => 'name', // foreign key attribute that is shown to user
                        'model'            => config('laravel-permission.models.role'), // foreign key model
                        'pivot'            => true, // on create&update, do you need to add/delete pivot table entries?]
                        'number_columns'   => 3, //can be 1,2,3,4,6
                    ],
                    'secondary' => [
                        'label'          => ucfirst(trans('backpack::permissionmanager.permission_singular')),
                        'name'           => 'permissions', // the method that defines the relationship in your Model
                        'entity'         => 'permissions', // the method that defines the relationship in your Model
                        'entity_primary' => 'roles', // the method that defines the relationship in your Model
                        'attribute'      => 'name', // foreign key attribute that is shown to user
                        'model'          => config('laravel-permission.models.permission'), // foreign key model
                        'pivot'          => true, // on create&update, do you need to add/delete pivot table entries?]
                        'number_columns' => 3, //can be 1,2,3,4,6
                    ],
                ],
            ],
        ]);

    }

    /**
     * Store a newly created resource in the database.
     *
     * @param StoreRequest $request - type injection used for validation using Requests
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $this->handlePasswordInput($request);

        return parent::storeCrud($request);
    }

    /**
     * Update the specified resource in the database.
     *
     * @param UpdateRequest $request - type injection used for validation using Requests
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request)
    {
        $this->handlePasswordInput($request);

        return parent::updateCrud($request);
    }

    /**
     * Handle password input fields.
     *
     * @param CrudRequest $request
     */
    protected function handlePasswordInput(CrudRequest $request)
    {
        // Remove fields not present on the user.
        $request->request->remove('password_confirmation');

        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', bcrypt($request->input('password')));
        } else {
            $request->request->remove('password');
        }
    }
    public function getRoleOption(CrudRequest $request)
    {
        $term = $this->request->input('term');
        $options = Role::where('name', 'like', '%'.$term.'%')->get();
        return $options->pluck('name', 'id');
    }
}
