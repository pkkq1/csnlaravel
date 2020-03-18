<?php
use App\Library\Helpers;
$titleMeta = $titleBxh . ' - '. Config::get('constants.app.title');
global $hot_music_rows;
global $hot_video_rows;
global $memberVip;
$memberVip = Helpers::checkMemberVip();
$titleMeta = $titleBxh . ' - '. Config::get('constants.app.title');
$metaKeyWorld = 'bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics';
$metaDesc = 'Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.';
if ($titleBxh == 'Bảng xếp hạng hot trong ngày') {
    $metaDesc = 'Nhạc hot  -Nghe nhạc hot online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossles';
    $metaKeyWorld = $metaKeyWorld . ',Nhạc hot, bài hát hot, bài hát hot, nghe nhạc online, tải nhạc miễn phí, chia sẻ nhạc, bài hát, nhạc vàng, nhạc trẻ, nhạc chữ tình, nhạc xuân, remix, nghe nhạc online, edm, bolero, upload nhạc, trance, house, lời bài hát, lossless';
} elseif ($titleBxh == 'Bảng xếp hạng hot trong tuần') {
    $metaDesc = 'Bảng xếp hạng hot hàng tuần - Cập nhật nhữn bài hát hay nhất kèm chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.';
    $metaKeyWorld = $metaKeyWorld . 'Bảng xếp hạng tuần,bang xep hang bai hat, bxh bai hat, bang xep hang Viet Nam, bai hat Viet Nam, bang xep hang, bài hát hot, nghe nhạc online, tải nhạc miễn phí, chia sẻ nhạc, bài hát, nhạc vàng, nhạc trẻ, nhạc chữ tình, nhạc xuân, remix, nghe nhạc online, edm, bolero, upload nhạc, trance, house, lời bài hát, lossless';
} elseif (strpos($titleBxh, 'Bảng xếp hạng hot trong tháng ') !== false) {
    $titleMeta = $titleBxh . ' - Nơi chia sẻ nhạc chất lượng cao và xếp hạng âm nhạc trực tuyến';
    $metaDesc = $titleBxh . ', Nghe nhạc online và tải nhạc miễn phí chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.';
    $metaKeyWorld = $metaKeyWorld . ', ' . $titleBxh . ', bang xep hang bai hat, bxh bai hat, bang xep hang Viet Nam, bai hat Viet Nam, bang xep hang,bài hát hot, nghe nhạc online, tải nhạc miễn phí, chia sẻ nhạc, bài hát, nhạc vàng, nhạc trẻ, nhạc chữ tình, nhạc xuân, remix, karaoke, nghe nhạc online, edm, bolero, upload nhạc, trance, house, lời bài hát, lossless';
} elseif (strpos($titleBxh, 'Bảng xếp hạng trong năm ') !== false) {
    $yearBxh = last(explode(' ', $titleBxh));
    if($yearBxh == 2019) {
        $titleMeta = $titleBxh . ' - Tuyển tập những bài chất lượng cao';
        $metaDesc = $titleBxh . ' được cập nhật hàng tuần tại chiasenhac.vn dựa theo lượt nghe, yêu thích trên nhiều nền tảng khác nhau';
        $metaKeyWorld = $metaKeyWorld . ', Bảng xếp hạng bài hát, bxh bài hát, bảng xếp hạng Việt Nam, bài hát Việt Nam, bảng xếp hạng, bảng xếp hạng bài hát 2019';
    }else{
        $metaDesc = $titleBxh . ' - Tuyển tập 20 bài hát hot nhất được yêu thích nhất và tải nhiều nhất tại chiasenhac .vn';
        $metaKeyWorld = $metaKeyWorld . ', Bảng xếp hạng bài hát ' . $yearBxh . ', bxh bài hát ' . $yearBxh . ', bảng xếp hạng Việt Nam ' . $yearBxh . ', bài hát Việt Nam, bảng xếp hạng ' . $yearBxh . ', bảng xếp hạng bài hát';
    }
}
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="{{$metaKeyWorld}}">
    <meta name="description" content="{{$metaDesc}}">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('IMG_DATA_URL')}}imgs/cover_bxh.png" />
    <meta name="title" content="{{$titleMeta}}" />
    <meta property="og:image" content="{{env('IMG_DATA_URL')}}imgs/cover_bxh.png" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$titleMeta}}" />
    <meta property="og:description" content="{{$metaDesc}}" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('mobile.layouts.app')
