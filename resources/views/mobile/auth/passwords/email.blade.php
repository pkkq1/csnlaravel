<?php
use App\Library\Helpers;
// global variable file /case
?>
@extends('mobile.layouts.app')
@section('content')
<div class="header">
    <div class="header_top">
        <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
            <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        </nav>
    </div>
</div>
<main class="main main-no-swiper main-account">
    <div class="block_login">
        <div class="login_possition d-flex flex-column justify-content-center">
            <div class="w-304 mx-auto text-center mb-5">
                <input type="text" placeholder="Địa chỉ email" class="input_type_mobile login_button mb-3 email">
                <a href="javascript:void(0)" onclick="authLogin()" class="login_button google text-gray btn-gradien">Lấy Lại Mật Khẩu</a><br><a href="/login" style="margin-right: 15px;color: #FF2D55;">Đăng nhập</a><span style="color: #888">|</span><a href="/register" style="margin-left: 15px;color: #FF2D55;">Đăng ký</a>
            </div>
            <div class="w-304 mx-auto text-center"><a href="/auth/facebook" class="login_button facebook mb-3">Đăng nhập bằng Facebook</a><a href="/auth/google" class="login_button google text-gray btn-gradien">Đăng nhập bằng Google</a></div>
        </div>
    </div>
</main>
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