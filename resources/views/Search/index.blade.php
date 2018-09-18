<?php
use App\Library\Helpers;
$titleMeta = $titleSearch . ' '. Config::get('constants.app.title');

?>
@extends('layouts.app')
@section('contentCSS')
@endsection
@section('content')
<div class="container">
    <div class="row row_wrapper">
        <div class="col-md-9">
            <nav class="nav_kq_search d-flex align-items-center justify-content-between">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">tất cả</a>
                    <a class="nav-item nav-link" id="nav-music-tab" data-toggle="tab" href="#nav-music" role="tab" aria-controls="nav-music" aria-selected="false">bài hát</a>
                    <a class="nav-item nav-link" id="nav-album-tab" data-toggle="tab" href="#nav-album" role="tab" aria-controls="nav-album" aria-selected="false">album</a>
                    <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">video</a>
                </div>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lọc kết quả
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="title">Tìm theo</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tên bài hát
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ca sỹ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sáng tác
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tên Album
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Lời bài hát
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="title">Tìm theo</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tên bài hát
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ca sỹ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sáng tác
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tên Album
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Lời bài hát
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="title">Tìm theo</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tên bài hát
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ca sỹ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sáng tác
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tên Album
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Lời bài hát
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="card card-note-search">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="txt-note">Từ khoá <b>anh</b> có 201,026 kết quả</span>
                        <div class="tag">
                            <button type="button" class="btn btn-secondary">Tên Album <i class="material-icons">close</i></button>
                            <button type="button" class="btn btn-secondary">Ca sĩ <i class="material-icons">close</i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab"></div>
                <div class="tab-pane fade" id="nav-music" role="tabpanel" aria-labelledby="nav-music-tab">...</div>
                <div class="tab-pane fade" id="nav-album" role="tabpanel" aria-labelledby="nav-album-tab">...</div>
                <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">...</div>
            </div>
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Bài hát</h5>
            </div>
            <ul class="list-unstyled list_music music_kq">
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/3/0/7/5307b38e7a651a805b56674e70d124ef.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">sống xa anh chẳng dễ dàng</a></h5>
                            <div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
                        </div>
                        <small class="type_music c1">Lossless</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/6/3/3/3/6333e47cefee8f7cf9317e0fc21c52b1.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">đã lỡ yêu em rồi</a></h5>
                            <div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
                        </div>
                        <small class="type_music c1">Lossless</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/7/4/5/3/7453b69f58b535ce566b6012fd34f9db.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">kém duyên</a></h5>
                            <div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
                        </div>
                        <small class="type_music c2">320kbps</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/0/4/4/8/04485736d56ad4c5db97b88ef0d54eea.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">bao giờ cưới?</a></h5>
                            <div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
                        </div>
                        <small class="type_music c2">320kbps</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/1/d/d/d/1ddd2aa2c5f5ddcee812c460f8583a5b.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">cảm xúc tình yêu</a></h5>
                            <div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
                        </div>
                        <small class="type_music c1">Lossless</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/d/8/d8827a766da920e202809c6a006155b1_1519784231.png" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">nhạc việt hay nhất cho ngày cưới</a></h5>
                            <div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
                        </div>
                        <small class="type_music c1">Lossless</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/b/c/e/6/bce66d6f8fd1efe4e44bcfc4756b0fae.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">vì yêu mà đến</a></h5>
                            <div class="author"><a href="#" title="">Trịnh Thăng Bình</a></div>
                        </div>
                        <small class="type_music c1">Lossless</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/8/e/2/0/8e2060b1774f824b0f3940442c8900c8.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">webbing songs</a></h5>
                            <div class="author"><a href="#" title="">Lou Hoàng</a></div>
                        </div>
                        <small class="type_music c1">Lossless</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="media align-items-stretch">
                    <div class="media-left align-items-stretch mr-2">
                        <a href="#" title="">
                            <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/a/4/9/5a49f355f5ca957ad0cbd1a749159b9f.jpg" alt="">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0"><a href="#" title="">ngày hạnh phúc</a></h5>
                            <div class="author"><a href="#" title="">Various Artists</a></div>
                        </div>
                        <small class="type_music c1">Lossless</small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt">92.176.986</small>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Album</h5>
                <a class="link_more" href="#" title="">Xem tất cả</a>
            </div>
            <div class="row row10px">
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Kyo York</a> , <a href="#" title="">Thanh Tú</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/01/16/d/7/6/3/1484535771754_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
                            <p class="card-text"><a href="#" title="">Noo Phước Thịnh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Vài lần đón đưa (Touliver Remix)</a></h3>
                            <p class="card-text"><a href="#" title="">Bảo Anh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/02/13/2/0/8/c/1486960729549_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Soobin Hoàng Sơn</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/03/28/5/d/5/9/1522229043066_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
                            <p class="card-text"><a href="#" title="">Sơn Tùng MTP</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row10px">
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/04/04/0/c/0/a/1522834899987_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Kyo York</a> , <a href="#" title="">Thanh Tú</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/12/12/9/b/0/8/1513062893915_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
                            <p class="card-text"><a href="#" title="">Noo Phước Thịnh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/03/26/8/2/f/d/1522032958037_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Vài lần đón đưa (Touliver Remix)</a></h3>
                            <p class="card-text"><a href="#" title="">Bảo Anh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/01/09/9/f/d/e/1515466530996_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Soobin Hoàng Sơn</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/04/06/2/d/a/c/1522983742317_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
                            <p class="card-text"><a href="#" title="">Sơn Tùng MTP</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box_header d-flex justify-content-between align-items-end">
                <h5 class="title m-0">Video</h5>
                <a class="link_more" href="#" title="">Xem tất cả</a>
            </div>
            <div class="row row10px">
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Kyo York</a> , <a href="#" title="">Thanh Tú</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/01/16/d/7/6/3/1484535771754_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
                            <p class="card-text"><a href="#" title="">Noo Phước Thịnh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Vài lần đón đưa (Touliver Remix)</a></h3>
                            <p class="card-text"><a href="#" title="">Bảo Anh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/02/13/2/0/8/c/1486960729549_268.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Soobin Hoàng Sơn</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row10px">
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/3/4/1/f/341f617927f5dd169bc6618d9b328e4b.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Kyo York</a> , <a href="#" title="">Thanh Tú</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/1/3/f/d/13fd186cb485319232adc8e50b8e2ff9.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
                            <p class="card-text"><a href="#" title="">Noo Phước Thịnh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/covers/1/f/1f33a7d88383a6ed955df0c78f476673_1520993753.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Vài lần đón đưa (Touliver Remix)</a></h3>
                            <p class="card-text"><a href="#" title="">Bảo Anh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card1 video">
                        <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/1/2/c/8/12c87940dc01c9bed2612b7afbd9a1e8.jpg);">
                            <a href="#" title="">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
                            <p class="card-text"><a href="#" title="">Soobin Hoàng Sơn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3 cardads">
                <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contentJS')
    <script>

    </script>
@endsection
