@section('hidden_wapper', true)
<?php
use App\Library\Helpers;
$titleMeta = $artist->artist_nickname . ' - '. Config::get('constants.app.title');
?>
@extends('layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/tabs.css">
    <link rel="stylesheet" type="text/css" href="/css/TabStylesInspiration/tabstyles.css">
@endsection
@section('content')
    @include('artist.box_artist', ['artist' => $artist])
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="tabs tabs-style-line tab-category">
                    <nav>
                        <ul>
                            <li class="tab-current"><a onclick="artistTab('/tab_artist', 'music')" href="#music"><span>Bài Hát</span></a></li>
                            <li><a onclick="artistTab('/tab_artist', 'video')" href="#video"><span>Video</span></a></li>
                            <li><a onclick="artistTab('/tab_artist', 'album')" href="#album"><span>Album</span></a></li>
                            <li><a onclick="artistTab('/tab_artist', 'playlist')" href="#playlist"><span>Playlist</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap tab-content-category">
                        <section id="music" class="content-current"><?php echo $musicHtml ?></section>
                        <section id="video"></section>
                        <section id="album"></section>
                        <section id="playlist"></section>
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
    <script>
        (function() {
            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });
        })();
        $('#music').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            artistTab(($(this).attr('href')), 'music', true);
        });
        function artistTab(url, tab, floatTab = false) {
            if(($('#'+tab).html()).length == 0 || floatTab) {
                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: "html",
                    data: {
                        'artist': '<?php echo $artist->artist_nickname; ?>',
                        'artist_id': '<?php echo $artist->artist_id; ?>',
                        'tab': tab ? tab : 'music'
                    },
                    beforeSend: function () {
                        if(loaded) return false;
                        loaded = true;
                    },
                    success: function(response) {
                        $('#'+tab).html(response);
                        $('#'+tab).find('.pagination li a').on('click', function (e) {
                            e.preventDefault();
                            artistTab($(this).attr('href'), tab, true);
                        });
                    }
                });
            }
        }

    </script>
@endsection
