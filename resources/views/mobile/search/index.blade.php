@section('in_search', true)
<?php
use App\Library\Helpers;
$titleMeta = $titleSearch . ' '. Config::get('constants.app.title');
global $memberVip;
$memberVip = Helpers::checkMemberVip();
$filter = $_GET['filter'] ?? '';
$filterPage= (isset($_GET['filter']) && $_GET['filter']) ? '&filter='.$_GET['filter'] : '';
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics">
    <meta name="description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL')}}/imgs/no_cover.png" />
    <meta name="title" content="{{$titleMeta}}" />
    <meta property="og:image" content="{{env('APP_URL')}}/imgs/no_cover.png" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$titleMeta}}" />
    <meta property="og:description" content="Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless." />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('mobile.layouts.app')
@section('content')
    <div class="header">
        @include('mobile.layouts.header_top')
        <!-- swiper1-->
        <div class="header_sub_menu">
            <div data-itemmenu="4" class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide selected search-music" data-page="page_music">Bài Hát ({{number_format($result['music']['row_total'] ?? 0)}})</div>
                    <div class="swiper-slide search-album" data-page="page_album">Album ({{number_format($result['album']['row_total'] ?? 0)}})</div>
                    <div class="swiper-slide search-video" data-page="page_video">Video ({{number_format($result['video']['row_total'] ?? 0)}})</div>
                    <div class="swiper-slide search-playback" data-page="page_playlist">Playback ({{number_format($result['music_playback']['row_total'] ?? 0)}})</div>
                    <div class="swiper-slide search-artist" data-page="page_artist">Ca sĩ ({{number_format($result['artist']['row_total'] ?? 0)}})</div>
                    <div class="swiper-slide search-search" data-page="page_search">Lọc kết quả</div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        @hasSection('no_ads')
        @else
            @if(!$memberVip)
                <div style="width: 100%; overflow: hidden; position: relative; text-align: center;">
    {{--            @if(View::exists('cache.code_ads.mobile_masthead'))--}}
                    @include('cache.code_ads.mobile_masthead')
                {{--@endif--}}
            </div>
            @endif
        @endif
        <div class="sidebar_top">
            <!-- swiper2-->
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide block_bxhbaihat block_more">
                        <div class="container">
                            <div class="block block_baihat">
                                <div class="block_bxhbaihat block_more" id="bai-hat">
                                    <?php
                                    array_map(function ($item) use ($search) {
                                    ?>
                                    <div class="element mb-2">
                                        <a class="search-line-music" href="{{$item['music_link']}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['music_cover']}}') no-repeat center;background-size: cover;"></div></a>
                                        <div class="content d-inline-block align-middle">
                                            <a href="{{$item['music_link']}}" class="search-line-music"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist'] ?></p>
                                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['music']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['music']['page'] ?? 1, $result['music']['rows'] ?? 0, $result['music']['row_total'] ?? 0, '<a href="/tim-kiem?q=&page_music=%d&tab=music'.$filterPage.'">%d</a>', $search) ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="block block_album block_profile_playlist">
                                <div class="row row-sm" id="album">
                                    <?php
                                    array_map(function ($item) use ($search) {
                                    ?>
                                    <div class="col-6">
                                        <div class="item element">
                                            <a href="{{$item['album_link']}}"><div style="background: url({{$item['album_cover']}}) no-repeat center;background-size: cover;" class="image rounded"></div></a>
                                            <div class="content mt-3">
                                                <a href="{{$item['album_link']}}"><h6 class="name_song mb-1 card-title">{{$item['music_album']}}</h6></a>
                                                <p class="name_singer text-gray mb-1 author"><?php echo $item['album_artist_html'] ?></p>
                                                <p class="loss text-pink mb-0"><?php echo $item['album_bitrate'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['album']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['album']['page'] ?? 1, $result['album']['rows'] ?? 0, $result['album']['row_total'] ?? 0,  '<a href="/tim-kiem?q=&page_music=%d&tab=album'.$filterPage.'">%d</a>', $search) ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more">
                        <div class="container">
                            <div class="block block_bxhvideo">
                                <div class="block_bxhbaihat block_more" id="video">
                                    <?php
                                    array_map(function ($item) use ($search) {
                                    ?>
                                    <div class="element py-3 border-bottom">
                                        <a href="{{$item['video_link']}}" class="search-line-music">
                                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{$item['video_cover']}}) no-repeat center;background-size: cover;">
                                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['video_length_html']}}</p>
                                            </div>
                                        </a>
                                        <div class="content d-inline-block align-middle">
                                            <a href="{{$item['video_link']}}" class="search-line-music"><h6 class="name_song text-black mb-1 card-title">{{$item['video_title']}}</h6></a>
                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['video_artist'] ?></p>
                                            <p class="loss text-pink mb-0"><?php echo $item['video_bitrate'] ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['video']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['video']['page'] ?? 1, $result['video']['rows'] ?? 0, $result['video']['row_total'] ?? 0,  '<a href="/tim-kiem?q=&page_music=%d&tab=video'.$filterPage.'">%d</a>', $search) ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more">
                        <div class="container">
                            <div class="block block_baihat">
                                <div class="block_bxhbaihat block_more" id="bai-hat">
                                    <?php
                                    array_map(function ($item) use ($search) {
                                    ?>
                                    <div class="element mb-2">
                                        <a href="{{$item['music_link']}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['music_cover']}}') no-repeat center;background-size: cover;"></div></a>
                                        <div class="content d-inline-block align-middle">
                                            <a href="{{$item['music_link']}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist'] ?></p>
                                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html'] ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['music_playback']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['music_playback']['page'] ?? 1, $result['music_playback']['rows'] ?? 0, $result['music_playback']['row_total'] ?? 0, '<a href="/tim-kiem?q=&page_playback=%d&tab=playback'.$filterPage.'">%d</a>', $search) ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide block_bxhbaihat block_more">
                        <div class="container">
                            <div class="block block_baihat">
                                <div class="block_bxhbaihat block_more" id="bai-hat">
                                    <?php
                                    array_map(function ($item) use ($search) {
                                    ?>
                                    <div class="element mb-2">
                                        <a href="{{$item['artist_link']}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['artist_avatar']}}') no-repeat center;background-size: cover;"></div></a>
                                        <div class="content d-inline-block align-middle">
                                            <a href="{{$item['artist_link']}}"><h6 class="name_song text-black mb-1 card-title">{{$item['artist_nickname']}}</h6></a>
                                        </div>
                                    </div>
                                    <?php
                                    }, $result['artist']['data'])
                                    ?>
                                    <center><?php Helpers::pagingCustom($result['artist']['page'] ?? 1, $result['artist']['rows'] ?? 0, $result['artist']['row_total'] ?? 0,  '<a href="/tim-kiem?q=&page_music=%d&tab=ca-si'.$filterPage.'">%d</a>', $search) ?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="block block_baihat">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="title">Tìm theo</h3>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="filter_search" value="" {{(!isset($_GET['filter']) || $_GET['filter'] == '' || $_GET['filter'] == 'all') ? 'checked' : ''}} id="music_name_artist">
                                            <label class="form-check-label" for="music_name_artist">
                                                Tên b.hát & ca sĩ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="filter_search" {{$filter == 'ten-album' ? 'checked' : ''}} value="ten-album" id="music_album">
                                            <label class="form-check-label" for="music_album">
                                                Tên Album
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br/>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="filter_search" value="ten-bai-hat" {{$filter == 'ten-bai-hat' ? 'checked' : ''}} id="music_name">
                                            <label class="form-check-label" for="music_name">
                                                Tên bài hát
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="filter_search" {{$filter == 'ca-si' ? 'checked' : ''}} value="ca-si" id="music_artist">
                                            <label class="form-check-label" for="music_artist">
                                                Ca sĩ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br />
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="filter_search" value="sang-tac" {{$filter == 'sang-tac' ? 'checked' : ''}} id="music_composer">
                                            <label class="form-check-label" for="music_composer">
                                                Sáng tác
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="filter_search" value="loi-bai-hat" {{$filter == 'loi-bai-hat' ? 'checked' : ''}} id="music_lyric">
                                            <label class="form-check-label" for="music_lyric">
                                                Lời bài hát
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('contentJS')
    <script>
        $('.search-line-music').click(function () {
            Cookies.set('search_search', $(this).attr('href'))
        })
        function categoryTab(url, tab, floatTab = false) {
            if(($('#'+tab).html()).length == 0 || floatTab) {
                $.ajax({
                    url: window.location.origin + url,
                    type: "POST",
                    dataType: "html",
                    data: {},
                    beforeSend: function () {
                        if(loaded) return false;
                        loaded = true;
                        $('html,body').animate({ scrollTop: 0 }, 400);
                    },
                    success: function(response) {
                        $('#'+tab).html(response);
                        $('#'+tab).find('.pagination li a').on('click', function (e) {
                            e.preventDefault();
                            categoryTab($(this).attr('href'), tab, true);
                        });
                        $('.'+tab).click();
                    }
                });
            }
        }
        <?php
        if(isset($_GET['tab'])) {
        ?>
        $( document ).ready(function() {
            $('.<?php echo $_GET['tab'] ?>').click();
        });
        <?php
        }
        ?>
        $('.form-check-input').change(function() {
            let url = window.location.href;
            if(url.indexOf("&filter=") != -1)
                url = url.substr(0, url.indexOf("&filter="))
            url = url + '&filter=' + $('input[type=radio][name=filter_search]:checked').val();
            window.location.href = url;
        })
        $( document ).ready(function() {
            <?php
            if(isset($_GET['page_music'])) {
            ?>
            $('.search-music').click();
            <?php
            }elseif(isset($_GET['page_album'])) {
            ?>
            $('.search-album').click();
            <?php
            }elseif(isset($_GET['page_video'])) {
            ?>
            $('.search-video').click();
            <?php
            }elseif(isset($_GET['page_playback'])) {
            ?>
            $('.search-playback').click();
            <?php
            }elseif(isset($_GET['page_artist'])) {
            ?>
            $('.search-artist').click();
            <?php
            }elseif(isset($_GET['page_search'])) {
            ?>
            $('.search-search').click();
            <?php
            }
            ?>
        });
        $('.swiper-slide').click(function () {
            let tab_page = $(this).data('page');
            setTimeout(function(){
                let number_page = $('.swiper-wrapper').find('.swiper-slide-active').find('.pagination').find('.active a').html();
                if (typeof number_page == 'undefined')
                    number_page = 1;
                let q = findGetParameter('q');
                let url = window.location.origin + '/tim-kiem?q=' + q + '&' + tab_page + '=' + (number_page);
                if(url.indexOf("&filter=") != -1)
                    url = url.substr(0, url.indexOf("&filter="))
                url = url + '&filter=' + $('input[type=radio][name=filter_search]:checked').val();
                window.history.pushState({}, '', url);
            }, 300);
        })

    </script>
@endsection