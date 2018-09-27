
<script>
    var dataSearch = [];
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
                    dataSearch = response( data );
                }
            } );
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
        var theHtml = rawBodySearch(rawTopMusic(item.music['data'], item.q), rawArtist(item.artist['data'], item.q), rawMusic(item.music['data'], item.q),
            rawAlbum(item.album['data'], item.q), rawVideo(item.video['data'], item.q));
        if(theHtml.length != 29) {
            theHtml = '<span style="float: right;margin-right: 7px;margin-top: 1px;"><a onclick="redirectSearch()" href="javascript:void(0)">Xem tất cả</a></span>' + theHtml;
        }
        $('.search_layout').html(theHtml);
        return $( "<li>" )
            .appendTo( ul );
    };
    function rawBodySearch(topMusic, artist, music, album, video) {
        return '<div class="card-body">' +
            topMusic +
            artist +
            music +
            album +
            video +
            '</div>';
    }
    function rawTopMusic(musics, q) {
        var song = '';
        if(musics.length > 0) {
            $.each( musics, function( key, value ) {
                song = song +
                    '  <li class="media align-items-stretch">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '          <a href="' + value.music_link + '" title="' + value.music_title + '">' +
                    '              <img src="' + value.music_cover + '" alt="' + value.music_title + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '          </a>' +
                    '      </div>' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0"><a href="' + value.music_link + '" title="' + value.music_title + '">' + searchHighlight(q, value.music_title) + '</a></h5>' +
                    '              <div class="author">' + value.music_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + value.music_bitrate + '</small>' +
                    '      </div>' +
                    '  </li>';
            });
            return '<h4 class="card-title">Top Kết Quả</h4>' +
                '<ul class="list-unstyled list_music">' +
                song +
                '</ul><hr>';
        }
        return '';
    }
    function rawArtist(artists, q) {
        if(artists.length > 0) {
            var artist = '';
            $.each( artists, function( key, value ) {
                artist = artist +
                    '  <li class="media align-items-stretch">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '          <a href="' + value.artist_link + '" title="' + value.artist_nickname + '">' +
                    '              <img src="' + value.artist_cover + '" alt="' + value.artist_nickname + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '          </a>' +
                    '      </div>' +
                    '      <div class="media-body align-self-center d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0">' + searchHighlight(q, value.artist_nickname) + '</h5>' +
                    '          </div>' +
                    '      </div>' +
                    '  </li>';
            });
            return '<h4 class="card-title">Nghệ sĩ</h4>' +
                '<ul class="list-unstyled list_music">' +
                artist +
                '</ul><hr>';
        }
        return '';
    }
    function rawMusic(musics, q) {
        if(musics.length > 0) {
            var song = '';
            $.each( musics, function( key, value ) {
                song = song +
                    '  <li class="media align-items-stretch">' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0"><a href="' + value.music_link + '" title="' + value.music_title + '">' + searchHighlight(q, value.music_title) + '</a></h5>' +
                    '              <div class="author">' + value.music_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + value.music_bitrate + '</small>' +
                    '      </div>' +
                    '  </li>';
            });
            return '<h4 class="card-title">Bài hát</h4>' +
                '<ul class="list-unstyled list_music">' +
                song +
                '</ul><hr>';
        }
        return '';
    }
    function rawAlbum(albums, q) {
        if(albums.length > 0) {
            var album = '';
            $.each(albums, function( key, value ) {
                album = album +
                    '  <li class="media align-items-stretch">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '          <a href="' + value.album_link + '" title="' + value.music_album + '">' +
                    '              <img src="' + value.album_cover + '" alt="' + value.music_album + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '          </a>' +
                    '      </div>' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0"><a href="' + value.album_link + '" title="' + value.music_album + '">' + searchHighlight(q, value.music_album) + '</a></h5>' +
                    '              <div class="author">' + value.album_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + value.album_bitrate + '</small>' +
                    '      </div>' +
                    '  </li>';
            });
            return '<h4 class="card-title">Album</h4>' +
                '<ul class="list-unstyled list_music">' +
                album +
                '</ul><hr>';
        }
        return '';
    }
    function rawVideo(videos, q) {
        if(videos.length > 0) {
            var video = '';
            $.each( videos, function( key, value ) {
                video = video +
                    '  <li class="media align-items-stretch">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '          <a href="' + value.video_link + '" title="' + value.video_title + '">' +
                    '              <img src="' + value.video_cover + '" alt="' + value.video_title + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '          </a>' +
                    '      </div>' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0"><a href="' + value.video_link + '" title="">' + searchHighlight(q, value.video_title) + '</a></h5>' +
                    '              <div class="author">' + value.video_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + value.video_bitrate + '</small>' +
                    '      </div>' +
                    '  </li>';
            });
            return '<h4 class="card-title">Video</h4>' +
                '<ul class="list-unstyled list_music">' +
                video +
                '</ul>';
        }
        return '';
    }
    function redirectSearch() {
        window.location.href = "/tim-kiem?q=" + $('#search_autocomplete').val();
    }
