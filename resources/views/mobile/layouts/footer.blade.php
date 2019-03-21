<?php
use App\Library\Helpers;
?>
<sectiton class="block_popup">
    @yield('popupMusic')
    <div id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal_content_csn">Lần đăng nhập với tài khoản facebook hoặc google sẽ cập nhật thêm thông tin tên tài khoản và mật khẩu.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <div class="menumain">
        <div id="navbar_main_header_top">
            @if(Auth::check())
            <div class="profile">
                <a href="{{env('APP_URL')}}/user/{{Auth::user()->id}}"><div style="background: url(<?php echo Helpers::pathAvatar(Auth::user()->user_avatar, Auth::user()->id) ?>?time={{time()}}) no-repeat center;background-size: cover;" id="nav-avatar" class="image mr-3 d-inline-block align-middle rounded-circle"></div>
                    <div class="content d-inline-block align-middle">
                        <h5 class="text-white wapper-name">{{Auth::user()->name}}</h5>
                        <p class="text-gray m-0 wapper-name">{{Auth::user()->email}}</p>
                    </div></a>
            </div>
            @endif
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h2>Tài khoản</h2>
                </li>
                @if(!Auth::check())
                    <?php
                    if(isset($_GET['rq'])) {
                    ?>
                        <script>
                            window.location.replace('/<?php echo $_GET['rq'] ?>?back_url=' + window.location.pathname);
                        </script>
                    <?php
                    }
                    ?>
                    <li class="nav-item"><a href="/login?back_url={{$_SERVER['REQUEST_URI']}}" class="nav-link dropdown-toggle"><img src="/images/ic_menu_user.png" alt="user" class="icon"> Đăng nhập</a></li>
                @else
                    <li class="nav-item"><a href="/logout" class="nav-link dropdown-toggle"><img src="/images/ic_menu_out.png" alt="user" class="icon"> Thoát</a></li>
                    <li class="nav-item"><a href="/user/{{Auth::user()->id}}" class="nav-link dropdown-toggle"><img src="/images/ic_menu_playlist.png" alt="playlist" class="icon"> Playlist</a></li>
                    <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><img src="/images/ic_menu_clock.png" alt="playlist" class="icon"> Bài hát vừa nghe</a></li>
                    <li class="nav-item"><a href="/user/{{Auth::user()->id}}/?tab=bai-hat" class="nav-link dropdown-toggle"><img src="/images/ic_menu_rating.png" alt="playlist" class="icon"> Bài hát yêu thích</a></li>
                    <li class="nav-item"><a href="/user/{{Auth::user()->id}}/?tab=tu-nhac" class="nav-link dropdown-toggle"><img src="/images/CSN.png" alt="playlist" class="icon"> Tủ nhạc</a></li>
                @endif
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h2>NHẠC ONLINE</h2>
                </li>
                <li class="nav-item"><a href="/" class="nav-link dropdown-toggle"><img src="/images/ic_menu_home.png" alt="playlist" class="icon"> Trang chủ</a></li>
                <li class="nav-item"><a href="/nhac-hot.html?type=music" class="nav-link dropdown-toggle"><img src="/images/ic_menu_bxh.png" alt="playlist" class="icon"> Bảng Xếp Hạng Bài Hát</a></li>
                <li class="nav-item"><a href="/nhac-hot.html?type=video" class="nav-link dropdown-toggle"><img src="/images/ic_menu_bxh.png" alt="playlist" class="icon"> Bảng Xếp Hạng Video</a></li>
                <li class="nav-item"><a href="/mp3/vietnam.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Việt Nam</a></li>
                <li class="nav-item"><a href="/mp3/us-uk.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> US-UK</a></li>
                <li class="nav-item"><a href="/mp3/korea.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> K-Pop</a></li>
                <li class="nav-item"><a href="/mp3/japan.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> J-Pop</a></li>
                <li class="nav-item"><a href="/mp3/chinese.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> C-Pop</a></li>
                <li class="nav-item"><a href="/mp3/france.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> F-Pop</a></li>
                <li class="nav-item"><a href="/mp3/other.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Nước khác</a></li>
                <li class="nav-item"><a href="/mp3/beat-playback.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_other.png" alt="playlist" class="icon"> Playback</a></li>
            </ul>
        </div>
    </div>
    <div class="wrap-search">
        <form  method="GET" action="/tim-kiem">
            <div class="block_search_fixed">
                <input type="search" placeholder="Search" class="input_search" value="{{$_GET['q'] ?? ''}}" name="q" id="search_autocomplete" autofocus>
                <div class="button_close"><span>Hủy</span></div>
            </div>
        </form>
        <div class="block_search_result">
            <div class="container search_layout">
            </div>
        </div>
    </div>
