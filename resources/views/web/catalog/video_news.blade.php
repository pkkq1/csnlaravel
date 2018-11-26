<?php
use App\Library\Helpers;
$title = 'Video mới';
if(isset($_GET['page']))
    $title = $title.' trang '.$_GET['page'];
$titleMeta = $title.' - '. Config::get('constants.app.title');
?>
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
                        <section id="music_videos" class="content-current">
                            <div class="row row10px float-col-width-video">
                                <?php
                                array_map(function ($item) {
                                $url = Helpers::listen_url($item);
                                ?>
                                <div class="col">
                                    <div class="card card1 video">
                                        <div class="card-header" style="background-image: url({{Helpers::thumbnail_url($item)}});">
                                            <a href="{{$url}}" title="{{$item['music_title']}}">
                                                <span class="icon-play"></span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title"><a href="{{$url}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                                            <p class="card-text"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }, $video->toArray()['data'])
                                ?>
                            </div>
                            <center>{{$video->links()}}</center>
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
        $('#music_videos').find('.pagination li a').on('click', function (e) {
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
                    // $('html,body').animate({ scrollTop: 0 }, 400);
                },
                success: function(response) {
                    $('#music_videos').html(response);
                    $('#music_videos').find('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        musicPage($(this).attr('href').replace("tab_category", "video-moi"));
                    });
                }
            });
        }
    </script>
@endsection


