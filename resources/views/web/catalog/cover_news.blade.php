<?php
use App\Library\Helpers;
$title = 'Album mới';
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
                        <section id="cover_news" class="content-current">
                            <div class="row row10px float-col-width">
                                <?php
                                array_map(function ($item) {
                                $url = Helpers::album_url($item);
                                $album_artist_id = $item['album_artist_id_1'];
                                $album_artist = $item['album_artist_1'];
                                if($item['album_artist_id_2']) {
                                    $album_artist_id = $album_artist_id. ';'.$item['album_artist_id_2'];
                                    $album_artist = $album_artist. ';'.$item['album_artist_2'];
                                }
                                ?>
                                <div class="col">
                                    <div class="card card1">
                                        <div class="card-header" style="background-image: url({{Helpers::cover_url($item['cover_id'])}});">
                                            <a href="{{$url}}" title="{{$item['music_album']}}">
                                                <span class="icon-play"></span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title"><a href="{{$url}}" title="{{$item['music_album']}}">{{$item['music_album']}}</a></h3>
                                            <p class="card-text">
                                                <?php echo Helpers::rawHtmlArtists($album_artist_id, $album_artist) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }, $cover->toArray()['data']);
                                ?>
                            </div>
                            <center>{{$cover->links()}}</center>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <a class="catalog1 weekend" style="background-image: url(https://i.scdn.co/image/6a6098cd1369420b9b6ff941ff41ded1b1dceb06);" href="#" title="">
                    <span>weekend</span>
                </a>
                <a class="catalog1 edm" style="background-image: url(https://i.scdn.co/image/c8ffd7bd0df17c05fd8a1efef33ad793eea0e47d);" href="#" title="">
                    <span>EDM</span>
                </a>
                <a class="catalog1 love" style="background-image: url(https://i.scdn.co/image/56228f9353b23405516a6ea8af1c22083f450b57);" href="#" title="">
                    <span>love</span>
                </a>
                <br>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <script src="/js/cbpFWTabs.js"></script>
    <script>
        $('#cover_news').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            musicPage($(this).attr('href'));
        });
        function musicPage(url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "html",
                data: {
                    'tab': 'video'
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                    $('html,body').animate({ scrollTop: 0 }, 400);
                },
                success: function(response) {
                    $('#cover_news').html(response);
                    $('#cover_news').find('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        musicPage($(this).attr('href').replace("tab_category", "album-moi"));
                    });
                }
            });
        }
    </script>
@endsection


