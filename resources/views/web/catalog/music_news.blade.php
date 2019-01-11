<?php
use App\Library\Helpers;
$title = 'Bài hát mới';
if(isset($_GET['page']))
    $title = $title.' trang '.$_GET['page'];
$titleMeta = $title.' - '. Config::get('constants.app.title');
?>
@section('meta')
    <base href="{{env('APP_URL')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="copyright" content="{{env('APP_DOMAIN')}}" />
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
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/tabs.css">
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/tabstyles.css">
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
                        <section id="music_news" class="content-current">
                            <ul class="list-unstyled list_music">
                                <?php
                                $musicData = $music->toArray();
                                $perPage = $musicData['per_page'];
                                $curentPage = $musicData['current_page'];
                                array_map(function ($i, $item) use($perPage, $curentPage) {
                                $url = Helpers::listen_url($item);
                                ?>
                                <li class="media align-items-stretch not">
                                    <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                                        <span class="counter">{{(($curentPage - 1) * $perPage) + ++$i}}</span>
                                    </div>
                                    <div class="media-left align-items-stretch mr-2">
                                        <a href="{{$url}}" title="{{$item['music_title']}}">
                                            <img src="{{Helpers::cover_url($item['cover_id'])}}" alt="{{$item['music_title']}}">
                                            <i class="material-icons">play_circle_outline</i>
                                        </a>
                                    </div>
                                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                                        <div>
                                            <h5 class="media-title mt-0 mb-0"><a href="{{$url}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h5>
                                            <div class="author"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                                        </div>
                                        <small class="type_music c1"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <small class="time_stt"><i class="material-icons listen-material-icons"> play_arrow </i>{{number_format($item['music_listen'])}}</small>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="{{Helpers::listen_url($item)}}" title="nghe riêng nhạc {{$item['music_title']}}"><i class="material-icons">headset</i></a></li>
                                            <li class="list-inline-item"><a href="{{Helpers::fbShareLink($url, true)}}" target="_blank" title="chia sẻ {{$item['music_title']}}"><i class="material-icons">share</i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <?php
                                }, array_keys($musicData['data']), $musicData['data']);
                                ?>
                            </ul>
                            <center>{{$music->links()}}</center>
                        </section>
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
        $('#music_news').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            musicPage($(this).attr('href'));
        });
        function musicPage(url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "html",
                data: {
                    'tab': 'music'
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                    $('html,body').animate({ scrollTop: 0 }, 400);
                },
                success: function(response) {
                    $('#music_news').html(response);
                    $('#music_news').find('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        musicPage($(this).attr('href'));
                    });
                }
            });
        }
    </script>
@endsection


