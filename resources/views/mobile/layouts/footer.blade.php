<?php
use App\Library\Helpers;
global $memberVip;
if($memberVip == null)
    $memberVip = Helpers::checkMemberVip();
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
                    <li class="nav-item"><a href="/lich-su-nghe" class="nav-link dropdown-toggle"><img src="/images/ic_menu_clock.png" alt="playlist" class="icon"> Bài hát vừa nghe</a></li>
                @else
                    <li class="nav-item"><a href="/logout" class="nav-link dropdown-toggle"><img src="/images/ic_menu_out.png" alt="user" class="icon"> Thoát</a></li>
                    <li class="nav-item"><a href="/user/{{Auth::user()->id}}" class="nav-link dropdown-toggle"><img src="/images/ic_menu_playlist.png" alt="playlist" class="icon"> Playlist</a></li>
                    <li class="nav-item"><a href="/lich-su-nghe" class="nav-link dropdown-toggle"><img src="/images/ic_menu_clock.png" alt="playlist" class="icon"> Bài hát vừa nghe</a></li>
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
                <li class="nav-item"></li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/hd/video.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_video_active.png" alt="playlist" class="icon"> Video Clip</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/hd/video/v-video.html" title="Video Việt Nam">Video Việt Nam</a></li>
                                    <li><a href="/hd/video/us-video.html" title="Video US-UK">Video US-UK</a></li>
                                    <li><a href="/hd/video/c-video.html" title="Video Hoa">Video Hoa</a></li>
                                    <li><a href="/hd/video/k-video.html" title="Video Hàn">Video Hàn</a></li>
                                    <li><a href="/hd/video/l-video.html" title="Video Live">Video Live</a></li>
                                    <li><a href="/hd/video/h-video.html" title="Video Hài">Video Hài</a></li>
                                    <li><a href="/hd/video/j-video.html" title="Video Nhật">Video Nhật</a></li>
                                    <li><a href="/hd/video/f-video.html" title="Video Pháp">Video Pháp</a></li>
                                    <li><a href="/hd/video/o-video.html" title="Video Nước Khác">Video Nước Khác</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/vietnam.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Việt Nam</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/vietnam/v-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                    <li><a href="/mp3/vietnam/v-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                    <li><a href="/mp3/vietnam/v-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                    <li><a href="/mp3/vietnam/v-truyen-thong.html" title="Nhạc truyền thống">Nhạc Truyền Thống</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/us-uk.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> US-UK</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/us-uk/us-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                    <li><a href="/mp3/us-uk/us-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                    <li><a href="/mp3/us-uk/us-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/chinese.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Nhạc Hoa</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/chinese/c-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                    <li><a href="/mp3/chinese/c-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                    <li><a href="/mp3/chinese/c-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/korea.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Nhạc Hàn</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/korea/k-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                    <li><a href="/mp3/korea/k-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                    <li><a href="/mp3/korea/k-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/japan.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Nhạc Nhật</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/japan/j-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                    <li><a href="/mp3/japan/j-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                    <li><a href="/mp3/japan/j-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/france.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Nhạc Pháp</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/france/f-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                    <li><a href="/mp3/france/f-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                    <li><a href="/mp3/france/f-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/other.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_music_active.png" alt="playlist" class="icon"> Nước khác</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/other/o-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                    <li><a href="/mp3/other/o-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                    <li><a href="/mp3/other/o-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">

                    <div class="navbar-collapse navbar-offcanvas-collapse">
                        <ul id="main-mobile-menu" class="nav navbar-nav">
                            <li id="menu-item-2490" class="has-submenu active menu-item-2490">
                                <a href="/mp3/beat-playback.html" class="nav-link dropdown-toggle"><img src="/images/ic_menu_other.png" alt="playlist" class="icon"> Playback</a>
                                <span class="icon-toggle"><i class="fa fa-plus"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="/mp3/beat-playback/v-instrumental.html" title="Playback Việt Nam">Playback Việt Nam</a></li>
                                    <li><a href="/mp3/beat-playback/us-instrumental.html" title="Playback US-UK">Playback US-UK</a></li>
                                    <li><a href="/mp3/beat-playback/c-instrumental.html" title="Playback Hoa">Playback Hoa</a></li>
                                    <li><a href="/mp3/beat-playback/k-instrumental.html" title="Playback Hàn">Playback Hàn</a></li>
                                    <li><a href="/mp3/beat-playback/j-instrumental.html" title="Playback Nhật">Playback Nhật</a></li>
                                    <li><a href="/mp3/beat-playback/f-instrumental.html" title="Playback Pháp">Playback Pháp</a></li>
                                    <li><a href="/mp3/beat-playback/o-instrumental.html" title="Playback Nước Khác">Playback Nước Khác</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </li>
            </ul>
        </div>
    </div>
    <div class="wrap-search">
        <form  method="GET" action="<?php echo env('SEARCH_TEMPLATE_URL'); ?>/tim-kiem">
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
    <?php
    global $startTime;
    use App\Models\ErrorBugSlowModel;
    //$endTime = number_format(microtime(true) - $startTime, 3);
    $endTime = round(microtime(true) - LARAVEL_START, 2);
    if($endTime > 5) {
        ErrorBugSlowModel::firstOrCreate([
            'type' => 'slow',
            'link' => url()->full(),
            'device_display' => 'mobile',
            'time_load' => $endTime,
        ]);
    }
    ?>
        <div class="item-f">
            <a href="javascript:void(0);" onclick="alert_gioi_thieu();" style="color: #a9a9a9;" title="Giới Thiệu">Giới thiệu</a>
        </div>
        <div class="item-f">
            <div class="csn-link-special">| </div>
        </div>
        <div class="item-f">
            <div>Góp ý</div>
        </div>
        <div class="item-f">
            <div class="csn-link-special">|</div>
        </div>
        <div class="item-f">
            <a href="/chinh-sach-chia-se-nhac.html" style="color: #a9a9a9;" title="Nội quy và chính sách Chia Sẻ Nhạc" target="_blank">Nội quy & Chính sách</a></div>
        <div class="item-f">
            <div class="csn-link-special">|</div>
        </div>
        <div class="item-f">
            <div>{{ $endTime }} seconds</div>
        </div>
