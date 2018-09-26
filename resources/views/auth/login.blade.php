@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="col-md-12 form-horizontal" action="#" id="login-form">
                        <div class="head">Đăng Nhập</div>
                        <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                            <div class="input-field">
                                <input type="email" name="email" placeholder="Địa chỉ email" required="email" />
                                <input type="password" placeholder="Password" name="password" required/>
                                <div class="login_action">
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label style="cursor: pointer; display: inline;" for="remember"> Nhớ mật khẩu</label>
                                    <input type="submit" value="Đăng nhập" />
                                </div>
                                <p class="text-p"><a href="#" style=" margin-right: 15px; ">Đăng ký</a>
                                    <span style=" color: #d0d0d0; ">|</span>
                                    <a href="#" style=" margin-left: 15px; ">Quên mật khẩu?</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-2 social_button">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="" class="facebook">
                                            <span class="fa fa-facebook icon_soccial"></span>
                                            <p class="text_social">Đăng nhập bằng Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="google-plus">
                                            <span class="fa fa-google-plus icon_soccial"></span>
                                            <p class="text_social">Đăng nhập bằng Google</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
