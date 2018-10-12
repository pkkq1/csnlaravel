<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/2018
 * Time: 3:38 PM
 */
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request as Request;
use App\Repositories\Artist\ArtistEloquentRepository;
use App\Repositories\ArtistUpload\ArtistUploadEloquentRepository;
use App\Library\Helpers;
use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Requests\CrudRequest as StoreRequest;
use Backpack\CRUD\app\Http\Requests\CrudRequest as UpdateRequest;
use Illuminate\Support\Facades\Auth;

class ArtistUploadController extends CrudController
{
    protected $artistRepository;
    protected $artistUploadRepository;

    public function __construct(ArtistEloquentRepository $artistRepository, ArtistUploadEloquentRepository $artistUploadRepository)
    {
        $this->artistRepository = $artistRepository;
        $this->artistUploadRepository = $artistUploadRepository;
        parent::__construct();
        $this->crud->setModel("App\Models\ArtistUploadModel");
        $this->crud->setEntityNameStrings('Upload Artist', 'Artist Upload');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/artist_upload');
        $this->crud->denyAccess(['create']);
        $this->crud->orderBy('artist_id', 'desc');
//        $this->crud->addClause('where', 'active', 1);
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

        // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
        return view('vendor.backpack.upload_artist.edit', $this->data);

    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
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
    public function approvalArtistUpload($id) {
        $artistUpload = $this->artistUploadRepository->findOnlyPublished($id);
        $nameExist = $this->artistRepository->getModel()::where('artist_nickname', $artistUpload->artist_nickname)->first();
        if($nameExist) {
            \Alert::error('Tên Ca sĩ đã tồn tại.')->flash();
            return redirect()->back();
        }
        $result = $this->artistRepository->createArtist($artistUpload);
        $this->artistUploadRepository->delete($id);
        \Alert::success('Xác nhận ca sĩ thành công.')->flash();
        return \Redirect::to($this->crud->route);
    }
    public function preview(StoreRequest $request, $id) {
        $artist = $this->artistUploadRepository->find($id);
        if(!$artist)
            return view('errors.404');
        return view('artist.index', compact('artist'));
    }
}