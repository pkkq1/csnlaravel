<?php
use App\Library\Helpers;
// global variable file /case
global $album_hot;
global $album_new;
global $album_old;
global $download_rows;
global $top_uploader_rows;
global $music_new_uploads;
global $video_new_uploads;
global $album_rows_3_0;
global $album_rows_4_0;
global $album_rows_5_0;
global $album_rows_7_0;
global $top_artist_rows;

?>

@extends('layouts.app')

@section('content')
    
@include('cache.def_home_album')

@include('cache.def_home_download')

@include('cache.def_home_artist')

@include('cache.def_home_cat_3_0')
@include('cache.def_home_cat_4_0')

@include('cache.def_home_cat_5_0')
@include('cache.def_home_cat_7_0')

<div class="slide_home"
     style="background: url('/imgs/Slice-1.jpg');">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <?php
                array_map(function($item) {
                    ?>
                    <div class="item">
                        <div class="card card1 slide">
                            <div class="card-header"
                                 style="background-image: url({{Helpers::coverImg($item['cover_id'])}});">
                                <a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_album']}}">
                                    <span class="icon-play"></span>
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                                <p class="card-text author"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></p>
                                <div class="card-text"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }, $album_hot);
            ?>
        </div>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                slideBy: 4,
                nav: true,
                navText: ['<img src="imgs/top-left.png" alt="">', '<img src="imgs/top-right.png" alt="">'],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        </script>
    </div>
