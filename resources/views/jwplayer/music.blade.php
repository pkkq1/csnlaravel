
<?php
use App\Library\Helpers;
global $cat_id2info;
global $cat_url2info;

$titleMeta = 'Củ Lạc - Osad; Turn Hirn ~ Download Lossless, 500kbps, 320kbps ~ Cu Lac - Osad; Turn Hirn';
?>
@section('hidden_wapper', true)
@include('cache.def_main_cat')

@section('contentCSS')
@endsection
@extends('layouts.app')
@section('content')
    <div class="box_space"></div>
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Nghe nhạc</a></li>
                        <li class="breadcrumb-item"><a href="#">Playlist Nhạc Trẻ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đức Phúc</li>
                    </ol>
                </nav>
                <div class="d-flex align-items-center justify-content-between mb-3 box1">
                    <h1 class="title">{{$music->music_title}} - <span>{{$music->music_artist}}</span></h1>
                    <span class="d-flex align-items-center listen"><i class="material-icons">headset</i> {{number_format($music->music_listen)}} lượt nghe</span>
                </div>
                <div class="card mb-4 detail_lyric_1">
                    <img style="height: 424px; object-fit: cover;" class="card-img-top" src="/imgs/NGUYEN_BA_NGOC_ZING7207_1.jpg" alt="">
                    <div class="progress progress_1">
                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body bg-black">

                    </div>
                    <div class="d-table">
                        <div class="card-footer" style="display: table-row;">
                            <div class="name d-table-cell">
                                <a href="#" title="">1. Anh Đã Quen Với Cô Đơn (Single)</a>
                            </div>
                            <div class="author d-table-cell">
                                <a href="#" title="">JustaTee</a>
                            </div>
                            <div class="tool d-table-cell text-right">
                                <ul class="list-inline d-flex align-items-center justify-content-end">
                                    <li class="list-inline-item d-inline-flex align-items-center"><span class="d-inline-flex align-items-center"><i class="material-icons mr-2">headset</i> 1.689 lượt nghe</span></li>
                                    <li class="list-inline-item pl-4 pr-4">|</li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">playlist_add</i></a></li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer" style="display: table-row;">
                            <div class="name d-table-cell">
                                <a href="#" title="">2. Người Lạ Thân Quen</a>
                            </div>
                            <div class="author d-table-cell">
                                <a href="#" title="">Thanh Duy</a>
                            </div>
                            <div class="tool d-table-cell text-right">
                                <ul class="list-inline d-flex align-items-center justify-content-end">
                                    <li class="list-inline-item d-inline-flex align-items-center"><span class="d-inline-flex align-items-center"><i class="material-icons mr-2">headset</i> 168.098.123 lượt nghe</span></li>
                                    <li class="list-inline-item pl-4 pr-4">|</li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">playlist_add</i></a></li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                    <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-details">
                            <img src="{{Helpers::coverImg($music->cover_id)}}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">{{$music->music_title}}</h4>
                                <ul class="list-unstyled">
                                    <?php echo $music->music_artist ? '<li><span>Ca sĩ: </span><a href="#" style=" color: #212552; ">'.implode(',</a><a href="#" style=" color: #212552; ">', explode(';', $music->music_artist)).'</a></li>' : '' ?>
                                    <?php echo $music->music_composer ? '<li><span>Sáng tác: </span><a href="#" style=" color: #212552; ">'.$music->music_composer.'</a></li>' : '' ?>
                                    <?php echo $music->music_album ? '<li><span>Album: </span><a href="#" style=" color: #212552; ">'.$music->music_album.'</a></li>' : '' ?>
                                    <?php echo $music->music_year ? '<li><span>Năm phát hành: </span>'.$music->music_year.'</li>' : '' ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="title2">
                                Đóng góp: <span class="author"><a href="">{{$music->music_username}}</a></span>
                            </div>
                            <div>
                                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </div>
                        </div>
                        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-liric-tab" data-toggle="pill" href="#pills-liric" role="tab" aria-controls="pills-liric" aria-selected="true"><i class="material-icons">queue_music</i> Lyric</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-download-tab" data-toggle="pill" href="#pills-download" role="tab" aria-controls="pills-download" aria-selected="false"><i class="material-icons">file_download</i> Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-share-tab" data-toggle="pill" href="#pills-share" role="tab" aria-controls="pills-share" aria-selected="false"><i class="material-icons">share</i> Chia sẻ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-plus-tab" data-toggle="pill" href="#pills-plus" role="tab" aria-controls="pills-plus" aria-selected="false"><i class="material-icons">control_point</i> Thêm vào</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane show active" id="pills-liric" role="tabpanel" aria-labelledby="pills-liric-tab">
                                <ul class="nav nav-tabs sub_Tab" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tiếng Anh</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tiếng Việt</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Vietsub</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-lyric" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <article class="custom-css">
                                            <p>
                                                Produced by Rhymastic <br>
                                                © SpaceSpeakers 2017
                                            </p>

                                            <p>
                                                [Verse 1] <br>
                                                Xin những bối rối này cứ thế lên ngôi <br>
                                                Xin con tim rẽ lối tìm giây phút nghẹn lời <br>
                                                Cho thêm chơi vơi, để những ánh mắt đôi môi, <br>
                                                Chạm nhau mang theo gọi mời
                                            </p>

                                            <p>
                                                Xin cho ta tan vào những đắm đuối miên man <br>
                                                Khi em ghé ngang đời chợt mang sắc hương thiên đàng <br>
                                                Và cho những ấm áp lại đến lấp kín nhân gian <br>
                                                Ngày ta yên vui cùng nàng
                                            </p>

                                            <p>
                                                [Pre-Hook] <br>
                                                Nhẹ nhàng âu yếm giữa chốn mơ <br>
                                                Cùng tìm kiếm bao ý thơ <br>
                                                Để đắm say trong tiếng nhạc du dương <br>
                                                Hồn sa theo bước ta ngẩn ngơ <br>
                                                Dù ngàn kiếp ta vẫn chờ <br>
                                                Chỉ cần có phút giây này trao yêu thương
                                            </p>

                                            <p>
                                                [Hook] <br>
                                                Cuz baby it’s always you <br>
                                                It's always you <br>
                                                It's always you <br>
                                                It's always you...always you... <br>
                                                (x2)
                                            </p>

                                            <p>
                                                [Rap] <br>
                                                Ta như đi qua hết bao nhiêu mê say trên đời <br>
                                                Như yêu thêm cả nghìn kiếp khi ta một giây bên người <br>
                                                Vì chỉ cẩn một ánh nhìn mà em trao <br>
                                                Là tuổi xuân của ta như hóa được thành chiêm bao <br>
                                                Với mỗi sáng thức giấc nghe em bên ta vui cười <br>
                                                Cho đêm ta ngây ngất, ru tai êm qua đôi lời <br>
                                                Đầy ngọt ngào và trong veo, cùng hòa làm trăng sao <br>
                                                Dìu dắt đôi tim bên nhau đi theo bao yêu thương dâng trào
                                            </p>

                                            <p>
                                                Và ta xin đánh đổi một rừng tia nắng để lấy chút hơi ấm của em <br>
                                                Xin đổi đi hết tiền bạc danh tiếng, những thứ hàng trăm người thèm <br>
                                                Bởi cả ngàn điều phù phiếm đâu bằng một thoáng môi mềm <br>
                                                Khi đời này sẽ mang đầy nuối tiếc nếu không có nàng ở bên <br>
                                                Nhìn em ta mới thêm yêu từng khoảnh khắc <br>
                                                Mang hết tương tư giấu vào theo từng bản nhạc <br>
                                                Để mai này tình nở như muôn hoa không tàn sắc <br>
                                                Lưu giữ mãi nơi này một câu chuyện ngàn năm
                                            </p>
                                        </article>
                                        <script type="text/javascript">
                                            $('.custom-css').showMore({
                                                minheight: 300,
                                                buttontxtmore: 'show me more',
                                                buttontxtless: 'show me less',
                                                buttoncss: 'my-button-css',
                                                animationspeed: 250
                                            });
                                        </script>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pills-download" role="tabpanel" aria-labelledby="pills-download-tab">
                                <div class="card card2">
                                    <div class="card-header">
                                        <h4 class="card-title">Vui lòng click chọn một trong các liên kết ở bên dưới để download bài hát về máy:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <ul class="list-unstyled">
                                                    <li><a href="#" title=""><i class="material-icons">file_download</i> Download 1: <span class="c1">MP3 128kbps</span> 4.01 MB</a></li>
                                                    <li><a href="#" title=""><i class="material-icons">file_download</i> Download 2: <span class="c2">MP3 320kbps</span> 9.99 MB</a></li>
                                                    <li><a href="#" title=""><i class="material-icons">file_download</i> Download 3: <span class="c3">MP3 320kbps</span> 12.28 MB</a></li>
                                                    <li><a href="#" title=""><i class="material-icons">file_download</i> Download 4: <span class="c4">FLAC Lossless</span> 27.12 MB</a></li>
                                                    <li><a href="#" title=""><i class="material-icons">file_download</i> Mobile Download: M4A 32kbps 1.18 MB</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="accordion" id="accordion">
                                            <div class="card flex-column-reverse">
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body p-0">
                                                        <img class="card-img-top" src="http://data5.chiasenhac.com/data/spectrum/1898/1897826.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-header border-0" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Xem quang phổ (Spectrum) tại đây:
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </button>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card flex-column-reverse">
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body p-0">
                                                        <div class="list-group">
                                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">Đối với nhu cầu bình thường:</h5>
                                                                </div>
                                                                <p class="mb-1">bạn nên chọn Link Download 1, là định dạng âm thanh MP3 với chất lượng 128kbps được nhiều thiết bị nghe nhạc hỗ trợ.</p>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">Đối với nhu cầu thưởng thức nhạc cao hơn:</h5>
                                                                </div>
                                                                <p class="mb-1">bạn nên chọn Link Download 2, là định dạng âm thanh MP3 với chất lượng 320kbps có dung lượng lớn hơn nhưng nghe hay và chi tiết hơn định dạng MP3 128kbps.</p>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">Đối với nhu cầu thưởng thức nhạc cao cấp:</h5>
                                                                </div>
                                                                <p class="mb-1">bạn nên chọn Link Download 3, là định dạng âm thanh M4A với chất lượng gần 500kbps có dung lượng lớn hơn nhưng nghe hay và chi tiết hơn định dạng MP3 320kbps.</p>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">Đối với nhu cầu thưởng thức nhạc chuyên nghiệp:</h5>
                                                                </div>
                                                                <p class="mb-1">bạn nên chọn Link Download 4, là định dạng âm thanh Lossless với chất lượng gốc giống như chất lượng âm thanh bạn nghe từ đĩa CD. Tuy nhiên, để nghe được định dạng này có thể thiết bị nghe nhạc của bạn cần phải cài đặt thêm plugin/codec hỗ trợ decode tập tin âm thanh FLAC.</p>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">Đối với nhu cầu lưu trữ trên các thiết bị có dung lượng khiêm tốn:</h5>
                                                                </div>
                                                                <p class="mb-1">(ví dụ điện thoại di động...), bạn nên chọn Link Mobile Download, là định dạng âm thanh M4A với chất lượng 32kbps có dung lượng cực nhỏ nhưng vẫn nghe hay và rõ gần bằng MP3 128kbps.</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-header border-0" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Hướng dẫn download nhạc:
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </button>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pills-share" role="tabpanel" aria-labelledby="pills-share-tab">
                                <div class="form-group">
                                    <ul class="list-inline mb-1">
                                        <li class="list-inline-item"><a class="zalo-share-button" href="#" title=""></a></li>
                                        <li class="list-inline-item"><a class="fb-share-link" href="#" title=""></a></li>
                                    </ul>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="https://mp3.zing.vn/bai-hat/Nguoi-Am-Phu-OSAD-VRT/ZW9BB9F7.html">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <label for="exampleInputEmail1" class="m-0">Mã nhúng</label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check m-0">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Mã kiểu cũ
                                                </label>
                                            </div>
                                            <div class="form-check m-0 ml-3">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Tự động play
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value=""><iframe width="560" height="315" src="https://www.youtube.com/embed/bl03TdREiSo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kích thước</label>
                                    <select class="form-controls">
                                        <option>640x180</option>
                                    </select>
                                </div>
                            </div>
                            <div class="tab-pane" id="pills-plus" role="tabpanel" aria-labelledby="pills-plus-tab">
                                <div class="card mb-0 card3">
                                    <div class="card-header mb-0">
                                        <h4 class="card-title">Thêm bài hát này vào danh sách Playlist</h4>
                                    </div>
                                </div>
                                <div class="card mb-2 playlist_1 border-0">
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">Bài hát yêu thích (1)</a><time datetime="2011-01-12">26/06/2015</time></li>
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">Cũng Bởi Vì Phê (2)</a><time datetime="2011-01-12">10 giây trước</time></li>
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">8x & 9x (1)</a><time datetime="2011-01-12">chiều hôm qua</time></li>
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">hiproduction (7)</a><time datetime="2011-01-12">24/02/2008</time></li>
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">Bài hát yêu thích (1)</a><time datetime="2011-01-12">26/06/2015</time></li>
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">Cũng Bởi Vì Phê (2)</a><time datetime="2011-01-12">10 giây trước</time></li>
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">8x & 9x (1)</a><time datetime="2011-01-12">chiều hôm qua</time></li>
                                            <li class="d-flex align-items-center justify-content-between"><a href="#" title="">hiproduction (7)</a><time datetime="2011-01-12">24/02/2008</time></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="input-group mb-3 create_playlist">
                                    <input type="text" class="form-control" placeholder="Nhập tên playlist mới cần tạo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Tạo Playlist mới</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_space"></div>
                <div class="box_header d-flex justify-content-between align-items-end">
                    <h5 class="title m-0">Video liên quan</h5>
                    <a class="link_more" href="#" title="">Xem tất cả</a>
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
                <div class="box_header d-flex justify-content-between align-items-end">
                    <h5 class="title m-0">Album liên quan</h5>
                    <a class="link_more" href="#" title="">Xem tất cả</a>
                </div>
                <div class="row row10px">
                    <div class="col">
                        <div class="card card1">
                            <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/6/6/4/566428912603103bed8bc5c8564954ce.jpg);">
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
                            <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/1/7/9/3/1793d21fdc993b010d57aba03ecb1c5b.jpg);">
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
                            <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/8/d/2/a/8d2ab31e354fdf011f6f4faf15c16e88.jpg);">
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
                            <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/4/2/9/1/4291e830ee94219e3f88318fbff054c6.jpg);">
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
                            <div class="card-header" style="background-image: url(https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/e/3/b/5e3b67ba16bbe373510f3ed76b7e08b3.jpg);">
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
                    <h5 class="title m-0">Bình luận của bạn</h5>
                </div>
                <form class="box_form_comment" action="lyric_detail_submit" method="get" accept-charset="utf-8">
                    <div class="form-group emoji-picker-container">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Viết bình luận của bạn tại đây." data-emojiable="true"></textarea>
                    </div>
                </form>
                <div class="list_comment">
                    <div class="list_header d-flex align-items-center">
                        <i class="material-icons">chat_bubble</i> 100 comment
                    </div>
                    <div class="list_body">
                        <ul class="list-unstyled list_comments">
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/27332304_970074423141864_4761407782621098029_n.jpg?_nc_cat=0&oh=e755f9647c591f0af38099c0acf34ddf&oe=5B667750" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">Fuck love :))) right</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/c168.361.837.837/s320x320/30652503_2289640347981676_3727735582307123200_o.jpg?_nc_cat=0&oh=64310c1967b3f23bdae442f8a4ca3d2c&oe=5B29CF27" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">love the beat</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/c0.0.320.320/p320x320/29791439_1262163767249493_4742152191278579712_n.jpg?_nc_cat=0&oh=ad55d81ca650475807967267f6e1de6f&oe=5B622789" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p320x320/12705268_768430996621751_7745070367143664628_n.jpg?_nc_cat=0&oh=9ac68cedba7a32b604ddf4a2643ff4a8&oe=5B60A247" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                    <div class="media">
                                        <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p320x320/12705268_768430996621751_7745070367143664628_n.jpg?_nc_cat=0&oh=9ac68cedba7a32b604ddf4a2643ff4a8&oe=5B60A247" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                                <time datetime="2011-01-12">3 ngày trước</time>
                                            </div>
                                            <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p320x320/12705268_768430996621751_7745070367143664628_n.jpg?_nc_cat=0&oh=9ac68cedba7a32b604ddf4a2643ff4a8&oe=5B60A247" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                                <time datetime="2011-01-12">3 ngày trước</time>
                                            </div>
                                            <p class="media-text">"Vài phút trước tôi yêu cầu quân đội Mỹ tấn công những địa điểm liên quan đến vụ tấn công hóa học tại Syria ngày 8/4", Tổng thống Trump nói trong bài phát biểu lúc 9h tối giờ Washington DC (8h sáng nay giờ HN).</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/c0.0.320.320/p320x320/29791439_1262163767249493_4742152191278579712_n.jpg?_nc_cat=0&oh=ad55d81ca650475807967267f6e1de6f&oe=5B622789" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/27332304_970074423141864_4761407782621098029_n.jpg?_nc_cat=0&oh=e755f9647c591f0af38099c0acf34ddf&oe=5B667750" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">Fuck love :))) right</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/c168.361.837.837/s320x320/30652503_2289640347981676_3727735582307123200_o.jpg?_nc_cat=0&oh=64310c1967b3f23bdae442f8a4ca3d2c&oe=5B29CF27" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">love the beat</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/c0.0.320.320/p320x320/29791439_1262163767249493_4742152191278579712_n.jpg?_nc_cat=0&oh=ad55d81ca650475807967267f6e1de6f&oe=5B622789" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p320x320/12705268_768430996621751_7745070367143664628_n.jpg?_nc_cat=0&oh=9ac68cedba7a32b604ddf4a2643ff4a8&oe=5B60A247" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                    <div class="media">
                                        <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p320x320/12705268_768430996621751_7745070367143664628_n.jpg?_nc_cat=0&oh=9ac68cedba7a32b604ddf4a2643ff4a8&oe=5B60A247" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                                <time datetime="2011-01-12">3 ngày trước</time>
                                            </div>
                                            <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p320x320/12705268_768430996621751_7745070367143664628_n.jpg?_nc_cat=0&oh=9ac68cedba7a32b604ddf4a2643ff4a8&oe=5B60A247" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                                <time datetime="2011-01-12">3 ngày trước</time>
                                            </div>
                                            <p class="media-text">"Vài phút trước tôi yêu cầu quân đội Mỹ tấn công những địa điểm liên quan đến vụ tấn công hóa học tại Syria ngày 8/4", Tổng thống Trump nói trong bài phát biểu lúc 9h tối giờ Washington DC (8h sáng nay giờ HN).</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/c0.0.320.320/p320x320/29791439_1262163767249493_4742152191278579712_n.jpg?_nc_cat=0&oh=ad55d81ca650475807967267f6e1de6f&oe=5B622789" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="">Dũng Đào</a> at <span>0:02</span></h5>
                                        <time datetime="2011-01-12">3 ngày trước</time>
                                    </div>
                                    <p class="media-text">ngay những nốt nhạc đầu tiên vang lên tau đã biết đây sẽ là nhạc chuông của tau</p>
                                </div>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            $('.list_comments').showMore({
                                minheight: 512,
                                buttontxtmore: 'Xem thêm bình luận',
                                buttontxtless: '',
                                buttoncss: 'list_comments_css',
                                animationspeed: 250
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 cardads">
                    <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
                </div>
                <div class="box_space"></div>
                <div class="box_header d-flex justify-content-between align-items-end">
                    <h5 class="title m-0">MV của bài hát</h5>
                </div>
                <ul class="list-unstyled mv_sing">
                    <li class="media">
                        <div class="media-left align-self-center mr-2">
                            <a href="#" title="">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/9/2/9232c4c99c30f665e9326c8bbbcebc0e_1519987981.jpg" alt="">
                                <i class="material-icons">play_circle_outline</i>
                            </a>
                        </div>
                        <div class="media-body align-self-center">
                            <h5 class="mt-0 media-title"><a href="#" title="">chạm khẽ anh một chút thôi</a></h5>
                            <div class="author"><a href="#" title="">Noo Phước Thịnh</a></div>
                        </div>
                    </li>
                </ul>
                <div class="box_space"></div>
                <div class="box_header d-flex justify-content-between align-items-end">
                    <h5 class="title m-0">Gợi ý</h5>
                    <div class="form-group form-check mb-0 autoplay">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label d-flex align-items-center" for="exampleCheck1">
                            <span class="txt">Autoplay</span>
                            <span class="switch">
							<span class="switch-inner"></span>
						</span>
                        </label>
                    </div>
                </div>
                <ul class="list-unstyled list_music">
                    <li class="media align-items-stretch no_cover">
                        <div class="media-left align-items-stretch mr-2">
                            <a href="#" title="">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/3/0/7/5307b38e7a651a805b56674e70d124ef.jpg" alt="">
                                <i class="material-icons">play_circle_outline</i>
                                <span class="cover">JT</span>
                            </a>
                        </div>
                        <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                            <div>
                                <h5 class="media-title mt-0 mb-0"><a href="#" title="">sống xa anh chẳng dễ dàng</a></h5>
                                <div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1">Lossless</small>
                                <div class="media-right">
                                    <small class="time_stt">75.837.763</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1">Lossless</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">92.176.986</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c2">320kbps</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">75.837.763</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c2">320kbps</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">92.176.986</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1">Lossless</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">75.837.763</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1">Lossless</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">92.176.986</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1">Lossless</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">75.837.763</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1">Lossless</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">92.176.986</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1">Lossless</small>
                                <div class="media-right align-self-end">
                                    <small class="time_stt">75.837.763</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="box_space"></div>
                <div class="card mb-3 cardads">
                    <a class="card-img-top" href="#" title=""><img class="" src="https://magiamgia.com/wp-content/uploads/2015/08/lazada-banner-con-mua-deals_336x280.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
@endsection
