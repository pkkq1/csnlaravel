@section('in_player', true)
@include('cache.suggestion.'.ceil($music->music_id / 1000).'.'.$music->music_id)
@include('cache.suggestion_cat.'.$music->cat_id.'_'.$music->cat_level)
@include('cache.def_main_cat')
<?php
use App\Library\Helpers;
global $cat_id2info;
global $cat_url2info;

global $album_new;
global $MusicSameArtist;
global $VideoSameArtist;
global $titleDup;
global $typeDup;
global $video;
$titleMeta = $music->music_title . ' - '. str_replace(';', ', ', $music->music_artist);
$file_url = Helpers::file_url($music);
if($musicSet['type_jw'] == 'music' && !Auth::check()) {
    if(last($file_url)['label'] == 'Lossless') {
        array_pop($file_url);
    }
}
$lyric_array = Helpers::lyric_to_web($music->music_lyric);
$artistHtml = Helpers::rawHtmlArtists($music->music_artist_id, $music->music_artist);
$sug = [];
$sug = Helpers::getRandLimitArr($typeDup, LIMIT_SUG_MUSIC - count($titleDup?? []) + 3);
$thumnailMusic = $musicSet['type_jw'] != 'video' ? Helpers::cover_url($music->cover_id) : Helpers::thumbnail_url($music->toArray(), 'preview');
$thumnailMeta = '';
$music_lyric_karaoke = '';
$titleExMeta = $music->music_title.'; '.$music->music_artist;
if($musicSet['type_listen'] == 'playlist') {
    $thumnailMeta = $musicSet['playlist']->playlist_cover;
    $titleExMeta = $musicSet['playlist']->playlist_title;
} else {
    $thumnailMeta = $thumnailMusic;
}
global $memberVip;
$memberVip = Helpers::checkMemberVip();
?>
@section('meta')
    <meta name="author" content="{{$music->music_username}}">
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="{{$music->music_title}}, {{$music->music_artist}}, <?php echo $musicSet['type_jw'] == 'video' ? 'HD 1080p, HD 720p, MV 480p, MV 360p, video, mv, hd, mp4' : 'Lossless, 500kbps, 320kbps, music, mp3, m4a, flac, lossless' ?>, csn, nghe nhac, tai nhac, loi bai hat, lyrics">
    <meta name="description" content="<?php echo $musicSet['type_jw'] == 'video' ? 'Nghe online video '.$music->music_title.' do ca sĩ '.$music->music_artist.' thể hiện. Tải nhạc dạng hd, mp4 và xem lời bài hát '.$music->music_title.' hoàn toàn miễn phí.' : 'Nghe online bài hát '.$music->music_title.' do ca sĩ '.$music->music_artist.' thể hiện. Tải nhạc dạng mp3, m4a, lossless và xem lời bài hát '.$music->music_title.' hoàn toàn miễn phí.' ?>">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{$thumnailMeta}}" />
    <meta name="title" content="{{$music->music_title}}; {{$music->music_artist}}<?php echo $titleExMeta?>" />
    <meta property="og:image" content="{{$thumnailMeta}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$music->music_title}}; {{$music->music_artist}}<?php echo $titleExMeta?>" />
    <meta property="og:description" content="Sáng tác: {{$music->music_composer}} ({{$music->music_year}}); <?php echo $musicSet['type_jw'] == 'video' ? 'Chất lượng: HD 1080p, HD 720p, MV 480p, MV 360p' : 'Chất lượng: Lossless, 500kbps, 320kbps' ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@section('contentCSS')
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <link href="{{env('APP_URL')}}/node_modules/rabbit-lyrics/dist/rabbit-lyrics.css" rel="stylesheet" type="text/css"/>
    <script src="{{env('APP_URL')}}/node_modules/rabbit-lyrics/dist/rabbit-lyrics.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/csn-jwplayer.css">
@endsection