</div>
<div class="container">
    <div class="row row_wrapper">
        <div class="col-md-9">
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Bài hát mới nhất</h5>
                <a class="link_more" href="/album.html" title="">Xem tất cả</a>
            </div>
            <div class="row row10px">
                <?php
                $newMusic = Helpers::getRandLimitArr($music_new_uploads, LIMIT_HOME_MUSIC_NEW);
                array_map(function ($i, $item) {
                    ?>
                    @if (($i % 5) == 0)
                    </div>
                    <div class="row row10px">
                    @endif
                        <div class="col">
                            <div class="card card1">
                                <div class="card-header" style="background-image: url({{Helpers::coverImg($item['cover_id'])}});">
                                    <a href="{{Helpers::listen_url($item)}}" title="{{$item['music_title']}}">
                                        <span class="icon-play"></span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                                    <p class="card-text"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                }, array_keys($newMusic), $newMusic)
                ?>
            </div>
            <div class="box_catalog owl-carousel owl-theme">
                <a href="#" title="" class="item img-thumbnail swiper-slide top_share" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2018/04/12/e/d/6/8/1523498904907_org.jpg') no-repeat;"><span>top share</span></a>
                <a href="#" title="" class="item img-thumbnail swiper-slide top_hitvpop" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2017/04/11/8/c/d/c/1491886414148_org.jpg') no-repeat;"><span>top hit vpop</span></a>
                <a href="#" title="" class="item img-thumbnail swiper-slide hitvpop_new" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2016/09/30/e/5/7/8/1475229833731_org.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
                <a href="#" title="" class="item img-thumbnail swiper-slide top_share" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2016/11/09/9/1/7/f/1478679979642_org.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
                <a href="#" title="" class="item img-thumbnail swiper-slide top_share" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2018/04/12/e/d/6/8/1523498904907_org.jpg') no-repeat;"><span>top share</span></a>
                <a href="#" title="" class="item img-thumbnail swiper-slide top_hitvpop" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2017/04/11/8/c/d/c/1491886414148_org.jpg') no-repeat;"><span>top hit vpop</span></a>
                <a href="#" title="" class="item img-thumbnail swiper-slide hitvpop_new" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2016/09/30/e/5/7/8/1475229833731_org.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
                <a href="#" title="" class="item img-thumbnail swiper-slide top_share" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2016/11/09/9/1/7/f/1478679979642_org.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
            </div>
            <!-- Initialize Carousel -->
            <script>
                $('.box_catalog').owlCarousel({
                    margin:10,
                    loop:true,
                    autoWidth:true,
                    items:4,
                    dots:false,
                    nav:true,
                    navText: ['<i class="material-icons">keyboard_arrow_left</i>','<i class="material-icons">keyboard_arrow_right</i>'],
                })
            </script>
            <div class="row row10px">
                <div class="col">
                    <div class="box_header d-flex justify-content-between align-items-end">
                        <h5 class="title m-0">Mới chia sẻ</h5>
                        <a class="link_more" href="/album.html" title="Bài hát mới nhất 2018">Xem tất cả</a>
                    </div>
                    <ul class="list-unstyled list_music">
                        <?php
                            array_map(function($item) {
                            ?>
                            <li class="media align-items-stretch">
                                <div class="media-left align-items-stretch mr-2">
                                    <a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_album']}}">
                                        <img src="{{Helpers::coverImg($item['cover_id'])}}" alt="{{$item['music_album']}}">
                                        <i class="material-icons">play_circle_outline</i>
                                    </a>
                                </div>
                                <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                                    <div>
                                        <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h5>
                                        <div class="author title_home_tablet"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></div>
                                    </div>
                                    <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                                </div>
                                <div class="media-right align-self-center">
                                    <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">playlist_add</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <?php
                            }, Helpers::getRandLimitArr($album_old, LIMIT_HOME_ALBUM_OLD));
                        ?>
                    </ul>
                </div>
                <div class="col">
                    <div class="box_header d-flex justify-content-between align-items-end">
                        <h5 class="title m-0">Download nhiều nhất</h5>
                        <a class="link_more" href="/download.html" title="Xem tất cả download">Xem tất cả</a>
                    </div>
                    <ul class="list-unstyled list_music">
                        <?php
                            array_map(function($item) {
                                $urlMusic = Helpers::listen_url($item);
                            ?>
                            <li class="media align-items-stretch">
                                <div class="media-left align-items-stretch mr-2">
                                    <a href="{{$urlMusic}}" title="">
                                        <img src="{{Helpers::coverImg($item['cover_id'])}}" alt="{{$item['music_title']}}">
                                        <i class="material-icons">play_circle_outline</i>
                                    </a>
                                </div>
                                <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                                    <div>
                                        <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$urlMusic}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h5>
                                        <div class="author title_home_tablet"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></div>
                                    </div>
                                    <small class="type_music c1"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                                </div>
                                <div class="media-right align-self-center">
                                    <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_download_time']); ?></small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">playlist_add</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <?php
                            }, Helpers::getRandLimitArr($download_rows, LIMIT_HOME_ALBUM_OLD))
                        ?>
                    </ul>
                </div>
            </div>
            <div class="box_catalog owl-carousel owl-theme">
                <a href="#" title="" class="img-thumbnail item swiper-slide last_weeken" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2017/11/20/c/7/a/1/1511174974441_org.jpg') no-repeat;"><span>cuối tuần</span></a>
                <a href="#" title="" class="img-thumbnail item swiper-slide music_love" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2017/03/16/4/2/e/7/1489634655621_org.jpg') no-repeat;"><span>music love</span></a>
                <a href="#" title="" class="img-thumbnail item swiper-slide hitvpop" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522726760341_640.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
                <a href="#" title="" class="img-thumbnail item swiper-slide top_share" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/09/7/1/c/a/1523242138424_640.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
                <a href="#" title="" class="img-thumbnail item swiper-slide last_weeken" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2017/11/20/c/7/a/1/1511174974441_org.jpg') no-repeat;"><span>cuối tuần</span></a>
                <a href="#" title="" class="img-thumbnail item swiper-slide music_love" style="background: url('https://avatar-nct.nixcdn.com/topic/thumb/2017/03/16/4/2/e/7/1489634655621_org.jpg') no-repeat;"><span>music love</span></a>
                <a href="#" title="" class="img-thumbnail item swiper-slide hitvpop" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522726760341_640.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
                <a href="#" title="" class="img-thumbnail item swiper-slide top_share" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/09/7/1/c/a/1523242138424_640.jpg') no-repeat;"><span>hit vpop mới nhất</span></a>
            </div>
            <!-- Initialize Carousel -->
            <script>
                $('.box_catalog').owlCarousel({
                    margin:10,
                    loop:true,
                    autoWidth:true,
                    items:4,
                    dots:false,
                    nav:true,
                    navText: ['<i class="material-icons">keyboard_arrow_left</i>','<i class="material-icons">keyboard_arrow_right</i>'],
                })
            </script>
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Album mới</h5>
                <a class="link_more" href="/album" title="Album mới nhất 2018">Xem tất cả</a>
            </div>
            <div class="row row10px">
                <?php
                $albumNew = Helpers::getRandLimitArr($album_new, LIMIT_HOME_ALBUM_NEW);
                array_map(function ($i, $item) {
                ?>
                    @if (($i % 5) == 0)
                    </div>
                    <div class="row row10px">
                    @endif
                        <div class="col">
                            <div class="card card1">
                                <div class="card-header" style="background-image: url({{Helpers::coverImg($item['cover_id'])}});">
                                    <a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">
                                        <span class="icon-play"></span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                                    <p class="card-text"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                }, array_keys($albumNew), $albumNew);
                ?>

            </div>
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Video mới</h5>
                <a class="link_more" href="/video.html" title="Xem tất Cả Video">Xem tất cả</a>
            </div>
            <div class="row row10px">
                <?php
                $videoMusic = Helpers::getRandLimitArr($video_new_uploads, LIMIT_HOME_MUSIC_NEW);
                array_map(function ($i, $item) {
                ?>
                    @if (($i % 5) == 0)
                    </div>
                    <div class="row row10px">
                    @endif
                        <div class="col">
                            <div class="card card1 video">
                                <div class="card-header" style="background-image: url({{Helpers::thumbnail_url($item)}});">
                                    <a href="{{SUB_VIDEO.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">
                                        <span class="icon-play"></span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                                    <p class="card-text"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                },array_keys($videoMusic), $videoMusic)
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Bảng xếp hạng</h5>
                <a class="link_more" href="/mp3/vietnam/" title="">Nghe tất cả bảng xếp hạng<span class="ion-android-arrow-dropright-circle"></span></a>
            </div>
            <ul class="nav nav-tabs" id="myTab_bxh" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">việt nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">us-uk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">k-pop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="jpop-tab" data-toggle="tab" href="#jpop" role="tab" aria-controls="jpop" aria-selected="false">j-pop</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <ul class="list-unstyled bxh mb-0">
                        <?php
                        $catMusic = Helpers::getRandLimitArr($album_rows_3_0, LIMIT_HOME_CAT_MUSIC);
                        array_map(function ($i, $item) {
                        ?>
                        <li class="media {{($i == 0 ? 'first stand' : ($i == 1 ? 'now up' : ($i == 2 ? 'now down' : 'now')))}} align-items-stretch">
                            <div class="media-left mr-3">
                                <span></span>
                                <a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}"><img src="{{Helpers::coverImg($item['cover_id'])}}" alt="{{$item['music_title']}}"></a>
                            </div>
                            <div class="media-body d-flex flex-column {{$i == 0 ? '' : 'justify-content-between'}}">
                                <h5 class="media-title mt-0 mb-0"><a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h5>
                                <div class="{{$i == 0 ? '' : 'd-flex'}} align-items-center justify-content-between">
                                    <div class="author"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></div>
                                    <small class="counter_view">{{number_format($item['music_listen'])}}</small>
                                </div>
                            </div>
                        </li>
                        <?php
                        },array_keys($catMusic), $catMusic)
                        ?>
                    </ul>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <ul class="list-unstyled bxh mb-0">
                    <?php
                    $catMusic = Helpers::getRandLimitArr($album_rows_4_0, LIMIT_HOME_CAT_MUSIC);
                    array_map(function ($i, $item) {
                    ?>
                    <li class="media {{($i == 0 ? 'first stand' : ($i == 1 ? 'now up' : ($i == 2 ? 'now down' : 'now')))}} align-items-stretch">
                        <div class="media-left mr-3">
                            <span></span>
                            <a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}"><img src="{{Helpers::coverImg($item['cover_id'])}}" alt="{{$item['music_title']}}"></a>
                        </div>
                        <div class="media-body d-flex flex-column {{$i == 0 ? '' : 'justify-content-between'}}">
                            <h5 class="media-title mt-0 mb-0"><a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h5>
                            <div class="{{$i == 0 ? '' : 'd-flex'}} align-items-center justify-content-between">
                                <div class="author"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></div>
                                <small class="counter_view">{{number_format($item['music_listen'])}}</small>
                            </div>
                        </div>
                    </li>
                    <?php
                    },array_keys($catMusic), $catMusic)
                    ?>
                    </ul>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <ul class="list-unstyled bxh mb-0">
                    <?php
                    $catMusic = Helpers::getRandLimitArr($album_rows_5_0, LIMIT_HOME_CAT_MUSIC);
                    array_map(function ($i, $item) {
                    ?>
                    <li class="media {{($i == 0 ? 'first stand' : ($i == 1 ? 'now up' : ($i == 2 ? 'now down' : 'now')))}} align-items-stretch">
                        <div class="media-left mr-3">
                            <span></span>
                            <a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}"><img src="{{Helpers::coverImg($item['cover_id'])}}" alt="{{$item['music_title']}}"></a>
                        </div>
                        <div class="media-body d-flex flex-column {{$i == 0 ? '' : 'justify-content-between'}}">
                            <h5 class="media-title mt-0 mb-0"><a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h5>
                            <div class="{{$i == 0 ? '' : 'd-flex'}} align-items-center justify-content-between">
                                <div class="author"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></div>
                                <small class="counter_view">{{number_format($item['music_listen'])}}</small>
                            </div>
                        </div>
                    </li>
                    <?php
                    },array_keys($catMusic), $catMusic)
                    ?>
                    </ul>
                </div>
                <div class="tab-pane fade" id="jpop" role="tabpanel" aria-labelledby="jpop-tab">
                    <ul class="list-unstyled bxh mb-0">
                    <?php
                    $catMusic = Helpers::getRandLimitArr($album_rows_7_0, LIMIT_HOME_CAT_MUSIC);
                    array_map(function ($i, $item) {
                    ?>
                    <li class="media {{($i == 0 ? 'first stand' : ($i == 1 ? 'now up' : ($i == 2 ? 'now down' : 'now')))}} align-items-stretch">
                        <div class="media-left mr-3">
                            <span></span>
                            <a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}"><img src="{{Helpers::coverImg($item['cover_id'])}}" alt="{{$item['music_title']}}"></a>
                        </div>
                        <div class="media-body d-flex flex-column {{$i == 0 ? '' : 'justify-content-between'}}">
                            <h5 class="media-title mt-0 mb-0"><a href="{{SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h5>
                            <div class="{{$i == 0 ? '' : 'd-flex'}} align-items-center justify-content-between">
                                <div class="author"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></div>
                                <small class="counter_view">{{number_format($item['music_listen'])}}</small>
                            </div>
                        </div>
                    </li>
                    <?php
                    },array_keys($catMusic), $catMusic)
                    ?>
                    </ul>
                </div>
            </div>
            <div class="box_space"></div>
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">BXH upload trong tuần</h5>
            </div>
            <ul class="list-unstyled bxh_week mb-0">


                <?php
                $uploaderMusic = Helpers::getRandLimitArr($top_uploader_rows, LIMIT_HOME_UPLOADER_MUSIC);
                array_map(function ($i, $item) {
                ?>
                <li class="media {{($i == 0 ? 'stand' : ($i == 1 ? 'up' : ($i == 2 ? 'down' : '')))}}">
                    <div class="media-left align-self-center"><span></span></div>
                    <div class="media-body">
                        <h5 class="mt-0 mb-0 d-flex align-items-center justify-content-between">
                            <a href="#" title="{{$item['music_username']}}">{{$item['music_username']}}</a>
                            <div class="counter_download">{{number_format($item['download_total'])}}</div>
                        </h5>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="counter_file">{{number_format($item['music_total'])}} upload (<?php echo Helpers::convertToReadableSize($item['size_total']); ?>)</small>
                            <small class="text">download</small>
                        </div>
                    </div>
                </li>
                <?php
                },array_keys($uploaderMusic), $uploaderMusic)
                ?>
            </ul>
            <div class="box_space"></div>
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Ca sĩ yêu thích</h5>
            </div>
            <div class="singer_grid">
                <?php
                $artistRows = Helpers::getRandLimitArr($top_artist_rows[3], LIMIT_HOME_ARTIST);
                array_map(function ($i, $item) {
                ?>
                    <a href="#" title="{{$item['music_artist']}}" class="img-thumbnail singer {{$i == 0 ? 'c1' : ''}}" style="background-image: url({{Helpers::coverImg($item['artist_face_id'])}});">
                        <span>{{$item['music_artist']}}</span>
                    </a>
                <?php
                },array_keys($artistRows), $artistRows)
                ?>
            </div>
            <div class="box_space"></div>
            <div class="card mb-3 cardads">
                <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
@endsection