</footer>
<script src="{{URL::to('/')}}/mobile/assets/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/mobile/assets/js/owl.carousel.min.js"></script>
<script src="{{URL::to('/')}}/mobile/assets/js/swiper.js"></script>
<script src="{{URL::to('/')}}/mobile/assets/js/main.js"></script>
<script src="{{URL::to('/')}}/js/jquery-ui.js"></script>
<script src="{{URL::to('/')}}/mobile/assets/js/functions.js"></script>
<script>

    var dataSearch = [];
    $( document ).ready(function() {
        $( "#search_autocomplete" ).autocomplete({
            minLength: 1,
            source: function( request, response ) {
                delete $.ajaxSettings.headers["X-CSRF-TOKEN"];
                $.ajax( {
                    url: "<?php echo env('SEARCH_REAL_URL'); ?>/search/real",
                    // url: window.location.origin + "/search/real",
                    dataType: "json",
                    data: {
                        q: request.term,
                        type: 'json',
                        rows: 3,
                        // top_music: true,
                        view_all: true
                    },
                    success: function( data ) {
                        waitingDialog.hide();
                        if(typeof  data.success === 'undefined') {
                            dataSearch = response( data );
                        }else {
                            alertModal(data.message);
                        }
                    }
                } );
            }
        }).autocomplete( "instance" )._renderItemData = function( ul, item ) {
            var theHtml = rawBodySearch(rawArtist(item.artist['data'], item.q), rawMusic(item.music['data'], item.q), rawAlbum(item.album['data'], item.q), rawVideo(item.video['data'], item.q), rawMusicTop(item.top_music['data'], item.q));
            $(".suggest").fadeIn("fast")
            $('.search_layout').html(theHtml);
            $( "<li>" ).appendTo( ul );
            $('.search_layout .search-line-music').click(function () {
                Cookies.set('search_search', $(this).attr('href'))
            })
            return true;
        };
    });
    function alert_gioi_thieu() {
        $("#alertModal .modal-body").html('<div class="modal_content_csn_gioi_thieu">' +
            '<span class="csn-logo"><img src="https://data.chiasenhac.com/imgs/logo-web-official.png" style="margin-bottom: 15px;" alt="Logo Chiasenhac"></span>' +
            '<div class="z-copyright-content">Công ty cổ phần công nghệ CSN<br>' +
            'Chủ sở hữu website: Ông Nguyễn Hoàng Minh Quân<br>' +
            'Giấy phép MXH số 92/GP-BTTTT do Bộ TT&TT cấp ngày 11/03/2020<br>' +
            'Giấy Chứng nhận Đăng ký Kinh doanh số 0314660744 do Sở kế hoạch và đầu tư thành phố Hồ Chí Minh cấp ngày 05/10/2017.</br></br>' +

            'Tòa nhà Fideco, số 28 Phùng Khắc Khoan, Phường Đa Kao, Quận 01, TP.HCM<br>' +
            'info@chiasenhac.com<br>' +
            '(028) 7300 8199 - Ext: 999<br>' +
            '</div>');
        $("#alertModal .modal-dialog").removeClass('modal-sm');
        $("#alertModal").modal();
    }
    function rawBodySearch(artist, music, album, video, top_music) {
        return top_music +
            music +
            artist +
            album +
            video;
    }
    function rawArtist(artists, q) {
        if(artists.length > 0) {
            var artist = '';
            $.each( artists, function( key, value ) {
                artist = artist +
                    '   <a class="search-line" href="' + value.artist_link + '"><div class="element mb-2">' +
                    '   <div style="background : url(' + value.artist_avatar + ') no-repeat center;background-size: cover;" class="image100 mr-2 d-inline-block align-middle"></div>' +
                    '       <div class="content d-inline-block align-middle">' +
                    '           <h6 class="name_song text-black mb-1">' + searchHighlight(q, value.artist_nickname) + '</h6>' +
                    '       </div>' +
                    '   </div></a>';
            });
            return '<div class="block block_artist">' +
                '<div class="block_header d-flex flex-row justify-content-between mb-2">' +
                '   <h3 class="main_title text-pink mb-0" style="font-weight: 700;">Nghệ sĩ</h3><a onclick="redirectSearch(\'page_artist\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
                '</div>' +
                '<div class="block_baihat_main block_more">' + artist +
                '</div>' +
                '</div>';
        }
        return '';
    }
    function rawMusicTop(musics, q) {
        if(musics.length > 0) {
            var song = '';
            $.each( musics, function( key, value ) {
                song = song +
                    '   <a class="search-line search-line-music" href="' + value.music_link + '"><div class="element mb-2">' +
                    '       <div class="content d-inline-block align-middle">' +
                    '           <h6 class="name_song text-black mb-1">' + searchHighlight(q, value.music_title) + '</h6>' +
                    '           <p class="name_singer text-gray mb-1">' + value.music_artist + '</p>' +
                    '           <p class="loss text-pink mb-0">' + value.music_bitrate_html + '</p>' +
                    '       </div>' +
                    '   </div></a>';
            });
            if(song.trim()) {
                return '<div class="block block_baihat">' +
                    '<div class="block_header d-flex flex-row justify-content-between mb-2">' +
                    '   <h3 class="main_title text-pink mb-0" style="font-weight: 700;">Top kết quả</h3><a onclick="redirectSearch(\'page_music\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
                    '</div>' +
                    '<div class="block_baihat_main block_more">' + song +
                    '</div>' +
                    '</div>';
            }
        }
        return '';
    }
    function rawMusic(musics, q) {
        if(musics.length > 0) {
            var song = '';
            $.each( musics, function( key, value ) {
                song = song +
                    '   <a class="search-line search-line-music" href="' + value.music_link + '"><div class="element mb-2">' +
                    '       <div class="content d-inline-block align-middle">' +
                    '           <h6 class="name_song text-black mb-1">' + searchHighlight(q, value.music_title) + '</h6>' +
                    '           <p class="name_singer text-gray mb-1">' + (value.music_artist).replace(/;/g, '; ') + '</p>' +
                    '           <p class="loss text-pink mb-0">' + value.music_bitrate_html + '</p>' +
                    '       </div>' +
                    '   </div></a>';
            });
            return '<div class="block block_baihat">' +
                '<div class="block_header d-flex flex-row justify-content-between mb-2">' +
                '   <h3 class="main_title text-pink mb-0" style="font-weight: 700;">Bài hát</h3><a onclick="redirectSearch(\'page_music\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
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
                    '   <a class="search-line" href="' + value.album_link + '"><div class="element mb-2">' +
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
                '   <h3 class="main_title text-pink mb-0" style="font-weight: 700;">Album</h3><a onclick="redirectSearch(\'page_album\')" href="javascript:void(0)"><span class="text-gray align-self-end">Xem tất cả</span></a>' +
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
                    '<a class="search-line search-line-music" href="' + value.video_link + '">' +
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
                '<div class="block_baihat_main block_more" style="font-weight: 700;">' + video +
                '</div>' +
                '</div>';
        }
        return '';
    }
    function redirectSearch(tab) {
        window.location.href = "<?php echo env('SEARCH_TEMPLATE_URL'); ?>/tim-kiem?q=" + $('#search_autocomplete').val() + '&' + tab + '=1';
    }
    // $('.fa-search').click(function() {
    //     document.getElementById("search_autocomplete").trigger('focus');
    // })
