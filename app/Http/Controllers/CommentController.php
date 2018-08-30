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

    public function __construct(CommentEloquentRepository $commentRepository, CommentReplyEloquentRepository $commentReplayRepository, MusicEloquentRepository $musicRepository)
    {
        $this->commentRepository = $commentRepository;
        $this->commentReplayRepository = $commentReplayRepository;
        $this->musicRepository = $musicRepository;
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
        $request->input('comment_page');
        $pageComment = '';
        $commentReply = array();
        $pagingHtml = '';
        $result = array();
        if($request->input('reply_cmt_id')) {
            // add comment children
            $result = $this->commentReplayRepository->create([
                'comment_id' => $request->input('reply_cmt_id'),
                'user_id' => Auth::user()->id,
                'username' => Auth::user()->username,
                'comment_text' => $request->input('comment')
            ]);
            $this->musicRepository->incrementCol($request->input('music_id'), 'music_comment');
            $reply = $result->toArray();
            $reply['user'] = Auth::user()->toArray();
            return view('comment.comment_children', compact('reply'));
        } else {
            // add comment parent
            $result = $this->commentRepository->create([
                'music_id' => $request->input('music_id'),
                'user_id' => Auth::user()->id,
                'username' => Auth::user()->username,
                'comment_text' => $request->input('comment')
            ]);
            $this->musicRepository->incrementCol($request->input('music_id'), 'music_comment');
            $result = $result->toArray();
            $result['user'] = Auth::user()->toArray();
            $comment['data'][] = $result;
            return view('comment.comment', compact('comment', 'commentReply', 'pagingHtml'));
        }

    }
    function getAjaxCommentByMusicId(Request $request){
        if($request->input('music_id')) {
            $comment = $this->commentRepository->findByMusicId($request->input('music_id'), 'comment_time', 'desc', LITMIT_COMMENT);
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
}
