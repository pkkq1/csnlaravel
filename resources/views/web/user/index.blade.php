@section('hidden_wapper', true)
<?php
use App\Library\Helpers;
global $memberVip;
$memberVip = Helpers::checkMemberVip();
$titleMeta = $user->name . ' - '. Config::get('constants.app.title');
$mySelf = (Auth::check() && Auth::user()->id == $user->id);
$avatar = Helpers::pathAvatar($user->user_avatar, $user->id);
$tabSelf = ($mySelf || (Auth::check() && Auth::user()->hasPermission('duyet_sua_nhac')));
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics">
    <meta name="description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{$avatar}}" />
    <meta name="title" content="{{$titleMeta}}" />
    <meta property="og:image" content="{{$avatar}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$titleMeta}}" />
    <meta property="og:description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless." />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('web.layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/TabStylesInspiration/normalize.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/TabStylesInspiration/tabs.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/TabStylesInspiration/tabstyles.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/croppie.css">
@endsection
@section('content')
    @include('web.user.box_profile', ['user' => $user, 'mySelf' => $mySelf, 'float_edit' => true])
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-12">
                <div class="tabs tabs-style-line tab-category">
                    <nav>
                        <ul>
                            @if($tabSelf)
                                <li class="tu-nhac"><a class="tu-nhac" href="#uploaded" onclick="musicUserTab('musicUploaded')" ><span><i class="fa fa-stack-overflow" style="font-size: 11px; margin-right: 3px"></i>Tủ nhạc</span></a></li>
                            @endif
                            <li class="playlist"><a class="playlist" onclick="userTab('playlist', '/user/music_playlist')" href="#playlist"><span><i class="fa fa-list" style="font-size: 11px; margin-right: 3px"></i>Playlist</span></a></li>
                            <li class="music"><a class="music" onclick="userTab('music', '/user/music_favourite')" href="#music"><span><i class="material-icons" style="font-size: 11px; margin-right: 3px">favorite_border</i> Bài Hát</span></a></li>
                            <li class="video"><a class="video" onclick="userTab('video', '/user/video_favourite')" href="#video"><span><i class="material-icons" style="font-size: 11px; margin-right: 3px">favorite_border</i> Video</span></a></li>
                            <li class="artist"><a class="artist" onclick="userTab('artist', '/user/artist_favourite')" href="#artist"><span><i class="material-icons" style="font-size: 11px; margin-right: 3px">favorite_border</i> Ca Sĩ</span></a></li>
                            @if($mySelf)
                                <li class="report"><a class="report" href="#report" onclick="userTab('report', '/user/report_tab')" ><span><i class="fa fa-flag" style="font-size: 11px; margin-right: 3px"></i> Báo Cáo</span></a></li>
                                <li class="message_csn"><a class="message_csn" href="#message_csn" onclick="userTab('message_csn', '/user/message_csn')" ><span><i class="fa fa-commenting-o" style="font-size: 14px; margin-right: 3px"></i> Liên Hệ</span></a></li>
                                <li class="notify"><a class="notify" href="#notify" onclick="userTab('notify', '/user/notify_tab')" ><span><i class="fa fa-bell-o" style="font-size: 11px; margin-right: 3px"></i>Thông Báo</span></a></li>
                            @endif
                            @if($mySelf && Auth::check() && Auth::user()->hasPermission('duyet_sua_nhac'))
                                <li class="duyet-nhac"><a class="duyet-nhac" href="#approval" onclick="musicUserTab('music_approval')" ><span>Duyệt Nhạc</span></a></li>
                            @endif

                        </ul>
                    </nav>
                    <div class="content-wrap tab-content-category">
                        @if($tabSelf)
                            <section id="uploaded"></section>
                        @endif
                        <section id="playlist"></section>
                        <section id="music"></section>
                        <section id="video"></section>
                        <section id="artist"></section>
                        @if($tabSelf)
                            <section id="report"></section>
                            <section id="message_csn"></section>
                            <section id="notify"></section>
                        @endif
                        <section id="approval"></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <script src="/js/cbpFWTabs.js"></script>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
            </div>

        </div>
    </div>
    <style>
        .pagination {
            margin: 0px;
        }
    </style>
    <script>
        (function() {
            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });
        })();
        var firstUploaded = true;
        var firstApproval = true;
        var firstReport = true;
        var lastSubTabUpload = '';
        var lastSubTabApproval = '';
        <?php
        $sub_tab = (isset($_GET['tab'], $_GET['sub_tab']) && $_GET['tab'] == 'tu-nhac') ? $_GET['sub_tab'] : 'da-duyet';
        $sub_tab2 = (isset($_GET['tab'], $_GET['sub_tab']) && $_GET['tab'] == 'duyet-nhac') ? $_GET['sub_tab'] : 'cho-duyet';
        ?>
        function musicUserTab(tab) {
            // let urlCurrent = window.location.origin + window.location.pathname;
            // let pageUrl = '';
            // if(page > 1) {
            //     pageUrl = '&page=' + page;
            // }
            // history.pushState({urlPath: urlCurrent + '?tab=' + stage + pageUrl},"", urlCurrent + '?tab=' + stage + pageUrl);
            if(firstUploaded) {

            }
            if(tab == 'musicUploaded') {
                if(firstUploaded) {
                    firstUploaded = false;
                    $.ajax({
                        url: '/user/open_tab_uploaded',
                        type: "POST",
                        dataType: "html",
                        data: {
                            'user_name' : '<?php echo $user->name ?>'
                        },
                        async: false,
                        beforeSend: function () {
                            if(loaded) return false;
                            loaded = true;
                        },
                        success: function(response) {
                            $('#uploaded').html(response);
                            loaded = false;
                            $( document ).ready(function() {
                                let key = $('#uploaded').find('.<?php echo $sub_tab ?>').data('key');
                                let page = 1;
                                if(location.search.indexOf("tab=tu-nhac") > 0) {
                                    page = findGetParameter('page', 1);
                                }
                                lastSubTabUpload = '<?php echo $sub_tab ?>';
                                $('#uploaded li.<?php echo $sub_tab ?>').addClass('tab-current');
                                $('#uploaded .upload_content_stage_'+key).addClass('content-current');
                                musicUploaded('/user/music_uploaded' + (page == 1 ? '' : '?page=' + page), 'upload', key, '<?php echo $sub_tab ?>');
                            });
                        }
                    });
                }else{
                    let urlCurrent = window.location.origin + window.location.pathname;
                    var page = $('#uploaded .content-current .pagination .active .page-link').html();
                    let pageUrl = (page == 1 ? '' : '&page=' + page);
                    let urlUpdate = urlCurrent + '?tab=tu-nhac&sub_tab=' + lastSubTabUpload + pageUrl;
                    history.pushState({urlPath: urlUpdate}, "", urlUpdate);
                }
            }
            if(tab == 'music_approval') {
                if(firstApproval) {
                    firstApproval = false;
                    $.ajax({
                        url: '/user/open_tab_approval',
                        type: "POST",
                        dataType: "html",
                        data: {},
                        async: false,
                        beforeSend: function () {
                            if(loaded) return false;
                            loaded = true;
                        },
                        success: function(response) {
                            $('#approval').html(response);
                            loaded = false;
                            $( document ).ready(function() {
                                let key = $('#approval').find('.<?php echo $sub_tab2 ?>').data('key');
                                let page = 1;
                                if(location.search.indexOf("tab=duyet-nhac") > 0) {
                                    page = findGetParameter('page', 1);
                                }
                                lastSubTabApproval = '<?php echo $sub_tab2 ?>';
                                $('#approval li.<?php echo $sub_tab2 ?>').addClass('tab-current');
                                $('#approval .approval_content_stage_'+key).addClass('content-current');
                                musicUploaded('/user/music_uploaded' + (page == 1 ? '' : '?page=' + page), 'approval', $('#approval').find('.<?php echo $sub_tab2 ?>').data('key'), '<?php echo $sub_tab2 ?>');
                            });
                        }
                    });
                }else{
                    let urlCurrent = window.location.origin + window.location.pathname;
                    var page = $('#approval .content-current .pagination .active .page-link').html();
                    let pageUrl = (page == 1 ? '' : '&page=' + page);
                    let urlUpdate = urlCurrent + '?tab=duyet-nhac&sub_tab=' + lastSubTabUpload + pageUrl;
                    history.pushState({urlPath: urlUpdate}, "", urlUpdate);
                }
            }
        }
        function musicUploaded(url, page, stage, subTab) {
            let pageUrl = '';
            let urlCurrent = window.location.origin + window.location.pathname;
            let tab = (page == 'upload' ? 'tu-nhac' : 'duyet-nhac');
            if(url.indexOf("page=") > 0) {
                pageUrl = '&page=' + url.substr(url.indexOf("page=") + 5)
            }
            let urlUpdate = urlCurrent + '?tab=' + tab + '&sub_tab=' + subTab + pageUrl;
            history.pushState({urlPath: urlUpdate}, "", urlUpdate);
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: {
                    'page_tab' : page,
                    'stage' : stage,
                    'user_id' : '<?php echo $user->id ?>'
                },
                async: false,
                beforeSend: function () {
                    waitingDialog.show();
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    waitingDialog.hide();
                    if(page == 'upload') {
                        $('.upload_content_stage_' + stage).html(response);
                        $('.upload_content_stage_' + stage).find('.pagination li a').on('click', function (e) {
                            e.preventDefault();
                            musicUploaded($(this).attr('href'), 'upload', $(this).parents().parents().parents().data('page'), subTab);
                        });
                    }else {
                        $('.approval_content_stage_' + stage).html(response);
                        $('.approval_content_stage_' + stage).find('.pagination li a').on('click', function (e) {
                            e.preventDefault();
                            musicUploaded($(this).attr('href'), 'approval', $(this).parents().parents().parents().data('page'), subTab);
                        });
                    }
                }
            });
        }
        function userTab(tab, url, float = false) {
            let pageUrl = '';
            let urlCurrent = window.location.origin + window.location.pathname;
            if(url.indexOf("page=") > 0) {
                pageUrl = '&page=' + url.substr(url.indexOf("page=") + 5)
            }
            let urlUpdate =  urlCurrent + '?tab=' + tab + pageUrl;
            history.pushState({urlUpdate},"", urlUpdate);
            var tabContent = $('#' + tab);
            if(tabContent.html().length == 0 || float) {
                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: "html",
                    data: {
                        'user_id': '<?php echo $user->user_id ?>'
                    },
                    beforeSend: function () {
                        if(loaded) return false;
                        loaded = true;
                    },
                    success: function(response) {
                        tabContent.html(response);
                        tabContent.find('.pagination li a').on('click', function (e) {
                            e.preventDefault();
                            userTab(tab, $(this).attr('href'), true);
                        });
                        if(tab == 'report') {
                            $('.reply_report').on('click', function () {
                                var reply = $('.post_comment_reply_' + $(this).data('report-id'));
                                if (!reply.hasClass('reply_show')) {
                                    $('.post_comment_reply').removeClass('reply_show');
                                    reply.addClass('reply_show');
                                    $(this).html('Ẩn (' + $(this).data('report-count') + ')');
                                } else {
                                    reply.removeClass('reply_show');
                                    $(this).html('Hiển Thị (' + $(this).data('report-count') + ')');
                                }
                                reply.find('textarea').trigger('focus');
                            });
                            $('.box_form_report').submit(false);
                            $('.list_comment .pagination li a').on('click', function (e) {
                                e.preventDefault();
                            });
                        }
                    }
                });
            }else{
                var numberPage = tabContent.find('.active .page-link').html();
                if (numberPage > 1) {
                    let urlUpdate =  urlCurrent + '?tab=' + tab + '&page=' + numberPage;
                    history.pushState({urlUpdate},"", urlUpdate);
                }
            }

        }
        function favourite(title, type, music_id) {
            <?php
            if(!Auth::check()) {
            ?>
            switchAuth('myModal_login');
            return false;
                <?php
                }
                ?>
            let falgFav = $('.wishlist-' + music_id).hasClass('selector');
            $.ajax({
                url: type == 'artist' ? '/ca-si/favorite' : '/music/favourite',
                type: "POST",
                dataType: "json",
                data: {
                    'type': falgFav,
                    'type_of': type,
                    'name': title,
                    'music_id' : music_id,
                    'artist_id' : music_id,
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    if(response.success) {
                    }else {
                        alertModal(data.message);
                    }
                }
            });
            $('.wishlist-' + music_id).toggleClass('selector');
        }

        function pupop_qr_code() {
            $.ajax({
                url: '/user/qr_code',
                type: "POST",
                dataType: "html",
                data: {
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    confirmModal(response + '<p>QR Code sẽ thay đổi sau: <span id="time">05:00</span></p><p>Chức năng này chỉ dành riêng cho việc đăng nhập bằng <a href="https://chiasenhac.vn/app/csn.html">App CSN</a></p>', 'Mã đăng nhập qua <a href="https://chiasenhac.vn/app/csn.html">app CSN</a>', 'modal-sm');
                    $('.btn-ok').addClass('hidden');
                    $('.close_confirm').html('Đóng');
                    var fiveMinutes = 60 * 5,
                        display = document.querySelector('#time');
                    startTimer(fiveMinutes, display);
                }
            });
        }
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                    $('.close_confirm').click()
                }
            }, 1000);
        }
        function postReport(formId) {
            var textArea = $('.form-report-' + formId);
            if(!textArea.find('textarea').val()) {
                alertModal('Chưa nhập nội dung báo lỗi.');
                return false;
            }
            $.ajax({
                url: window.location.origin + "/user/reply_report_content/post",
                type: "POST",
                dataType: "html",
                data: {
                    'content': textArea.find('textarea').val(),
                    'reply_type': textArea.find('textarea').data('report-type'),
                    'report_id': textArea.find('textarea').data('report-id')
                },
                beforeSend: function () {
                    textArea.find('textarea').val('');
                    if(loaded) return false;
                    loaded = true;
                },
                statusCode: {
                    401: function(){
                        window.location.replace('/login');
                        return false;
                    }
                },
                success: function(response) {
                    $('.comment-reply-' + formId).append(response);
                    let numberReport = parseInt($('#report-' + formId).find('.reply_report').data('report-count')) + 1;
                    $('#report-' + formId).find('.reply_report').data('report-count', numberReport);
                    $('#report-' + formId).find('.reply_report').html('Ẩn (' + numberReport + ')');
                    $('.box_form_comment').submit(false);
                }
            });
            return false;
        }
        function musicUploadTab(tab, page, subTab) {
            $('#uploaded').find('.tab-current').removeClass('tab-current');
            $('.' + tab).addClass('tab-current');
            $('#uploaded').find('.content-current').removeClass('content-current');
            $('#' + tab).addClass('content-current');
            lastSubTabUpload = subTab;
            var numberPage = $('#' + tab + ' .pagination .active .page-link').html();
            if($('#' + tab).html().length == 0) {
                musicUploaded('/user/music_uploaded', 'upload', page, subTab);
            }else{
                let pageUrl = '';
                let urlCurrent = window.location.origin + window.location.pathname;
                let tab = 'upload';
                if (typeof numberPage !== "undefined") {
                    pageUrl = '&page=' + numberPage;
                }
                let urlUpdate = urlCurrent + '?tab=tu-nhac&sub_tab=' + subTab + pageUrl;
                history.pushState({urlPath: urlUpdate}, "", urlUpdate);
            }
        }
        function musicApprovalTab(tab, page, subTab) {
            $('#approval').find('.tab-current').removeClass('tab-current');
            $('.' + tab).addClass('tab-current');
            $('#approval').find('.content-current').removeClass('content-current');
            $('#' + tab).addClass('content-current');
            lastSubTabApproval = subTab;
            var numberPage = $('#' + tab + ' .pagination .active .page-link').html();
            if($('#' + tab).html().length == 0) {
                musicUploaded('/user/music_uploaded', 'approval', page, subTab);
            }else{
                let pageUrl = '';
                let urlCurrent = window.location.origin + window.location.pathname;
                let tab = 'upload';
                if (typeof numberPage !== "undefined") {
                    pageUrl = '&page=' + numberPage;
                }
                let urlUpdate = urlCurrent + '?tab=duyet-nhac&sub_tab=' + subTab + pageUrl;
                history.pushState({urlPath: urlUpdate}, "", urlUpdate);
            }
        }
        function SendMsgCsn() {
            confirmModal('<textarea style="width: 100%" class="msg_text" rows="6" placeholder="Nội dung nhắn tin"></textarea>', 'Gửi tin mới tới hỗ trợ CSN', '', 'Gửi');
            $("#myConfirmModal .btn-ok").on('click', function () {
                if($('#myConfirmModal .msg_text').val().length < 5){
                    alertModal('Vui lòng Nhập nội dung trên 5 ký tự');
                    return false;
                }
                $.ajax({
                    url: window.location.origin + '/user/send_message',
                    type: "POST",
                    dataType: "json",
                    data: {
                        'text': $('#myConfirmModal .msg_text').val(),
                    },
                    beforeSend: function () {
                        if(loaded) return false;
                        loaded = true;
                    },
                    success: function(response) {
                        if(response.success) {
                            loaded = false;
                            userTab('message_csn', '/user/message_csn', true);
                            $('.modal').find('.close_confirm').click();
                        }else{

                        }
                        alertModal(response.message);
                    }
                });
            })
        }
        $( document ).ready(function() {
        <?php
        if(isset($_GET['tab'])) {
        ?>
            let issetClassProfile = false;
            $(".tab-category li").each(function() {
                if($(this).hasClass('<?php echo $_GET['tab'] ?>'))
                    issetClassProfile = true;
            });
            if(issetClassProfile) {
                $('.<?php echo $_GET['tab'] ?>').click();
            }else{
                $('.tab-category').find('.tab-current a').click()
            }
        <?php
        }else{
        ?>
        $('.tab-category').find('.tab-current a').click()
        <?php
        }
        if(isset($_GET['edit_profile'])) {
            ?>
            setTimeout(function(){
                $('.edit_profile').modal('show');
                alertModal('Vui lòng cập nhật Tên Tài Khoản để được quyền truy cập upload nhạc');
            }, 500);
            <?php
        }
        ?>
        });
    </script>
@endsection
