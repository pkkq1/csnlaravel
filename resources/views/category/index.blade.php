<?php
use App\Library\Helpers;
$titleMeta = $category->cat_title . ' - '. Config::get('constants.app.title');
?>
@extends('layouts.app')
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
                            <h2 class="media-title">{{$caption}}</h2>
                        </div>
                    </div>
                    @if($category->cat_id != CATEGORY_ID_VIDEO)
                    <nav>
                        <ul>
                            <li class="tab-current"><a onclick="categoryTab('/tab_category', 'album_2018')" href="#album_2018"><span>Album {{CURRENT_YEAR}}</span></a></li>
                            <li><a onclick="categoryTab('/tab_category', 'album_new')" href="#album_new"><span>ALbum mới</span></a></li>
                            <li><a onclick="categoryTab('/tab_category', 'music_new')" href="#music_new"><span>Bài Hát mới</span></a></li>
                            <li><a onclick="categoryTab('/tab_category', 'download_now')" href="#download_now"><span>Vừa download</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap tab-content-category">
                        <section id="album_2018" class="content-current"><?php echo $firstTab ?></section>
                        <section id="album_new"></section>
                        <section id="music_new"></section>
                        <section id="download_now"></section>
                    </div>
                    @else
                    <nav>
                        <ul>
                            <li class="tab-current"><a onclick="categoryTab('/tab_category', 'video_2018')" href="#video_2018"><span>Video {{CURRENT_YEAR}}</span></a></li>
                            <li><a onclick="categoryTab('/tab_category', 'video_new')" href="#video_new"><span>Video mới</span></a></li>
                            <li><a onclick="categoryTab('/tab_category', 'video_download_now')" href="#video_download_now"><span>Vừa download</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap tab-content-category">
                        <section id="video_2018" class="content-current"><?php echo $firstTab ?></section>
                        <section id="video_new"></section>
                        <section id="video_download_now"></section>
                    </div>
                    @endif
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
                <div class="card mb-3 cardads">
                    <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
                </div>
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
    $('#album_2018').find('.pagination li a').on('click', function (e) {
        e.preventDefault();
        categoryTab($(this).attr('href'), 'album_2018', true);
    });
    $('#video_2018').find('.pagination li a').on('click', function (e) {
        e.preventDefault();
        categoryTab($(this).attr('href'), 'video_2018', true);
    });
    function categoryTab(url, tab, floatTab = false) {
        if(($('#'+tab).html()).length == 0 || floatTab) {
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: {
                    'cat_id': <?php echo $category->cat_id; ?>,
                    'cat_level' : <?php echo $category->cat_level; ?>,
                    'tab': tab ? tab : 'album_2018'
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                    $('html,body').animate({ scrollTop: 0 }, 400);
                },
                success: function(response) {
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