@extends('mobile.layouts.app')
@section('content')
    <div class="header">
        @include('mobile.layouts.header_top')
    </div>
    <main class="main main_player">
        @if(!$memberVip)
        <div style="position: relative; text-align: center;">
            <!-- Blueseed- Asynchronous Code for Ad Placement 1813 Chiasenhac Masthead Mobile Deleted -->
            <ins class="370d0bec" data-key="7607c0365cb7db6630c51cb15ea4f62f"></ins>
            <script async defer src="//aj1010.online/20dc880c.js"></script>
        </div>
        @endif
        <div class="sidebar_top">
            <div id="pills-tabContent" class="tab-content">
                <div id="pills-thongtin" role="tabpanel" aria-labelledby="pills-thongtin-tab" class="tab-pane fade active show">
                    <div class="block_thongtin">
                        <div class="infor_main" style="min-height: 400px;">
                            @if($musicSet['type_jw'] != 'video')
                                <div id="bg_blue" style="display: none; background: url('{{$thumnailMusic}}') no-repeat center;background-size: cover;padding-bottom: 70%;"
                                     class="image bg-blur"></div>
                                <div style="background: url('{{Helpers::cover_url($music->cover_id)}}') no-repeat center;background-size: cover;padding: 20%;"
                                     class="image-main"></div>
                                <div id="csnplayerads" style="position:relative; z-index: 99999; width:100%;"> </div>

                                <?php $month_day = intval(date('ndH')); ?>
                                @if($month_day < 0)
                                    <div class="image-main" style="top: 1px">
                                        <script type="text/javascript">
                                            /* load placement: chiasenhac_3d-box, for account: chiasenhac, site: chiasenhac.vn, size: 300x250 - mobile */
                                            var _avlVar = _avlVar || [];
                                            _avlVar.push(["52a932db595742ef97a993108efe6d2c", "[content_page_url]", "[width]", "[height]"]);
                                        </script>
                                        <script type="text/javascript" src="//ss.yomedia.vn/js/yomedia-sdk.js?v=3" id="s-52a932db595742ef97a993108efe6d2c"></script>
                                    </div>
                                @endif
                            @endif
                            <div id="csnplayer" class="player_media <?php echo $musicSet['type_jw'] == 'video' ? 'csn_video' : 'csn_music' ?>" style="position:relative; z-index: 99999; width:100%;"> </div>
                            <div id="hidden_lyrics" class="hidden">
                                <div id="lyrics" class="rabbit-lyrics">

                                </div>
                            </div>
                        </div>
                        <div class="title p-3 relative">
                            <div>
                                <h6 class="name_song mb-2">{{$music->music_title}}</h6>
                                <p class="text-pink mb-2"><?php echo $artistHtml ?></p>
                                <p class="text-gray m-0"><i class="fa fa-headphones"></i> {{number_format($music->music_listen)}}&nbsp;&nbsp;<i class="fa fa-download"></i> {{number_format($music->music_downloads)}}</p>
                            </div>
                            <div class="block_button d-flex justify-content-between">
                                <div class="element ele-playlist">
                                    <span class="wishlist toggle_wishlist {{$musicFavourite ? 'selector' : ''}}"><i aria-hidden="true" style="font-size: 22px" class="fa fa-heart-o"></i></span>
                                </div>
                                <div class="element ele-playlist"><img src="/images/img_share_mp3.png" alt="chia se" class="icon"></div>
                                <div class="element ele-download"><img src="/images/img_download.png" alt="tai ve" class="icon"></div>
                            </div>
                        </div>
                        <!-- swiper1-->
                        <div data-itemmenu="4" class="swiper-container swiper1">
                            <div class="swiper-wrapper">
                                <?php
                                    $firstSeleced = true;
                                    if(($musicSet['type_listen'] == 'playlist' || $musicSet['type_listen'] == 'album') && !empty($musicSet['playlist_music'])){
                                        $firstSeleced = false;
                                        ?>
                                        <div class="swiper-slide selected"><span class="d-inline-block align-middle">Playlist</span></div>
                                        <?php
                                    }
                                ?>
                                <div class="swiper-slide {{$firstSeleced ? 'selected' : ''}}"><a class="d-inline-block align-middle">Gợi ý</a></div>
                                <?php $firstSeleced = false; ?>
                                @if(isset($lyric_array['lyric']))
                                    <div class="swiper-slide {{$firstSeleced ? 'selected' : ''}}"><span class="d-inline-block align-middle">Lyric</span></div>
                                @endif
                                @if($MusicSameArtist)
                                    <div class="swiper-slide"><a class="d-inline-block align-middle">Cùng ca sĩ</a></div>
                                @endif
                                @if($VideoSameArtist)
                                    <div class="swiper-slide"><a class="d-inline-block align-middle">Video cùng ca sĩ</a></div>
                                @endif
                            </div>
                        </div>
                        <!-- swiper2-->
                        <div class="swiper-container swiper2">
                            <div class="swiper-wrapper">
                                <?php
                                if(($musicSet['type_listen'] == 'playlist' || $musicSet['type_listen'] == 'album') && !empty($musicSet['playlist_music'])){
                                    ?>
                                    <div class="swiper-slide">
                                    <div class="container">
                                        <div class="block_player {{$musicSet['type_jw'] == 'video' ? 'block_bxhvideo' : 'block'}}">
                                            <div class="block_baihat_main block_more music_recommendation">
                                                <?php
                                                array_map(function ($i, $item) use($music, $musicSet) {
                                                $url = Helpers::listen_url($item);
                                                $urlAlbum = url()->current() . '?playlist='.++$i;
                                                $item['music_artist_html'] = $item['music_artist_html'] ?? Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']);
                                                $item['music_bitrate_html'] = $item['music_bitrate_html'] ?? ($musicSet['type_jw'] != 'video' ? Helpers::bitrate2str($item['music_bitrate']) : Helpers::size2str($item['music_width'] ?? 0, $item['music_height'] ?? 0));
                                                ?>
                                                @if($item['cat_id'] != CAT_VIDEO)
                                                    <div class="element mb-2 card-footer {{($music->music_id == $item['music_id'] ? (count($musicSet['playlist_music']) > 1 ? 'listen' : '') : '')}}" id="music-listen-{{$item['music_id']}}">
                                                        <a href="{{$urlAlbum}}"><div style="background : url(<?php echo Helpers::cover_url($item['cover_id']) ?>) no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div></a>
                                                        <div class="content d-inline-block align-middle">
                                                            <a href="{{$urlAlbum}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="element py-3 border-bottom card-footer {{($music->music_id == $item['music_id'] ? (count($musicSet['playlist_music']) > 1 ? 'listen' : '') : '')}}" id="music-listen-{{$item['music_id']}}">
                                                        <a href="{{$urlAlbum}}">
                                                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                                                @if(isset($item['music_length']))
                                                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                                                @endif
                                                            </div>
                                                        </a>
                                                        <div class="content d-inline-block align-middle">
                                                            <a href="{{$urlAlbum}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                                        </div>
                                                    </div>
                                                @endif

                                                <?php
                                                },array_keys($musicSet['playlist_music']), $musicSet['playlist_music']);
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                }
                                ?>
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="block_player {{!empty($video) || $musicSet['type_jw'] == 'video' ? 'block_bxhvideo' : 'block'}}">
                                            <div class="block_baihat_main block_more sug_music">
                                                @if(!empty($video))
                                                    <?php
                                                    $urlVideo = Helpers::listen_url($video);
                                                    ?>
                                                    <div class="box_header d-flex justify-content-between align-items-end">
                                                        <h3 class="main_title text-pink mb-0">MV của bài hát</h3>
                                                    </div>
                                                    <div class="element py-3 border-bottom">
                                                        <a href="{{$urlVideo}}">
                                                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($video)}}) no-repeat center;background-size: cover;">
                                                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$video['music_length'] >= 3600 ? gmdate("H:i:s", $video['music_length']) : gmdate("i:s", $video['music_length'])}}</p>
                                                            </div>
                                                        </a>
                                                        <div class="content d-inline-block align-middle">
                                                            <a href="{{$urlVideo}}"><h6 class="name_song text-black mb-1 card-title">{{$video['music_title']}}</h6></a>
                                                            <p class="name_singer text-gray mb-1 author"><?php echo $video['music_artist_html']; ?></p>
                                                            <p class="loss text-pink mb-0"><?php echo Helpers::size2str($video['music_width'], $video['music_height']) ?></p>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                @endif
                                                <?php
                                                $music_history = unserialize($musicSet['music_history']['cookie']);
                                                if($titleDup) {
                                                    foreach ($titleDup as $item) {
                                                        $music_history[] = $item['music_id'];
                                                    }
                                                }
                                                foreach($sug as $key => $item) {
                                                    if(in_array($item['music_id'], $music_history)) {
                                                        unset($sug[$key]);
                                                    }
                                                }
                                                if(isset($titleDup[0])) {
                                                    $sug1 = array_merge(array_slice($sug, 0, 3), [$titleDup[0]]);
                                                    shuffle($sug1);
                                                    if(isset($titleDup[1])) {
                                                        $sug2 = array_merge(array_slice($sug, 4, 5), [$titleDup[1]]);
                                                        shuffle($sug2);
                                                    }else{
                                                        $sug2 = array_slice($typeDup, 4, 6);
                                                    }
                                                    $sug = array_merge($sug1, $sug2);
                                                }else{
                                                    $sug = array_slice($sug, 0, LIMIT_SUG_MUSIC);
                                                }
                                                $typeJw = $musicSet['type_jw'];
                                                array_map(function ($item) use ($music_history, $typeJw) {
                                                $url = Helpers::listen_url($item);
                                                ?>
                                                @if($typeJw != 'video')
                                                <div class="element mb-2">
                                                    <a href="{{$url}}"><div style="background : url(<?php echo Helpers::cover_url($item['cover_id']) ?>) no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div></a>
                                                    <div class="content d-inline-block align-middle media">
                                                        <a href="{{$url}}" class="media-left"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                                        <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                                        <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="element py-3 border-bottom">
                                                    <a href="{{$url}}">
                                                        <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                                            <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
                                                        </div>
                                                    </a>
                                                    <div class="content d-inline-block align-middle media">
                                                        <a href="{{$url}}" class="media-left"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                                        <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                                    </div>
                                                </div>
                                                @endif
                                                <?php
                                                }, $sug)
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($music->music_lyric)
                                        <div class="swiper-slide">
                                            <div class="text-song text-gray p-3">
                                                @if(isset($lyric_array['lyric']))
                                                    @if(isset($lyric_array['sub']) && $lyric_array['sub'] != false)
                                                        <div class="nav-link form-group form-check mb-0 autoplay sub-text" style="padding-left: 0px;">
                                                            <input type="checkbox" class="form-check-input display-sub" checked id="display-sub" onclick="display_sub()">
                                                            <label class="form-check-label d-flex align-items-center" for="display-sub">
                                                                <span class="switch"><span class="switch-inner"></span></span>
                                                                <span style="font-size: 15px; color: #4b4b4b; font-family: 'SFProDisplay-Medium'; margin-left: 10px" class="txt">Hiển Thị Sub</span>
                                                            </label>
                                                        </div>
                                                    @endif
                                                    <?php echo $lyric_array['lyric'] ?>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @if($MusicSameArtist)
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="block block_player">
                                            <div class="block_baihat_main block_more">
                                                <?php
                                                $MusicSameArtist = Helpers::getRandLimitArr($MusicSameArtist, LYRIC_DETAIL_NEW_MUSIC);
                                                array_map(function ($item) {
                                                $url = Helpers::listen_url($item);
                                                ?>
                                                <div class="element mb-2">
                                                    <a href="{{$url}}"><div style="background : url(<?php echo Helpers::cover_url($item['cover_id']) ?>) no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div></a>
                                                    <div class="content d-inline-block align-middle">
                                                        <h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6>
                                                        <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                                        <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                                                    </div>
                                                </div>
                                                <?php
                                                }, $MusicSameArtist)
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($VideoSameArtist)
                                    <div class="swiper-slide">
                                        <div class="container">
                                            <div class="block_player block_bxhvideo block_more">
                                                <div class="block_baihat_main block_more">
                                                    <?php
                                                    $VideoSameArtist = Helpers::getRandLimitArr($VideoSameArtist, LYRIC_DETAIL_NEW_ALBUM);
                                                    array_map(function ($item) {
                                                    $url = Helpers::listen_url($item);
                                                    ?>
                                                    <div class="element py-3 border-bottom">
                                                        <a href="{{$url}}">
                                                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14">{{$item['music_length_html']}}</p>
                                                            </div>
                                                        </a>
                                                        <div class="content d-inline-block align-middle">
                                                            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }, $VideoSameArtist);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @if(!$memberVip)
                            <span id="innity-in-post"></span>
                            <!-- BlueSeed - asynchronous code for placement 1658 Chiasenhac Inread Mobile -->
                                <ins class="370d0bec" data-key="77f4a52c12ba04941fa356a9e1bc4f84"></ins>
                                <script async defer src="//aj1010.online/20dc880c.js"></script>
                            @endif

                            <div class="p-3">
                                <div class="block block_comment">
                                    <div class="block_header d-flex flex-row justify-content-between mb-2 music_comment">
                                        <h3 class="main_title text-pink mb-0">Bình luận của bạn</h3><?php echo $music->music_comment ? '<span class="text-gray align-self-end"><span class="number_comment">'.number_format($music->music_comment).'</span> bình luận</span>' : '' ?>
                                    </div>

                                    <div class="block_body_comment">
                                        <div class="block_form_comment">
                                            <form id="form_comment" class="form-comment-0 box_form_comment">
                                                <div class="form-group">
                                                    <textarea rows="3"  name="comment" placeholder="Viết bình luận tại đây..." class="form-control comment"></textarea>
                                                    <input type="hidden" class="music_id" name="music_id" value="{{ $music->music_id }}">
                                                </div>
                                                <div class="form-group text-right">
                                                    <button onclick="postComment(0)" type="submit" class="btn btn-secondary btn-gradien btn-radius send-comment"><span>Đăng Bình Luận</span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="block_all_comment list_comment_list_body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('popupMusic')
