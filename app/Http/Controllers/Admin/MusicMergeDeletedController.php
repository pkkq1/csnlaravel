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
use App\Models\MusicKaraokeModel;
use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Requests\CrudRequest as StoreRequest;
use Backpack\CRUD\app\Http\Requests\CrudRequest as UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Cover\CoverEloquentRepository;
use App\Repositories\DeleteMusic\DeleteMusicEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\MusicDeleted\MusicDeletedEloquentRepository;
use App\Repositories\MusicListen\MusicListenEloquentRepository;
use App\Repositories\VideoListen\VideoListenEloquentRepository;
use App\Repositories\MusicDownload\MusicDownloadEloquentRepository;
use App\Repositories\VideoDownload\VideoDownloadEloquentRepository;
use App\Repositories\Upload\UploadEloquentRepository;
use App\Repositories\ActionLog\ActionLogEloquentRepository;
use App\Solr\Solarium;

class MusicMergeDeletedController extends CrudController
{
    protected $deleteMusicRepository;
    protected $musicRepository;
    protected $musicDeletedRepository;
    protected $musicListenRepository;
    protected $musicDownloadRepository;
    protected $videoListenRepository;
    protected $videoDownloadRepository;
    protected $uploadRepository;
    protected $coverRepository;
    protected $actionLogRepository;
    protected $Solr;

    public function __construct(DeleteMusicEloquentRepository $deleteMusicRepository, MusicEloquentRepository $musicRepository, MusicDeletedEloquentRepository $musicDeletedRepository, MusicListenEloquentRepository $musicListenRepository, CoverEloquentRepository $coverRepository,
                                MusicDownloadEloquentRepository $musicDownloadRepository, VideoListenEloquentRepository $videoListenRepository, VideoDownloadEloquentRepository $videoDownloadRepository, UploadEloquentRepository $uploadRepository, Solarium $Solr,
                                ActionLogEloquentRepository $actionLogRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->deleteMusicRepository = $deleteMusicRepository;
        $this->musicDeletedRepository = $musicDeletedRepository;
        $this->musicListenRepository = $musicListenRepository;
        $this->musicDownloadRepository = $musicDownloadRepository;
        $this->videoListenRepository = $videoListenRepository;
        $this->videoDownloadRepository = $videoDownloadRepository;
        $this->uploadRepository = $uploadRepository;
        $this->musicRepository = $musicRepository;
        $this->coverRepository = $coverRepository;
        $this->actionLogRepository = $actionLogRepository;
        $this->Solr = $Solr;

        $this->middleware(function ($request, $next)
        {
            if(!backpack_user()->can('duyet_sua_nhac')) {
                $this->crud->denyAccess(['list']);
                $this->crud->denyAccess(['update']);
            }
            $this->crud->denyAccess(['create']);
            $this->crud->denyAccess(['delete']);

            return $next($request);
        });
        parent::__construct();

    }

    public function setup()
    {
        $this->crud->setModel("App\Models\MusicDeletedModel");
        $this->crud->setEntityNameStrings('Nhạc Bị Nhập', 'Nhạc Nhạc Bị Nhập');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/music_merge_deleted');
//        $this->crud->setEntityNameStrings('menu item', 'menu items');
        $this->crud->orderBy('music_delete_time', 'desc');
        $this->crud->orderBy('music_id', 'desc');
//        $this->crud->enableBulkActions();
//        $this->crud->addBulkDeleteButton();

//        $this->crud->allowAccess('reorder');
//        $this->crud->enableReorder('name', 2);
        $this->crud->addColumn([
            'name' => 'music_id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'music_deleted',
            'label' => 'ID nhập vào',
        ]);
        $this->crud->addColumn([
            'name'  => 'music_title',
            'label' => 'Tên bài hát',
//            'type' => 'closure',
//            'function' => function($entry) {
//                return '<a target="_blank" href="'.Helpers::listen_url($entry->toArray()).'" >'.$entry->music_title.'</a>';
//            }
        ]);
        $this->crud->addColumn([
            'name'  => 'music_id2',
            'label' => 'Ảnh cover',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a target="_blank" href="'.Helpers::listen_url($entry->toArray()).'" ><img style="
                                  max-height: 25px;
                                  width: auto;
                                  border-radius: 3px;" src="'.Helpers::cover_url($entry->cover_id).'"/></a>';
            }
        ]);
        $this->crud->addColumn([
            'name' => 'music_listen',
            'label' => 'lượt xem',
            'type' =>'number'
        ]);

        $this->crud->addColumn([
            'name' => 'music_downloads',
            'label' => 'lượt tải',
            'type' =>'number'
        ]);

//        $this->crud->addColumn([
//            'name' => 'music_search_result',
//            'label' => 'Tìm kiếm',
//            'type' =>'number'
//        ]);
        $this->crud->addColumn([
            'name' => 'music_user_id',
            'label' => 'ID Người đăng tải',
        ]);

