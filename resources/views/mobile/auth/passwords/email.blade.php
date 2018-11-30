<?php
use App\Library\Helpers;
// global variable file /case
?>
@extends('mobile.layouts.app')
@section('content')

    <div class="header">
    @include('mobile.layouts.header_top')
    <!-- swiper1-->
        @include('mobile.layouts.wrap_search')
    </div>
    <div class="main" style="margin-top: 0px; height: calc(100vh);">
        <div class="block_login">
            <div class="block_login_image d-flex flex-row flex-wrap" style="">
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div><div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div><div class="image" style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover"></div>
                <div class="thumb-mask media align-items-stretch"></div>
            </div>

            <div class="login_possition d-flex flex-column justify-content-end" style="height: calc(100vh);">
                <div class="w-75 mx-auto text-center">
                    <input type="text" placeholder="Địa chỉ email" class="input_type_mobile login_button mb-3 email">
                    <a href="javascript:void(0)" onclick="authLogin()" class="login_button google text-gray" style="height: 42px;padding: 10px;margin-left: auto;margin-right: auto;margin-top: 15px;">Lấy Lại Mật Khẩu</a>
                    <br/>
                    <a href="/login" style="margin-right: 15px;color: #FF2D55;">Đăng nhập</a> <span style="color: #888">|</span> <a href="/register" style="margin-left: 15px;color: #FF2D55;">Đăng ký</a>
                </div>
                <div class="w-75 mx-auto text-center">
                    <a href="/auth/facebook" class="login_button facebook mb-3">Đăng nhập bằng Facebook</a>
                    <a href="/auth/google" class="login_button google text-gray">Đăng nhập bằng Google</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <script>
        function authLogin() {
            resetInputLogin();
            const email = $('.login_possition').find('.email');
            if(!email.val()) {
                return addErrorInput(email, 'Email không được để trống');
            }
            $.ajax({
                url: '/password/email',
                type: "POST",
                dataType: "json",
                data: {
                    email: email.val(),
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    $.each(errors.errors, function( key, value ) {
                        addErrorInput($('.login_possition').find('.' + key), value);
                    });
                },
                success: function(response) {
                    var status = response.status.email;
                    email.before('<div class="alert alert-success">' + status + ' </div>');
                }
            });
        }
        function resetInputLogin() {
            $('.login_possition').find('.input-help-block').remove();
            $('.login_possition').find('.alert').remove();
            $('.login_possition').find('input').removeClass('input-has-error');
        }
        function addErrorInput(tag, content) {
            tag.addClass('input-has-error');
            tag.before('<span class="input-help-block"><strong>' + content + '</strong></span>');
        }
    </script>
@endsection