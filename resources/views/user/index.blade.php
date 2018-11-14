@section('hidden_wapper', true)
<?php
use App\Library\Helpers;
$titleMeta = $user->name . ' - '. Config::get('constants.app.title');
$mySelf = (Auth::check() && Auth::user()->id == $user->id);
?>
@extends('layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/tabs.css">
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/tabstyles.css">
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
@endsection
@section('content')
@include('user.box_profile', ['user' => $user, 'mySelf' => $mySelf])
<div class="container">
    <div class="row row_wrapper">
        <div class="col-md-9">
            <div class="tabs tabs-style-line tab-category">
                <nav>
                    <ul>
                        <li class="tab-current"><a href="#playlist"><span>Playlist</span></a></li>
                        <li><a href="#music"><span><i class="material-icons" style="font-size: 11px;">favorite_border</i> Bài Hát</span></a></li>
                        <li><a href="#video"><span><i class="material-icons" style="font-size: 11px;">favorite_border</i> Video</span></a></li>
                        <li><a href="#video"><span><i class="material-icons" style="font-size: 11px;">favorite_border</i> Ca Sĩ</span></a></li>
                        @if($mySelf)
                        <li><a href="#uploaded" onclick="musicUserTab('musicUploaded')" ><span>Tủ nhạc</span></a></li>
                        @endif
                    </ul>
                </nav>
                <div class="content-wrap tab-content-category">
                    <section id="playlist" class="content-current">
                        <div class="d-flex align-items-center justify-content-between" id="header_playlist">
                            <span class="title"></span>
                            @if($mySelf)
                                <span><a class="btn btn-danger" href="/user/playlist/them" title="Tạo playlist"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a><a class="btn btn-secondary" href="/user/playlist/chinh-sua" title=""><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a></span>
                            @endif
                        </div>
                        <div class="row row10px" id="playlist">
                            @if(count($playlist))
                                @foreach($playlist as $key2 => $item)
                                    <div class="col">
                                        <div class="card card1">
                                            <div class="card-header" style="background-image: url({{$item->playlist_cover ? Helpers::file_path($item->playlist_id, PUBLIC_MUSIC_PLAYLIST_PATH, true).$item->playlist_id . '.png?v=' . time() : '/imgs/avatar_default.png'}});">
                                                <a href="<?php echo Helpers::playlist_url($item->toArray()) ?>" title="{{$item->playlist_title}}">
                                                    <span class="icon-play"></span>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title"><a href="#" title="{{$item->playlist_title}}">{{$item->playlist_title}}</a></h3>
                                                @if($item->playlist_artist)
                                                    <p class="card-text">
                                                        <?php
                                                            $artistPlaylist = unserialize($item->playlist_artist);
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
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="center-text-mes"><span>
                                        @if($mySelf)
                                            Bạn chưa có playlist nào, <a href="/user/playlist/them">click vào đây để tạo playlist</a>
                                        @else
                                            {{$user->name}} chưa tạo playlist nào.
                                        @endif
                                </span></div>
                            @endif
                        </div>
                    </section>
                    <section id="music"><div class="center-text-mes"><span>Chưa có bài hát nào</span></div></section>
                    <section id="video"><div class="center-text-mes"><span>Chưa có video nào</span></div></section>
                    <section id="artist"><div class="center-text-mes"><span>Chưa có ca sĩ nào</span></div></section>
                    <section id="uploaded"></section>
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
<script src="/js/cbpFWTabs.js"></script>
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
    (function() {
        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });
    })();
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