</sectiton>
<footer>

</footer>
<script src="/mobile/assets/js/bootstrap.min.js"></script>
<script src="/mobile/assets/js/owl.carousel.min.js"></script>
<script src="/mobile/assets/js/swiper.js"></script>
<script src="/mobile/assets/js/main.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/mobile/assets/js/functions.js"></script>
<script>
    var dataSearch = [];
    $( document ).ready(function() {
        $( "#search_autocomplete" ).autocomplete({
            minLength: 1,
            source: function( request, response ) {
                $.ajax( {
                    url: "/search/real",
                    dataType: "json",
                    data: {
                        q: request.term,
                        type: 'json',
                        rows: 3,
                        view_all: true
                    },
                    success: function( data ) {
                        waitingDialog.hide();
                        dataSearch = response( data );
                    }
                } );
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            var theHtml = rawBodySearch(rawArtist(item.artist['data'], item.q), rawMusic(item.music['data'], item.q), rawAlbum(item.album['data'], item.q), rawVideo(item.video['data'], item.q));
            $(".suggest").fadeIn("fast")
            $('.search_layout').html(theHtml);
            return $( "<li>" )
                .appendTo( ul );
        };
    });
    function rawBodySearch(artist, music, album, video) {
        return music +
            artist +
            album +
            video;
    }
    function rawArtist(artists, q) {
        if(artists.length > 0) {
            var artist = '';
            $.each( artists, function( key, value ) {
                artist = artist +
                    '   <a class="search-line" href="' + value.artist_link + '?ref=search_box"><div class="element mb-2">' +
                    '   <div style="background : url(' + value.artist_avatar + ') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>' +
                    '       <div class="content d-inline-block align-middle">' +
                    '           <h6 class="name_song text-black mb-1">' + searchHighlight(q, value.artist_nickname) + '</h6>' +
                    '       </div>' +
                    '   </div></a>';
            });
            return '<div class="block block_artist">' +
                '<div class="block_header d-flex flex-row justify-content-between mb-2">' +
                '   <h3 class="main_title text-pink mb-0">Nghệ sĩ</h3><a onclick="redirectSearch(\'page_artist\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
                '</div>' +
                '<div class="block_baihat_main block_more">' + artist +
                '</div>' +
                '</div>';
        }
        return '';
    }
    function rawMusic(musics, q) {
        if(musics.length > 0) {
            var song = '';
            $.each( musics, function( key, value ) {
                song = song +
                    '   <a class="search-line" href="' + value.music_link + '?ref=search_box"><div class="element mb-2">' +
                    '       <div class="content d-inline-block align-middle">' +
                    '           <h6 class="name_song text-black mb-1">' + searchHighlight(q, value.music_title) + '</h6>' +
                    '           <p class="name_singer text-gray mb-1">' + value.music_artist + '</p>' +
                    '           <p class="loss text-pink mb-0">' + value.music_bitrate + '</p>' +
                    '       </div>' +
                    '   </div></a>';
            });
            return '<div class="block block_baihat">' +
                '<div class="block_header d-flex flex-row justify-content-between mb-2">' +
                '   <h3 class="main_title text-pink mb-0">Bài hát</h3><a onclick="redirectSearch(\'page_music\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
                '</div>' +
                '<div class="block_baihat_main block_more">' + song +
                '</div>' +
                '</div>';
        }
        return '';
    }
    function rawAlbum(albums, q) {
        if(albums.length > 0) {
            var album = '';
            $.each( albums, function( key, value ) {
                album = album +
                    '   <a class="search-line" href="' + value.album_link + '?ref=search_box"><div class="element mb-2">' +
                    '   <div style="background : url(' + value.album_cover + ') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>' +
                    '       <div class="content d-inline-block align-middle">' +
                    '           <h6 class="name_song text-black mb-1">' + searchHighlight(q, value.music_album) + '</h6>' +
                    '           <p class="name_singer text-gray mb-1">' + value.album_artist + '</p>' +
                    '           <p class="loss text-pink mb-0">' + (value.album_bitrate ? value.album_bitrate : '') + '</p>' +
                    '       </div>' +
                    '   </div></a>';
            });
            return '<div class="block block_album">' +
                '<div class="block_header d-flex flex-row justify-content-between mb-2">' +
                '   <h3 class="main_title text-pink mb-0">Album</h3><a onclick="redirectSearch(\'page_album\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
                '</div>' +
                '<div class="block_baihat_main block_more">' + album +
                '</div>' +
                '</div>';
        }
        return '';
    }
    function rawVideo(videos, q) {
        if(videos.length > 0) {
            var video = '';
            $.each( videos, function( key, value ) {
                video = video +
                    '<a class="search-line" href="' + value.video_link + '?ref=search_box">' +
                    '<div class="element mb-2">' +
                    '   <div style="background : url(' + value.video_cover + ') no-repeat center;background-size: cover;min-width: 90px; height: 63px;" class="image100 mr-2 d-inline-block align-middle">' +
                    '       <p class="time text-white mb-0 px-2 py-1"><img src="/images/ic_menu_clock.png" width="14"> ' + value.video_length_html + '</p>' +
                    '   </div>' +
                    '   <div class="content d-inline-block align-middle">' +
                    '       <h6 class="name_song text-black mb-1">' + searchHighlight(q, value.video_title) + '</h6>' +
                    '       <p class="name_singer text-gray mb-1">' + value.video_artist + '</p>' +
                    '   </div>' +
                    '</div></a>';
            });
            return '<div class="block block_album">' +
                '<div class="block_header d-flex flex-row justify-content-between mb-2">' +
                '   <h3 class="main_title text-pink mb-0">Video</h3><a onclick="redirectSearch(\'page_video\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
                '</div>' +
                '<div class="block_baihat_main block_more">' + video +
                '</div>' +
                '</div>';
        }
        return '';
    }
    function redirectSearch(tab) {
        window.location.href = "/tim-kiem?q=" + $('#search_autocomplete').val() + '&' + tab + '=1';
    }
    // $('.fa-search').click(function() {
    //     document.getElementById("search_autocomplete").trigger('focus');
    // })
</script>

<?php
    $cookie_name = "csn_popup_beta";
    $session_ads_popup = isset($_COOKIE[$cookie_name]) ? intval(unserialize(stripslashes($_COOKIE[$cookie_name]))) : 0;
    if ( $session_ads_popup < 1 )
    {
        @setcookie($cookie_name, serialize($session_ads_popup + 1), time() + 10, '/', '.chiasenhac.vn', 0);

        // Blueseed - Mobile In flow - Popup // backup code Ambient
        echo '<!-- BlueSeed - asynchronous code for placement 1478 Chiasenhac InFlow Mobile -->
        <script id="jshd1pm_1478" src="https://d2.blueseed.tv/ads-sync.js?placement=1478"></script>';
    }
?>

<!-- BlueSeed - Asynchronous Code for Ad Placement 2245 Chiasenhac.vn -->
<script src="//d2.blueseed.tv/ads-sync.js?placement=2245"></script>

<!-- BlueSeed - asynchronous code for placement 1849 CHIASENHAC.VN - mobile native button -->
<script id="jshd1pm_1849" src="https://d2.blueseed.tv/ads-sync.js?placement=1849"></script>
