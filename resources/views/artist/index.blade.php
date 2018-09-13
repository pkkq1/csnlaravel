@section('hidden_wapper', true)
<?php
$titleMeta = $artist->artist_nickname . ' - '. Config::get('constants.app.title');
?>
@extends('layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
@endsection
@section('content')
    @include('artist.box_artist', ['artist' => $artist])
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

                        </div>
                        <div class="row row10px" id="playlist">

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
