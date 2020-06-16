<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Library\Helpers;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\Comment\CommentEloquentRepository;
use App\Repositories\CommentReply\CommentReplyEloquentRepository;
use App\Repositories\Music\MusicEloquentRepository;
use App\Repositories\Video\VideoEloquentRepository;
use App\Repositories\User\UserEloquentRepository;
use App\Repositories\Notification\NotificationEloquentRepository;

class CommentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $commentRepository;
    protected $commentReplayRepository;
    protected $musicRepository;
    protected $videoRepository;
    protected $userRepository;
    protected $notifyRepository;

    public function __construct(CommentEloquentRepository $commentRepository, CommentReplyEloquentRepository $commentReplayRepository, MusicEloquentRepository $musicRepository, VideoEloquentRepository $videoRepository,
                                UserEloquentRepository $userRepository, NotificationEloquentRepository $notifyRepository)
    {
        $this->commentRepository = $commentRepository;
        $this->commentReplayRepository = $commentReplayRepository;
        $this->musicRepository = $musicRepository;
        $this->videoRepository = $videoRepository;
        $this->userRepository = $userRepository;
        $this->notifyRepository = $notifyRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    function postComment(Request $request) {
        if(!$request->input('comment')) {
            return redirect()->route('music.listen')->with('error', 'Nhập nội dung bình luận');
        }
        if(!Auth::user()->id) {
            return Redirect::to('/login');
        }
        if(strlen($request->input('comment')) >= 1000)
            abort(403, 'Lỗi bình luận bạn quá dài.');

        // check banned user
        if(backpack_user()->can('banned_user_comment')){
            abort(403, 'Lỗi truy cập, tài khoản bạn bị khóa chức năng đăng bình luận.');
        }
        if(time() < (Auth::user()->user_regdate + SHORT_TIME_1_DAY)) {
            abort(403, 'Tài khoản bạn cần hoạt động ít nhất 1 ngày');
        }
        $request->input('comment_page');
        $pageComment = '';
        $commentReply = array();
        $pagingHtml = '';
        $result = array();
        if($request->input('reply_cmt_id')) {
            $exitCmt = $this->commentReplayRepository->getModel()::where('user_id', Auth::user()->id)->orderBy('comment_id', 'desc')->first();
            // 5 MIN TO NEW THE COMMENT
//            if(time() < ($exitCmt->comment_time + (60 * 5))) {
//                abort(403, 'Bạn vui lòng chậm lại');
//            }
            // add comment children
            $result = $this->commentReplayRepository->create([
                'music_id' => $request->input('music_id'),
                'comment_id' => $request->input('reply_cmt_id'),
                'user_id' => Auth::user()->id,
                'username' => Auth::user()->username ?? '',
                'comment_jw_postion' => $request->comment_jw_postion,
                'comment_text' => $request->input('comment'),
                'comment_delete' => SET_DEACTIVE,
            ]);
            $this->musicRepository->incrementCol($request->input('music_id'), 'music_comment');
            $reply = $result->toArray();
            $reply['user'] = Auth::user()->toArray();
            if(Auth::user()->id != $request->input('user_comment_id'))
                $this->notifyRepository->pushNotif($request->input('user_comment_id'), $request->input('reply_cmt_id'), 'reply_comment', 'Bình luận của bạn vừa có bài trả lời.', $request->input('link_music_url') . '#comment-'.$request->input('reply_cmt_id'), $request->input('music_id'));
            return view('comment.comment_children', compact('reply'));
        } else {
            $exitCmt = $this->commentRepository->getModel()::where('user_id', Auth::user()->id)->orderBy('comment_id', 'desc')->first();
            // 5 MIN TO NEW THE COMMENT
//            if(time() < ($exitCmt->comment_time + (60 * 5))) {
//                abort(403, 'Bạn vui lòng chậm lại');
//            }
            // add comment parent
            $result = $this->commentRepository->create([
                'music_id' => $request->input('music_id'),
                'user_id' => Auth::user()->id,
                'username' => Auth::user()->username ?? '',
                'comment_jw_postion' => $request->comment_jw_postion,
                'comment_text' => $request->input('comment'),
                'comment_delete' => SET_DEACTIVE,

            ]);
            $this->musicRepository->incrementCol($request->input('music_id'), 'music_comment');
            $this->userRepository->incrementCol(Auth::user()->id, 'user_comments');
            $result = $result->toArray();
            $result['user'] = Auth::user()->toArray();
            $comment['data'][] = $result;
            if(Auth::user()->id != $request->input('user_music_id'))
                $this->notifyRepository->pushNotif($request->input('user_music_id'), $request->input('reply_cmt_id'), 'new_comment', ($request->input('type_jw') == 'music' ? 'Bài hát' : 'Video'). ' bạn upload vừa có bình luận mới.', $request->input('link_music_url') . '#comment-'.$result['comment_id'], $request->input('music_id'));
            return view('comment.comment', compact('comment', 'commentReply', 'pagingHtml'));
        }

    }
    function getAjaxCommentByMusicId(Request $request){
        if($request->input('music_id')) {
            if($request->input('focus_comment')) {
                $comment = $this->commentRepository->getModel()::selectRaw('*, IF(comment_id = '.$request->input('focus_comment').', 99999999999999, comment_time) as comment_order')->where('music_id', $request->input('music_id'))->orderBy('comment_order', 'desc')->with('user')->paginate(LIMIT_COMMENT);
            }else{
                $comment = $this->commentRepository->findByMusicId($request->input('music_id'), 'comment_time', 'desc', LIMIT_COMMENT);
            }
            $pagingHtml = $comment->links();
            $comment = $comment->toArray();
            $arrId = array();
            foreach($comment['data'] as $item) {
                $arrId[] = $item['comment_id'];
            }
            $commentReply = $this->commentReplayRepository->getCommentByCommentId($arrId, 'comment_time', 'desc')->toArray();
            return view('comment.comment', compact('comment', 'commentReply', 'pagingHtml'));
        }
    }
    function blockComment(Request $request) {
        if(!backpack_user()->can('comment_(can_block)')){
            abort(403, 'Lỗi truy cập, tài khoản bạn không có quyền block comment.');
        }
        if($request->type == 'comment') {
            $comment = $this->commentRepository->getModel()::where('comment_id', $request->id)->first();
        }else{
            $comment = $this->commentReplayRepository->getModel()::where('comment_reply_id', $request->id)->first();
        }
        if($request->typeAc == 'delete'){
            $comment->delete();
            if($request->cat_id == CAT_VIDEO) {
                $this->videoRepository->decrementCol($request->music_id, 'music_comment');
            }else{
                $this->musicRepository->decrementCol($request->music_id, 'music_comment');
            }
            Helpers::ajaxResult(true, 'delete', []);
        }else{
            if(!$comment) {
                Helpers::ajaxResult(false, 'Bình luận không tìm thấy', null);
            }
            $comment->comment_delete = !$comment->comment_delete;
            $comment->comment_delete_by = Auth::user()->id;
            $comment->save();
            Helpers::ajaxResult(true, '', ['comment_text' => $comment->comment_delete ? '<i>Bình luận này đã bị ẩn.</i>' : $comment->comment_text, 'delete' => $comment->comment_delete ? 'Phục hồi': 'Ẩn']);
        }
    }
}
