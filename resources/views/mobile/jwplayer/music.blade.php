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
$lyric_array = Helpers::lyric_to_web($music->music_lyric);
$artistHtml = Helpers::rawHtmlArtists($music->music_artist_id, $music->music_artist);
$sug = [];
$sug = Helpers::getRandLimitArr($typeDup, LIMIT_SUG_MUSIC - count($titleDup) + 3);
?>
@section('contentCSS')
    <link href="{{env('APP_URL')}}/node_modules/rabbit-lyrics/dist/rabbit-lyrics.css" rel="stylesheet" type="text/css"/>
    <script src="{{env('APP_URL')}}/node_modules/rabbit-lyrics/dist/rabbit-lyrics.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/csn-jwplayer.css">
@endsection

@extends('mobile.layouts.app')
@section('content')
    <div class="header">
        <div class="header_top">
            <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            </nav>
        </div>
    </div>
    <main class="main main_player">
        <div class="sidebar_top">
            <div id="pills-tabContent" class="tab-content">
                <div id="pills-thongtin" role="tabpanel" aria-labelledby="pills-thongtin-tab" class="tab-pane fade active show">
                    <div class="block_thongtin">
                        <div class="infor_main">
                            <div style="background: url('{{Helpers::cover_url($music->cover_id)}}') no-repeat center;background-size: cover;padding-bottom: 70%;" class="image bg-blur"></div>
                            <div style="background: url('{{Helpers::cover_url($music->cover_id)}}') no-repeat center;background-size: cover;padding: 20%;" class="image-main"></div>
                            <div class="player_media"></div>
                        </div>
                        <div class="title p-3 relative">
                            <div>
                                <h6 class="name_song mb-2">{{$music->music_title}}</h6>
                                <p class="text-pink mb-2"><?php echo $artistHtml ?></p>
                                <p class="text-gray m-0">{{number_format($music->music_listen)}} lượt nghe</p>
                            </div>
                            <div class="block_button d-flex justify-content-between">
                                <div class="element ele-playlist"><img src="/images/img_like_black.png" alt="yeu thich" class="icon"></div>
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
                                @if($music->music_lyric)
                                    <div class="swiper-slide {{$firstSeleced ? 'selected' : ''}}"><span class="d-inline-block align-middle">Lyric</span></div>
                                    <?php $firstSeleced = false; ?>
                                @endif
                                <div class="swiper-slide {{$firstSeleced ? 'selected' : ''}}"><a class="d-inline-block align-middle">Gợi ý</a></div>
                                @if($MusicSameArtist)
                                    <div class="swiper-slide"><a class="d-inline-block align-middle">Cùng ca cĩ</a></div>
                                @endif
                                @if($VideoSameArtist)
                                    <div class="swiper-slide"><a class="d-inline-block align-middle">Video cùng ca cĩ</a></div>
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
                                        <div class="block block_player {{$musicSet['type_jw'] == 'video' ? 'block_bxhvideo' : ''}}">
                                            <div class="block_baihat_main block_more">
                                                <?php
                                                array_map(function ($i, $item) use($music, $musicSet) {
                                                $url = Helpers::listen_url($item);
                                                $urlAlbum = url()->current() . '?playlist='.++$i;
                                                $item['music_artist_html'] = $item['music_artist_html'] ?? Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']);
                                                $item['music_bitrate_html'] = $item['music_bitrate_html'] ?? ($musicSet['type_jw'] != 'video' ? Helpers::bitrate2str($item['music_bitrate']) : Helpers::size2str($item['music_width'], $item['music_height']));
                                                ?>
                                                @if($musicSet['type_jw'] != 'video')
                                                    <div class="element mb-2 {{($music->music_id == $item['music_id'] ? (count($musicSet['playlist_music']) > 1 ? 'listen' : '') : '')}}" id="music-listen-{{$item['music_id']}}">
                                                        <a href="{{$urlAlbum}}"><div style="background : url(<?php echo Helpers::cover_url($item['cover_id']) ?>) no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div></a>
                                                        <div class="content d-inline-block align-middle">
                                                            <a href="{{$urlAlbum}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
                                                            <p class="name_singer text-gray mb-1 author"><?php echo $item['music_artist_html']; ?></p>
                                                            <p class="loss text-pink mb-0"><?php echo $item['music_bitrate_html']; ?></p>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="element py-3 border-bottom {{($music->music_id == $item['music_id'] ? (count($musicSet['playlist_music']) > 1 ? 'listen' : '') : '')}}" id="music-listen-{{$item['music_id']}}">
                                                        <a href="{{$urlAlbum}}">
                                                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
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
                                @if($music->music_lyric)
                                <div class="swiper-slide">
                                    <div class="text-song text-gray p-3">
                                        @if(isset($lyric_array['sub']) && $lyric_array['sub'] != false)
                                            <div class="nav-link form-group form-check mb-0 autoplay" style="padding-left: 0px;">
                                                <input type="checkbox" class="form-check-input display-sub" id="display-sub" onclick="display_sub()">
                                                <label class="form-check-label d-flex align-items-center" for="display-sub">
                                                    <span class="switch"><span class="switch-inner"></span></span>
                                                    <span style="font-size: 15px; color: #4b4b4b; font-family: 'SFProDisplay-Medium'; margin-left: 10px" class="txt">Hiển Thị Sub</span>
                                                </label>
                                            </div>
                                        @endif
                                        <?php echo $lyric_array['lyric'] ?>
                                    </div>
                                </div>
                                @endif
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="block block_player {{!empty($video) ? 'block_bxhvideo' : ''}}">
                                            <div class="block_baihat_main block_more">
                                                @if(!empty($video))
                                                    <?php
                                                    $urlVideo = Helpers::listen_url($video);
                                                    ?>
                                                    <div class="box_header d-flex justify-content-between align-items-end">
                                                        <h5 class="title m-0">MV của bài hát</h5>
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
                                                    <div class="content d-inline-block align-middle">
                                                        <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
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
                                                    <div class="content d-inline-block align-middle">
                                                        <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6></a>
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
                                            <div class="block block_player block_bxhvideo block_more">
                                                <div class="block_baihat_main block_more">
                                                    <?php
                                                    $VideoSameArtist = Helpers::getRandLimitArr($VideoSameArtist, LYRIC_DETAIL_NEW_ALBUM);
                                                    array_map(function ($item) {
                                                    $url = Helpers::listen_url($item);
                                                    ?>
                                                    <div class="element py-3 border-bottom">
                                                        <a href="{{$url}}">
                                                            <div class="image mr-2 d-inline-block align-middle" style="background : url({{Helpers::thumbnail_url($item)}}) no-repeat center;background-size: cover;">
                                                                <p class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"> {{$item['music_length'] >= 3600 ? gmdate("H:i:s", $item['music_length']) : gmdate("i:s", $item['music_length'])}}</p>
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
        <h4>Trong trí nhớ của anh</h4>
        <form action="#">
            <div class="container">
                <div class="form-group">
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
        <h4>Trong trí nhớ của anh</h4>
        <div class="container">
            <div class="row">
                <div class="col-4"><img src="/images/img_like_black.png" alt="yêu thích">
                    <p>Yêu thích</p>
                </div>
                <div class="col-4">
                    <div data-toggle="modal" data-target="#addPlayList"><img src="/images/img_play_plus.png" alt="them vao playlist">
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
    <div id="addPlayList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-2"><span class="modal-title">Thêm bài hát<span class="text-pink m-1">Chạm Khẽ Tim Anh Một Chút Thôi</span>vào danh sách Playlist</span>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body p-2">
                    <div class="box_show_playlist box_show_playlist_popup">
                        <div class="list-group">
                            <div onclick="addBoxMusicPlaylist(131)" class="item playlist_id_131"><a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex title_playlist">vvvvvvvvvvvvv (<span>0</span>)</a></div>
                            <div onclick="addBoxMusicPlaylist(130)" class="item playlist_id_130"><a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex title_playlist">wwwwwwwwwwwwwww (<span>0</span>)</a></div>
                            <div onclick="addBoxMusicPlaylist(129)" class="item playlist_id_129"><a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex title_playlist">wwwwwwwwwwwwwww (<span>1</span>)</a></div>
                            <div onclick="addBoxMusicPlaylist(128)" class="item playlist_id_128"><a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex title_playlist">wwwwwwwwwwwww (<span>0</span>)</a></div>
                            <div onclick="addBoxMusicPlaylist(127)" class="item playlist_id_127"><a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex title_playlist">wwwwwwwww (<span>0</span>)</a></div>
                            <div onclick="addBoxMusicPlaylist(126)" class="item playlist_id_126"><a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex title_playlist">vvvvv (<span>0</span>)</a></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-2">
                    <form action="">
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

<script>
    var musicId = '<?php echo $music->music_id ?>';
    var artists = "<?php echo $music->music_artist  ?>";
    var artistIds = '<?php echo $music->music_artist_id  ?>';
    var musicAddId = '';


    $('.cancel-download').click(function(e) {
        $('.wrap-bottom-sheet').hide();
        $('.bottom-sheet').slideUp();
    });
    $('.wrap-bottom-sheet').click(function(e) {
        $(this).hide();
        $('.bottom-sheet').slideUp();
    });
    $('.ele-download .icon').click(function(e) {
        $('.bottom-sheet').slideUp();
        $('.wrap-bottom-sheet').show();
        jQuery('.popup-download').slideDown();
    });
    $('.ele-playlist .icon').click(function(e) {
        $('.bottom-sheet').slideUp();
        $('.wrap-bottom-sheet').show();
        jQuery('.popup-playlist').slideDown();
    });
    $('.ele-share .icon').click(function(e) {
        $('.wrap-bottom-sheet').hide();
        $('.bottom-sheet').slideUp();
        copyClipboardAction(window.location.href);
        alertModal('Đã copy địa chỉ vào bộ nhớ máy của bạn.');
    });
    function downloadMusic() {
        var radios = document.getElementsByName('quality');
        for (var i = 0, length = radios.length; i < length; i++)
        {
            if (radios[i].checked)
            {
                window.open(radios[i].value, '_blank');
                break;
            }
        }
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
                if(loaded) return false;
                loaded = true;
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
                    }else{
                        loadPageComment('/binh-luan/get_ajax?page=1');
                    }
                }else{
                    $('.comment-reply-' + formId).prepend(response);
                }
                $('.music_comment .number_comment').html(parseInt($('.music_comment .number_comment').html()) + 1);
                $('.box_form_comment').submit(false);
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
                if(loaded) return false;
                loaded = true;
                // $('.list_comment .list_body').html('<div class="modal-body" style="text-align: center;"><img src="/imgs/comet-spinner.gif" width="100px" /></div>');
            },
            success: function(response) {
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
            }
        });
    }
    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        if(loadComment) {
            if (st > $('#form_comment').offset().top - 700){
                loadPageComment('/binh-luan/get_ajax?page=<?php echo $_GET['comment_page'] ?? 1 ?>');
                pageComment = <?php echo $_GET['comment_page'] ?? 1 ?>;
                loadComment = false;
            }
        }
    });
    //// display Sub
    var displaySub = $('.sub_line');
    if(sessionStorage.getItem("display_sub") == 'true') {
        displaySub.css('display', 'block');
        $('#display-sub').attr("checked", "checked");
    }
    function display_sub() {
        if(sessionStorage.getItem("display_sub") == 'true') {
            sessionStorage.setItem("display_sub", false);
            displaySub.css('display', 'none');
        }else{
            sessionStorage.setItem("display_sub", true);
            displaySub.css('display', 'block');
        }
    }
</script>


@endsection