<?php
use App\Library\Helpers;
$titleMeta = 'Đăng ký VIP Chia Sẻ Nhạc';
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics">
    <meta name="description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('IMG_DATA_URL')}}imgs/cover_bxh.png" />
    <meta name="title" content="Chính sách Chia Sẻ Nhạc" />
    <meta property="og:image" content="{{env('IMG_DATA_URL')}}imgs/cover_bxh.png" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$titleMeta}}" />
    <meta property="og:description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless." />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@section('no_ads', true)
@extends('web.layouts.app')
@section('contentCSS')
@endsection
@section('content')
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="col-lg-12">
                    <p style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 22px;">
                        <b><u>HƯỚNG DẪN NÂNG CẤP THÀNH VIÊN VIP:</u></b>
                    </p>

                    <p style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 16px;">
                        Để không bị các quảng cáo làm phiền khi bạn truy cập vào hệ thống website và app Chia Sẻ Nhạc, bạn cần nâng cấp tài khoản mình lên tài khoản VIP.
                        Hiện tại, mua tài khoản VIP 6 tháng trên hệ thống Chia Sẻ Nhạc đang được khuyến mãi 50%, giá gốc là 60.000đ, giảm còn 30.000đ.
                        <br>
                    </p>
                    <img style="width: 38%; float: right; display: inline-block;" src="/imgs/qr-code-vip-csn.jpg">
                    <div style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 16px; width: 60%;display: inline-block; float: left; padding-top: 20px;">
                        <span style="font-size: 18px;">Bạn vui lòng chuyển tiền vào số Momo: <b>038.952.4211</b></span><br>
                        <span style="font-size: 18px;">- Tên chủ tài khoản: TON NU THI THUAN</span><br>
                        <span style="font-size: 18px;">- Lời chúc (Tin nhắn): <span style="font-weight: 700; color: red">CSN &nbsp; {{Auth::user()->user_id}}</span></span><br>
                        <span style="font-size: 18px;">- Số tiền: 30.000 VNĐ</span><br>
                        * Vui lòng vui lòng không gọi qua số điện thoại này, CSN sẽ chỉ hỗ trợ thắc mắc trong khung <a target="_blank" href="/user/{{Auth::user()->id}}?tab=message_csn">liên hệ</a> bên dưới.<br>
                        <br />
                        Sau khi chuyển thành công, tài khoản của bạn cần chờ từ 5 phút đến 1 tiếng để được nâng cấp VIP. Nếu quá hạn thời gian mà tài khoản của bạn vẫn chưa lên VIP, vui lòng gửi thông tin liên hệ qua bảng bên dưới để BQT kiểm tra và xử lý.
                        <br />&nbsp;
                    </div>
                </div>
                <img style="width: 20%; float: left; display: inline-block;" src="/imgs/send-30k-to-momo.jpg">

                <div class="upload-content" style="width: 60%; float: right; margin-left: auto; margin-right: auto; display: table;">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>Thành công!</strong> <?php echo $message ?>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <strong>Lỗi!</strong> <?php echo $message ?>
                        </div>
                    @endif
                    <form action="/chia-se-nhac-vip" method="post">
                        <b><u>LIÊN HỆ HỖ TRỢ:</u></b><br /><br />
                        <label style="font-size: 16px" for="cat_id">Mã thành viên của bạn: {{Auth::user()->user_id}}</label><br>
                        <label for="id_phone_request">Số điện thoại bạn nạp tiền</label>
                        <input required style="width: 100%; margin-bottom: 5px;" class="form-control" type="text" id="id_phone_request" name="id_phone_request" placeholder="Nhập số điện thoại">
                        <label for="amount_request">Số tiền đã gửi</label>
                        <input required style="width: 100%; margin-bottom: 5px;" class="form-control" type="text" id="amount_request" name="amount_request" placeholder="Nhập số tiền đã gửi">
                        <label for="note_request">Nội dung lời chúc đã gửi</label>
                        <input required style="width: 100%; margin-bottom: 5px;" class="form-control" type="text" id="note_request" name="note_request" placeholder="Nhập lời chúc đã gửi">
                        <label for="time_request">Khoản thời gian đã nạp</label>
                        <input required style="width: 100%;margin-bottom: 10px;" class="form-control" type="datetime-local" id="time_request" name="time_request">
                        <label for="message_request">Nội dung cần hỗ trợ</label>
                        <input required style="width: 100%; margin-bottom: 5px;" class="form-control" type="text" id="message_request" name="message_request" placeholder="Nhập nội dung mà bạn thắc mắc">
                        <div class="text-center col-12">
                            <button type="submit" id="btn-upload" class="btn btn-danger btn-upload">Gửi yêu cầu</button>
                        </div>
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                @include('web.layouts.right_banner')
            </div>
        </div>
    </div>
@endsection