<section class="popup">
    <div class="wrap-bottom-sheet"></div>
    <div class="bottom-sheet select-quality text-center popup-download">
        <h4>{{$music->music_title}}</h4>
        <form action="#">
            <div class="container">
                <div class="form-group download_status">
                    <?php
                    if ( isset($file_url[1]['url']) ){
                        echo '<label class="relative">
                                <input id="exampleInputEmail1" value="'. $file_url[1]['url'] .'" type="radio" name="quality" class="form-control d-none"><strong><i class="fa fa-download mr-1 align-middle"></i><span>Download 1 </span><span class="cl-green">'. strtoupper($file_url[1]['type']) .' '. $file_url[1]['label'] .'</span><span> '. $file_url[1]['size'] .'</span></strong>
                            </label>';
                    }
                    if ( isset($file_url[2]['url']) ){
                        echo '<label class="relative">
                                <input id="exampleInputEmail1" value="'. $file_url[2]['url'] .'" type="radio" name="quality" class="form-control d-none"><strong><i class="fa fa-download mr-1 align-middle"></i><span>Download 2 </span><span class="cl-blue">'. strtoupper($file_url[2]['type']) .' '. $file_url[2]['label'] .'</span><span> '. $file_url[2]['size'] .'</span></strong>
                            </label>';
                    }
                    if ( isset($file_url[3]['url']) ){
                        echo '<label class="relative">
                                <input id="exampleInputEmail1" value="'. $file_url[3]['url'] .'" type="radio" name="quality" '.(isset($file_url[4]['url']) ? 'checked=""' : '').' class="form-control d-none"><strong><i class="fa fa-download mr-1 align-middle"></i><span>Download 3 </span><span class="cl-orange">'. strtoupper($file_url[3]['type']) .' '. $file_url[3]['label'] .'</span><span> '. $file_url[3]['size'] .'</span></strong>
                            </label>';
                    }
                    if ( isset($file_url[4]['url']) ){
                        echo '<label class="relative">
                                <input id="exampleInputEmail1" value="'. $file_url[4]['url'] .'" type="radio" name="quality" checked="" class="form-control d-none"><strong><i class="fa fa-download mr-1 align-middle"></i><span>Download 4 </span><span class="cl-pink">'. strtoupper($file_url[4]['type']) .' '. $file_url[4]['label'] .'</span><span> '. $file_url[4]['size'] .'</span></strong>
                            </label>';
                    }
                    if ( isset($file_url[0]['url']) ){
                        echo '<label class="relative">
                                <input id="exampleInputEmail1" value="'. $file_url[0]['url'] .'" type="radio" name="quality" class="form-control d-none"><strong><i class="fa fa-download mr-1 align-middle"></i><span>Download 5 </span><span class="">'. strtoupper($file_url[0]['type']) .' '. $file_url[0]['label'] .'</span><span> '. $file_url[0]['size'] .'</span></strong>
                            </label>';
                    }
                    ?>
                </div>
            </div>
            <div class="group-btn"><a href="#" class="c-btn c-btn-default cancel-download">Hủy</a><a href="javascript:void(0)" onclick="downloadMusic()" class="c-btn c-btn-default c-btn-red">Tải về</a></div>
        </form>
    </div>
    <div class="bottom-sheet text-center popup-playlist">
        <h4>{{$music->music_title}}</h4>
        <div class="container">
            <div class="row">
                <div class="col-4" data-toggle="modal" onclick="addPlaylistTable('<?php echo str_replace("'", "\'", $music->music_title); ?>', '{{$music->music_id}}', '{{isset($music->music_artist) ? $music->music_artist : "false"}}', '{{isset($music->music_artist_id) ? $music->music_artist_id : "false"}}')" data-target="#addPlayList">
                    <div><img src="/images/img_play_plus.png" alt="them vao playlist">
                        <p>Thêm vào playlist online</p>
                    </div>
                </div>
                <div class="col-4 ele-download"><img src="/images/img_download.png" class="icon" alt="tai về">
                    <p>Tải về</p>
                </div>
                <div class="col-4 ele-share"><img src="/images/img_share_mp3.png" class="icon" alt="chia sẻ">
                    <p>Chia sẻ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-sheet text-center popup-share">
        <h4>Chia sẻ</h4>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a class="fb-share-link" href="{{url()->current()}}" title="{{$music->music_title}}"></a>
                </div>
                <div class="col-4">
                    <a class="messenger-share-link" href="{{url()->current()}}" title="{{$music->music_title}}"></a>
                </div>
                <div class="col-4">
                    <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="1" data-color="white" data-customize=true><a class="zalo-share-button" href="javascript:void(0)" title="{{$music->music_title}}"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="addPlayList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-2"><span class="modal-title box_add_playlist"></span>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body p-2">
                    <div class="box_show_playlist box_show_playlist_popup box_show_playlist">
                        <div class="list-group">

                        </div>
                    </div>
                </div>
                <div class="modal-footer p-2">
                    <form action="#" onsubmit="return btnCreatePlaylist('box_text_create_playlist');">
                        <div class="input-group create_playlist">
                            <input type="text" placeholder="Nhập tên playlist mới cần tạo" class="form-control box_text_create_playlist btn-radius">
                            <div class="input-group-append">
                                <button onclick="btnCreatePlaylist('box_text_create_playlist')" type="button" class="btn btn-secondary btn-gradien btn-radius">Tạo Playlist</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('contentJS')
    <script src="https://ssl.p.jwpcdn.com/player/v/8.1.3/jwplayer.js"></script>
    <script>
        var musicId = '<?php echo $music->music_id ?>';
        var artists = "<?php echo $music->music_artist  ?>";
        var artistIds = '<?php echo $music->music_artist_id  ?>';
        var musicAddId = '';
        //////////////////////////
        ////JW Player//////////
        ////////////////////////


        jwplayer.key = "W7zSm81+mmIsg7F+fyHRKhF3ggLkTqtGMhvI92kbqf/ysE99";
        var player = jwplayer('csnplayer');
        var firstPlayer = true;
        <?php
        if($musicSet['type_jw'] != 'video' && !$memberVip) {
        ?>
        // ads
        jwplayer("csnplayerads").setup({
            advertising: {
                client: "vast",
                skipoffset: 5,
                "adschedule": {
                    "myPreroll": {
                        "offset": "pre",
                        "tag": ["https://aj1010.online/zDU-4qBMqJoj_ofK7PbRS97xFbpQ9TOmKul9pvRrIe-ltbt_OXqSaKbDb9sQC_hL8PNOzupz51kNyIpHwN_uomeLOpOZpYm0", "https://delivery.yomedia.vn/vast?pid=cb3dd57d621d48669c11be66df3ec2f6&vast=3&ec=0&ref=[yo_page_url]&w=[player_width]&h=[player_height]&aaid=[yo_device_aaid]&idfa=[yo_device_idfa]", "https://tag.gammaplatform.com/adx/request/?wid=1508317956&zid=1508321486&content_page_url=__page-url__&cb=__random-number__&player_width=__player-width__&player_height=__player-height__&device_id=__device-id__"]
                    },
                    "myPreroll2": {
                        "offset": 1,
                        "tag": ["https://aj1010.online/znPJhHIgCLeojMaRI3Uim0CZr3LmZFSP_eupEBw9VXAxrZsPw0rnraakIFEMP9QpdZa9iHppLTIeJ4nYbiZmCEKdc8MYFMsc", "https://delivery.yomedia.vn/vast?pid=cb3dd57d621d48669c11be66df3ec2f6&vast=3&ec=0&ref=[yo_page_url]&w=[player_width]&h=[player_height]&aaid=[yo_device_aaid]&idfa=[yo_device_idfa]", "https://tag.gammaplatform.com/adx/request/?wid=1508317956&zid=1508321486&content_page_url=__page-url__&cb=__random-number__&player_width=__player-width__&player_height=__player-height__&device_id=__device-id__"]
                    },
                    "myPreroll3": {
                        "offset": 2,
                        "tag": ["https://aj1010.online/znPJhHIgCLeojMaRI3Uim0CZr3LmZFSP_eupEBw9VXAxrZsPw0rnraakIFEMP9QpdZa9iHppLTIeJ4nYbiZmCEKdc8MYFMsc", "https://delivery.yomedia.vn/vast?pid=cb3dd57d621d48669c11be66df3ec2f6&vast=3&ec=0&ref=[yo_page_url]&w=[player_width]&h=[player_height]&aaid=[yo_device_aaid]&idfa=[yo_device_idfa]", "https://tag.gammaplatform.com/adx/request/?wid=1508317956&zid=1508321486&content_page_url=__page-url__&cb=__random-number__&player_width=__player-width__&player_height=__player-height__&device_id=__device-id__"]
                    }
                }
            },
            mute: true,
            width: "100%",
            aspectratio: "16:9",
            autostart: true,
            file: "https://chiasenhac.vn/video/csn-5s.mp4",
            events: {
                "beforeComplete": function () {
                    $('#csnplayerads').remove();
                    $('#bg_blue').show();
                }
            }
        });
        <?php
        }else{
            ?>
            $('#csnplayerads').remove();
            $('#bg_blue').show();
            <?php
        }
        ?>

        player.setup({
            width: '100%',
            height: '88',
            repeat: false,
            aspectratio: "<?php echo $musicSet['type_jw'] == 'video' ? '16:9' : 'false' ?>",
            stretching: 'fill',
            sources: [
                <?php
                $typeJwSource = $musicSet['type_jw'] == 'video' ? 'mp4' : 'mp3';
                for ($i = 0; $i < sizeof($file_url); $i++) {
                    echo '{"file": "' . $file_url[$i]['url'] . '", "label": "' . $file_url[$i]['label'] . '", "type": "' . $typeJwSource . '", "default": ' . (($i == 1) ? 'true' : 'false') . '},';
                }
                ?>
            ],
            title: "<?php echo str_replace("'", "\'", $music->music_title); ?>",
            skin: {
                name: 'nhac'
            },
            mute: false,
            timeSliderAbove: true,
            autostart: false,
            // autostart: false,
            controlbar: "bottom",
            plugins: {
                '<?php echo $musicSet['type_listen'] == 'single' ? '/js/nhac-csn-mobile.js' : '/js/nhac-playlist-mobile.js' ?>': {
                    duration: 20,
                    msisdn: '',
                    package_id: 0,
                    album_id: '0',
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
        jwplayer('csnplayerads').play(false);
        jwplayer('csnplayer').play(true);
        jwplayer().play(true);

        var video_preroll_played = false;
        window.addEventListener('load', function () {
            document.body.addEventListener('touchstart', function (ae) {
                if (video_preroll_played == false) {
                    video_preroll_played = true;
                    jwplayer('csnplayerads').play(false);
                    jwplayer('csnplayer').play(true);
                    jwplayer().play(true);
                }
            }, false)
        }, false);

        var error_count = 0;
        player.on('error', function(message) {
            if (error_count < jwplayer().getQualityLevels().length - 1) {
                setQualityCookie = false;
                jwplayer().setCurrentQuality(error_count);
            } else {
                alertModal('Xin lỗi bài hát này đã bị lỗi! Vui lòng trải nghiệm video khác');
                /* location.href = "/"; */
                $.ajax({
                    url: window.location.origin + '/sys/error_slow_bug',
                    type: "POST",
                    dataType: "json",
                    data: {
                        'url': window.location.href,
                        'display_by': 'mobile'
                    },
                    beforeSend: function () {
                        if (loaded) return false;
                        loaded = true;
                    },
                    success: function (response) {

                    }
                });
            }
            error_count++;
        });
        var device_type = 'mobile';
        var listPlayed = Array();
        var logPlayAudioFlag = false;
        var firstPause = false;

        var embed = 'false';
        var userStatus = 1;
        var firstLoadLyric = false;
        var firstLoadBeforePlay = true;
        var firstLoadUpdateQuality = true;
        var listLyrics = [];
        jwplayer().on('beforePlay', function() {
            //logPlayAudioFlag = true;
            //console.log('set flag again|'+logPlayAudioFlag);
            $('#csnplayer').find('.jw-captions').html($('#hidden_lyrics').html());
            $('#hidden_lyrics').remove();
            // new RabbitLyrics({
            //     element: document.getElementById("lyrics"),
            //     viewMode: 'mini',
            //     onUpdateTimeJw: false
            // });
            <?php
            if($musicSet['type_jw'] != 'video') {
            ?>
            $('.jw-display-icon-display').css('display', 'none')
            <?php
                }
                ?>
            if (firstLoadBeforePlay) {
                firstLoadBeforePlay = false;
                // jw-icon-playback
                setTimeout(function () {
                    $('.stringQ').on('touchstart', function () {
                        if ($('.stringQ').hasClass('jw-open')) {
                            $('.stringQ').removeClass('jw-open');
                        } else {
                            $('.stringQ').addClass('jw-open');
                        }
                    });
                    $('.stringQ .jw-text').on('touchstart', function () {
                        if ($('.stringQ').hasClass('jw-open')) {
                            $('.stringQ').removeClass('jw-open');
                        } else {
                            $('.stringQ').addClass('jw-open');
                        }
                    });
                    // $('.jw-icon-auto-next').on('touchstart', function () {
                    //     if($('.jw-icon-auto-next').hasClass('jw-icon-auto-next-on')){
                    //         $('.jw-icon-auto-next').removeClass('jw-icon-auto-next-on');
                    //         $('.jw-icon-auto-next').addClass('jw-icon-auto-next-off');
                    //         onPlayerAutoNextOff();
                    //     }else{
                    //         $('.jw-icon-auto-next').removeClass('jw-icon-auto-next-off');
                    //         $('.jw-icon-auto-next').addClass('jw-icon-auto-next-on');
                    //         onPlayerAutoNextOn();
                    //     }
                    // });
                    <?php
                    if(($musicSet['type_listen'] == 'playlist' || $musicSet['type_listen'] == 'album') && !empty($musicSet['playlist_music'])) {
                    ?>
                    // $('.csn-repeat-btn').on('touchstart', function () {
                    //     $('.csn-repeat-btn').click();
                    // });
                    // $('.csn-random-btn').on('touchstart', function () {
                    //     $('.csn-random-btn').click();
                    // });
                    <?php
                    }
                    ?>
                }, 300);
            }
        });
        // jwplayer().on('time', function () {
        //     new RabbitLyrics({
        //         element: document.getElementById("lyrics"),
        //         viewMode: 'mini',
        //         onUpdateTimeJw: true
        //     });
        // });
        var setQualityCookie = true;
        jwplayer().on('levels',function(callback){
            if (Cookies.get('label_quality') == 'Lossless') {
                setQualityCookie = false;
                jwplayer().setCurrentQuality(callback.levels.length - 1);
            }
            updateQuality(callback);
            if (sessionStorage.getItem("auto_next") == 'false') {
                $('.jw-icon-auto-next-on').removeClass('jw-icon-auto-next-on').addClass('jw-icon-auto-next-off');
                jwplayer().setConfig({
                    repeat: true
                });
            }
        });
        // jwplayer().onQualityChange(function (callback) {
        //     if (setQualityCookie)
        //         Cookies.set('label_quality', callback.levels[callback.currentQuality].label);
        //     setQualityCookie = true;
        //     updateQuality(callback);
        // })
        jwplayer().on('userInactive', function () {
            <?php
            if($musicSet['type_jw'] != 'video') {
            ?>
            $('#csnplayer').removeClass('jw-flag-user-inactive');
            <?php
                }
                ?>
                $
        })

        function onPlayerAutoNextOn() {
            sessionStorage.setItem("auto_next", true);
            jwplayer().setConfig({
                repeat: false
            });

        }

        function onPlayerAutoNextOff() {
            sessionStorage.setItem("auto_next", false);
            jwplayer().setConfig({
                repeat: true
            });
        }

        function onPlayerAutoNext() {
            AutoPlay(true);
        }

        function onPlayerAutoBack() {
            window.location.href = '<?php echo url()->previous() ?>';
        }

        function generateRandom(min, max, except = array()) {
            var valRad = Math.floor(Math.random() * (max - min + 1)) + min;
            return (except.indexOf(valRad) !== -1 ? generateRandom(min, max, except) : valRad);
        }

        function AutoPlay(float = false) {
            <?php
                if($musicSet['type_listen'] == 'single') {
                ?>
            if (sessionStorage.getItem("auto_next") == 'false' && float == false) {
                return false;
            }
            let sug_first = $('.sug_music').find('.media');
            window.location.href = sug_first.first().find('.media-left').attr('href');
                <?php
                }else{
                ?>
            let recommendation = $('.music_recommendation');
            let nextListen = 1;
            let maxPlaylist = <?php echo count($musicSet['playlist_music']); ?>;
            let activeBool = 0;
            recommendation.find('.card-footer').each(function (index, value) {
                if (activeBool) {
                    nextListen = index + 1;
                    return false;
                }
                if ($(value).hasClass('listen')) {
                    activeBool = index + 1;
                }
            });
            if (sessionStorage.getItem("auto_random") == 'true') {
                let keyPlaylist = (((window.location.pathname).split('.')[0]).split('/'))[2];
                let playlistStore = sessionStorage.getItem(keyPlaylist);
                if (playlistStore) {
                    playlistStore = JSON.parse(playlistStore);
                    if (playlistStore.length == maxPlaylist) {
                        if (sessionStorage.getItem("auto_repeat") == 'none') {
                            sessionStorage.removeItem(keyPlaylist);
                            if (!float)
                                return false;
                        }
                        playlistStore = new Array();
                    }
                } else {
                    playlistStore = new Array();
                    playlistStore.push(activeBool);

                }
                nextListen = generateRandom(1, maxPlaylist, playlistStore);
                playlistStore.push(nextListen);
                sessionStorage.setItem(keyPlaylist, JSON.stringify(playlistStore))
            } else {
                if (sessionStorage.getItem("auto_repeat") == 'none') {
                    if (nextListen == 1 && float == false)
                        return false;
                }
            }
            window.location.href = window.location.pathname + '?playlist=' + nextListen;
            <?php
            }
            ?>
            console.log('next');
        }

        function autoRepeat(T) {
            if (T == 'one') {
                jwplayer().setConfig({
                    repeat: true
                });
                logPlayAudioFlag = true;
                sessionStorage.setItem("auto_repeat", 'one');
            }
            if (T == 'all' || T == 'none') {
                jwplayer().setConfig({
                    repeat: false
                });
                logPlayAudioFlag = false;
                sessionStorage.setItem("auto_repeat", T);
            }
        }

        function autoRandom(F) {
            if (F) {
                sessionStorage.setItem("auto_random", true);
            } else {
                sessionStorage.setItem("auto_random", false);
            }
        }

        jwplayer().on('beforeComplete', function() {
            if (logPlayAudioFlag == false && typeof AutoPlay == 'function') {
                AutoPlay();
            }
        });

        function updateQuality(callback) {
            if (firstLoadUpdateQuality) {
                firstLoadUpdateQuality = false;
                $('.jw-favourite').remove();
                $('.jw-icon-playback').on('touchstart', function () {
                    // alert(1);
                    // $('.jw-icon-playback').click();
                });
            }
            var curQual = jwplayer('csnplayer').getCurrentQuality();
            if (callback['levels'].length == 2) {
                if (!$('.jw-icon-hd').hasClass('stringQ')) {
                    $('.jw-icon-hd').html(callback['levels'][curQual]['label']);
                }
                $('.jw-icon-hd').addClass('stringQ');
                $('.jw-icon-hd').removeClass('jw-icon-hd');
                $('.stringQ').html(callback['levels'][curQual]['label']);
            } else {
                if (!$('.jw-icon-hd').hasClass('stringQ')) {
                    $('.jw-icon-hd').append('<span>' + callback['levels'][curQual]['label'] + '</span>');
                }
                $('.jw-icon-hd').addClass('stringQ');
                $('.jw-icon-hd').removeClass('jw-icon-hd');
                $('.stringQ').find('span').html(callback['levels'][curQual]['label']);
            }
        }

        // btn playlist, download, factories
        $('.cancel-download').click(function (e) {
            $('.wrap-bottom-sheet').hide();
            $('.bottom-sheet').slideUp();
        });
        $('.wrap-bottom-sheet').click(function (e) {
            $(this).hide();
            $('.bottom-sheet').slideUp();
        });
        $('.ele-download .icon').click(function (e) {
            $('.bottom-sheet').slideUp();
            $('.wrap-bottom-sheet').show();
            jQuery('.popup-download').slideDown();
        });
        $('.ele-playlist .icon').click(function (e) {
            $('.bottom-sheet').slideUp();
            $('.wrap-bottom-sheet').show();
            jQuery('.popup-playlist').slideDown();
        });
        $('.ele-share .icon').click(function (e) {
            $('.wrap-bottom-sheet').hide();
            $('.bottom-sheet').slideUp();
            // copyClipboardAction(window.location.href);
            // shareFbLink(e, window.location.href);
            // window.open('https://www.facebook.com/sharer/sharer.php?u=' + window.location.href, '_blank');
            // alertModal('Đã copy địa chỉ vào bộ nhớ máy của bạn.');
            $('.wrap-bottom-sheet').show();
            jQuery('.popup-share').slideDown();
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
        function downloadMusic() {
            var radios = document.getElementsByName('quality');
            for (var i = 0, length = radios.length; i < length; i++) {
                if (radios[i].checked) {
                    $('.wrap-bottom-sheet').hide();
                    $('.bottom-sheet').slideUp();
                    if (i == 3) {
                        window.open(radios[i].value, '_blank');
                    } else {
                        window.open(radios[i].value, '_blank');
                        break;
                    }
                }
            }
            //////////////////////////////
            //// count download ////////
            //////////////////////////////////
            if (!$('.download_status').hasClass('music_downloaded')) {
                $.ajax({
                    url: window.location.origin + '/count/download',
                    type: "POST",
                    dataType: "json",
                    data: {
                        'music_id': '<?php echo $music->music_id; ?>',
                        'cat_id': '<?php echo $music->cat_id; ?>',
                    },
                    beforeSend: function () {
                        if (loaded) return false;
                        loaded = true;
                    },
                    success: function (response) {

                    }
                });
            }
            $('.download_status').addClass('music_downloaded');
        }

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
                window.location.href = '/login?back_url=' + window.location.href;
            return false;
            <?php
                }
                ?>
            if (!textArea.val()) {
                alertModal('Chưa nhập nội dung bình luận.');
                return false;
            }
            $.ajax({
                url: window.location.origin + "/comment/post",
                type: "POST",
                dataType: "html",
                data: {
                    'comment': $('.form-comment-' + formId).find('textarea').val(),
                    'music_id': musicId,
                    'comment_jw_postion': jwplayer().getPosition(),
                    'reply_cmt_id': $('.form-comment-' + formId).find('.reply_cmt_id').val()
                },
                beforeSend: function () {
                    if (loaded) return false;
                    loaded = true;
                },
                statusCode: {
                    401: function () {
                        window.location.href = '/login?back_url=' + window.location.href;
                        return false;
                    }
                },
                success: function (response) {
                    $('.form-comment-' + formId).find('textarea').val('');
                    if (formId == 0) {
                        if (pageComment == 1) {
                            $('.list_comment_list_body').prepend(response);
                            $('.list_comment_list_body .reply_comment').first().on('click', function () {
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
                        } else {
                            loadPageComment(window.location.origin + '/binh-luan/get_ajax?page=1');
                        }
                    } else {
                        $('.comment-reply-' + formId).prepend(response);
                    }
                    $('.music_comment .number_comment').html(parseInt($('.music_comment .number_comment').html()) + 1);
                    $('.box_form_comment').submit(false);
                    swiper2.update();
                }
            });
            return false;
        }

        function loadPageComment(url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "html",
                data: {'music_id': musicId},
                beforeSend: function () {
                    if (loaded) return false;
                    loaded = true;
                    // $('.list_comment .list_body').html('<div class="modal-body" style="text-align: center;"><img src="/imgs/comet-spinner.gif" width="100px" /></div>');
                },
                success: function (response) {
                    $('.list_comment_list_body').html(response);
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
                    swiper2.update();
                }
            });
        }

        $(window).scroll(function (event) {
            var st = $(this).scrollTop();
            if (loadComment) {
                if (st > $('#form_comment').offset().top - 900) {
                    loadPageComment(window.location.origin + '/binh-luan/get_ajax?page=<?php echo $_GET['comment_page'] ?? 1 ?>');
                    pageComment = <?php echo $_GET['comment_page'] ?? 1 ?>;
                    loadComment = false;
                }
            }
        });
        //// display Sub
        var displaySub = $('.sub_line');
        if (sessionStorage.getItem("display_sub") == 'true') {
            displaySub.css('display', 'block');
            $('#display-sub').attr("checked", "checked");
        } else {
            if (sessionStorage.getItem("display_sub") == null) {
                sessionStorage.setItem("display_sub", true);
                displaySub.css('display', 'block');
            } else {
                $('#display-sub').removeAttr("checked");
            }
        }

        function display_sub() {
            if (sessionStorage.getItem("display_sub") == 'true') {
                sessionStorage.setItem("display_sub", false);
                displaySub.css('display', 'none');
            } else {
                sessionStorage.setItem("display_sub", true);
                displaySub.css('display', 'block');
            }
        }

        //////////////////////////
        ////Add Playlist////////
        ////////////////////////
        function btnCreatePlaylist(box_text_create_playlist) {
            var titlePlaylist = $('.' + box_text_create_playlist);
            <?php
                if(!Auth::check()) {
                ?>
                window.location.href = '/login?back_url=' + window.location.href;
            return false;
            <?php
                }
                ?>
            if (!titlePlaylist.val()) {
                alertModal('Bạn chưa nhập tên playlist mới.');
                return false;
            }
            $.ajax({
                url: window.location.origin + "/user/playlist/create-playlist",
                type: "POST",
                dataType: "json",
                data: {'music_id': musicId, 'playlist_title': titlePlaylist.val()},
                beforeSend: function () {
                    if (loaded) return false;
                    loaded = true;
                },
                success: function (data) {
                    if (data.success) {
                        $('.box_show_playlist_popup .list-group').prepend(stringItemBoxPlaylist(data.data.playlist_title, data.data.playlist_music_total, data.data.playlist_id, false, data.data.playlist_time));
                        titlePlaylist.val("");
                        $('.box_show_playlist').animate({scrollTop: 0}, 'slow');
                    } else {
                        alertModal(data.message);
                    }
                }
            });
        }

        function loadPlayList(musicId) {
            <?php
                if(!Auth::check()) {
                ?>
                window.location.href = '/login?back_url=' + window.location.href;
            return false;
            <?php
            }
            ?>
            $.ajax({
                url: window.location.origin + "/user/playlist/danh-sach-playlist",
                type: "GET",
                dataType: "json",
                data: {music_id: musicId},
                beforeSend: function () {
                    $('.box_show_playlist .list-group').html('');
                    if (loaded) return false;
                    loaded = true;
                },
                success: function (data) {
                    if (data.success) {
                        var stringHtml = '';
                        var stringBoxHtml = '';
                        if (data.data) {
                            $.each(data.data, function (index, val) {
                                stringBoxHtml += stringItemBoxPlaylist(val.playlist_title, val.playlist_music_total, val.playlist_id, val.music_exists, val.playlist_time);
                            });
                        }
                        $('.box_show_playlist .list-group').html(stringBoxHtml);
                    } else {
                        alertModal(data.message);
                    }

                }
            });
        }

        function stringItemBoxPlaylist(playlist_title, playlist_music_total, playlist_id, music_exist, playlist_time) {
            return '<div onclick="addBoxMusicPlaylist(' + playlist_id + ')" class="item playlist_id_' + playlist_id + ' ' + (music_exist ? 'music-exists' : '') + '"><a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex title_playlist">' + playlist_title + ' (<span>' + playlist_music_total + '</span>)' + (music_exist ? '<i class="material-icons icon-box-playlist"> check </i>' : '') + '</a></div>';
        }

        var boxMusicId = '';
        var boxArtists = '';
        var boxArtistIds = '';

        function addPlaylistTable(musicName, setId, setArtist, setArtistId) {
            $('.bottom-sheet').slideUp();
            <?php
                if(!Auth::check()) {
                ?>
                window.location.href = '/login?back_url=' + window.location.href;
            return false;
            <?php
                }
                ?>
                boxMusicId = setId;
            boxArtists = setArtist;
            boxArtistIds = setArtistId;
            $('.box_add_playlist').html('Thêm bài hát <span class="text-pink">' + musicName + '</span> vào danh sách Playlist');
            loadPlayList(setId);
        }

        function addBoxMusicPlaylist(playlist_id) {
            addMusicPlaylist(playlist_id, boxMusicId, boxArtists, boxArtistIds, 'box');
        }

        function addMusicPlaylist(playlistId, musicAddId, artistAdd, artistIdAdd, type = 'tab') {
            const playlistIdSelect = $('.playlist_id_' + playlistId);
            var countPlaylist = playlistIdSelect.find('.title_playlist span');
            let music_id = (musicAddId == false ? musicId : musicAddId);
            $.ajax({
                url: window.location.origin + "/user/playlist/add-music-playlist",
                type: "POST",
                dataType: "json",
                data: {
                    'playlist_id': playlistId,
                    'music_id': music_id,
                    'artist': (artistAdd == false ? artists : artistAdd),
                    'artist_id': (artistIdAdd == false ? artistIds : artistIdAdd)
                },
                beforeSend: function () {
                    if (loaded) return false;
                    loaded = true;
                    if (playlistIdSelect.hasClass('music-exists')) {
                        countPlaylist.html(parseInt(countPlaylist.html()) - 1);
                        playlistIdSelect.removeClass('music-exists');
                        playlistIdSelect.find('.material-icons').remove();
                    } else {
                        countPlaylist.html(parseInt(countPlaylist.html()) + 1);
                        playlistIdSelect.addClass('music-exists');
                        playlistIdSelect.find('a').prepend('<i class="material-icons icon-box-playlist"> check </i>');
                    }
                },
                success: function (data) {
                    if (data.success) {
                        if (type == 'box' && music_id == musicId) {
                            if ($('.add_playlist').hasClass('active')) {
                                type = 'all';
                            }
                        }
                        if (data.data) {
                        } else {
                        }
                    } else {
                        alertModal(data.message);
                    }
                }
            });
        }

        $('.toggle_wishlist').click(function (e) {
            <?php
                if(!Auth::check()) {
                ?>
                window.location.href = '/login?back_url=' + window.location.href;
            return false;
                <?php
                }
                ?>
            let falgFav = $('.toggle_wishlist').hasClass('selector');
            $.ajax({
                url: window.location.origin + '/music/favourite',
                type: "POST",
                dataType: "json",
                data: {
                    'type': falgFav,
                    'type_of': '<?php echo $musicSet['type_jw'] ?>',
                    'name': '<?php echo str_replace("'", "\'", $music->music_title); ?>',
                    'music_id': '<?php echo $music->music_id; ?>',
                },
                beforeSend: function () {
                    if (loaded) return false;
                    loaded = true;
                },
                success: function (response) {
                    if (response.success) {

                    } else {
                        alertModal(data.message);
                    }
                }
            });
        });
    </script>
    @if($musicSet['type_jw'] != 'video')
        <style>
            .jw-icon-rewind {
                display: none !important;
            }

            .jw-icon-fullscreen, .jw-title-primary {
                display: none !important;
            }
        </style>
    @endif
    @if(($musicSet['type_listen'] == 'playlist' || $musicSet['type_listen'] == 'album') && !empty($musicSet['playlist_music']))
        @if(!(isset($_GET['playlist'])) || $_GET['playlist'] == 1)
            <style>
                .jw-icon-backsong {
                    display: none !important;
                }
            </style>
        @endif
    @endif
    <style>
        .jw-flag-time-slider-above:not(.jw-flag-ads-googleima).jwplayer .jw-group > .jw-icon, .jw-flag-time-slider-above:not(.jw-flag-ads-googleima).jwplayer .jw-group > .jw-text {
            height: 40px;
        }

        .jw-icon-volume {
            display: none;
        }
        .jw-flag-small-player:not(.jw-flag-audio-player):not(.jw-flag-ads) .jw-controlbar .jw-button-container>.jw-icon-rewind, .jw-flag-small-player:not(.jw-flag-audio-player):not(.jw-flag-ads) .jw-controlbar .jw-button-container>.jw-icon-next, .jw-flag-small-player:not(.jw-flag-audio-player):not(.jw-flag-ads) .jw-controlbar .jw-button-container>.jw-icon-playback {
            display: flex;
        }
    </style>

    <iframe frameborder="0" allowtransparency="true" height="0" width="0" marginheight="0" marginwidth="0" vspace="0" hspace="0" src="https://hb.gammaplatform.com/adx/usersync"></iframe>
@endsection
