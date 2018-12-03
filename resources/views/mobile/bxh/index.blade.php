<?php
use App\Library\Helpers;
$titleMeta = $titleBxh . ' - '. Config::get('constants.app.title');
global $hot_music_rows;
global $hot_video_rows;
?>
@extends('mobile.layouts.app')
@section('content')
@include('cache.bxh.'.$cacheBxh)
<div class="header">
    <div class="header_top">
        <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="#" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
            <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        </nav>
    </div>
    <!-- swiper1-->
    <div class="header_sub_menu">
        <div data-itemmenu="4" class="swiper-container swiper1">
            <div class="swiper-wrapper">
                @if(!isset($_GET['type']) || $_GET['type'] == 'music')
                    <div class="swiper-slide selected swiper-w145 vietnam">BXH Nhạc VN</div>
                    <div class="swiper-slide tab-music swiper-w145 us-uk">BXH Nhạc US-UK</div>
                    <div class="swiper-slide tab-music swiper-w145 chinese">BXH Nhạc Hoa</div>
                    <div class="swiper-slide tab-music swiper-w145 korea">BXH Nhạc Hàn</div>
                    <div class="swiper-slide tab-music swiper-w145 japan">BXH Nhạc Nhật</div>
                    <div class="swiper-slide tab-music swiper-w145 france">BXH Nhạc Pháp</div>
                    <div class="swiper-slide tab-music swiper-w145 other swiper-w145">BXH Nhạc Nước Khác</div>
                    <div class="swiper-slide tab-music beat-playback swiper-w145">BXH Nhạc Playback</div>
                @endif
                @if(!isset($_GET['type']) || $_GET['type'] == 'video')
                    <div class="swiper-slide swiper-w145 tab-video">BXH Video VN</div>
                    <div class="swiper-slide swiper-w145 tab-video">BXH Video US-UK</div>
                    <div class="swiper-slide swiper-w145 tab-video">BXH Video Hoa</div>
                    <div class="swiper-slide swiper-w145 tab-video">BXH Video Hàn</div>
                    <div class="swiper-slide swiper-w145 tab-video">BXH Video Nhật</div>
                    <div class="swiper-slide swiper-w145 tab-video">BXH Video Pháp</div>
                    <div class="swiper-slide swiper-w145 tab-video">BXH Video Nước Khác</div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="sidebar_top">
        <!-- swiper2-->
        <div class="swiper-container swiper2">
            <div class="swiper-wrapper">
                @if(!isset($_GET['type']) || $_GET['type'] == 'music')
                <div class="swiper-slide tab-music content-vietnam">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[3]), $hot_music_rows[3]);
                    ?>
                </div>
                <div class="swiper-slide tab-music content-us-uk">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[4]), $hot_music_rows[4]);
                    ?>
                </div>
                <div class="swiper-slide tab-music content-chinese">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[5]), $hot_music_rows[5]);
                    ?>
                </div>
                <div class="swiper-slide tab-music content-korea">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[6]), $hot_music_rows[6]);
                    ?>
                </div>
                <div class="swiper-slide tab-music content-japan">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[7]), $hot_music_rows[7]);
                    ?>
                </div>
                <div class="swiper-slide tab-music content-france">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[8]), $hot_music_rows[8]);
                    ?>
                </div>
                <div class="swiper-slide tab-music content-other">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[9]), $hot_music_rows[9]);
                    ?>
                </div>
                <div class="swiper-slide tab-music content-beat-playback">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_music_rows[2]), $hot_music_rows[2]);
                    ?>
                </div>
                @endif
                @if(!isset($_GET['type']) || $_GET['type'] == 'video')
                <div class="swiper-slide tab-video block_bxhvideo">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}">
                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                            </div>
                        </a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_video_rows[1]), $hot_video_rows[1]);
                    ?>
                </div>
                <div class="swiper-slide tab-video block_bxhvideo">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}">
                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                            </div>
                        </a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_video_rows[2]), $hot_video_rows[2]);
                    ?>
                </div>
                <div class="swiper-slide tab-video block_bxhvideo">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}">
                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                            </div>
                        </a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_video_rows[3]), $hot_video_rows[3]);
                    ?>
                </div>
                <div class="swiper-slide tab-video block_bxhvideo">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}">
                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                            </div>
                        </a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_video_rows[4]), $hot_video_rows[4]);
                    ?>
                </div>
                <div class="swiper-slide tab-video block_bxhvideo">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}">
                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                            </div>
                        </a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_video_rows[5]), $hot_video_rows[5]);
                    ?>
                </div>
                <div class="swiper-slide tab-video block_bxhvideo">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}">
                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                            </div>
                        </a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_video_rows[6]), $hot_video_rows[6]);
                    ?>
                </div>
                <div class="swiper-slide tab-video block_bxhvideo">
                    <?php
                    array_map(function ($i, $item) {
                    $url = Helpers::listen_url($item);
                    ?>
                    <div class="element py-3 border-bottom block_bxhvideo">
                        <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                            <p class="number m-0">{{++$i}}</p>
                        </div>
                        <a href="{{$url}}">
                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                            </div>
                        </a>
                        <div class="content d-inline-block align-middle">
                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                        </div>
                    </div>
                    <?php
                    }, array_keys($hot_video_rows[7]), $hot_video_rows[7]);
                    ?>
                </div>
                @endif
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