</script>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
        </div>

    </div>
</div>
<!-- Login -->
<div id="myModal_login" class="modal fade" role="dialog" style="z-index: 999999999999999">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title" style="float: left;">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form class="col-md-12" action="#">
                        <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                            <div class="input-field">
                                <input type="email" name="email" placeholder="Tên đăng nhập hoặc email" required />
                                <input type="password" placeholder="Mật khẩu" name="password" required/>
                                <div class="login_action">
                                    <input type="checkbox" checked id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label style="cursor: pointer; display: inline;" for="remember"> Nhớ mật khẩu</label>
                                    <a href="javascript:void(0)" onclick="switchAuth('myModal_forgot')"  style=" margin-left: 15px; float:right; color: #888;">Quên mật khẩu?</a>
                                    <button id="btn_cloud_up" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light" type="submit">Đăng nhập</button>
                                </div>
                                <p class="text-p">Bạn chưa có tài khoản? <a href="javascript:void(0)" onclick="switchAuth('myModal_register')" style="margin-right: 15px;color: #FF2D55;">Đăng ký</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-2 social_button">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="" class="facebook">
                                            <span class="fa fa-facebook icon_soccial"></span>
                                            <p class="text_social">Đăng nhập bằng Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="google-plus">
                                            <span class="fa fa-google-plus icon_soccial"></span>
                                            <p class="text_social">Đăng nhập bằng Google</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- register -->
<div id="myModal_register" class="modal fade" role="dialog" style="z-index: 999999999999999">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title" style="float: left;">Đăng ký tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form class="col-md-12" action="#">
                        <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                            <div class="input-field">
                                <input type="email" name="email" placeholder="Tên đăng nhập" required />
                                <input type="email" name="email" placeholder="Địa chỉ email" required="email" />
                                <input type="password" placeholder="Mật khẩu" name="password" required/>
                                <input type="password" placeholder="Xác nhận lại mật khẩu" name="password" required/>
                                <div class="login_action">
                                    <input type="checkbox" checked id="contact_csn" name="contact_csn">
                                    <label style="cursor: pointer; font-size: 13px; display: inline;" for="contact_csn">Tôi đã đọc và đồng ý các điều kiện<a href="#" > Thỏa thuận sử dụng</a></label>
                                </div>
                                   <button id="btn_cloud_up" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light" style="margin-left: 0px;width: 100%; padding: 10px" type="submit">Đăng ký</button>
                                <p class="text-p"><a href="javascript:void(0)" onclick="switchAuth('myModal_login')" style=" margin-right: 15px; ">Đăng nhập</a>
                                    <span style=" color: #d0d0d0; ">|</span>
                                    <a href="javascript:void(0)" onclick="switchAuth('myModal_forgot')" style=" margin-left: 15px; ">Quên mật khẩu?</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-2 social_button" style="padding-top: 50px; padding-bottom: 50px;">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="" class="facebook">
                                            <span class="fa fa-facebook icon_soccial"></span>
                                            <p class="text_social">Đăng ký bằng Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="google-plus">
                                            <span class="fa fa-google-plus icon_soccial"></span>
                                            <p class="text_social">Đăng ký bằng Google</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- forgot -->
