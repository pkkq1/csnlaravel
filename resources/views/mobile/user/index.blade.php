<?php
use App\Library\Helpers;
$titleMeta = $user->name . ' - '. Config::get('constants.app.title');
$mySelf = (Auth::check() && Auth::user()->id == $user->id);
?>
@extends('mobile.layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
@endsection
@section('content')
    <div class="header">
        <div class="header_top">
            <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="/" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            </nav>
        </div>
    </div>
    <main class="main main_profile">
        <section class="block_box_profile">
            <div class="container">
                <div class="box_profile py-3">
                    <div class="box_profile__header"><a href="#"><img id="profile_avatar" src="https://graph.facebook.com/v3.0/1928096143946677/picture?width=1920" alt="Quang Vinh"></a></div>
                    <div class="box_profile__body">
                        <h4 class="media-title user_name">Quang Vinh</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item"><strong>193.085</strong><small>upload(17Gb)</small></li>
                            <li class="list-inline-item"><b>193.085</b><small>download</small></li>
                        </ul>
                        <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-secondary btn-gradien btn-radius modal-edit-profile"><span>Chỉnh sửa </span><i aria-hidden="true" class="fa fa-pencil"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- swiper1-->
        <div data-itemmenu="4" class="swiper-container swiper1 swiper_wauto">
            <div class="swiper-wrapper">
                <div class="swiper-slide selected"><span class="d-inline-block align-middle">Playlist</span></div>
                <div class="swiper-slide"><span class="d-inline-block align-middle">Bài Hát</span></div>
                <div class="swiper-slide"><a class="d-inline-block align-middle">Video</a></div>
                <div class="swiper-slide"><a class="d-inline-block align-middle">Ca Sĩ</a></div>
                <div class="swiper-slide"><a class="d-inline-block align-middle">Tủ nhạc</a></div>
            </div>
        </div>
        <!-- swiper2-->
        <div class="swiper-container swiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="block_header d-flex flex-row justify-content-around pt-3">
                            <button type="button" class="btn btn-danger btn-gradien btn-radius">			<i aria-hidden="true" class="fa fa-pencil"></i><span>Tạo playlist</span></button>
                            <button type="button" class="btn btn-secondary-grey btn-radius">			<i aria-hidden="true" class="fa fa-pencil"></i><span>Chỉnh sửa</span></button>
                        </div>
                        <div class="block block_album block_profile_playlist">
                            <div class="row row-sm">
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
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
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                    <div class="content d-inline-block">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block"></div>
                                    <div class="content d-inline-block">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="block block_player">
                            <div class="block_baihat_main block_more">
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                                <div class="element mb-2">
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="block block_album block_profile_playlist">
                            <div class="row row-sm">
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://data.chiasenhac.com/data/cover/92/91140.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://data.chiasenhac.com/data/cover/92/91140.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://data.chiasenhac.com/data/cover/92/91140.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://data.chiasenhac.com/data/cover/92/91140.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="nme_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://data.chiasenhac.com/data/cover/92/91140.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item element">
                                        <div style="background: url('https://data.chiasenhac.com/data/cover/92/91140.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                        <div class="content mt-3">
                                            <h6 class="name_song mb-1">Bad and Boujee</h6>
                                            <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                            <p class="loss text-pink mb-0">Lossless</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="block block_baihat">
                            <div class="block_header d-flex flex-row justify-content-between mb-2">
                                <h3 class="main_title text-pink mb-0">Chờ Xủ Lý</h3>
                            </div>
                            <div class="block_bxhbaihat block_more">
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">01</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">02</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">03</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">04</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">05</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">06</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">07</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">08</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                                <div class="element py-3 border-bottom">
                                    <div class="number_wrap text-center text-orange_ d-inline-block align-middle mx-3">
                                        <p class="number m-0">09</p>
                                    </div>
                                    <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                                    <div class="content d-inline-block align-middle">
                                        <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                        <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                        <p class="loss text-pink mb-0">Lossless</p>
                                        <time class="time_request">22 giờ trước</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block_baihat">
                            <div class="block_header d-flex flex-row justify-content-between mb-2">
                                <h3 class="main_title text-pink mb-0">Đã Duyệt</h3>
                            </div>
                        </div>
                        <div class="block block_baihat">
                            <div class="block_header d-flex flex-row justify-content-between mb-2">
                                <h3 class="main_title text-pink mb-0">Đã Xóa</h3>
                            </div>
                        </div>
                        <div class="block block_album">
                            <div class="block_header d-flex flex-row justify-content-between mb-2">
                                <h3 class="main_title text-pink mb-0">Album</h3>
                            </div>
                            <div class="block_more">
                                <div class="container">
                                    <div class="row row-sm">
                                        <div class="col-6">
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="item element">
                                                <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg') no-repeat center;background-size: cover;" class="image rounded"></div>
                                                <div class="content mt-3">
                                                    <h6 class="name_song mb-1">Bad and Boujee</h6>
                                                    <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert</p>
                                                    <p class="loss text-pink mb-0">Lossless</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('popupMusic')
    <div class="wrap-edit-profile d-hidden">
        <div class="box_edit_profile">
            <div class="container py-3">
                <div id="resizer-demo"></div>
                <div class="box_title mb-3">
                    <h4 class="text-center">Chỉnh sửa tài khoản</h4>
                </div>
                <div class="box_profile pb-3">
                    <div class="box_profile__header"><a href="#" id="upload-avatar-crop"><img id="profile_avatar" src="https://graph.facebook.com/v3.0/1928096143946677/picture?width=1920" alt="Quang Vinh"></a></div>
                    <div class="box_profile__body text-center">
                        <h4 class="media-title user_name">Quang Vinh</h4>
                        <form>
                            <label data-toggle="modal" data-target="#changeAvatarModal" class="btn btn-secondary btn-gradien btn-radius changeAvatarButton"><i aria-hidden="true" class="fa fa-camera"></i> Thay đổi ảnh đại diện
                                <input id="upload" type="file" name="choose_user_avatar" class="d-none">
                            </label>
                        </form>
                    </div>
                </div>
                <div class="box_body">
                    <form action="" method="get" accept-charset="utf-8" class="profile_submit1">
                        <div class="form-group">
                            <label for="username">Tên Tài Khoản</label>
                            <input id="username" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Mật khẩu</label>
                            <input id="password" type="password" name="password" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Nhập lại mật khẩu</label>
                            <input id="repassword" type="password" name="repassword" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail12">Link URL của bạn</label>
                            <input id="exampleInputEmail12" type="text" disabled="" placeholder="" value="https://beta.chiasenhac.com/user/997968" class="form-control disabled">
                        </div>
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input id="name" type="text" name="name" aria-describedby="emailHelp" placeholder="" value="Quang Vinh" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_gender">Giới tính</label>
                            <select id="user_gender" name="user_gender" class="form-control">
                                <option selected="" value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user_birthday">Số điện thoại</label>
                            <input id="user_phone_number" type="text" name="user_phone_number" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_phone_number">Ngày Sinh</label>
                            <input id="user_birthday" type="date" name="user_birthday" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_interests">Thông tin</label>
                            <textarea id="user_interests" name="user_interests" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="text-right"><a href="#" class="cancel cancel_model_profile">Hủy</a>
                            <button onclick="updateProfile();" class="btn btn-secondary ml-3">Hoàn tất</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal-->
    <div id="changeAvatarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="content clearfix">
                        <div id="upload-avatar"></div>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <button type="button" data-dismiss="modal" class="btn btn-radius">Hủy</button>
                    <button type="button" class="btn btn-primary btn-gradien btn-radius upload-result">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
    <div id="alertAvatarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal_content_csn">Lần đăng nhập với tài khoản facebook hoặc google sẽ cập nhật thêm thông tin tên tài khoản và mật khẩu.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn">Ok</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <script type="text/javascript" src="/js/croppie.js"></script>
    <script>
        var $uploadCrop = $('#upload-avatar').croppie({
            enableExif: true,
            viewport: {
                width: 220,
                height: 220,
                type: 'circle'
            },
            boundary: {
                width: 260,
                height: 260
            }
        });
        if ($('#upload')) {
            var inputfile = $("#upload");
            $('#upload').on('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function() {
                        console.log('jQuery bind complete');
                    });
                }
                reader.readAsDataURL(this.files[0]);
            });
        }
        $('.upload-result').on('click', function(ev) {
            var action = $(this).data('action');
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: {
                    width: 250,
                    height: 250
                }
            }).then(function(resp) {
                $("#upload-avatar-crop img").attr('src', resp);
                $("#changeAvatarModal").modal('hide');
                /*$.ajax({
                    url: action,
                    type: "POST",
                    data: { "image": resp },
                    success: function(data) {
                        html = '<img src="' + resp + '" />';
                        $("#upload-avatar-crop").html(html);
                        $('body').find('.avatar-ajax').css({
                            'background': `url(${data}) center center no-repeat`,
                            'backgroundSize': `cover`
                        });
                    }
                });*/
            });
        });
        $('.cancel_model_profile').click(function(e) {
            e.preventDefault();
            var $body = $(this).parents('body');
            $body.find('.wrap-search').addClass('open');
        });
        var openModal = function(button, containerModal , alertMess = false) {
            $(button).click(function(e) {
                e.preventDefault();
                var height = $(containerModal).innerHeight();
                var $body = $(this).parents('body');
                $body.addClass('overlay');
                $body.find(containerModal).fadeIn('400');
                $body.scrollTop(0);
                if ( alertMess == true ) {
                    $('#alertAvatarModal').modal('show');
                }
            });

        }
        var closeModal = function(button, containerModal) {
            $(button).click(function(e) {
                e.preventDefault();
                var $body = $(this).parents('body');
                $body.removeClass('overlay');
                $body.find(containerModal).fadeOut('400');
                $body.scrollTop(0);
            });
        }
        openModal('.modal-edit-profile', '.wrap-edit-profile', true);
        closeModal('.cancel_model_profile', '.wrap-edit-profile');
    </script>
@endsection