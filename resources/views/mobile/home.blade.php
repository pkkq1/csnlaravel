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
global $album_cat_new;
?>
@extends('mobile.layouts.app')
@section('content')
    @include('cache.def_home_album')
    @include('cache.def_home_download')
    @include('cache.def_home_album_cat')
    <div class="header">
        <div class="header_top">
            <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="#" class="navbar-brand logo"><img src="images/logo-header.png" alt="logo"></a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            </nav>
        </div>
        <!-- swiper1-->
        <div class="header_sub_menu">
            <div data-itemmenu="4" class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide selected">Home</div>
                    <div class="swiper-slide swiper-w90">Chủ đề</div>
                    <div class="swiper-slide swiper-w90">Album mới</div>
                    <div class="swiper-slide swiper-w90">Bài hát mới</div>
                    <div class="swiper-slide swiper-w90">Video mới</div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <div class="sidebar_top">
            <!-- swiper2-->
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div id="pills-home">
                            <div class="owl-carousel owl-theme slider_home pt-3">
                                <div style="background: url('https://i.scdn.co/image/5570996211d2ef04e38deb3824fa3f443666d089') no-repeat center;background-size: cover;" class="item">
                                    <div class="element text-white">
                                        <h6 class="name_song mb-1">Bad and Boujee</h6>
                                        <p class="name_singer mb-1">Migos (feat. Lil Uzi Vert)</p>
                                        <p class="loss text-pink mb-0">LossLess</p>
                                    </div>
                                </div>
                                <div style="background: url('https://i.scdn.co/image/5570996211d2ef04e38deb3824fa3f443666d089') no-repeat center;background-size: cover;" class="item">
                                    <div class="element text-white">
                                        <h6 class="name_song mb-1">Bad and Boujee</h6>
                                        <p class="name_singer mb-1">Migos (feat. Lil Uzi Vert)</p>
                                        <p class="loss text-pink mb-0">LossLess</p>
                                    </div>
                                </div>
                                <div style="background: url('https://i.scdn.co/image/5570996211d2ef04e38deb3824fa3f443666d089') no-repeat center;background-size: cover;" class="item">
                                    <div class="element text-white">
                                        <h6 class="name_song mb-1">Bad and Boujee</h6>
                                        <p class="name_singer mb-1">Migos (feat. Lil Uzi Vert)</p>
                                        <p class="loss text-pink mb-0">LossLess</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                                        <h3 class="main_title text-pink mb-0">Bài hát mới nhất</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                    </div>
                                    <div class="block_baihat_main block_more">
                                        <div class="element mb-2">
                                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                            <div class="content d-inline-block">
                                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                            </div>
                                        </div>
                                        <div class="element mb-2">
                                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                            <div class="content d-inline-block">
                                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                            </div>
                                        </div>
                                        <div class="element mb-2">
                                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                            <div class="content d-inline-block">
                                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block_detail_chude">
                                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                                        <h3 class="main_title text-pink mb-0">Bảng xếp hạng</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div style="background: url(images/img_bxh_vn.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-2 d-flex flex-column justify-content-center text-center">
                                                <!-- <h5 class="text-white">VIỆT NAM</h5>-->
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div style="background: url(images/img_bxh_us.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-2 d-flex flex-column justify-content-center text-center">
                                                <!-- <h5 class="text-white">US-UK</h5>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div style="background: url(images/img_bxh_korea.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-2 d-flex flex-column justify-content-center text-center">
                                                <!-- <h5 class="text-white">K-POP</h5>-->
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div style="background: url(images/img_bxh_japan.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-2 d-flex flex-column justify-content-center text-center">
                                                <!-- <h5 class="text-white">J-POP</h5>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block_album">
                                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                                        <h3 class="main_title text-pink mb-0">Album mới nhất</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                    </div>
                                    <div class="block_album_main d-flex flex-wrap">
                                        <div class="slide-album owl-theme owl-carousel">
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-album owl-theme owl-carousel">
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block_detail_chude">
                                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                                        <h3 class="main_title text-pink mb-0">Chủ đề</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                    </div>
                                    <div class="slide-chude owl-carousel owl-theme">
                                        <div class="item">
                                            <div style="background: url(images/img_category_weekend.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                                <h5 class="text-white">Buồn</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div style="background: url(images/img_category_edm.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                                <h5 class="text-white">Mưa</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div style="background: url(images/img_category_love.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                                <h5 class="text-white">Mùa xuân</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div style="background: url(images/img_category_topshare.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                                <h5 class="text-white">Rock</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block_video">
                                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                                        <h3 class="main_title text-pink mb-0">Video mới nhất</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                    </div>
                                    <div class="block_video_main d-flex flex-wrap">
                                        <div class="element">
                                            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/06/2/d/a/c/1522983742317_268.jpg') no-repeat center;background-size: cover;" class="image">
                                                <p class="view text-white mb-0 px-2 py-1"><img src="images/img_camera.png" width="16"> 54.2k</p>
                                                <p class="time text-white mb-0 px-2 py-1"><img src="images/ic_menu_clock.png" width="14"> 03:45</p>
                                            </div>
                                            <div class="content mt-3">
                                                <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                <p class="name_singer text-gray mb-1">Migos (feat. Lil Uzi Vert)</p>
                                            </div>
                                        </div>
                                        <div class="element">
                                            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/06/2/d/a/c/1522983742317_268.jpg') no-repeat center;background-size: cover;" class="image">
                                                <p class="view text-white mb-0 px-2 py-1"><img src="images/img_camera.png" width="16"> 54.2k</p>
                                                <p class="time text-white mb-0 px-2 py-1"><img src="images/ic_menu_clock.png" width="14"> 03:45</p>
                                            </div>
                                            <div class="content mt-3">
                                                <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                <p class="name_singer text-gray mb-1">Migos (feat. Lil Uzi Vert)</p>
                                            </div>
                                        </div>
                                        <div class="element">
                                            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/06/2/d/a/c/1522983742317_268.jpg') no-repeat center;background-size: cover;" class="image">
                                                <p class="view text-white mb-0 px-2 py-1"><img src="images/img_camera.png" width="16"> 54.2k</p>
                                                <p class="time text-white mb-0 px-2 py-1"><img src="images/ic_menu_clock.png" width="14"> 03:45</p>
                                            </div>
                                            <div class="content mt-3">
                                                <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                <p class="name_singer text-gray mb-1">Migos (feat. Lil Uzi Vert)</p>
                                            </div>
                                        </div>
                                        <div class="element">
                                            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/06/2/d/a/c/1522983742317_268.jpg') no-repeat center;background-size: cover;" class="image">
                                                <p class="view text-white mb-0 px-2 py-1"><img src="images/img_camera.png" width="16"> 54.2k</p>
                                                <p class="time text-white mb-0 px-2 py-1"><img src="images/ic_menu_clock.png" width="14"> 03:45</p>
                                            </div>
                                            <div class="content mt-3">
                                                <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                <p class="name_singer text-gray mb-1">Migos (feat. Lil Uzi Vert)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="block block_detail_chude">
                                <div style="background: url(images/img_category_weekend.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                    <h5 class="text-white">Weekend</h5>
                                </div>
                                <div style="background: url(images/img_category_edm.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                    <h5 class="text-white">EDM</h5>
                                </div>
                                <div style="background: url(images/img_category_love.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                    <h5 class="text-white">Love</h5>
                                </div>
                                <div style="background: url(images/img_category_topshare.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                    <h5 class="text-white">Top Share</h5>
                                </div>
                                <div style="background: url(images/img_category_hit_vpop.png) no-repeat center;background-size: cover;" class="element rounded w-100 mb-3 d-flex flex-column justify-content-center text-center">
                                    <h5 class="text-white">HIT V-Pop</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="block block_album">
                                <div class="block_header d-flex flex-row justify-content-between mb-2">
                                    <h3 class="main_title text-pink mb-0">Album Việt Nam</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                </div>
                                <div class="block_album_main d-flex flex-wrap">
                                    <div class="slide-album owl-theme owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div style="transform: translate3d(-584px, 0px, 0px); transition: all 0s ease 0s; width: 1559px;" class="owl-stage">
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_album">
                                <div class="block_header d-flex flex-row justify-content-between mb-2">
                                    <h3 class="main_title text-pink mb-0">Album US-UK</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                </div>
                                <div class="block_album_main d-flex flex-wrap">
                                    <div class="slide-album owl-theme owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div style="transform: translate3d(-584px, 0px, 0px); transition: all 0s ease 0s; width: 1559px;" class="owl-stage">
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_album">
                                <div class="block_header d-flex flex-row justify-content-between mb-2">
                                    <h3 class="main_title text-pink mb-0">Album Hoa</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                </div>
                                <div class="block_album_main d-flex flex-wrap">
                                    <div class="slide-album owl-theme owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div style="transform: translate3d(-584px, 0px, 0px); transition: all 0s ease 0s; width: 1559px;" class="owl-stage">
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_album">
                                <div class="block_header d-flex flex-row justify-content-between mb-2">
                                    <h3 class="main_title text-pink mb-0">Album K-Pop</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                </div>
                                <div class="block_album_main d-flex flex-wrap">
                                    <div class="slide-album owl-theme owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div style="transform: translate3d(-584px, 0px, 0px); transition: all 0s ease 0s; width: 1559px;" class="owl-stage">
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_album">
                                <div class="block_header d-flex flex-row justify-content-between mb-2">
                                    <h3 class="main_title text-pink mb-0">Album J-Pop</h3><span class="text-gray align-self-end">Xem tất cả</span>
                                </div>
                                <div class="block_album_main d-flex flex-wrap">
                                    <div class="slide-album owl-theme owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div style="transform: translate3d(-584px, 0px, 0px); transition: all 0s ease 0s; width: 1559px;" class="owl-stage">
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned active">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 184.783px; margin-right: 10px;" class="owl-item cloned">
                                                    <div class="item element">
                                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                        <div class="content mt-3">
                                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                            <p class="loss text-pink mb-0">Lossless</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="container">
                            <div class="block block_baihat">
                                <div class="block_baihat_main block_more">
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                    <div class="element mb-2">
                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                        <div class="content d-inline-block">
                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                            <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('contentJS')
    <script>
        function tabHome(tab) {
            $('.' + tab).click();
        }
        $('#music_news').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            musicPage($(this).attr('href'), 'music_news');
        });
        $('#video_news').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            musicPage($(this).attr('href'), 'video_news');
        });
        function musicPage(url, tab) {
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: {
                    'tab': tab == 'music_news' ? 'music' : tab == 'video_news' ? 'video' : 'cover'
                },
                beforeSend: function () {
                    console.log(loaded);
                    if(loaded) return false;
                    loaded = true;
                    // $('html,body').animate({ scrollTop: 0 }, 400);
                },
                success: function(response) {
                    $('#' + tab).html(response);
                    $('#' + tab).find('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        musicPage($(this).attr('href'), tab);
                    });
                    $('.swiper-wrapper-content').height($('#' + tab).height())
                }
            });
        }
    </script>
@endsection