@section('content')
@include('cache.bxh.'.$cacheBxh)
<div class="header">
    @include('mobile.layouts.header_top')
    <!-- swiper1-->
    <div class="header_sub_menu">
        <div data-itemmenu="4" class="swiper-container swiper1">
            <div class="swiper-wrapper">
                @if(!isset($_GET['type']) || $_GET['type'] == 'music')
                    <div class="swiper-slide selected vietnam selected">BXH Nhạc VN</div>
                    <div class="swiper-slide tab-music us-uk">BXH Nhạc US-UK</div>
                    <div class="swiper-slide tab-music chinese">BXH Nhạc Hoa</div>
                    <div class="swiper-slide tab-music korea">BXH Nhạc Hàn</div>
                    <div class="swiper-slide tab-music japan">BXH Nhạc Nhật</div>
                    <div class="swiper-slide tab-music france">BXH Nhạc Pháp</div>
                    <div class="swiper-slide tab-music other">BXH Nhạc Nước Khác</div>
                    <div class="swiper-slide tab-music beat-playback">BXH Nhạc Playback</div>
                @endif
                @if((!isset($_GET['type']) || $_GET['type'] == 'video') && $hot_video_rows)
                    <div class="swiper-slide tab-video {{(isset($_GET['type']) && $_GET['type'] == 'video') ? 'selected' : ''}}">BXH Video VN</div>
                    <div class="swiper-slide tab-video">BXH Video US-UK</div>
                    <div class="swiper-slide tab-video">BXH Video Hoa</div>
                    <div class="swiper-slide tab-video">BXH Video Hàn</div>
                    <div class="swiper-slide tab-video">BXH Video Nhật</div>
                    <div class="swiper-slide tab-video">BXH Video Pháp</div>
                    <div class="swiper-slide tab-video">BXH Video Nước Khác</div>
                @endif
            </div>
        </div>
    </div>
</div>
<main class="main">
    @if(!$memberVip)
    <div style="position: relative; text-align: center;">
{{--        @if(View::exists('cache.code_ads.mobile_masthead'))--}}
            @include('cache.code_ads.mobile_masthead')
        {{--@endif--}}
    </div>
    @endif
    <div class="sidebar_top">
        <!-- swiper2-->
        <div class="swiper-container swiper2">
            <div class="swiper-wrapper">
                @if(!isset($_GET['type']) || $_GET['type'] == 'music')
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-vietnam">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/vietnam'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;">
                                </div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[3] ?? []), $hot_music_rows[3] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-us-uk">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/us-uk'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;">
                                </div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[4] ?? []), $hot_music_rows[4] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-chinese">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/chinese'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;">
                                </div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[5] ?? []), $hot_music_rows[5] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-korea">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/korea'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;">
                                </div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[6] ?? []), $hot_music_rows[6] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-japan">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/japan'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;">
                                </div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[7] ?? []), $hot_music_rows[7] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-france">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/france'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;">
                                </div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[8] ?? []), $hot_music_rows[8] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-other">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/other'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;">
                                </div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[9] ?? []), $hot_music_rows[9] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more tab-music content-beat-playback">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/beat-playback'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['cover_thumb_html']}}') no-repeat center;background-size: cover;"></div></a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_music_rows[2] ?? []), $hot_music_rows[2] ?? []);
                        ?>
                    </div>
                @endif
                @if((!isset($_GET['type']) || $_GET['type'] == 'video') && $hot_video_rows)
                    <div class="swiper-slide tab-video block_bxhvideo">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/video/v-video'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}">
                                <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                    <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                </div>
                            </a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?? ''; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_video_rows[1] ?? []), $hot_video_rows[1] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide tab-video block_bxhvideo">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/video/us-video'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}">
                                <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                    <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                </div>
                            </a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?? ''; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_video_rows[2] ?? []), $hot_video_rows[2] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide tab-video block_bxhvideo">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/video/c-video'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}">
                                <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                    <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                </div>
                            </a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?? ''; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_video_rows[3] ?? []), $hot_video_rows[3] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide tab-video block_bxhvideo">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/video/k-video'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}">
                                <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                    <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                </div>
                            </a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?? ''; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_video_rows[4] ?? []), $hot_video_rows[4] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide tab-video block_bxhvideo">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/video/j-video'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}">
                                <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                    <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                </div>
                            </a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?? ''; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_video_rows[5] ?? []), $hot_video_rows[5] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide tab-video block_bxhvideo">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/video/f-video'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}">
                                <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                    <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                </div>
                            </a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?? ''; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_video_rows[6] ?? []), $hot_video_rows[6] ?? []);
                        ?>
                    </div>
                    <div class="swiper-slide tab-video block_bxhvideo">
                        <?php
                        array_map(function ($i, $item) use ($urlBxh) {
                        $i = ++$i;
                        $url = $urlBxh.'/video/o-video'.'.html?playlist='.$i;
                        ?>
                        <div class="element py-3 border-bottom block_bxhvideo">
                            <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                <p class="number m-0">{{$i}}</p>
                            </div>
                            <a href="{{$url}}">
                                <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                    <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                </div>
                            </a>
                            <div class="content d-inline-block align-middle">
                                <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html'] ?? ''; ?></p>
                                <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?? ''; ?></p>
                            </div>
                        </div>
                        <?php
                        }, array_keys($hot_video_rows[7] ?? []), $hot_video_rows[7] ?? []);
                        ?>
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
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