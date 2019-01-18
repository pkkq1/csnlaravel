<?php
use App\Library\Helpers;
$titleMeta = $titleSearch . ' '. Config::get('constants.app.title');
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_DOMAIN')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics">
    <meta name="description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL')}}/imgs/no_cover.png" />
    <meta name="title" content="{{$titleMeta}}" />
    <meta property="og:image" content="{{env('APP_URL')}}/imgs/no_cover.png" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$titleMeta}}" />
    <meta property="og:description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless." />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('mobile.layouts.app')
@section('content')
    <div class="header">
        <div class="header_top">
            <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="/" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            </nav>
        </div>
        <!-- swiper1-->
        <div class="header_sub_menu">
            <div data-itemmenu="4" class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide selected search-music">Bài Hát ({{number_format($result['music']['row_total'])}})</div>
                    <div class="swiper-slide search-album" >Album ({{number_format($result['album']['row_total'])}})</div>
                    <div class="swiper-slide search-video">Video ({{number_format($result['video']['row_total'])}})</div>
                    <div class="swiper-slide search-artist">Ca sĩ ({{number_format($result['artist']['row_total'])}})</div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <div class="sidebar_top">
            <!-- swiper2-->
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide block_bxhbaihat block_more">
                        <div class="container">
                            <div class="block block_baihat">
                                <div class="block_bxhbaihat block_more" id="bai-hat">
                                    <?php
                                    array_map(function ($item) {
                                    ?>
                                    <div class="element mb-2">
                                        <a href="{{$item['music_link']}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['music_cover']}}') no-repeat center;background-size: cover;"></div></a>
                                        <div class="content d-inline-block align-middle">
                                            <a href="{{$item['music_link']}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist'] ?></p>
                                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate'] ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['music']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['music']['page'], $result['music']['rows'], $result['music']['row_total'], '<a href="/tim-kiem?q='.$search.'&page_music=%d">%d</a>') ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="block block_album block_profile_playlist">
                                <div class="row row-sm" id="album">
                                    <?php
                                    array_map(function ($item) {
                                    ?>
                                    <div class="col-6">
                                        <div class="item element">
                                            <a href="{{$item['album_link']}}"><div style="background: url({{$item['album_cover']}}) no-repeat center;background-size: cover;" class="image rounded"></div></a>
                                            <div class="content mt-3">
                                                <a href="{{$item['album_link']}}"><h6 class="name_song mb-1 card-title">{{$item['music_album']}}</h6></a>
                                                <p class="name_singer text-gray mb-1 author"><?php echo $item['album_artist'] ?></p>
                                                <p class="loss text-pink mb-0"><?php echo $item['album_bitrate'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['album']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['album']['page'], $result['album']['rows'], $result['album']['row_total'], '<a href="/tim-kiem?q='.$search.'&page_album=%d">%d</a>') ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more">
                        <div class="container">
                            <div class="block block_bxhvideo">
                                <div class="block_bxhbaihat block_more" id="video">
                                    <?php
                                    array_map(function ($item) {
                                    ?>
                                    <div class="element py-3 border-bottom">
                                        <a href="{{$item['video_link']}}">
                                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{$item['video_cover']}}) no-repeat center;background-size: cover;">
                                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length']}}</p>
                                            </div>
                                        </a>
                                        <div class="content d-inline-block align-middle">
                                            <a href="{{$item['video_link']}}"><h6 class="name_song text-black mb-1 card-title">{{$item['video_title']}}</h6></a>
                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['video_artist'] ?></p>
                                            <p class="loss text-pink mb-0"><?php echo $item['video_bitrate'] ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['video']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['video']['page'], $result['video']['rows'], $result['video']['row_total'], '<a href="/tim-kiem?q='.$search.'&page_video=%d">%d</a>') ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more">
                        <div class="container">
                            <div class="block block_baihat">
                                <div class="block_bxhbaihat block_more" id="bai-hat">
                                    <?php
                                    array_map(function ($item) {
                                    ?>
                                    <div class="element mb-2">
                                        <a href="/ca-si/{{$item['artist_link']}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['artist_cover']}}') no-repeat center;background-size: cover;"></div></a>
                                        <div class="content d-inline-block align-middle">
                                            <a href="/ca-si/{{$item['artist_link']}}"><h6 class="name_song text-black mb-1 card-title">{{$item['artist_nickname']}}</h6></a>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['artist']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['artist']['page'], $result['artist']['rows'], $result['artist']['row_total'], '<a href="/tim-kiem?q='.$search.'&page_artist=%d">%d</a>') ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('contentJS')
    <script>

        function categoryTab(url, tab, floatTab = false) {
            if(($('#'+tab).html()).length == 0 || floatTab) {
                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: "html",
                    data: {},
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
        $( document ).ready(function() {
            setTimeout(function(){
                <?php
                    if(isset($_GET['page_album'])) {
                        ?>
                        $('.search-album').click();
                        <?php
                    }
                    if(isset($_GET['page_video'])) {
                        ?>
                        $('.search-video').click();
                        <?php
                    }
                    if(isset($_GET['page_artist'])) {
                        ?>
                        $('.search-artist').click();
                     <?php
                    }
                ?>
            }, 500);
        });
    </script>
@endsection