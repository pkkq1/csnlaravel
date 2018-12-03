<?php
use App\Library\Helpers;
// global variable file /case
?>
@extends('mobile.layouts.app')
@section('content')
<div class="header">
    <div class="header_top">
        <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="#" class="navbar-brand logo"><img src="images/logo-header.png" alt="logo"></a>
            <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        </nav>
    </div>
</div>
<main class="main main-no-swiper main-account">
    <div class="block_login">
        <div class="block_login_image d-flex flex-row flex-wrap">
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div style="background: url('https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg') no-repeat center;background-size: cover;" class="image"></div>
            <div class="thumb-mask media align-items-stretch"></div>
        </div>
        <div class="login_possition d-flex flex-column justify-content-center">
            <div class="w-304 mx-auto text-center mb-5">
                <input type="text" placeholder="Tên đăng nhập hoặc email" class="input_type_mobile login_button mb-3 email">
                <input type="password" placeholder="Mật khẩu" class="input_type_mobile login_button password mb-3">
                <a href="javascript:void(0)" onclick="authLogin()" class="login_button google text-gray mb-3 btn-gradien">Đăng Nhập</a>
                <div class="checkbox_remember">
                    <div class="row">
                        <div class="col-6 text-right">
                            <label for="remember" class="input-checkbox">
                                <input id="remember" type="checkbox" checked="" id="remember" name="remember"><span>Nhớ mật khẩu</span>
                            </label>
                        </div>
                        <div class="col-6 text-left"><a href="/password/reset">Quên mật khẩu?</a></div>
                    </div>
                </div><br>
                <p style="color: white; text-align: center;display: flow-root;width: 100%" class="text-p">Bạn chưa có tài khoản? <a href="/register" style="margin-right: 15px;color: #FF2D55;display: flow-root;">Đăng ký</a></p>
            </div>
            <div class="w-304 mx-auto text-center"><a href="/auth/facebook" class="login_button facebook mb-3">Đăng nhập bằng Facebook</a>
                <a href="/auth/google" class="login_button google text-gray">Đăng nhập bằng Google</a>
            </div>
        </div>
    </div>
</main>

@endsection
@section('contentJS')
    <script>
        function authLogin() {
            resetInputLogin();
            const email = $('.login_possition').find('.email');
            const password = $('.login_possition').find('.password');
            if(!email.val()) {
                return addErrorInput(email, 'Email không được để trống.');
            }
            if(!password.val()) {
                return addErrorInput(password, 'Mật khẩu không được để trống.');
            }
            if(email.val().length < 4) {
                return addErrorInput(email, 'Tài khoản trên 4 ký tự.');
            }
            if(password.val().length < 6) {
                return addErrorInput(password, 'Mật khẩu phải trên 6 ký tự.');
            }
            $.ajax({
                url: '/login',
                type: "POST",
                dataType: "json",
                data: {
                    email: email.val(),
                    password: password.val(),
                    remember: ($('#remember').is( ":checked" ) ? true : '')
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    $.each( errors.errors, function( key, value ) {
                        addErrorInput($('.login_possition').find('.' + key), value);
                    });
                },
                success: function(response) {
                    location.reload('/');
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