<?php
use App\Library\Helpers;
$titleMeta = $caption . ' - '. Config::get('constants.app.title');
?>
@extends('web.layouts.app')
@section('contentCSS')
@endsection
@section('content')
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="tabs tabs-style-line tab-category">
                    <div class="media media-tab">
                        <div class="media-left">
                            <h2 class="media-title">{{$caption}}</h2>
                        </div>
                    </div>
                    <div class="content-wrap tab-content-category">
                        <section id="video_2018" class="content-current">

                            <div class="row row10px float-col-width">
                                <?php
                                array_map(function ($item) {
                                $url = Helpers::playlist_url($item);
                                ?>
                                <div class="col">
                                    <div class="card card1">
                                        <div class="card-header" style="background-image: url({{$item['playlist_cover'] ? Helpers::file_path($item['playlist_id'], PUBLIC_MUSIC_PLAYLIST_PATH, true).$item['playlist_id'] . '.png?v=' . time() : '/imgs/avatar_default.png'}});">
                                            <a href="{{$url}}" title="{{$item['playlist_title']}}">
                                                <span class="icon-play"></span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title"><a href="{{$url}}" title="{{$item['playlist_title']}}">{{$item['playlist_title']}}</a></h3>
                                            <p class="card-text">
                                                <?php
                                                $artistPlaylist = unserialize($item['playlist_artist']);
                                                if($artistPlaylist) {
                                                    $artistNames = [];
                                                    $artistIds = [];
                                                    $i = 0;
                                                    foreach($artistPlaylist as $key => $item) {
                                                        $artistNames[] = $item['name'];
                                                        $artistIds[] = $key;
                                                        if(++$i == 2)
                                                            break;
                                                    }
                                                    echo Helpers::rawHtmlArtists(implode(';', $artistIds), implode(';', $artistNames));
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }, $playlist->toArray());
                                ?>
                            </div>

                        </section>
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
    <script>
    </script>
@endsection


