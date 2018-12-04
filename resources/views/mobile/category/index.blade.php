<?php
use App\Library\Helpers;
$titleMeta = $category->cat_title . ' - '. Config::get('constants.app.title');
?>
@extends('mobile.layouts.app')
@section('content')
    <div class="header">
        <div class="header_top">
            <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            </nav>
        </div>
        <!-- swiper1-->
        <div class="header_sub_menu">
            <div data-itemmenu="4" class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    @if($category->cat_id != CATEGORY_ID_VIDEO)
                    <div class="swiper-slide tab-music selected swiper-w90 album-{{CURRENT_YEAR}}" data-tab="album-{{CURRENT_YEAR}}">Album {{CURRENT_YEAR}}</div>
                    <div class="swiper-slide tab-music swiper-w90 album-moi" data-tab="album-moi">Album Mới</div>
                    <div class="swiper-slide tab-music swiper-w90 bai-hat-moi" data-tab="bai-hat-moi">Bài Hát Mới</div>
                    <div class="swiper-slide tab-music swiper-w145 vua-download" data-tab="vua-download">Vừa Download</div>
                    @else
                    <div class="swiper-slide tab-music selected swiper-w90 video-{{CURRENT_YEAR}}" data-tab="video-{{CURRENT_YEAR}}">Video {{CURRENT_YEAR}}</div>
                    <div class="swiper-slide tab-music swiper-w90 video-moi" data-tab="video-moi">Video mới</div>
                    <div class="swiper-slide tab-music swiper-w90 video-vua-download" data-tab="video-vua-download">Vừa download</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <div class="sidebar_top">
            <!-- swiper2-->
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    @if($category->cat_id != CATEGORY_ID_VIDEO)
                        <div class="swiper-slide block_baihat_main block_more" data-tab="album-{{CURRENT_YEAR}}">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_baihat_main block_more" id="album-{{CURRENT_YEAR}}">
                                        <?php echo $firstTab ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_baihat_main block_more" data-tab="album-moi">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_baihat_main block_more" id="album-moi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_baihat_main block_more" data-tab="bai-hat-moi">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_baihat_main block_more" id="bai-hat-moi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_baihat_main block_more" data-tab="vua-download">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_baihat_main block_more" id="vua-download"></div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="swiper-slide block_baihat_main block_more" data-tab="video-{{CURRENT_YEAR}}">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_baihat_main block_more" id="video-{{CURRENT_YEAR}}">
                                        <?php echo $firstTab ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_baihat_main block_more" data-tab="video-moi">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_baihat_main block_more" id="video-moi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_baihat_main block_more" data-tab="video-vua-download">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_baihat_main block_more" id="video-vua-download"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
@section('contentJS')
    <script>
        $('#album-<?php echo CURRENT_YEAR ?>').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            categoryTab($(this).attr('href'), 'album-<?php echo CURRENT_YEAR ?>', true);
        });
        $('#video-<?php echo CURRENT_YEAR ?>').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            categoryTab($(this).attr('href'), 'video-<?php echo CURRENT_YEAR ?>', true);
        });
        function slideSwiperChange(swiper){
            let tabSelected = $('.swiper2').find('.swiper-slide-active');
            let tab =  tabSelected.data('tab');
            if($('#'+tab).html().length == 0) {
                categoryTab('/tab_category', tab, true);
            }
        }
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
                        $('.'+tab).click();
                    }
                });
            }
        }

        <?php
        if(isset($_GET['tab'])) {
        ?>
        $( document ).ready(function() {
            setTimeout(function(){
                $('.<?php echo $_GET['tab'] ?>').click();
            }, 600);
        });
        <?php
        }
        ?>
    </script>
@endsection