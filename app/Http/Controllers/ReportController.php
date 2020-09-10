<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Helpers;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ReportComment\ReportCommentRepository;
use App\Repositories\ReportMusic\ReportMusicRepository;
use App\Repositories\Contact\ContactEloquentRepository;
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
    protected $contactRepository;

    public function __construct(ReportCommentRepository $reportCommentRepository, ReportMusicRepository $reportMusicRepository, ContactEloquentRepository $contactRepository)
    {
        $this->reportCommentRepository = $reportCommentRepository;
        $this->reportMusicRepository = $reportMusicRepository;
        $this->contactRepository = $contactRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportComment(Request $request)
    {
        if(backpack_user()->can('banned_user_report_comment')){
            abort(403, 'Lỗi truy cập, tài khoản bạn bị khóa chức năng báo cáo bình luận.');
        }
        if(time() < (Auth::user()->user_regdate + SHORT_TIME_1_DAY)) {
            abort(403, 'Tài khoản bạn cần hoạt động ít nhất 1 ngày');
        }

        if($request->id && $request->music_id && $request->type && $request->comment_text && $request->report_option && $request->music_name && $request->url_music) {
            $countStatus = $this->reportCommentRepository->getModel()::where('by_user_id', Auth::user()->id)->where('status', 0)->count();
            if($countStatus > MAX_SEND_REPORT) {
                Helpers::ajaxResult(false, 'Lỗi, Các báo cáo trước của bạn đang được xử lý', null);
            }
            $exits = $this->reportCommentRepository->getModel()::where([['comment_id', $request->id], ['by_user_id', Auth::user()->id]])->first();
            if(!$exits) {
                $Agent = new Agent();
                $reportText = [];
                if($request->report_text) {
                    $reportText = [
                        time() => [
                            'user' => ['time' => time(),
                                'user_id' => Auth::user()->id,
                                'content' => $request->report_text,
                            ]
                        ]
                    ];
                }
                $this->reportCommentRepository->getModel()::create([
                    'comment_id' => $request->id,
                    'comment_type' => $request->type,
                    'music_name' => $request->music_name,
                    'report_option' => $request->report_option,
                    'music_id' => $request->music_id,
                    'report_text' => serialize($reportText),
                    'comment_text' => $request->comment_text,
                    'by_user_id' => Auth::user()->id,
                    'username' => Auth::user()->name,
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
        if(backpack_user()->can('banned_user_report_music')){
            abort(403, 'Lỗi truy cập, tài khoản bạn bị khóa chức năng báo cáo nhạc.');
        }
        if(time() < (Auth::user()->user_regdate + SHORT_TIME_1_DAY)) {
            abort(403, 'Tài khoản bạn cần hoạt động ít nhất 1 ngày');
        }
        if($request->music_id && $request->report_option && $request->music_name && $request->url_music) {
            $countStatus = $this->reportMusicRepository->getModel()::where('by_user_id', Auth::user()->id)->where('status', 0)->count();
            if($countStatus > MAX_SEND_REPORT) {
                Helpers::ajaxResult(false, 'Lỗi, Các báo cáo trước của bạn đang được xử lý', null);
            }
            $exits = $this->reportMusicRepository->getModel()::where([['music_id', $request->id], ['by_user_id', Auth::user()->id]])->first();
            if(!$exits) {
                $Agent = new Agent();
                $reportText = [];
                if($request->report_text) {
                    $reportText = [
                        time() => [
                            'user' => ['time' => time(),
                                'user_id' => Auth::user()->id,
                                'content' => $request->report_text,
                            ]
                        ]
                    ];
                }
                $this->reportMusicRepository->getModel()::create([
                    'music_id' => $request->music_id,
                    'music_name' => $request->music_name,
                    'report_option' => $request->report_option,
                    'report_text' => serialize($reportText),
                    'by_user_id' => Auth::user()->id,
                    'username' => Auth::user()->name,
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
    public function sendContact(Request $request) {
        if(strlen($request->email) < 5 || strlen($request->text) < 5 || strlen($request->text) > 5000) {
            Helpers::ajaxResult(false, 'Vui lòng nhập nội dung đầy đủ', null);
        }
        if(strlen($request->text) > 5000 || strlen($request->email) > 200) {
            Helpers::ajaxResult(false, 'Email không quá 200 ký tự, Nội dung không quá 5000 ký tự', null);
        }
        $Agent = new Agent();
        $ip = Helpers::getIp();
        $checkExit = $this->contactRepository->getModel()::where('ip', $ip)->orderBy('id', 'desc')->first();
        if($checkExit && (time() < strtotime($checkExit->created_at) + (60 * 5))){
            Helpers::ajaxResult(false, 'Góp ý bạn đang xử lý, vui lòng thao tác chậm lại', null);
        }
        $this->contactRepository->getModel()::create([
            'email' => $request->email,
            'text' => $request->text,
            'ip' => $ip,
            'mod' => $Agent->isMobile() ? 'mobile' : 'web'
        ]);
        Helpers::ajaxResult(true, 'Cảm ơn bạn đã góp ý kiến, chúng tôi sẽ trả lời sớm nhất.', null);
    }

}
