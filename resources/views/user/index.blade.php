@section('hidden_wapper', true)
<?php
$titleMeta = $user->name . ' - '. Config::get('constants.app.title');
?>
@extends('layouts.app')
@section('contentCSS')

@endsection
@section('content')
@include('user.box_profile', ['user' => $user])
<div class="container">
    <div class="row row_wrapper">
        <div class="col-md-9">
            <ul class="nav nav-tabs nav-justified nav_bxh" id="myTab" role="tablist">
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
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">j-pop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">c-pop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">us-uk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">k-pop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">us-uk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">k-pop</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex align-items-center justify-content-between" id="header_playlist">
                        <h3 class="title">playlist | album</h3>
                        <span><a class="btn btn-danger" href="#" title="" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a><a class="btn btn-secondary" href="#" title=""><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a></span>
                    </div>
                    <div class="row row10px" id="playlist">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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
            <div class="card mb-3 cardads">
                <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contentJS')

@endsection
