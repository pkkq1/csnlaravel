<?php
use App\Library\Helpers;
global $memberVip;
$titleMeta = 'Đăng ký VIP Chia Sẻ Nhạc';
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics">
    <meta name="description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL')}}/imgs/cover_bxh.png" />
    <meta name="title" content="{{$titleMeta}}" />
    <meta property="og:image" content="{{env('APP_URL')}}/imgs/cover_bxh.png" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$titleMeta}}" />
    <meta property="og:description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless." />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@section('no_ads', true)
@extends('mobile.layouts.app')
@section('content')
    <div class="header">
    @include('mobile.layouts.header_top')
    <!-- swiper1-->
    </div>
    <main class="main">
        <div class="sidebar_top">
            <!-- swiper2-->
            <div class="swiper-container swiper2">
                <div class="col-lg-12">
                    <p style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 22px;">
                        <b><u>HƯỚNG DẪN NÂNG CẤP THÀNH VIÊN VIP:</u></b>
                    </p>

                    <p style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 16px;">
                        Quyền lợi của thành viên VIP:<br>
                        - Không bị các quảng cáo làm phiền khi bạn truy cập vào hệ thống website và app Chia Sẻ Nhạc.<br>
                        - Được nghe thoải mái các bài hát trên hệ thống với chất lượng cao.<br>
                        - Được tải thoải mái các bài hát trên hệ thống với chất lượng cao nhất.<br>
                        Hiện tại, mua tài khoản VIP 6 tháng trên hệ thống Chia Sẻ Nhạc đang được khuyến mãi 50%, giá gốc là <strike>60.000đ</strike>, giảm còn 30.000đ.
                        <br>
                    </p>
                    @if(!$memberVip)
                        <div style="font-family: 'SFProDisplay-Regular'; color: #333; font-size: 16px; width: 100%;display: inline-block; padding-top: 20px;">
                            <span style="font-size: 18px;">Hiện tại, chúng tôi chỉ hỗ trợ duy nhất 1 hình thức thanh toán bằng cách dùng app MOMO chuyển tiền.</span><br>
                            <span style="font-size: 18px;">Bạn vui lòng dùng app Momo chuyển tới số: <b>0389524211</b></span><br>
                            <span style="font-size: 18px;">- Tên chủ tài khoản: TON NU THI THUAN</span><br>
                            <span style="font-size: 18px;">- Lời chúc (Tin nhắn): </span><span style="font-size: 18px; font-weight: 700; color: red">CSN &nbsp; {{Auth::user()->user_id}}</span><br>
                            <span style="font-size: 18px;">- Số tiền: 30.000 VNĐ</span><br>
                            <img style="width: 100%; display: inline-block;" src="/imgs/qr-code-vip-csn.jpg">
                            * Nếu bạn không sử dụng app Momo, bạn có thể nhờ bất kỳ người nào có sử dụng app Momo để chuyển tiền mua VIP giúp bạn, chỉ cần chuyển tiền theo đúng số tài khoản và nội dung lời chúc như trên.<br><br>
                            * Vui lòng vui lòng không gọi qua số điện thoại này, CSN sẽ chỉ hỗ trợ thắc mắc trong khung <a target="_blank" href="/user/{{Auth::user()->id}}?tab=message_csn">liên hệ</a> bên dưới.<br>
                            <br />
                            Sau khi chuyển thành công, tài khoản của bạn cần chờ từ 5 phút đến 1 tiếng để được hệ thống tự động nâng cấp VIP. Nếu bạn nạp sai cú pháp hoặc sai số tiền thì tiền sẽ được hoàn lại vào ví Momo của bạn trong vòng 1-2 ngày. Nếu bạn nạp đúng quy định nhưng quá hạn thời gian mà tài khoản của bạn vẫn chưa lên VIP, vui lòng gửi thông tin liên hệ qua bảng bên dưới để BQT kiểm tra và xử lý.
                            <br />&nbsp;
                        </div>
                    @else
                        <?php
                        $vipInfo = Auth::user()->levelInfo()->first();
                        ?>
                        <span style="font-weight: 700; color: red; font-size: 20px;">Hiện tại bạn đang là thành viên VIP: {{$vipInfo->level_name}}, ngày hết hạn là: {{date('d/m/Y', Auth::user()->vip_time_exprited)}}</span>

                    @endif

                    <div style="clear: both"></div>
                </div>
                <div class="col-lg-12" style="margin-top: 20px; padding-left: 0px">
                    {{--@if(!$memberVip)--}}
                        {{--<div class="col-md-5" style="float: left;">--}}
                            {{--<img style="width: 104.5%;" src="/imgs/send-30k-to-momo.jpg">--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    <div class="col-md-7" style="@if($memberVip) margin-left: auto; margin-right: auto; @else float: left; @endif">
                        <div class="upload-content" style="width: 100%; float: right;">
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
                                <br/>
                            <form action="/chia-se-nhac-vip" method="post">
                                <b><u>LIÊN HỆ HỖ TRỢ:</u></b><br /><br />
                                <label style="font-size: 16px" for="cat_id">Mã thành viên của bạn: {{Auth::user()->user_id}}</label><br>
                                <label style="font-weight: 700;" for="id_phone_request">Số điện thoại bạn nạp tiền:</label>
                                <input required style="width: 100%; margin-bottom: 10px;" class="form-control" type="number" id="id_phone_request" name="id_phone_request" min="6" maxlength="11" value="{{old('id_phone_request')}}" placeholder="Nhập số điện thoại">
                                <label style="font-weight: 700;"  for="amount_request">Số tiền đã gửi:</label>
                                <input required style="width: 100%; margin-bottom: 10px;" class="form-control" type="number" min="6" maxlength="10" id="amount_request" name="amount_request" value="{{old('amount_request')}}" placeholder="Nhập số tiền đã gửi (vnđ)">
                                <label style="font-weight: 700;"  for="note_request">Nội dung lời chúc đã gửi:</label>
                                <input required style="width: 100%; margin-bottom: 10px;" class="form-control" type="text" id="note_request" maxlength="255" name="note_request" value="{{old('note_request')}}" placeholder="Nhập lời chúc đã gửi">
                                <label style="font-weight: 700;"  for="time_request">Khoản thời gian đã nạp:</label>
                                <input required style="width: 100%;margin-bottom: 10px;" class="form-control" type="datetime-local" id="time_request" value="{{old('time_request')}}" name="time_request">
                                <label style="font-weight: 700;"  for="message_request">Nội dung cần hỗ trợ:</label>
                                <textarea required  style="width: 100%; margin-bottom: 5px;" class="form-control" name="message_request" maxlength="1000" value="{{old('message_request')}}" rows="3" placeholder="Nhập ý kiến thắc mắc của bạn" ></textarea>
                                <div class="text-center col-12">
                                    <button type="submit" id="btn-upload" class="btn btn-danger btn-upload">Gửi Hỗ Trợ</button>
                                </div>
                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <style>
        .main {
            margin-top: 60px;
        }
    </style>
    <script>
        @if(!$memberVip)
        setTimeout(function(){
            $.ajax({
                url: '/user/refresh_register_vip',
                type: "POST",
                dataType: "json",
                data: {},
                async: false,
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    if(response) {
                        location.reload();
                    }
                }
            });
        }, 60000);
        @endif
    </script>
@endsection
