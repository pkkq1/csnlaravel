<?php
use App\Library\Helpers;
$titleMeta = $category->cat_title . ' - '. Config::get('constants.app.title');
// global variable file /case

?>

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <ul class="nav nav-tabs nav-justified nav_bxh" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="album-tab" data-toggle="tab" href="#album" role="tab" aria-controls="home" aria-selected="true">Album</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="playlist-tab" data-toggle="tab" href="#playlist" role="tab" aria-controls="home" aria-selected="true">Bài Hát</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="playlist-tab" data-toggle="tab" href="#playlist" role="tab" aria-controls="home" aria-selected="true">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="playlist-tab" data-toggle="tab" href="#playlist" role="tab" aria-controls="home" aria-selected="true">Download</a>
                    </li>
                </ul>
                <div class="tab-pane fade" id="album" role="tabpanel" aria-labelledby="album-tab">

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