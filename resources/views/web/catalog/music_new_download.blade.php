<?php
use App\Library\Helpers;
$tab = $tab ?? '';
$title = ($tab == 'bai-hat-moi' ? 'Bài hát mới' : ($tab == 'vua-download' ? 'Vừa download' : 'Bình luận mới'));
$titleMeta = $title.' - '. Config::get('constants.app.title');
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics">
    <meta name="description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL')}}/imgs/cover_bxh.png" />
    <meta name="title" content="{{$title}}" />
    <meta property="og:image" content="{{env('APP_URL')}}/imgs/cover_bxh.png" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless." />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('web.layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/TabStylesInspiration/normalize.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/TabStylesInspiration/tabs.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/TabStylesInspiration/tabstyles.css">
@endsection
@section('content')
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="tabs tabs-style-line tab-category">
                    <div class="media media-tab">
                        <div class="media-left">
                            <h2 class="media-title">{{$title}}</h2>
                        </div>
                    </div>
                    <div class="content-wrap tab-content-category">
                        <nav>
                            <ul>
                                <li ><a onclick="categoryTab('/bai-hat-moi', 'bai-hat-moi')" class="bai-hat-moi" href="#bai-hat-moi"><span>Bài hát mới</span></a></li>
                                <li ><a onclick="categoryTab('/vua-download', 'vua-download')" class="vua-download" href="#vua-download"><span>Vừa download</span></a></li>
                                <li><a onclick="categoryTab('/binh-luan-moi', 'binh-luan-moi')" class="binh-luan-moi" href="#binh-luan-moi"><span>Bình luận mới</span></a></li>
                            </ul>
                        </nav>
                        <div class="content-wrap tab-content-category">
                            <section id="bai-hat-moi" class="{{$tab == 'bai-hat-moi' ? 'content-current' : ''}}"><?php echo ($tab == 'bai-hat-moi' ? $htmlMusic : ''); ?></section>
                            <section id="vua-download" class="{{$tab == 'vua-download' ? 'content-current' : ''}}"><?php echo ($tab == 'vua-download' ? $htmlMusic : ''); ?></section>
                            <section id="binh-luan-moi"><?php echo ($tab == 'binh-luan-moi' ? $htmlMusic : ''); ?></section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('web.layouts.right_banner')
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <script src="/js/cbpFWTabs.js"></script>
    <script>
        (function() {
            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });
        })();
        $('.<?php echo $tab ?>').parent().click();
        $('.<?php echo $tab ?>').click();
        $('.tab-content-category').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            categoryTab($(this).attr('href'), '{{$tab}}', true);
        });
        var urlFloat = '';
        var reloadFloat = false;
        function categoryTab(url, tab, floatTab = false, pushHistory = true) {
            if(reloadFloat) {
                reloadFloat = false;
                var page = parseFloat(window.location.search.substr(window.location.search.indexOf("&page=") + 6));
                page = isNaN(page) ? 1 : page;
                url = url + '?page=' + page;
                console.log(url);
            }else{
                if(!urlFloat) {
                    var page = parseFloat(url.substr(url.indexOf("?page=") + 6));
                    page = isNaN(page) ? 1 : page;
                    window.history.pushState({}, '', window.location.origin + window.location.pathname + '?page=' + page);
                }
            }
            if(urlFloat) {
                floatTab = true;
                url = urlFloat;
                urlFloat = '';
            }
            if(($('#'+tab).html()).length == 0 || floatTab) {
                $.ajax({
                    url: window.location.origin + url,
                    type: "POST",
                    dataType: "html",
                    data: {
                        'ajaxPage': true,
                    },
                    beforeSend: function () {
                        if(loaded) return false;
                        loaded = true;
                        $('html,body').animate({ scrollTop: 0 }, 400);
                    },
                    success: function(response) {
                        waitingDialog.hide();
                        $('#'+tab).html(response);
                        $('#'+tab).find('.pagination li a').on('click', function (e) {
                            e.preventDefault();
                            categoryTab($(this).attr('href'), tab, true);
                        });
                    }
                });
            }
        }
    </script>
@endsection


