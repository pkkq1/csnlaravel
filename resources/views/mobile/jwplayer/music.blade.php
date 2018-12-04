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
                            <div style="background: url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/3/4/1/f/341f617927f5dd169bc6618d9b328e4b.jpg') no-repeat center;background-size: cover;padding-bottom: 70%;" class="image bg-blur"></div>
                            <div style="background: url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/3/4/1/f/341f617927f5dd169bc6618d9b328e4b.jpg') no-repeat center;background-size: cover;padding: 20%;" class="image-main"></div>
                            <div class="player_media"></div>
                        </div>
                        <div class="title p-3 relative">
                            <div>
                                <h6 class="name_song mb-2">Trái tim mùa đông</h6>
                                <p class="text-pink mb-2">Camila Cabello ft Young Thug</p>
                                <p class="text-gray m-0">8.000.00 lượt nghe - 4.000 lượt thích</p>
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
                                <div class="swiper-slide selected"><span class="d-inline-block align-middle">Bình luận</span></div>
                                <div class="swiper-slide"><span class="d-inline-block align-middle">Playlist</span></div>
                                <div class="swiper-slide"><span class="d-inline-block align-middle">Lyric</span></div>
                                <div class="swiper-slide"><a class="d-inline-block align-middle">Cùng ca cĩ</a></div>
                                <div class="swiper-slide"><a class="d-inline-block align-middle">Cùng thể loại</a></div>
                            </div>
                        </div>
                        <!-- swiper2-->
                        <div class="swiper-container swiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="block block_comment">
                                            <div class="block_header d-flex flex-row justify-content-between mb-2">
                                                <h3 class="main_title text-pink mb-0">Bình luận của bạn</h3><span class="text-gray align-self-end">20 bình luận</span>
                                            </div>
                                            <div class="block_body_comment">
                                                <div class="block_form_comment">
                                                    <form id="form_comment">
                                                        <div class="form-group">
                                                            <textarea rows="3" placeholder="Viết bình luận tại đây..." class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group text-right">
                                                            <button type="submit" class="btn btn-secondary btn-gradien btn-radius send-comment"><span>Đăng Bình Luận</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="block_all_comment">
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
                                                    <div class="area_comment d-flex">
                                                        <div align="top" class="avatar user_comment py-2"><img src="https://graph.facebook.com/v3.0/1928096143946677/picture?width=1920" alt=""></div>
                                                        <div class="content_comment text-left pl-2 py-2">
                                                            <div class="item position_relative">
                                                                <div class="body_comment">
                                                                    <div class="infor"><strong class="author">Quang vinh</strong><span class="text-gray">at</span>
                                                                        <time>00:02</time>
                                                                    </div>
                                                                    <div class="detail">
                                                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elitadipisicing elit.</p>
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
                                <div class="swiper-slide">
                                    <div class="text-song text-gray p-3">Produced by Rhymastic <br>© SpaceSpeakers 2017<br><br>[Verse 1]
                                        Xin những bối rối này cứ thế lên ngôi <br>Xin con tim rẽ lối tìm giây phút nghẹn lời<br>Chạm nhau mang theo gọi mời<br><br>Xin cho ta tan vào những đắm đuối miên man<br>Khi em ghé ngang đời chợt mang sắc hương thiên đàng <br>Và cho những ấm áp lại đến lấp kín nhân gian<br>Ngày ta yên vui cùng nàng<br><br>
                                    </div>
                                </div>
                                <div class="swiper-slide">content 3</div>
                                <div class="swiper-slide">content 4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('contentJS')


@endsection