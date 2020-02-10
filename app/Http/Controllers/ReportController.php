<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Helpers;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ReportComment\ReportCommentRepository;
use App\Repositories\ReportMusic\ReportMusicRepository;
use Jenssegers\Agent\Agent;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $reportCommentRepository;
    protected $reportMusicRepository;

    public function __construct(ReportCommentRepository $reportCommentRepository, ReportMusicRepository $reportMusicRepository)
    {
        $this->reportCommentRepository = $reportCommentRepository;
        $this->reportMusicRepository = $reportMusicRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportComment(Request $request)
    {
        if($request->id && $request->music_id && $request->type && $request->comment_text && $request->report_option && $request->music_name && $request->url_music) {
            $exits = $this->reportCommentRepository->getModel()::where([['comment_id', $request->id], ['by_user_id', Auth::user()->id]])->first();
            if(!$exits) {
                $Agent = new Agent();
                $this->reportCommentRepository->getModel()::create([
                    'comment_id' => $request->id,
                    'comment_type' => $request->type,
                    'music_name' => $request->music_name,
                    'report_option' => $request->report_option,
                    'music_id' => $request->music_id,
                    'report_text' => $request->report_text,
                    'comment_text' => $request->comment_text,
                    'by_user_id' => Auth::user()->id,
                    'username' => Auth::user()->username,
                    'ip' => Helpers::getIp(),
                    'mod' => $Agent->isMobile() ? 'mobile' : 'web',
                    'url_music' => $request->url_music,
                    'link_file_jw' => $request->link_file_jw ?? '',
                ]);
                Helpers::ajaxResult(true, 'Báo cáo của bạn đã được gửi đến quản trị.', null);
            }else{
                Helpers::ajaxResult(true, 'Bạn đã báo cáo bình luận này rồi', null);
            }
        }
        Helpers::ajaxResult(false, 'Lỗi không thể gửi báo cáo!', null);
    }
    public function reportMusic(Request $request)
    {
        if($request->music_id && $request->report_option && $request->music_name && $request->url_music) {
            $exits = $this->reportMusicRepository->getModel()::where([['music_id', $request->id], ['by_user_id', Auth::user()->id]])->first();
            if(!$exits) {
                $Agent = new Agent();
                $this->reportMusicRepository->getModel()::create([
                    'music_id' => $request->music_id,
                    'music_name' => $request->music_name,
                    'report_option' => $request->report_option,
                    'report_text' => $request->report_text,
                    'by_user_id' => Auth::user()->id,
                    'username' => Auth::user()->username,
                    'ip' => Helpers::getIp(),
                    'mod' => $Agent->isMobile() ? 'mobile' : 'web',
                    'url_music' => $request->url_music,
                    'link_file_jw' => $request->link_file_jw ?? '',

                ]);
                Helpers::ajaxResult(true, 'Báo cáo của bạn đã được gửi đến quản trị.', null);
            }else{
                Helpers::ajaxResult(true, 'Bạn đã báo cáo nhạc này rồi', null);
            }
        }
        Helpers::ajaxResult(false, 'Lỗi không thể gửi báo cáo!', null);
    }

}
