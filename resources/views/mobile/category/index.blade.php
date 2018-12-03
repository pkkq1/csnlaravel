<?php
use App\Library\Helpers;
$titleMeta = $category->cat_title . ' - '. Config::get('constants.app.title');
?>
@extends('mobile.layouts.app')
@section('content')
    <div class="header">
    @include('mobile.layouts.header_top')
    <!-- swiper1-->
        <div data-itemmenu="3" class="swiper-container swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide selected album-{{CURRENT_YEAR}}">Album {{CURRENT_YEAR}}</div>
                <div class="swiper-slide tab-music album-moi">Album Mới</div>
                <div class="swiper-slide tab-music bai-hat-moi">Bài Hát Mới</div>
                <div class="swiper-slide tab-music vua-download">Vừa Download</div>
            </div>
        </div>
        @include('mobile.layouts.wrap_search')
    </div>
    <div class="main">
        <div class="sidebar_top">
            <!-- swiper2-->
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">1</div>
                    <div class="swiper-slide">2</div>
                    <div class="swiper-slide">3</div>
                    <div class="swiper-slide">4</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <script>
        <?php
        if(isset($_GET['tab'])) {
        ?>
        $( document ).ready(function() {
            setTimeout(function(){
                $('.<?php echo $_GET['tab'] ?>').click();
            }, 2000);

        });
        <?php
        }
        ?>
    </script>
@endsection