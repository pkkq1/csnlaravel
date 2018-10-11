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



class ArtistController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel("App\Models\ArtistModel");
        $this->crud->setEntityNameStrings('Ca sĩ', 'Ca Sĩ');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/artist');
        $this->crud->orderBy('artist_id', 'desc');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');

//        $this->crud->allowAccess('reorder');
//        $this->crud->enableReorder('name', 2);
        $this->crud->setColumns([
            [
                'name'  => 'artist_id',
                'label' => 'ID',
            ],
            [
                'name'  => 'artist_nickname',
                'label' => 'Nghệ Danh',
            ],
            [
                'name'  => 'artist_avatar',
                'label' => 'Avatar',
                'prefix' => PUBLIC_AVATAR_ARTIST_PATH,
                'type' => 'image',
            ],
            [
                'name'  => 'artist_cover',
                'label' => 'Cover',
                'prefix' => PUBLIC_COVER_ARTIST_PATH,
                'type' => 'image',
            ],
        ]);

        $this->crud->addField([
            'name'  => 'artist_nickname',
            'label' => 'Nghệ Danh',
        ]);
        $this->crud->addField([
            'label' => 'Giới Tính',
            'type' => 'select_from_array',
            'name' => 'artist_gender',
            'options' => [0 => 'Nam', 1 => 'Nữ'],
            'allows_null' => false,
            'default' => 0,
        ]);

        $this->crud->addField([
            'name' => 'artist_birthday',
            'label' => 'Ngày Sinh',
            'type' => 'date',
        ], 'update');

        $this->crud->addField([
            'label' => "Avatar",
            'name' => "artist_avatar",
            'type' => 'image',
            'aspect_ratio' => 1,
            'crop' => true,
            'aspect_ratio' => 1,
            'upload' => true,
            'prefix' => PUBLIC_AVATAR_ARTIST_PATH,
        ]);
        $this->crud->addField([
            'label' => "Cover",
            'name' => "artist_cover",
            'type' => 'image',
            'aspect_ratio' => 1,
            'crop' => true,
            'aspect_ratio' => 1,
            'upload' => true,
            'prefix' => PUBLIC_COVER_ARTIST_PATH,
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

        return view($this->crud->getEditView(), $this->data);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud($request);
    }

    public function update(UpdateRequest $request)
    {
        $this->crud->hasAccessOrFail('update');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }
        // replace empty values with NULL, so that it will work with MySQL strict mode on
        foreach ($request->input() as $key => $value) {
            if (empty($value) && $value !== '0') {
                $request->request->set($key, null);
            }
        }
        if(strlen($request->input('artist_avatar')) < 100) {
            $request->request->set('artist_avatar', str_replace(env('APP_URL') . PUBLIC_AVATAR_ARTIST_PATH, '', $request->input('artist_avatar')));
        }else{
            $fileNameAvt = Helpers::saveBase64Image($request->input('artist_avatar'), AVATAR_ARTIST_CROP_PATH, $request->input('artist_id'));
            $request->request->set('artist_avatar', $fileNameAvt);
        }
        if(strlen($request->input('artist_cover')) < 100) {
            $request->request->set('artist_cover', str_replace(env('APP_URL') . PUBLIC_COVER_ARTIST_PATH, '', $request->input('artist_avatar')));
        }else{
            $fileNameCover = Helpers::saveBase64Image($request->input('artist_cover'), COVER_ARTIST_CROP_PATH, $request->input('artist_id'));
            $request->request->set('artist_cover', $fileNameCover);
        }

        // update the row in the db
        $item = $this->crud->update($request->get($this->crud->model->getKeyName()),
            $request->except('save_action', '_token', '_method', 'current_tab'));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        return $this->performSaveAction($item->getKey());
    }
}