</script>

@if(!$memberVip)
    <?php
    $cookie_name = "csn_popup";
    $session_ads_popup = isset($_COOKIE[$cookie_name]) ? intval(unserialize(stripslashes($_COOKIE[$cookie_name]))) : 0;
    ?>
    @if ( $session_ads_popup < 1 )
        <?php
            @setcookie($cookie_name, serialize($session_ads_popup + 1), time() + 10, '/', '.chiasenhac.vn', 1);
        ?>
        @include('cache.code_ads.mobile_popup');
        {{--include(__DIR__.'../../../resources/views/cache/code_ads/mobile_popup.blade.php');--}}
    @endif

    <?php
    $cookie_name = "csn_spin";
    $session_ads_spin = isset($_COOKIE[$cookie_name]) ? intval(unserialize(stripslashes($_COOKIE[$cookie_name]))) : 0;
    ?>
    @if ( $session_ads_spin < 1 )
        <?php
        @setcookie($cookie_name, serialize($session_ads_spin + 1), time() + 10, '/', '.chiasenhac.vn', 1);
        ?>
        @hasSection('in_player')
            {{--@if(View::exists('cache.code_ads.mobie_spin_player'))--}}
            @include('cache.code_ads.mobie_spin_player')
            {{--@endif--}}
        @else
            {{--@if(View::exists('cache.code_ads.mobie_spin_home'))--}}
            @include('cache.code_ads.mobie_spin_home')
            {{--@endif--}}
        @endif
    @endif

@endif