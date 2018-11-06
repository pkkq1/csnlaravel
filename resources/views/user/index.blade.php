@section('hidden_wapper', true)
<?php
use App\Library\Helpers;
$titleMeta = $user->name . ' - '. Config::get('constants.app.title');
$mySelf = (Auth::check() && Auth::user()->id == $user->id);
?>
@extends('layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
@endsection
@section('content')
@include('user.box_profile', ['user' => $user, 'mySelf' => $mySelf])
<div class="container">
    <div class="row row_wrapper">
        <div class="col-md-9">
            <ul class="nav nav-tabs nav-justified nav_bxh" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="playlist-tab" data-toggle="tab" href="#playlist" role="tab" aria-controls="home" aria-selected="true">Playlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="music-tab" data-toggle="tab" href="#music" role="tab" aria-controls="profile" aria-selected="false"><i class="material-icons" style="font-size: 11px;">favorite_border</i> Bài Hát</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="contact" aria-selected="false"><i class="material-icons" style="font-size: 11px;">favorite_border</i> Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="artist-tab" data-toggle="tab" href="#artist" role="tab" aria-controls="contact" aria-selected="false"><i class="material-icons" style="font-size: 11px;">favorite_border</i> Ca Sĩ</a>
                </li>
                @if($mySelf)
                <li class="nav-item">
                    <a class="nav-link" onclick="musicUserTab('musicUploaded')" id="your-upload-tab" data-toggle="tab" href="#uploaded" role="tab" aria-controls="profile" aria-selected="false">Tủ nhạc</a>
                </li>
                @endif
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="playlist" role="tabpanel" aria-labelledby="playlist-tab">
                    <div class="d-flex align-items-center justify-content-between" id="header_playlist">
                        <h3 class="title">playlist | album</h3>
                        @if($mySelf)
                        <span><a class="btn btn-danger" href="/user/playlist/them" title="Tạo playlist"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a><a class="btn btn-secondary" href="/user/playlist/chinh-sua" title=""><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a></span>
                        @endif
                    </div>
                    <div class="row row10px" id="playlist">
                        @if(isset($playlist))
                        @foreach($playlist as $item)
                            <div class="col">
                                <div class="card card1">
                                    <div class="card-header" style="background-image: url({{$item->playlist_cover ? PUBLIC_MUSIC_PLAYLIST_PATH.$item->playlist_id . '.png?v=' . time() : '/imgs/avatar_default.png'}});">
                                        <a href="<?php echo Helpers::playlist_url($item->toArray()) ?>" title="{{$item->playlist_title}}">
                                            <span class="icon-play"></span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="#" title="{{$item->playlist_title}}">{{$item->playlist_title}}</a></h3>
                                        @if($item->playlist_artist)
                                        <p class="card-text">
                                            @foreach(array_slice(unserialize($item->playlist_artist), 0, 2) as $key => $artistItem)
                                                <a href="$artistItem['id']">{{$artistItem['name']}}</a>{{$key != 1 ? ', ': ''}}
                                            @endforeach
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="music" role="tabpanel" aria-labelledby="music-tab">...</div>
                <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">...</div>
                <div class="tab-pane fade" id="artist" role="tabpanel" aria-labelledby="recent-music-tab">...</div>
                <div class="tab-pane fade" id="uploaded" role="tabpanel" aria-labelledby="your-upload-tab" style="margin-bottom: 20px">

                </div>
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
    <style>
        .pagination {
            margin: 0px;
        }
    </style>
    <script>
        var firstUploaded = true;
        function musicUserTab(tab) {
            if(tab == 'musicUploaded' && firstUploaded) {
                firstUploaded = false;
                musicUploaded('<?php echo $user->id ?>/music_uploaded', 'all');
            }
        }
        function musicUploaded(url, stage) {
            var uploaded = $('#uploaded');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: {
                    'user_id': <?php echo $user->id; ?>,
                    'stage' : stage
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    if(stage == 'all') {
                        uploaded.html(response);
                    }else{
                        uploaded = $('.stage_' + stage);
                        $('.stage_' + stage).html(response);
                    }
                    uploaded.find('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        musicUploaded($(this).attr('href'), $(this).parents().parents().parents().data('page'));
                    });
                }
            });
        }
    </script>
@endsection