        $this->crud->addColumn([
            'name'  => 'music_artist',
            'label' => 'Nghệ Danh',
//            'type' => 'closure',
//            'function' => function($entry) {
//                return Helpers::rawHtmlArtists($entry->music_artist_id, $entry->music_artist);
//            }
        ]);

        $this->crud->addField([
            'name' => 'music_id',
            'type' => 'text',
            'label' => 'ID bài hát bị nhập',
        ]);
        $this->crud->addField([
            'name' => 'music_deleted',
            'type' => 'text',
            'label' => 'ID bài hát đã nhập vào',
        ]);
        $this->crud->addField([
            'name' => 'music_title',
            'type' => 'text',
            'label' => 'Tên bài hát',
        ]);
        $this->crud->setEditView('vendor.backpack.music_merge_delete.edit');
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
        $comment = $this->crud->getModel()::where('comment_id', $id)->first();
        $this->musicRepository->decrementCol($comment->music_id, 'music_comment');
        $this->userRepository->decrementCol($comment->user_id, 'user_comments');
        return $this->crud->delete($id);
    }
    public function update(UpdateRequest $request)
    {

        $music = $this->musicDeletedRepository->getModel()::where('music_id', $request->music_id)->first();
        $merge = $this->musicRepository->getModel()::where('music_id', $music->music_deleted)->first();
        if(!$music || !$merge) {
            \Alert::error("Lỗi không tìm thấy bài hát")->flash();
            return redirect()->back();
        }

        $musicListen = $this->musicListenRepository->getModel()::where('music_id', $request->music_id)->first();
        $musicDownload = $this->musicDownloadRepository->getModel()::where('music_id', $request->music_id)->first();

        $mergeListen = $this->musicListenRepository->getModel()::where('music_id', $music->music_deleted)->first();
        $mergeDownload = $this->musicDownloadRepository->getModel()::where('music_id',$music->music_deleted)->first();

        $merge->music_listen = (int)$merge->music_listen - (int)$music->music_listen;
        $merge->music_downloads = (int)$merge->music_downloads - (int)$music->music_downloads;
        $mergeListen->music_listen = (int)$mergeListen->music_listen - (int)$musicListen->music_listen;
//        $mergeListen->music_listen_today = (int)$mergeListen->music_listen_today - (int)$musicListen->music_listen_today;
        $mergeDownload->music_downloads = (int)$mergeDownload->music_downloads - (int)$musicDownload->music_downloads;
//        $mergeDownload->music_downloads_today =(int) $mergeDownload->music_downloads_today - (int)$musicDownload->music_downloads_today;
        $mergeListen->save();
        $mergeDownload->save();
        $merge->music_new_id = 0;
        $merge->save();
        $music->music_delete_time = 0;
        $music->music_deleted = -1;
        $music->music_search_result = 0;
        $music->save();
        $this->uploadRepository->getModel()::where('music_id', $music->music_id)->update(['music_state' => UPLOAD_STAGE_FULLCENSOR, 'music_note' => 'Phục hồi nhạc bị nhập']);
        $this->actionLogRepository->addAction('reverse_music', 'Phục hồi nhạc từ '.$music->music_id. ' từ ' . $merge->music_id, $music->music_id);
        $this->musicRepository->getModel()::create($music->toArray());
        $music->delete();

        // add comment & search * comment
//        $merge->music_search_result = $merge->music_search_result - $music->music_search_result;
//        $merge->music_favourite = $merge->music_favourite - $music->music_favourite;
//        $music->music_comment = $music->music_comment + $merge->music_comment;
//        $this->musicFavouriteRepository->getModel()::where('music_id', $merge->music_id)->update(['music_id' => $music->music_id]);
//        $this->commentRepository->getModel()::where('music_id', $merge->music_id)->update(['music_id' => $music->music_id]);
//        $this->commentReplyRepository->getModel()::where('music_id', $merge->music_id)->update(['music_id' => $music->music_id]);

        $this->checkAlbumSyncSolr($music->cover_id);

        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return $this->performSaveAction();

    }
    public function checkAlbumSyncSolr($cover_id) {
        if($cover_id > 0) {
            $oldAlbum = $this->coverRepository->findCover($cover_id);
            if($oldAlbum) {
                $oldAlbum->album_music_total = $oldAlbum->album_music_total + 1;
                $oldAlbum->album_last_updated = time();
                $oldAlbum->save();
                if($oldAlbum->album_music_total == 0) {
                    $Solr = new SolrSyncController($this->Solr);
                    $Solr->syncCover(null, $oldAlbum);
                }
            }
        }
    }

}