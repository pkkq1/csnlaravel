
<?php
use App\Library\Helpers;
global $cat_id2info;
global $cat_url2info;

global $album_new;
global $music_new_uploads;
global $album_rows_3_0;


$titleMeta = 'Củ Lạc - Osad; Turn Hirn ~ Download Lossless, 500kbps, 320kbps ~ Cu Lac - Osad; Turn Hirn';
?>
@include('cache.def_home_cat_3_0')
@include('cache.def_home_album')

@section('hidden_wapper', true)
@include('cache.def_main_cat')

@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/csn-jwplayer.css">
@endsection
@extends('layouts.app')
@section('content')
    <div class="box_space"></div>
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{$cat_id2info[$music->cat_id][0]['cat_title']}}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{$cat_id2info[$music->cat_id][$music->cat_level]['cat_title']}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $music->music_artist)).'</a>' ?></li>
                    </ol>
                </nav>
                <div class="d-flex align-items-center justify-content-between mb-3 box1">
                    <h1 class="title">{{$music->music_title}} - <span>{{$music->music_artist}}</span></h1>
                    <span class="d-flex align-items-center listen"><i class="material-icons">headset</i> {{number_format($music->music_listen)}} lượt nghe</span>
                </div>
                <div class="card mb-4 detail_lyric_1">
                    <div id="csnplayer" style="position:relative; z-index: 99999; width:100%;"> </div>
                    <div class="music_recommendation">
                        <div class="d-table">
                            <?php
                            $catMusic = Helpers::getRandLimitArr($album_rows_3_0, 100);
                            array_map(function ($i, $item) use($music) {
                            $url = SUB_BXH_MUSIC.'/'.$item['music_title_url'].'.html';
                            ?>
                            <div id="music-listen-{{$item['music_id']}}" class="card-footer{{($music->music_id == $item['music_id'] ? ' listen' : '')}}" style="display: table-row;">
                                <div class="name d-table-cell">
                                    <a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{++$i . '. ' . $item['music_title']}}</a>
                                </div>
                                <div class="author d-table-cell">
                                    <?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?>
                                </div>
                                <div class="tool d-table-cell text-right">
                                    <ul class="list-inline d-flex align-items-center justify-content-end">
                                        <li class="list-inline-item"><a href="{{$url}}" title="nghe riêng nhạc {{$item['music_title']}}"><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a href="#" title=""><i class="material-icons">playlist_add</i></a></li>
                                        <li class="list-inline-item"><a href="{{MUSIC_PATH.$item['music_filename']}}" title="download {{$item['music_title']}}"><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="{{Helpers::fbShareLink($url)}}" title="chia sẻ {{$item['music_title']}}"><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php
                            },array_keys($catMusic), $catMusic);
                            ?>
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
                                <div class="fb-like" data-href="{{url()->current()}}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
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
                                <a class="nav-link add_playlist" onclick="loadPlayList()" id="pills-plus-tab" data-toggle="pill" href="#pills-plus" role="tab" aria-controls="pills-plus" aria-selected="false"><i class="material-icons">control_point</i> Thêm vào</a>
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
                                        <article>
                                            {{$music->music_lyric}}
                                        </article>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <article>
                                            {{$music->music_lyric}}
                                        </article>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <article>
                                            {{$music->music_lyric}}
                                        </article>
                                    </div>
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
                                        <li class="list-inline-item"><a class="zalo-share-button" href="{{url()->current()}}" title="{{$music->music_title}}"></a></li>
                                        <li class="list-inline-item"><a class="fb-share-link" href="{{url()->current()}}" title="{{$music->music_title}}"></a></li>
                                        <li class="list-inline-item"><a class="messenger-share-link" href="{{url()->current()}}" title="{{$music->music_title}}"></a></li>
                                    </ul>
                                    <input type="email" class="form-control" id="share_link" aria-describedby="emailHelp" placeholder="" value="{{url()->current()}}">
                                </div>
                                <div class="form-group" id="embed">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <label for="exampleInputEmail1" class="m-0">Mã nhúng</label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check m-0">
                                                <input class="form-check-input" type="checkbox" value="1" id="old_embed">
                                                <label class="form-check-label" for="old_embed">
                                                    Mã kiểu cũ
                                                </label>
                                            </div>
                                            <div class="form-check m-0 ml-3">
                                                <input class="form-check-input" type="checkbox" value="1" id="auto_play" checked>
                                                <label class="form-check-label" for="auto_play">
                                                    Tự động play
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="embed_textarea" rows="3" value=""><iframe src="{{env('APP_URL').'/embed/mp3/'.$music->music_id}}?auto=true"  scrolling="no" width="640" height="180" frameborder="0" allowfullscreen="true" allow="encrypted-media" allowfullscreen></iframe></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="size_embed">Kích thước</label>
                                    <select class="form-controls" id="size_embed">
                                        <option selected value='width="640" height="180"'>640x180</option>
                                        <option value='width="100%"'>full screen</option>
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
                                    <div class="card-body playlist-csn">
                                        <ul class="list-unstyled mb-0">
                                        </ul>
                                    </div>
                                </div>
                                <div class="input-group mb-3 create_playlist">
                                    <input type="text" class="form-control text-create-playlist" placeholder="Nhập tên playlist mới cần tạo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary " onclick="btnCreatePlaylist()" type="button">Tạo Playlist mới</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_space"></div>
                <div class="box_header d-flex justify-content-between align-items-end">
                    <h5 class="title m-0">Bài hát liên quan</h5>
                    <a class="link_more" href="/album.html" title="Xem tất cả">Xem tất cả</a>
                </div>
                <div class="row row10px">
                    <?php
                    $newMusic = Helpers::getRandLimitArr($music_new_uploads, LYRIC_DETAIL_NEW_MUSIC);
                    array_map(function ($item) {
                    ?>
                        <div class="col">
                            <div class="card card1">
                                <div class="card-header" style="background-image: url({{Helpers::coverImg($item['cover_id'])}});">
                                    <a href="{{Helpers::listen_url($item)}}" title="{{$item['music_title']}}">
                                        <span class="icon-play"></span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                                    <p class="card-text"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }, $newMusic)
                    ?>
                </div>
                <div class="box_header d-flex justify-content-between align-items-end">
                    <h5 class="title m-0">Album liên quan</h5>
                    <a class="link_more" href="/album.html" title="Xem tất cả">Xem tất cả</a>
                </div>
                <div class="row row10px">
                    <?php
                    $albumNew = Helpers::getRandLimitArr($album_new, LYRIC_DETAIL_NEW_ALBUM);
                    array_map(function ($item) {
                    ?>
                    <div class="col">
                        <div class="card card1">
                            <div class="card-header" style="background-image: url({{Helpers::coverImg($item['cover_id'])}});">
                                <a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">
                                    <span class="icon-play"></span>
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="{{SUB_ALLBUM.'/'.$item['music_title_url'].'.html'}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                                <p class="card-text"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }, $albumNew);
                    ?>
                </div>
                <div class="box_header d-flex justify-content-between align-items-end" id="post_comment">
                    <h5 class="title m-0">Bình luận của bạn</h5>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>Thành công!</strong> {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> {{ $message }}
                    </div>
                @endif
                <form class="box_form_comment form-comment-0">
                    <div class="form-group emoji-picker-container">
                        <textarea class="form-control comment" name="comment" rows="3" placeholder="Viết bình luận của bạn tại đây." data-emojiable="true"></textarea>
                        <input type="hidden" class="music_id" name="music_id" value="{{ $music->music_id }}">
                        <button id="btn_cloud_up" onclick="postComment(0)"  class="btn my-2 my-sm-0 waves-effect waves-light btn-upload" style="float: right; min-width: 75px;">Đăng Bình Luận</button>
                    </div>
                </form>
                <div class="list_comment">
                    <div class="list_header d-flex align-items-center music_comment">
                        <i class="material-icons">chat_bubble</i> <span>{{number_format($music->music_comment)}}</span> &nbsp;comment
                    </div>
                    <div class="list_body">

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
                        <input type="checkbox" class="form-check-input check_auto_play" id="exampleCheck1" checked>
                        <label class="form-check-label d-flex align-items-center" for="exampleCheck1">
                            <span class="txt">Autoplay</span>
                            <span class="switch">
							<span class="switch-inner"></span>
						</span>
                        </label>
                    </div>
                </div>
                <ul class="list-unstyled list_music">
                    <?php
                    $catMusic = Helpers::getRandLimitArr($album_rows_3_0, LIMIT_HOME_CAT_MUSIC);
                    array_map(function ($item) {
                        $url = Helpers::listen_url($item);
                    ?>
                    <li class="media align-items-stretch">
                        <div class="media-left align-items-stretch mr-2">
                            <a href="{{$url}}" title="{{$item['music_title']}}">
                                <img src="{{Helpers::coverImg($item['cover_id'])}}" alt="">
                                <i class="material-icons">play_circle_outline</i>
                                <span class="cover"></span>
                            </a>
                        </div>
                        <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                            <div>
                                <h5 class="media-title mt-0 mb-0"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                                <div class="author"><?php echo '<a href="#">'.implode(',</a><a href="#">', explode(';', $item['music_artist'])).'</a>' ?></div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <small class="type_music c1"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                                <div class="media-right">
                                    <small class="time_stt">{{number_format($item['music_listen'])}}</small>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a download href="{{MUSIC_PATH.$item['music_filename']}}" title="download {{$item['music_title']}}"><i class="material-icons">file_download</i></a></li>
                                        <li class="list-inline-item"><a href="{{$url}}" title="nghe riêng {{$item['music_title']}}"><i class="material-icons">headset</i></a></li>
                                        <li class="list-inline-item"><a target="_blank" href="{{Helpers::fbShareLink($url)}}" title="share {{$item['music_title']}}"><i class="material-icons">share</i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                    }, $catMusic)
                    ?>

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
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
            </div>

        </div>
    </div>

    <script src="/assets/jwplayer-7.12.0/jwplayer.js"></script>
    <script>
        var musicId = '<?php echo $music->music_id ?>';
        //////////////////////////
        ////JW Player//////////
        ////////////////////////

        var vtop = document.getElementById("music-listen-1870418").offsetTop;
        $('.music_recommendation').animate({scrollTop: vtop - 50}, 'slow');
        jwplayer.key="dWwDdbLI0ul1clbtlw+4/UHPxlYmLoE9Ii9QEw==";
        var player = jwplayer('csnplayer');
        var firstPlayer = true;

        player.setup({
            width: '100%',
            height: '110',
            stretching: 'fill',
            sources: [
                {"file":"<?php echo MUSIC_PATH.$music->music_filename ?>","label":"128K"},
                {"file":"<?php echo MUSIC_PATH.$music->music_filename ?>","label":"320K"},
                {"file":"<?php echo MUSIC_PATH.$music->music_filename ?>","label":"420K"},
                ],
            title:'<?php echo $music->music_title ?>',
            skin: {
                name: 'nhac'
            },
            timeSliderAbove: true,
            autostart: true,
            plugins: {
                '/js/nhac-csn.js': {
                    duration: 20,
                    msisdn: '',
                    package_id: 0,
                    album_id : '0',
                    content_type: 'song',
                    utm_source: '',
                    utm_medium: '',
                    utm_term: '',
                    utm_content: '',
                    utm_campaign: '',
                    device_id: '',
                    channel: 'WEB',
                    url_referer: '',
                    action_type: 'play_song',
                    player_type: 'NotDRM',
                    service_id: 0,
                    source_rec: 'rand',
                    listen_state: 'online',
                    other_info: '',
                    expired_time: 0,
                    version: '1.0'
                }
            }
        });
        var device_type = 'desktop';
        var listPlayed =Array();
        var logPlayAudioFlag = false;
        var firstPause = false;

        var embed = 'false';
        var userStatus = 1;
        jwplayer().onBeforePlay(function() {
            //logPlayAudioFlag = true;
            //console.log('set flag again|'+logPlayAudioFlag);
        });
        jwplayer().onQualityLevels(function(callback){
            updateQuality(callback);
            if(sessionStorage.getItem("auto_next") == 'true') {
                $('.check_auto_play').prop('checked', false).change();
            }
        });
        jwplayer().onQualityChange(function(callback){
            updateQuality(callback);
        })
        function onPlayerAutoNextOn()
        {
            sessionStorage.setItem("auto_next", false);
            $('.check_auto_play').prop('checked', true).change();
        }
        function onPlayerAutoNextOff()
        {
            sessionStorage.setItem("auto_next", true);
            $('.check_auto_play').prop('checked', false).change();
        }
        $('.check_auto_play').on('change', function(){
            if($(this).is(':checked')){
                logPlayAudioFlag = false;
                sessionStorage.setItem("auto_next", false);
                setAutoNext(true);
            }else{
                logPlayAudioFlag = true;
                sessionStorage.setItem("auto_next", true);
                setAutoNext(false);
            }
        })
        function onPlayerAutoNext()
        {
            AutoPlay();
        }
        function onPlayerAutoBack()
        {
            console.log('back');
        }
        function AutoPlay(){
            console.log('next');
        }
        function autoRepeat(T){
            if(T) {
                jwplayer().setConfig({
                    repeat: true
                });
                sessionStorage.setItem("auto_repeat", true);
            }else{
                jwplayer().setConfig({
                    repeat: false
                });
                sessionStorage.setItem("auto_repeat", false);
            }
        }
        function autoRandom(F){
            if(F) {
                console.log('next random');
                sessionStorage.setItem("auto_random", true);
            }else{
                sessionStorage.setItem("auto_random", false);
            }
        }

        jwplayer().onBeforeComplete(function() {
            if(logPlayAudioFlag == false && typeof AutoPlay=='function'){
                AutoPlay();
            }
        });
        $('#old_embed').click(function(){
            embedString()
        });
        $('#auto_play').click(function(){
            embedString()
        });
        $('#size_embed').change(function(){
            embedString()
        });
        function updateQuality(callback) {
            var curQual = jwplayer('csnplayer').getCurrentQuality();
            if(callback['levels'].length == 2) {
                if(!$('.jw-icon-hd').hasClass('stringQ')) {
                    $('.jw-icon-hd').html(callback['levels'][curQual]['label']);
                }
                $('.jw-icon-hd').addClass('stringQ');
                $('.jw-icon-hd').removeClass('jw-icon-hd');
                $('.stringQ').html(callback['levels'][curQual]['label']);
            }else{
                if(!$('.jw-icon-hd').hasClass('stringQ')) {
                    $('.jw-icon-hd').append('<span>' + callback['levels'][curQual]['label'] + '</span>');
                }
                $('.jw-icon-hd').addClass('stringQ');
                $('.jw-icon-hd').removeClass('jw-icon-hd');
                $('.stringQ').find('span').html(callback['levels'][curQual]['label']);
            }
        }
        function embedString() {
            var width_height = 'width="640" height="180"';
            var auto = '?auto=true';
            if(!$('#auto_play').is(':checked')){
                auto = '';
            }
            if($('#size_embed').val()){
                width_height = $('#size_embed').val();
            }
            if($('#old_embed').is(':checked')){
                $('#embed_textarea').text('<object ' + width_height + '><param name="movie" value="<?php echo env('APP_URL') . '/embed/mp3/' . $music->music_id; ?>' + auto + '" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="allowfullscreen" value="true"/><param name="allowscriptaccess" value="always"/><embed allowscriptaccess="always" allowfullscreen="true" width="640" height="180" src="https://mp3.zing.vn/embed/song/ZW9DZAO6?start=true" quality="high" wmode="transparent"></embed></object><br />');
            } else {
                $('#embed_textarea').text('<iframe src="<?php echo env('APP_URL').'/embed/mp3/'.$music->music_id; ?>' + auto + '"  scrolling="no" ' + width_height + ' frameborder="0" allowfullscreen="true" allow="encrypted-media" allowfullscreen></iframe>');
            }
        }
        //////////////////////////
        ////Add Button//////////
        ////////////////////////

        $('.fb-share-link').click(function(e) {
            e.preventDefault();
            FB.ui({
                method: 'share',
                href: $(this).attr('href'),
                caption: 'Chia Sẻ Nhạc',
            }, function(response){});
            return false;
        });
        $('.messenger-share-link').click(function(e) {
            e.preventDefault();
            FB.ui({
                method: 'send',
                link: $(this).attr('href'),
                caption: 'Chia Sẻ Nhạc',
            });
            return false;
        });
        //////////////////////////
        //////Comment///////////////
        ////////////////////////////
        var loadComment = true;
        var pageComment = true;
        $('.box_form_comment').submit(false);
        function postComment(formId) {
            var textArea = $('.form-comment-' + formId).find('textarea');
            <?php
                if(!Auth::check()) {
                ?>
                    alertModal('Bạn chưa đăng nhập.');
                    return false;
                <?php
                }
            ?>
            if(!textArea.val()) {
                alertModal('Chưa nhập nội dung bình luận.');
                return false;
            }

            $.ajax({
                url: "/comment/post",
                type: "POST",
                dataType: "html",
                data: {'comment': $('.form-comment-' + formId).find('textarea').val(),
                    'music_id' : musicId,
                    'reply_cmt_id': $('.form-comment-' + formId).find('.reply_cmt_id').val()},
                beforeSend: function () {
                },
                statusCode: {
                    401: function(){
                        window.location.replace('/login');
                        return false;
                    }
                },
                success: function(response) {
                    $('.form-comment-' + formId).find('textarea').val('');
                    if(formId == 0) {
                        if(pageComment == 1) {
                            $('.ul_comments').prepend(response);
                            $('.ul_comments .reply_comment').first().on('click', function () {
                                var reply = $('.post_comment_reply_' + $(this).data('comment_id'));
                                if (!reply.hasClass('reply_show')) {
                                    $('.post_comment_reply').removeClass('reply_show');
                                    reply.addClass('reply_show');
                                } else {
                                    reply.removeClass('reply_show');
                                }
                                reply.find('textarea').trigger('focus');
                            });
                            $('.box_form_comment').submit(false);
                        }else{
                            loadPageComment('/comment/get_ajax?page=1');
                        }
                    }else{
                        $('.comment-reply-' + formId).prepend(response);
                    }
                    $('.music_comment span').html(parseInt($('.music_comment span').html()) + 1);
                    $('.box_form_comment').submit(false);
                    Lobibox.notify('success', {
                        size: 'mini',
                        sound: false,
                        delay: 1500,
                        delayIndicator: false,
                        msg: 'Bình luận đã được đăng.'
                    });
                }
            });
            return false;
        }

        function loadPageComment(url) {
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: {'music_id': musicId},
                beforeSend: function () {
                    $('.list_comment .list_body').html('<div class="modal-body" style="text-align: center;"><img src="/imgs/comet-spinner.gif" width="100px" /></div>');
                },
                success: function(response) {
                    $('.list_comment .list_body').html(response);
                    $('.box_form_comment').submit(false);
                    $('.reply_comment').on('click', function () {
                        var reply = $('.post_comment_reply_' + $(this).data('comment_id'));
                        if (!reply.hasClass('reply_show')) {
                            $('.post_comment_reply').removeClass('reply_show');
                            reply.addClass('reply_show');
                        } else {
                            reply.removeClass('reply_show');
                        }
                        reply.find('textarea').trigger('focus');
                    });
                    $('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        loadPageComment($(this).attr('href'));
                        pageComment = $(this).html();
                    });
                }
            });
        }
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if(loadComment) {
                if (st > $('#post_comment').offset().top - 600){
                    loadPageComment('/comment/get_ajax?page=<?php echo $_GET['comment_page'] ?? 1 ?>');
                    pageComment = <?php echo $_GET['comment_page'] ?? 1 ?>;
                    loadComment = false;
                }
            }
        });

        //////////////////////////
        ////Add Playlist////////
        ////////////////////////

        var loadPlaylist = true;
        function loadPlayList() {
            <?php
                if(!Auth::check()) {
                    ?>
                    alertModal('Bạn chưa đăng nhập.')
                    return false;
                    <?php
                }
            ?>
            if(loadPlaylist) {
                $.ajax({
                    url: "/playlist/get_playlist",
                    type: "GET",
                    dataType: "json",
                    data: {'music_id': musicId},
                    beforeSend: function () {
                    },
                    success: function(data) {
                        loadPlaylist = false;
                        var stringHtml = '';
                        if(data) {
                            $.each(data, function (index, val) {
                                stringHtml += stringItemPlaylist(val.playlist_title, val.playlist_music_total, val.playlist_id, val.music_exist, val.playlist_time);
                            });
                        }
                        $('.playlist-csn ul').html(stringHtml);
                    }
                });
            }

        }
        function stringItemPlaylist(playlist_title, playlist_music_total, playlist_id, music_exist, playlist_time){
            return '<li onclick="addMusicPlaylist(' + playlist_id + ')" class="' + (music_exist ? "playlist_music_exist " : "") + 'd-flex justify-content-between playlist_id_' + playlist_id + '"><a class="title_playlist" href="javascript:void(0)" title="' + playlist_title + '">' + playlist_title + ' (<span>' + playlist_music_total + '</span>)</a><time>' + convertDateTime(playlist_time) + '</time></li>';
        }
        function convertDateTime(timestamp) {
            date = new Date(timestamp * 1000),
            datevalues = [
                date.getFullYear(),
                date.getMonth()+1,
                date.getDate(),
                date.getHours(),
                date.getMinutes(),
                date.getSeconds(),
            ];
            return date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear();
        }
        function btnCreatePlaylist() {
            var titlePlaylist = $('.text-create-playlist');
            if(!titlePlaylist.val()) {
                alertModal('Bạn chưa nhập tên playlist mới.');
                return false;
            }
            $.ajax({
                url: "/playlist/create_playlist",
                type: "POST",
                dataType: "json",
                data: {'music_id': musicId, 'playlist_title': titlePlaylist.val()},
                beforeSend: function () {
                },
                success: function(data) {
                    if(data.success) {
                        const playlist = $('.playlist-csn .list-unstyled');
                        playlist.append(stringItemPlaylist(data.data.playlist_title, data.data.playlist_music_total, data.data.playlist_id, false, data.data.playlist_time));
                        titlePlaylist.val("");
                        $('.playlist-csn').animate({scrollTop: playlist.height()}, 'slow');
                    }else{
                        alertModal(data.message);
                    }
                }
            });
        }
        function addMusicPlaylist(playlistId) {
            const playlistIdSelect = $('.playlist_id_' + playlistId);
            if(playlistIdSelect.hasClass('playlist_music_exist')){
                alertModal('Bài Hát đã tồn tại trong playlist.');
                return false;
            }
            $.ajax({
                url: "/playlist/add_music_playlist",
                type: "POST",
                dataType: "json",
                data: {'music_id': musicId, 'playlist_id': playlistId},
                beforeSend: function () {
                },
                success: function(data) {
                    if(data.success) {
                        playlistIdSelect.addClass('playlist_music_exist');
                        var countPlaylist = playlistIdSelect.find('.title_playlist span');
                        countPlaylist.html(parseInt(countPlaylist.html()) + 1);
                        successModal(data.message);
                        playlistIdSelect.find('time').html(convertDateTime(Date.now() / 1000));
                    }else{
                        alertModal(data.message);
                    }
                }
            });
        }
    </script>
    <style>
        .jw-icon-rewind{
            display: none!important;
        }
        .jw-icon-fullscreen, .jw-title-primary{
            display: none!important;
        }
    </style>

@endsection