<div id="myModal_forgot" class="modal fade" role="dialog" style="z-index: 999999999999999">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title" style="float: left;">Lấy lại mật khẩu</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form class="col-md-12" action="#">
                        <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                            <div class="input-field">
                                <input type="email" name="email" placeholder="Địa chỉ email" required="email" />
                                <div class="login_action">
                                    <button id="btn_cloud_up" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light" type="submit">Lấy lại mật khẩu</button>
                                </div>
                                <p class="text-p"><a href="javascript:void(0)" onclick="switchAuth('myModal_login')" style=" margin-right: 15px; ">Đăng nhập</a>
                                    <span style=" color: #d0d0d0; ">|</span>
                                    <a href="javascript:void(0)" onclick="switchAuth('myModal_register')" style=" margin-left: 15px; ">Đăng ký</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-2 social_button" style="padding: 0px;">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="" class="facebook">
                                            <span class="fa fa-facebook icon_soccial"></span>
                                            <p class="text_social">Đăng nhập bằng Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="google-plus">
                                            <span class="fa fa-google-plus icon_soccial"></span>
                                            <p class="text_social">Đăng nhập bằng Google</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function switchAuth(idForm) {
        $('.modal').modal('hide');
        setTimeout(function(){
            $("#" + idForm).modal();
        }, 200);
    }
</script>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Bảng xếp hạng</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">BXH hôm nay</a></li>
   <li><a href="#" title="">BXH tuần này</a></li>
   <li><a href="#" title="">BXH tháng 12</a></li>
   <li><a href="#" title="">BXH năm 2015</a></li>
   <li><a href="#" title="">BXH năm 2016</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Video Clip</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">Video Việt Nam</a></li>
   <li><a href="#" title="">Video US-UK</a></li>
   <li><a href="#" title="">Video Hoa</a></li>
   <li><a href="#" title="">Video Hàn</a></li>
   <li><a href="#" title="">Video Nhật</a></li>
   <li><a href="#" title="">Video Pháp</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Beat, Playback</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">Playback Việt Nam</a></li>
   <li><a href="#" title="">Playback US-UK</a></li>
   <li><a href="#" title="">Playback Hoa</a></li>
   <li><a href="#" title="">Playback Hàn</a></li>
   <li><a href="#" title="">Playback Nhật</a></li>
   <li><a href="#" title="">Playback Pháp</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc Việt Nam</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">Nhạc pop, rock...</a></li>
   <li><a href="#" title="">Nhạc rap, hiphop</a></li>
   <li><a href="#" title="">Nhạc dance, remix</a></li>
   <li><a href="#" title="">Nhạc truyền thống</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc US-UK</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">Nhạc pop, rock...</a></li>
   <li><a href="#" title="">Nhạc rap, hiphop</a></li>
   <li><a href="#" title="">Nhạc dance, remix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc Hoa</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">Nhạc pop, rock...</a></li>
   <li><a href="#" title="">Nhạc rap, hiphop</a></li>
   <li><a href="#" title="">Nhạc dance, remix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc Hàn</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">Nhạc pop, rock...</a></li>
   <li><a href="#" title="">Nhạc rap, hiphop</a></li>
   <li><a href="#" title="">Nhạc dance, remix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc nước khác</h3>
                    <ul class="list-unstyled">
   <li><a href="#" title="">Nhạc Nhật</a></li>
   <li><a href="#" title="">Nhạc Pháp</a></li>
   <li><a href="#" title="">Nhạc nước khác</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-end">
            <div class="col offset-3">
                <address class="m-0">
                    <div>Công ty Cổ phần giải trí Yêu Ca Hát</div>
                    <div>Giấy phép MXH số 337/GP-BTTTT do Bộ TT&TT cấp ngày 22/06/2016</div>
                    <?php global $startTime; ?>
                    <div>Page generation time: {{ number_format(microtime(true) - $startTime, 3) }} seconds</div>
                </address>
            </div>
            <div class="col-3">
                <div class="text-right">
                    <ul class="list-inline m-0 social_f">
   <li class="list-inline-item"><a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
   <li class="list-inline-item"><a href="#" title=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
   <li class="list-inline-item"><a href="#" title=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
   <li class="list-inline-item"><a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/js/lobibox.min.js"></script>
<script src="/js/waves.js"></script>
</section>
