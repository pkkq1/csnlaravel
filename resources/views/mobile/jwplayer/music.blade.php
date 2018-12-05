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
                                <div class="element"><img src="/images/img_like_black.png" alt="yeu thich"></div>
                                <div class="element"><img src="/images/img_share_mp3.png" alt="chia se" class="icon"></div>
                                <div class="element"><img src="/images/img_download.png" alt="tai ve" class="icon"></div>
                            </div>
                        </div>
                        <!-- swiper1-->
                        <div data-itemmenu="4" class="swiper-container swiper1">
                            <div class="swiper-wrapper">
                                <?php
                                    if(($musicSet['type_listen'] == 'playlist' || $musicSet['type_listen'] == 'album') && !empty($musicSet['playlist_music'])){
                                        ?>
                                        <div class="swiper-slide selected"><span class="d-inline-block align-middle">Playlist</span></div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="swiper-slide selected"><span class="d-inline-block align-middle">Lyric</span></div>
                                        <?php
                                    }
                                ?>
                                <div class="swiper-slide"><a class="d-inline-block align-middle">Gợi ý</a></div>
                                @if($MusicSameArtist)
                                    <div class="swiper-slide"><a class="d-inline-block align-middle">Cùng ca cĩ</a></div>
                                @endif
                                @if($VideoSameArtist)
                                    <div class="swiper-slide"><a class="d-inline-block align-middle">Video cùng ca cĩ</a></div>
                                @endif
                                <div onclick="firstLoadComment();" class="swiper-slide"><span class="d-inline-block align-middle">Bình luận</span></div>
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
                                            <div class="block block_player">
                                                <div class="block_baihat_main block_more">
                                                    <div class="element mb-2">
                                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                                        <div class="content d-inline-block align-middle">
                                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                            <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                                        </div>
                                                    </div>
                                                    <div class="element mb-2">
                                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                                        <div class="content d-inline-block align-middle">
                                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                            <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                                        </div>
                                                    </div>
                                                    <div class="element mb-2">
                                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                                        <div class="content d-inline-block align-middle">
                                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                            <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                                        </div>
                                                    </div>
                                                    <div class="element mb-2">
                                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                                        <div class="content d-inline-block align-middle">
                                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                            <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                                        </div>
                                                    </div>
                                                    <div class="element mb-2">
                                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                                        <div class="content d-inline-block align-middle">
                                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                            <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                                        </div>
                                                    </div>
                                                    <div class="element mb-2">
                                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                                        <div class="content d-inline-block align-middle">
                                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                            <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                                        </div>
                                                    </div>
                                                    <div class="element mb-2">
                                                        <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image image100px mr-2 d-inline-block align-middle"></div>
                                                        <div class="content d-inline-block align-middle">
                                                            <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                                            <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                                            <p class="loss text-pink mb-0">Lossless</p><img src="/images/img_dot_gray.png" class="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="text-song text-gray p-3">Produced by Rhymastic <br>© SpaceSpeakers 2017<br><br>[Verse 1]
                                                Xin những bối rối này cứ thế lên ngôi <br>Xin con tim rẽ lối tìm giây phút nghẹn lời<br>Chạm nhau mang theo gọi mời<br><br>Xin cho ta tan vào những đắm đuối miên man<br>Khi em ghé ngang đời chợt mang sắc hương thiên đàng <br>Và cho những ấm áp lại đến lấp kín nhân gian<br>Ngày ta yên vui cùng nàng<br><br>
                                            </div>
                                        </div>
                                        <?php
                                }
                                ?>
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="block block_player block_bxhvideo {{!empty($video) ? 'block_bxhvideo' : ''}}">
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
                                                        <h6 class="name_song text-black mb-1 card-title">{{$item['music_title']}}</h6>
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
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="block block_comment">
                                            <div class="block_header d-flex flex-row justify-content-between mb-2">
                                                <h3 class="main_title text-pink mb-0">Bình luận của bạn</h3><?php echo $music->music_comment ? '<span class="text-gray align-self-end">'.number_format($music->music_comment).' bình luận</span>' : '' ?>
                                            </div>
                                            <div class="block_body_comment">
                                                <div class="block_form_comment">
                                                    <form id="form_comment box_form_comment">
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
                                                    <div class="area_comment d-flex">
                                                        <div align="top" class="avatar user_comment py-2"><img src="https://graph.facebook.com/v3.0/1928096143946677/picture?width=1920" alt=""></div>
                                                        <div class="content_comment text-left pl-2 py-2">
                                                            <div class="item position_relative">
                                                                <div class="body_comment">
                                                                    <div class="infor"><strong class="author">Quang vinh</strong><span class="text-gray">at</span>
                                                                        <time>00:02</time>
                                                                    </div>
                                                                    <div class="detail">
                                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                    </div>
                                                                    <div class="data_time text-gray text-right"><span>3 ngày trước</span></div>
                                                                </div>
                                                                <div class="block_form_comment"><a href="" class="reply_comment">Trả lời</a>
                                                                    <form class="form_reply_comment">
                                                                        <div class="form-group mb-2">
                                                                            <textarea rows="1" placeholder="Viết bình luận tại đây..." class="form-control p-2"></textarea>
                                                                        </div>
                                                                        <div class="form-group text-left m-0">
                                                                            <button type="submit" class="btn btn-secondary btn-gradien btn-radius send-comment"><span>Gửi</span></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="post_comment_reply">
                                                                    <div class="area_comment_reply d-flex">
                                                                        <div align="top" class="avatar user_comment py-2"><img src="https://graph.facebook.com/v3.0/1928096143946677/picture?width=1920" alt=""></div>
                                                                        <div class="content_comment text-left pl-2 py-2">
                                                                            <div class="item position_relative">
                                                                                <div class="body_comment">
                                                                                    <div class="infor"><strong class="author">Quang vinh</strong><span class="text-gray">at</span>
                                                                                        <time>00:02</time>
                                                                                    </div>
                                                                                    <div class="detail">
                                                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                                    </div>
                                                                                    <div class="data_time text-gray text-left"><span>3 ngày trước</span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="area_comment_reply d-flex">
                                                                        <div align="top" class="avatar user_comment py-2"><img src="https://graph.facebook.com/v3.0/1928096143946677/picture?width=1920" alt=""></div>
                                                                        <div class="content_comment text-left pl-2 py-2">
                                                                            <div class="item position_relative">
                                                                                <div class="body_comment">
                                                                                    <div class="infor"><strong class="author">Quang vinh</strong><span class="text-gray">at</span>
                                                                                        <time>00:02</time>
                                                                                    </div>
                                                                                    <div class="detail">
                                                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                                    </div>
                                                                                    <div class="data_time text-gray text-right"><span>3 ngày trước</span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="area_comment_reply d-flex">
                                                                        <div align="top" class="avatar user_comment py-2"><img src="https://graph.facebook.com/v3.0/1928096143946677/picture?width=1920" alt=""></div>
                                                                        <div class="content_comment text-left pl-2 py-2">
                                                                            <div class="item position_relative">
                                                                                <div class="body_comment">
                                                                                    <div class="infor"><strong class="author">Quang vinh</strong><span class="text-gray">at</span>
                                                                                        <time>00:02</time>
                                                                                    </div>
                                                                                    <div class="detail">
                                                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                                    </div>
                                                                                    <div class="data_time text-gray text-right"><span>3 ngày trước</span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<div class="popup">
    <div class="wrap-bottom-sheet"></div>
    <div class="bottom-sheet text-center">
        <h4>Trong trí nhớ của anh</h4>
        <div class="container">
            <div class="row">
                <div class="col-4"><img src="/images/img_like_black.png" alt="yeu thich">
                    <p>Yêu thích</p>
                </div>
                <div class="col-4"><img src="/images/img_play_plus.png" alt="them vao playlist">
                    <p>Thêm vào playlist online</p>
                </div>
                <div class="col-4"><img src="/images/img_download.png" alt="tai ve">
                    <p>Tải về</p>
                </div>
                <div class="col-4"><img src="/images/img_share_mp3.png" alt="chia se">
                    <p>Chia sẻ</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('contentJS')

<script>
    var musicId = '<?php echo $music->music_id ?>';
    var artists = "<?php echo $music->music_artist  ?>";
    var artistIds = '<?php echo $music->music_artist_id  ?>';
    var musicAddId = '';






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
                        $('.ul_comments').prepend(response);
                        $('.ul_comments .reply_comment').first().on('click', function () {
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
                $('.music_comment span').html(parseInt($('.music_comment span').html()) + 1);
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
    function firstLoadComment() {
        loadPageComment('/binh-luan/get_ajax?page=<?php echo $_GET['comment_page'] ?? 1 ?>');
        pageComment = <?php echo $_GET['comment_page'] ?? 1 ?>;
        loadComment = false;
    }
</script>


@endsection