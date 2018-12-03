<?php
use App\Library\Helpers;
?>
<sectiton class="block_popup">
    <div class="popup">
        <div class="wrap-bottom-sheet"></div>
        <div class="bottom-sheet text-center">
            <h4>Trong trí nhớ của anh</h4>
            <div class="container">
                <div class="row">
                    <div class="col-4"><img src="images/img_like_black.png" alt="yeu thich">
                        <p>Yêu thích</p>
                    </div>
                    <div class="col-4"><img src="images/img_play_plus.png" alt="them vao playlist">
                        <p>Thêm vào playlist online</p>
                    </div>
                    <div class="col-4"><img src="images/img_download.png" alt="tai ve">
                        <p>Tải về</p>
                    </div>
                    <div class="col-4"><img src="images/img_share_mp3.png" alt="chia se">
                        <p>Chia sẻ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menumain">
        <div id="navbar_main_header_top">
            <div class="profile">
                <div style="background: url(https://zmp3-photo.zadn.vn/thumb/240_240/avatars/6/5/65df30e0c4787c0c26fe601c30b5df48_1509944158.jpg) no-repeat center;background-size: cover;" class="image mr-3 d-inline-block align-middle rounded-circle"></div>
                <div class="content d-inline-block align-middle">
                    <h5 class="text-white">Alice Holmes</h5>
                    <p class="text-gray m-0">alice.holmes@lovely.com</p>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h2>Tài khoản</h2>
                </li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_user.png" alt="user" class="icon"> Đăng nhập</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_playlist.png" alt="playlist" class="icon"> Playlist</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_clock.png" alt="playlist" class="icon"> Bài hát vừa nghe</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_rating.png" alt="playlist" class="icon"> Bài hát yêu thích</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h2>NHẠC OFFLINE</h2>
                </li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_in_device.png" alt="playlist" class="icon"> Nhạc trong máy</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_playlist.png" alt="playlist" class="icon"> Playlist</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_downloading.png" alt="playlist" class="icon"> Đang tải</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h2>NHẠC ONLINE</h2>
                </li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_home.png" alt="playlist" class="icon"> Trang chủ</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_bxh.png" alt="playlist" class="icon"> Bảng Xếp Hạng</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_video_clip.png" alt="playlist" class="icon"> Video Clip</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_active.png" alt="playlist" class="icon"> Việt Nam</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_active.png" alt="playlist" class="icon"> US-UK</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_active.png" alt="playlist" class="icon"> K-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_active.png" alt="playlist" class="icon"> J-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_active.png" alt="playlist" class="icon"> C-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_active.png" alt="playlist" class="icon"> F-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_music_active.png" alt="playlist" class="icon"> Nước khác</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="images/ic_menu_other.png" alt="playlist" class="icon"> Playback</a></li>
            </ul>
        </div>
    </div>
    <div class="wrap-search">
        <div class="block_search_fixed">
            <input type="text" placeholder="Search" class="input_search">
            <div class="button_close"><span>Hủy</span></div>
        </div>
        <div class="block_search_result">
            <div class="container">
                <div class="block block_baihat">
                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                        <h3 class="main_title text-pink mb-0">Bài hát</h3><span class="text-gray align-self-end">Xem tất cả</span>
                    </div>
                    <div class="block_baihat_main block_more">
                        <div class="element mb-2">
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                        <div class="element mb-2">
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block_album">
                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                        <h3 class="main_title text-pink mb-0">Album</h3><span class="text-gray align-self-end">Xem tất cả</span>
                    </div>
                    <div class="block_baihat_main block_more">
                        <div class="element mb-2">
                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                        <div class="element mb-2">
                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                        <div class="element mb-2">
                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Trong trí nhớ của anh</h6>
                                <p class="name_singer text-gray mb-1">Hạnh Sino</p>
                                <p class="loss text-pink mb-0">Lossless</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block_video">
                    <div class="block_header d-flex flex-row justify-content-between mb-2">
                        <h3 class="main_title text-pink mb-0">Video</h3><span class="text-gray align-self-end">Xem tất cả</span>
                    </div>
                    <div class="block_baihat_main block_more">
                        <div class="element mb-2">
                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle">
                                <p class="time text-white mb-0 px-2 py-1"><img src="images/ic_menu_clock.png" width="14"> 03:45</p>
                            </div>
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Bad and Boujee</h6>
                                <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert)</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                        <div class="element mb-2">
                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle">
                                <p class="time text-white mb-0 px-2 py-1"><img src="images/ic_menu_clock.png" width="14"> 03:45</p>
                            </div>
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Bad and Boujee</h6>
                                <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert)</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                        <div class="element mb-2">
                            <div style="background : url('https://zmp3-photo.zadn.vn/thumb/240_240/cover/d/5/a/b/d5ab15666207be0eafa55757ce67dad8.jpg') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle">
                                <p class="time text-white mb-0 px-2 py-1"><img src="images/ic_menu_clock.png" width="14"> 03:45</p>
                            </div>
                            <div class="content d-inline-block align-middle">
                                <h6 class="name_song text-black mb-1">Bad and Boujee</h6>
                                <p class="name_singer text-gray mb-1">Migo(feat. Lil Uzi Vert)</p><img src="images/img_dot_gray.png" class="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</sectiton>
<footer>
    <div class="player_fixed p-2 d-flex flex-row border-top">
        <div style="background: url('https://avatar-nct.nixcdn.com/mv/2017/01/16/d/7/6/3/1484535771754_268.jpg') no-repeat center;background-size: cover;" class="image rounded mr-2">
            <div class="icon d-flex flex-column justify-content-center text-center">
                <!--
                <div class="icon_play">
                <i class="fa fa-play" aria-hidden="true"></i>
                </div>
                -->
            </div>
        </div>
        <div class="text">
            <h6 class="name_song mb-1">Trái tim mùa đông</h6>
            <p class="name_singer text-gray mb-1">Camila Cabello ft Young Thug</p>
            <!-- <p class="size text-gray m-0">128kbps</p>-->
        </div>
        <div class="next_prev ml-auto d-flex flex-column justify-content-center">
            <div class="next_prev_wrap">
                <!--
                <i class="fa fa-backward" aria-hidden="true"></i>
                <i class="fa fa-play mx-2" aria-hidden="true"></i>
                <i class="fa fa-forward" aria-hidden="true"></i>
                --><span class="prev"><img src="images/img_prev_mp3_bottom.png" height="20" alt="prev"></span><span class="play"><img src="images/img_play_mp3_bottom_black.png" height="24" alt="play"></span><span class="next"><img src="images/img_next_mp3_bottom.png" height="20" alt="next"></span>
            </div>
        </div>
    </div>
</footer>


<script src="/mobile/assets/js/jquery-3.3.1.min.js"></script>
<script src="/mobile/assets/js/bootstrap.min.js"></script>
<script src="/mobile/assets/js/owl.carousel.min.js"></script>
<script src="/mobile/assets/js/swiper.jquery.min.js"></script>
<script src="/mobile/assets/js/main.js"></script>