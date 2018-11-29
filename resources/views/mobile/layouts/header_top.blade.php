<?php
    use App\Library\Helpers;
?>
<div class="header_top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="#" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
        <button type="button" data-toggle="collapse" data-target="#navbar_main_header_top" aria-controls="navbar_main_header_top" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbar_main_header_top" class="collapse navbar-collapse">
            @if(Auth::check())
            <div class="profile">
                <a href="{{env('APP_URL')}}/user/{{Auth::user()->id}}"><div style="background: url(<?php echo Helpers::pathAvatar(Auth::user()->user_avatar, Auth::user()->id) ?>) no-repeat center;background-size: cover;" class="image mr-3 d-inline-block align-middle rounded-circle"></div>
                <div class="content d-inline-block align-middle">
                   <h5 class="text-white">{{Auth::user()->name}}</h5>
                    <p class="text-gray m-0">{{Auth::user()->email}}</p>
                </div></a>
            </div>
            @endif
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h2>Tài khoản</h2>
                </li>
                @if(!Auth::check())
                    <li class="nav-item"><a href="/login" class="nav-link dropdown-toggle"><img src="/images/ic_menu_user.png" alt="user" class="icon"> Đăng nhập</a></li>
                @else
                    <li class="nav-item"><a href="/logout" class="nav-link dropdown-toggle"><img src="/images/ic_menu_out.png" alt="user" class="icon"> Thoát</a></li>
                    <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_playlist.png" alt="playlist" class="icon"> Playlist</a></li>
                    <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_clock.png" alt="playlist" class="icon"> Bài hát vừa nghe</a></li>
                    <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_rating.png" alt="playlist" class="icon"> Bài hát yêu thích</a></li>
                    <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/CSN.png" alt="playlist" class="icon"> Tủ nhạc</a></li>
                @endif
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h2>NHẠC ONLINE</h2>
                </li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_home.png" alt="playlist" class="icon"> Trang chủ</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_bxh.png" alt="playlist" class="icon"> Bảng Xếp Hạng Bài Hát</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_bxh.png" alt="playlist" class="icon"> Bảng Xếp Hạng Video</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Việt Nam</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> US-UK</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> K-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> J-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> C-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> F-Pop</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Nước khác</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_other.png" alt="playlist" class="icon"> Playback</a></li>
            </ul>
        </div>
    </nav>
</div>