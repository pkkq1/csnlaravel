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
@extends('web.layouts.app')
@section('contentCSS')
@endsection
@section('content')
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="col-lg-12">
                    <p style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 16px;">
                        Quyền lợi của thành viên VIP<br>
                        - Bị truy cập vào hệ thống ChiaSeNhac.vn mà không bị quảng cáo làm phiền
                        Giá tài khoản VIP 6 tháng là 60.000đ (khuyến mãi còn 50% còn 30.000đ)<br>
                        Bạn vui lòng nạn bằng ví Momo<br>

                    </p>
                    <div style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 16px; width: 65%;display: inline-block; float: left; padding-top: 20px;">
                        <span style="font-size: 18px;">- Nội Dung: <span style="font-weight: 700; color: red">CSN {{Auth::user()->username}}</span></span><br>
                        <span style="font-size: 18px;">- Số Momo: 0982179082 - tên: LE TUAN TRINH</span><br>
                        *Vui lòng vui lòng không gọi qua số điện thoại này, CSN sẽ hỗ trợ thắc mắc trong <a target="_blank" href="/user/{{Auth::user()->id}}?tab=message_csn">liên hệ</a>.<br>
                        Sau khi chuyển thành công, tài khoản của bạn cần chờ từ 1 đến 2 giờ trong thời gian làm việc sẽ được nâng cấp VIP. Nếu quá hạn thời gian mà tài khoản của bạn vẫn chưa lên VIP, vui lòng liên hệ qua thông tin bảng bên dưới để BQT kiểm tra và xử lý.
                    </div>
                    <img style="width: 30%; float: left;display: inline-block;" src="/imgs/qr-code-vip-csn.jpg"><br>
                </div>
                <div class="col-lg-7 upload-content" style="margin-left: auto; margin-right: auto; display: table;">
                    <form action="/chia-se-nhac-vip">
                        <label style="font-size: 16px" for="cat_id">Tài khoản bạn nạp: {{Auth::user()->username}}</label><br>
                        <label for="id_momo_request">Số Momo</label>
                        <input required style="width: 100%; margin-bottom: 5px;" class="form-control" type="text" id="id_momo_request" name="id_momo_request" placeholder="Nhập số Momo">
                        <label for="content_request">Nội dung đã nạp</label>
                        <input required style="width: 100%; margin-bottom: 5px;" class="form-control" type="text" id="content_request" name="content_request" placeholder="Nhập nội dung đã nạp">
                        <label for="time_request">Khoản thời gian đã nạp</label>
                        <input required style="width: 100%;margin-bottom: 10px;" class="form-control" type="datetime-local" id="time_request" name="time_request">
                        <div class="text-center col-12">
                            <button type="submit" id="btn-upload" class="btn btn-danger btn-upload">Gửi lên</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                @include('web.layouts.right_banner')
            </div>
        </div>
    </div>
@endsection

