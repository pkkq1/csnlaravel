

@extends('mobile.layouts.app')

@section('content')
    <div class="header">
        <div class="header_top">
            <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            </nav>
        </div>
    </div>
    <main class="main main_player">
        <div class="sidebar_top">
            <div id="pills-tabContent" class="tab-content">
                <div id="pills-thongtin" role="tabpanel" aria-labelledby="pills-thongtin-tab" class="tab-pane fade active show">
                    <div class="block_thongtin">
                        <div class="swiper-container swiper2 swiper-container-horizontal swiper-container-autoheight">
                            <div class="swiper-wrapper" style="height: 747px;">
                                <div class="swiper-slide swiper-slide-active" style="width: 375px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="centering text-center error-container">
                                                    <div class="text-center">
                                                        <h2 class="without-margin"><span class="text-danger"><big>{{$message}}</big></span></h2>
                                                        <h4 class="text-danger">Vui lòng liên hệ CSN để được hỗ trợ</h4>
                                                        <h4 class="text-danger">404</h4>
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
        </div>
    </main>
@endsection
