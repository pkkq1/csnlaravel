<?php
use App\Library\Helpers;
$titleMeta = $category->cat_title . ' - '. Config::get('constants.app.title');
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
                            <h2 class="media-title">{{$caption}}</h2>
                        </div>
                    </div>
                    @if($category->cat_id != CATEGORY_ID_VIDEO)
                    <nav>
                        <ul>
                            <li class="tab-current album-{{CURRENT_YEAR}}"><a onclick="categoryTab('/tab_category', 'album-{{CURRENT_YEAR}}')" class="album-{{CURRENT_YEAR}}" href="#album_{{CURRENT_YEAR}}"><span>Album {{CURRENT_YEAR}}</span></a></li>
                            <li class="album-moi"><a onclick="categoryTab('/tab_category', 'album-moi')" class="album-moi" href="#album-moi"><span>ALbum mới</span></a></li>
                            <li class="bai-hat-moi"><a onclick="categoryTab('/tab_category', 'bai-hat-moi')" class="bai-hat-moi" href="#bai-hat-moi"><span>Bài Hát mới</span></a></li>
                            <li class="vua-download"><a onclick="categoryTab('/tab_category', 'vua-download')" class="vua-download" href="#vua-download"><span>Vừa download</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap tab-content-category">
                        <section id="album-{{CURRENT_YEAR}}" class="content-current"><?php echo $firstTab ?></section>
                        <section id="album-moi"></section>
                        <section id="bai-hat-moi"></section>
                        <section id="vua-download"></section>
                    </div>
                    @else
                    <nav>
                        <ul>
                            <li class="tab-current video-{{CURRENT_YEAR}}"><a onclick="categoryTab('/tab_category', 'video-{{CURRENT_YEAR}}')" href="#video-{{CURRENT_YEAR}}"><span>Video {{CURRENT_YEAR}}</span></a></li>
                            <li class="video-moi"><a class="video-moi" onclick="categoryTab('/tab_category', 'video-moi')" href="#video-moi"><span>Video mới</span></a></li>
                            <li class="video-vua-download"><a class="video-vua-download" onclick="categoryTab('/tab_category', 'video-vua-download')" href="#video-vua-download"><span>Vừa download</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap tab-content-category">
                        <section id="video-{{CURRENT_YEAR}}" class="content-current"><?php echo $firstTab ?></section>
                        <section id="video-moi"></section>
                        <section id="video-vua-download"></section>
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
    $('#album-<?php echo CURRENT_YEAR ?>').find('.pagination li a').on('click', function (e) {
        e.preventDefault();
        categoryTab($(this).attr('href'), 'album-<?php echo CURRENT_YEAR ?>', true);
    });
    $('#video-<?php echo CURRENT_YEAR ?>').find('.pagination li a').on('click', function (e) {
        e.preventDefault();
        categoryTab($(this).attr('href'), 'video-<?php echo CURRENT_YEAR ?>', true);
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
                    'tab': tab ? tab : 'album_<?php echo CURRENT_YEAR ?>'
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
    <?php
        if(isset($_GET['tab'])) {
            ?>
            $( document ).ready(function() {
                $('.<?php echo $_GET['tab'] ?>').click();
            });
            <?php
        }
    ?>
</script>
@endsection


