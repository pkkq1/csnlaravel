@section('hidden_wapper', true)
<?php
use App\Library\Helpers;
$titleMeta = $user->name . ' - '. Config::get('constants.app.title');
?>
@extends('layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
@endsection
@section('content')
@include('user.box_profile', ['user' => $user])
<div class="container">
    <div class="row row_wrapper">
        <div class="col-md-9">
            <ul class="nav nav-tabs nav-justified nav_bxh" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="playlist-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Playlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="music-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="material-icons" style="font-size: 11px;">favorite_border</i> Bài Hát</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="video-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="material-icons" style="font-size: 11px;">favorite_border</i> Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="recent-music-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Vừa nghe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="your-upload-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tủ nhạc</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="playlist-tab">
                    <div class="d-flex align-items-center justify-content-between" id="header_playlist">
                        <h3 class="title">playlist | album</h3>
                        @if(Auth::check() && Auth::user()->id == $user->id)
                        <span><a class="btn btn-danger" href="/playlist/user/them" title="Tạo playlist"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a><a class="btn btn-secondary" href="/playlist/user/chinh-sua" title=""><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a></span>
                        @endif
                    </div>
                    <div class="row row10px" id="playlist">
                        @foreach($playlist as $item)
                            <div class="col">
                                <div class="card card1">
                                    <div class="card-header" style="background-image: url({{$item->playlist_cover ? PUBLIC_MUSIC_PLAYLIST_PATH.$item->playlist_id . '.png?v=' . time() : '/imgs/avatar_default.png'}});">
                                        <a href="<?php echo  Helpers::playlist_url($item->toArray()) ?>" title="{{$item->playlist_title}}">
                                            <span class="icon-play"></span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="#" title="{{$item->playlist_title}}">{{$item->playlist_title}}</a></h3>
                                        @if($item->playlist_artist)
                                        <p class="card-text">
                                            @foreach(array_slice(json_decode($item->playlist_artist, true), 0, 2) as $key => $artistItem)
                                                <a href="$artistItem['id']">{{$artistItem['name']}}</a>{{$key != 1 ? ', ': ''}}
                                            @endforeach
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="music-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="video-tab">...</div>
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="recent-music-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="your-upload-tab">...</div>
            </div>
        </div>
        <div class="col-md-3">
            <a class="catalog1 weekend" style="background-image: url(https://i.scdn.co/image/6a6098cd1369420b9b6ff941ff41ded1b1dceb06);" href="#" title="">
                <span>weekend</span>
            </a>
            <a class="catalog1 edm" style="background-image: url(https://i.scdn.co/image/c8ffd7bd0df17c05fd8a1efef33ad793eea0e47d);" href="#" title="">
                <span>EDM</span>
            </a>
            <a class="catalog1 love" style="background-image: url(https://i.scdn.co/image/56228f9353b23405516a6ea8af1c22083f450b57);" href="#" title="">
                <span>love</span>
            </a>
            <br>
            <div class="card mb-3 cardads">
                <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
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
@endsection
