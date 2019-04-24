
<script>
    var dataSearch = [];
    $( document ).ready(function() {
        $( "#search_autocomplete" ).autocomplete({
            minLength: 1,
            source: function( request, response ) {
                $.ajax( {
                    url: "<?php echo URL::to('/') ?>/search/real",
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
            var theHtml = rawBodySearch(rawArtist(item.artist['data'], item.q), rawMusic(item.music['data'], item.q),
                rawAlbum(item.album['data'], item.q), rawVideo(item.video['data'], item.q));
            if(theHtml.length != 29) {
                theHtml = '<span style="float: right;margin-right: 7px;margin-top: 1px;"><a onclick="redirectSearch()" href="javascript:void(0)">Xem tất cả</a></span>' + theHtml;
            }
            $(".suggest").fadeIn("fast");
            $('.search_layout').html(theHtml);
            $( "<li>" ).appendTo( ul );
            $('.search_layout .search-line-music').click(function () {
                Cookies.set('search_search', $(this).attr('href'))
            })
            return true;
        };
    });
    function rawBodySearch(artist, music, album, video) {
        return '<div class="card-body">' +
            music +
            artist +
            album +
            video +
            '</div>';
    }
    function rawTopMusic(musics, q) {
        var song = '';
        if(musics.length > 0) {
            $.each( musics, function( key, value ) {
                song = song +
                    '  <a class="search-line search-line-music" href="' + value.music_link + '" title="' + value.music_title + ' - ' + value.music_artist + '">' +
                    '  <li class="media align-items-stretch">' +
                    // '      <div class="media-left align-items-stretch mr-2">' +
                    // '              <img src="' + value.music_cover + '" alt="' + value.music_title + '">' +
                    // '           <i class="material-icons">play_circle_outline</i>' +
                    // '      </div>' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <h5 class="media-title mt-0 mb-0 span_h5">' + searchHighlight(q, value.music_title) + '</h5>' +
                    '          <div class="author">' + value.music_artist + '</div>' +
                    '          <small class="type_music c1">' + value.music_bitrate + '</small>' +
                    '      </div>' +
                    '  </li>' +
                    '  </a>';
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
                    ' <a class="search-line" href="' + value.artist_link + '" title="' + value.artist_nickname + '">' +
                    '  <li class="media align-items-stretch">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '         <img src="' + value.artist_avatar + '" alt="' + value.artist_nickname + '">' +
                    '      </div>' +
                    '      <div class="media-body align-self-center d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0 span_h5">' + searchHighlight(q, value.artist_nickname) + '</h5>' +
                    '          </div>' +
                    '      </div>' +
                    '  </li>' +
                    ' </a>';
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
                    '<a class="search-line parent-line search-line-music" href="' + value.music_link + '">' +
                    '  <li class="media align-items-stretch">' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0 span_h5" title="' + value.music_title + ' - ' + value.music_artist + '">' + searchHighlight(q, value.music_title) + '</h5>' +
                    '              <div class="author">' + value.music_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + value.music_bitrate_html + '</small>' +
                    '      </div>' +
                    '  </li>' +
                    '</a>';
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
                    '          <a class="search-line" href="' + value.album_link + '">' +
                    '              <img src="' + value.album_cover + '" alt="' + value.music_album + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '          </a>' +
                    '      </div>' +
                    '      <a class="search-line" href="' + value.album_link + '" title="' + value.music_album + ' - ' + value.album_artist + '">' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0 span_h5">' + searchHighlight(q, value.music_album) + '</h5>' +
                    '              <div class="author">' + value.album_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + (value.album_bitrate_html ? value.album_bitrate_html : '') + '</small>' +
                    '      </div>' +
                    '       </a>' +
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
                    '  <li class="media align-items-stretch parent-line">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '          <a class="search-line search-line-music" href="' + value.video_link + '">' +
                    '              <img src="' + value.video_cover + '" alt="' + value.video_title + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '              <p class="time text-white mb-0 px-2 py-1"><img src="/images/ic_menu_clock.png" width="14"> ' + value.video_length_html + '</p>' +
                    '          </a>' +
                    '      </div>' +
                    '      <a class="search-line search-line-music" title="' + value.video_title + ' - ' + value.video_artist + '"  href="' + value.video_link + '" >' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0 span_h5" title="' + value.video_title + ' - ' + value.video_artist + '">' + searchHighlight(q, value.video_title) + '</h5>' +
                    '              <div class="author">' + value.video_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + value.video_bitrate + '</small>' +
                    '      </div>' +
                    '      </a>' +
                    '  </li>';
            });
            return '<h4 class="card-title">Video</h4>' +
                '<ul class="list-unstyled list_music suggest_video">' +
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
<div id="myModal" class="modal fade" role="dialog" style="z-index: 999999">
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

<div id="myConfirmModal" class="modal fade" role="dialog" style="z-index: 99999">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title span_h5" style="float: left;"></span>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-ok" style="color: white;">Đồng ý</a>
                <button type="button" class="btn btn-default close_confirm" data-dismiss="modal">Hủy</button>
            </div>
        </div>

    </div>
</div>

@if(!Auth::user())
    <!-- Login -->
    <div id="myModal_login" class="modal fade" role="dialog" style="z-index: 999999999999999">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content modal-login modal-form">
                <div class="modal-header">
                    <span class="modal-title span_h5" style="float: left;"><?php echo isset($_GET['rq']) ? 'Bạn cần phải <span class="text-pink">đăng nhập</span> để đi tiếp' : 'Đăng nhập' ?></span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form class="col-md-12" id="form-login" action="#">
                            <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                                <div class="input-field">
                                    <input type="text" class="email" name="email" placeholder="Tên đăng nhập hoặc email" />
                                    <input type="password" class="password" name="password" placeholder="Mật khẩu" name="password"/>
                                    <div class="login_action">
                                        <input type="checkbox" checked id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label style="cursor: pointer; display: inline;" for="remember"> Nhớ mật khẩu</label>
                                        <a href="javascript:void(0)" onclick="switchAuth('myModal_forgot')"  style=" margin-left: 15px; float:right; color: #888;">Quên mật khẩu?</a>
                                        <button onclick="authLogin()" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light" type="submit">Đăng nhập</button>
                                    </div>
                                    <p class="text-p">Bạn chưa có tài khoản? <a href="javascript:void(0)" onclick="switchAuth('myModal_register')" style="margin-right: 15px;color: #FF2D55;">Đăng ký</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-2 social_button">
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="{{env('APP_URL')}}/auth/facebook" class="facebook">
                                                <span class="fa fa-facebook icon_soccial"></span>
                                                <p class="text_social">Đăng nhập bằng Facebook</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{env('APP_URL')}}/auth/google" class="google-plus">
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
    <div id="myModal_register" class="modal fade" role="dialog" style="z-index: 999999">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content modal-register modal-form">
                <div class="modal-header">
                    <span class="modal-title span_h5" style="float: left;">Đăng ký tài khoản</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form class="col-md-12" action="#">
                            <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                                <div class="input-field">
                                    <input class="username" name="username" type="text" placeholder="Tên đăng nhập" />
                                    <input class="name" name="name" type="text" placeholder="Tên hiển thị" />
                                    <input class="email" name="email" type="email" placeholder="Địa chỉ email" required="email" />
                                    <input class="password" name="password" type="password" placeholder="Mật khẩu" name="password" />
                                    <input class="confirm_password" name="confirm_password" type="password" placeholder="Xác nhận lại mật khẩu" name="password" />
                                    <div class="g-recaptcha captcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}" style="z-index: 99999999;"></div>
                                    <div class="login_action">
                                        <input class="contact_csn" type="checkbox" id="contact_csn" checked name="contact_csn">
                                        <label style="cursor: pointer; font-size: 13px; display: inline;" for="contact_csn">Tôi đã đọc và đồng ý các điều kiện<a href="#" > Thỏa thuận sử dụng</a></label>
                                    </div>
                                    <button onclick="authRegister()" class="btn my-2 my-sm-0 waves-effect waves-light" style="margin-left: 0px;width: 100%; padding: 10px" type="submit">Đăng ký</button>
                                    <p class="text-p"><a href="javascript:void(0)" onclick="switchAuth('myModal_login')" style=" margin-right: 15px; ">Đăng nhập</a>
                                        <span style=" color: #d0d0d0; ">|</span>
                                        <a href="javascript:void(0)" onclick="switchAuth('myModal_forgot')" style=" margin-left: 15px; ">Quên mật khẩu?</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-2 social_button" style="padding-top: 50px; padding-bottom: 50px;">
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="{{env('APP_URL')}}/auth/facebook" class="facebook">
                                                <span class="fa fa-facebook icon_soccial"></span>
                                                <p class="text_social">Đăng ký bằng Facebook</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{env('APP_URL')}}/auth/google" class="google-plus">
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
            <div class="modal-content modal-forgot modal-form">
                <div class="modal-header">
                    <span class="modal-title span_h5" style="float: left;">Lấy lại mật khẩu</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form class="col-md-12" action="#">
                            <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                                <div class="input-field">
                                    <input type="email" name="email" class="email" placeholder="Địa chỉ email" required="email" />
                                    <div class="login_action">
                                        <button onclick="authForgot()" class="btn my-2 my-sm-0 waves-effect waves-light" type="submit">Lấy lại mật khẩu</button>
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
                                            <a href="{{env('APP_URL')}}/auth/facebook" class="facebook">
                                                <span class="fa fa-facebook icon_soccial"></span>
                                                <p class="text_social">Đăng nhập bằng Facebook</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{env('APP_URL')}}/auth/google" class="google-plus">
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
        <?php
        if(isset($_GET['rq'])) {
        ?>
        switchAuth('myModal_<?php echo $_GET['rq'] ?>');
        <?php
            if(isset($_GET['back_url'])) {
                ?>
                $('.social').find('.facebook').attr('href', '/auth/facebook?back_url=<?php echo $_GET['back_url'] ?>')
                $('.social').find('.google-plus').attr('href', '/auth/google?back_url=<?php echo $_GET['back_url'] ?>')
                <?php
            }
        ?>
        <?php
        }
        ?>
        $('.modal-login form').submit(false);
        function authLogin() {
            resetInputLogin();
            const email = $('.modal-login').find('.email');
            const password = $('.modal-login').find('.password');
            if(!email.val()) {
                return addErrorInput(email, 'Nội dung này không được để trống.');
            }
            if(!password.val()) {
                return addErrorInput(password, 'Nội dung này không được để trống.');
            }
            if(email.val().length < 4) {
                return addErrorInput(email, 'Tài khoản trên 4 ký tự.');
            }
            if(password.val().length < 6) {
                return addErrorInput(password, 'Mật khẩu phải trên 6 ký tự.');
            }
            $.ajax({
                url: '<?php echo URL::to('/') ?>/login',
                type: "POST",
                dataType: "json",
                data: {
                    email: email.val(),
                    password: password.val(),
                    remember: ($('#remember').is( ":checked" ) ? true : '')
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    $.each( errors.errors, function( key, value ) {
                        addErrorInput($('.modal-login').find('.' + key), value);
                    });
                },
                success: function(response) {
                    location.reload('<?php echo $_GET['back_url'] ?? '' ?>');
                }
            });
        }
        $('.modal-register form').submit(false);
        function authRegister() {
            resetInputLogin();
            const username = $('.modal-register').find('.username');
            const name = $('.modal-register').find('.name');
            const email = $('.modal-register').find('.email');
            const password = $('.modal-register').find('.password');
            const confirm_password = $('.modal-register').find('.confirm_password');
            const contact = $('.modal-register').find('.contact_csn');

            if(!username.val()) {
                return addErrorInput(username, 'Tên đăng nhập không được để trống');
            }
            if(!name.val()) {
                return addErrorInput(name, 'Tên hiển thị không được để trống');
            }
            if(!email.val()) {
                return addErrorInput(email, 'Email không được để trống');
            }
            if(!password.val()) {
                return addErrorInput(password, 'Nội dung này không được để trống.');
            }
            if(confirm_password.val() != password.val()) {
                return addErrorInput(confirm_password, 'Xác nhận mật khẩu không khớp.');
            }
            if(username.val().length < 4) {
                return addErrorInput(username, 'Tài khoản trên 4 ký tự.');
            }
            if(password.val().length < 6) {
                return addErrorInput(password, 'Mật khẩu phải trên 6 ký tự.');
            }
            if(!contact.is( ":checked" )) {
                return addErrorInput(contact, 'Xác nhận thỏa thuận để đăng ý tài khoản');
            }
            $.ajax({
                url: '<?php echo URL::to('/') ?>/register',
                type: "POST",
                dataType: "json",
                data: {
                    name: name.val(),
                    username: username.val(),
                    email: email.val(),
                    password: password.val(),
                    captcha: grecaptcha.getResponse()
                },
                beforeSend: function () {
                    waitingDialog.show();
                    if(loaded) return false;
                    loaded = true;
                },
                error: function (data) {
                    waitingDialog.hide();
                    var errors = data.responseJSON;
                    $.each( errors.errors, function( key, value ) {
                        addErrorInput($('.modal-register').find('.' + key), value);
                    });
                },
                success: function(response) {
                    location.reload();
                }
            });
        }
        $('.modal-forgot form').submit(false);
        function authForgot() {
            resetInputLogin();
            const email = $('.modal-forgot').find('.email');
            if(!email.val()) {
                return addErrorInput(email, 'Email không được để trống');
            }
            $.ajax({
                url: '<?php echo URL::to('/') ?>/password/email',
                type: "POST",
                dataType: "json",
                data: {
                    email: email.val(),
                },
                beforeSend: function () {
                    waitingDialog.show();
                    if(loaded) return false;
                    loaded = true;
                },
                error: function (data) {
                    waitingDialog.hide();
                    var errors = data.responseJSON;
                    $.each(errors.errors, function( key, value ) {
                        addErrorInput($('.modal-forgot').find('.' + key), value);
                    });
                },
                success: function(response) {
                    waitingDialog.hide();
                    var status = response.status.email;
                    email.before('<div class="alert alert-success">' + status + ' </div>');
                }
            });
        }
        function resetInputLogin() {
            $('.modal-form').find('.input-help-block').remove();
            $('.modal-form').find('.alert').remove();
            $('.modal-form').find('input').removeClass('input-has-error');
        }
        function addErrorInput(tag, content) {
            tag.addClass('input-has-error');
            tag.before('<span class="input-help-block"><strong>' + content + '</strong></span>');
        }


    </script>
@endif
<script>
    var loadHistory = true;
    function showHistoryMusic() {
        if(loadHistory) {
            $.ajax({
                url: "/music/history_listen",
                type: "POST",
                dataType: "json",
                data: {},
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(data) {
                    loadHistory = false;
                    var stringBoxHtml = '';
                    if(data) {
                        $.each(data, function (index, val) {
                            stringBoxHtml += '<a href="' + val.link + '" class="list-group-item list-group-item-action d-flex title_playlist">' + val.title + '</a>';
                        });
                    }
                    $('.box_show_history_music .list-group').html(stringBoxHtml);
                }
            });
        }
        $('.box_history_music').css('display', 'inherit');
        $('body').append('<div id="boxOutPlaylist" style="display: block; z-index: 99999;" role="dialog" class="modal"> </div>');
        window.onclick = function(event) {
            if(event.target == document.getElementById('boxOutPlaylist')) {
                $('.box_history_music').css('display', 'none');
                $('#boxOutPlaylist').remove();
            }
        }
    }
    $('.box_history_music').find('.close').on('click', function () {
        $('.box_history_music').css('display', 'none');
        $('#boxOutPlaylist').remove();
    })
    function redirectUpload(url) {
        <?php
        if(!Auth::check()) {
        ?>
        switchAuth('myModal_login');
        return false;
        <?php
        }
        ?>
        window.location.href = url;
    }
</script>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Bảng Xếp Hạng</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/nhac-hot.html" title="">BXH Hôm Nay</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/tuan.html" title="BXH tuần này">BXH Tuần Này</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/thang-09-2018.html" title="BXH tháng 9">BXH Tháng 11</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/nam-2017.html" title="BXH năm 2017">BXH Năm 2017</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/nam-2018.html" title="BXH năm 2018">BXH Năm 2018</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Video Clip</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/hd/video/v-video.html" title="Video Việt Nam">Video Việt Nam</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/us-video.html" title="Video US-UK">Video US-UK</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/c-video.html" title="Video Hoa">Video Hoa</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/k-video.html" title="Video Hàn">Video Hàn</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/l-video.html" title="Video Live">Video Live</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/h-video.html" title="Video Hài">Video Hài</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/j-video.html" title="Video Nhật">Video Nhật</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/f-video.html" title="Video Pháp">Video Pháp</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/o-video.html" title="Video Nước Khác">Video Nước Khác</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Beat, Playback</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/beat-playback/v-instrumental.html" title="Playback Việt Nam">Playback Việt Nam</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/beat-playback/us-instrumental.html" title="Playback US-UK">Playback US-UK</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/beat-playback/c-instrumental.html" title="Playback Hoa">Playback Hoa</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/beat-playback/k-instrumental.html" title="Playback Hàn">Playback Hàn</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/beat-playback/j-instrumental.html" title="Playback Nhật">Playback Nhật</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/beat-playback/f-instrumental.html" title="Playback Pháp">Playback Pháp</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/beat-playback/o-instrumental.html" title="Playback Nước Khác">Playback Nước Khác</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc Việt Nam</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-pop.html" title="Nhạc pop, rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-rap-hiphop.html" title="Nhạc rap, hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-dance-remix.html" title="Nhạc dance, remix">Nhạc Dance, Remix</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-truyen-thong.html" title="Nhạc truyền thống">Nhạc Truyền Thống</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc US-UK</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-pop.html" title="Nhạc pop, rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-rap-hiphop.html" title="Nhạc rap, hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-dance-remix.html" title="Nhạc dance, remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc Hoa</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/chinese/c-pop.html" title="Nhạc pop, rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/chinese/c-rap-hiphop.html" title="Nhạc rap, hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/chinese/c-dance-remix.html" title="Nhạc dance, remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc Hàn</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/korea/k-pop.html" title="Nhạc pop, rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/korea/k-rap-hiphop.html" title="Nhạc rap, hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/korea/k-dance-remix.html" title="Nhạc dance, remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="f_item">
                    <h3 class="title">Nhạc Nước Khác</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/other/o-pop.html" title="Nhạc pop, rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/other/o-rap-hiphop.html" title="Nhạc rap, hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/other/o-dance-remix.html" title="Nhạc dance, remix">Nhạc Dance, Remix</a></li>
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
                        <li class="list-inline-item"><a href="https://www.facebook.com/chiasenhac/" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        {{--<li class="list-inline-item"><a href="#" title=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>--}}
                        {{--<li class="list-inline-item"><a href="#" title=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
                        {{--<li class="list-inline-item"><a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{URL::to('/')}}/js/lobiboxcsn.min.js"></script>

@if( isset($allpage_banner) && $allpage_banner == true )
<script type="text/javascript">
    var screenW = 640, screenH = 480;
    if (parseInt(navigator.appVersion)>3) {
        screenW = screen.width;
        screenH = screen.height;
    }
    else if (navigator.appName == "Netscape" && parseInt(navigator.appVersion)==3 && navigator.javaEnabled() )
    {
        var jToolkit = java.awt.Toolkit.getDefaultToolkit();
        var jScreenSize = jToolkit.getScreenSize();
        screenW = jScreenSize.width;
        screenH = jScreenSize.height;
    }

    if ( screenW > 1024 )
    {
        var default_width = 150;
        var default_height = 700;
        var b_width = (screenW - 1024) / 2;
        var b_height = screenH - 60;

        if (b_width / default_width > b_height / default_height)
        {
            b_width = b_height * (default_width / default_height);
        }
        else
        {
            b_height = b_width * (default_height / default_width);
        }

        var b_width = 150;
        var b_height = 1000;
        var b_marginleft = -(500 + b_width);//-(492 + b_width);

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV224c750d;https://yame.vn/shop/ao-thun?s=2&utm_source=background_CSN&utm_medium=CPD"><div id="bgsb_left" style="position: fixed; top: 150px; left: 0pt; width: 100%; height: ' + b_height + 'px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: -960px; margin-right: 0pt; z-index:-2;">');
        document.write('<div style="width: 460px; height: 1000px; position: relative; background-color: #e8ce79; background-repeat: no-repeat; background-position: center;"/> </div>');
        document.write('<img src="https://visitanalytics.userreport.com/hit.gif?t=BLV224c750d">');
        document.write('</div></div></a>');

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV224c750d;https://yame.vn/shop/ao-thun?s=2&utm_source=background_CSN&utm_medium=CPD"><div id="asb_left" style="position: fixed; top: 150px; left: 0pt; width: 100%; height: ' + b_height + 'px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: ' + b_marginleft + 'px; margin-right: 0pt; z-index:-1;">');
        document.write('<img src="https://data.chiasenhac.com/banner/yame2/Left_2.png" border="0" width="150" height="700" />');
        document.write('</div></div></a>');

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV9eacb70;https://yame.vn/shop/ao-thun?s=2&utm_source=background_CSN&utm_medium=CPD"><div id="bgsb_right" style="position: fixed; top: 150px; right: 0pt; width: 100%; height: ' + b_height + 'px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: 500px; margin-right: 0pt; z-index:-2;">');
        document.write('<div style="width: 460px; height: 1000px; position: relative; background-color: #e8ce79; background-repeat: no-repeat; background-position: center;"/> </div>');
        document.write('<img src="https://visitanalytics.userreport.com/hit.gif?t=BLV9eacb70a">');
        document.write('</div></a></div>');

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV9eacb70;https://yame.vn/shop/ao-thun?s=2&utm_source=background_CSN&utm_medium=CPD"><div id="asb_right" style="position: fixed; top: 150px; right: 0px; width: 100%; height: ' + b_height + 'px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: 500px; margin-right: 0pt; z-index:-1;">');
        document.write('<img src="https://data.chiasenhac.com/banner/yame2/Right_2.png" border="0" width="150" height="700" />');
        document.write('</div></div></a>');
    }
</script>
<script type="text/javascript">
    (function($){
        $.fn.visible = function(partial){

            var $t			= $(this),
                $w			= $(window),
                viewTop			= $w.scrollTop(),
                viewBottom		= viewTop + $w.height(),
                _top			= $t.offset().top,
                _bottom			= _top + $t.height(),
                compareTop		= partial === true ? _bottom : _top,
                compareBottom	= partial === true ? _top : _bottom;

            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
        };
    })(jQuery);

    $( window ).scroll(function() {
        if ( $(window).scrollTop() > 150 )
        {
            $("#bgsb_left").css({ top: "0px" });
            $("#bgsb_right").css({ top: "0px" });
            $("#asb_left").css({ top: "0px" });
            $("#asb_right").css({ top: "0px" });
        }
        else
        {
            $("#bgsb_left").css({ top: (150 - $(window).scrollTop()) + "px" });
            $("#bgsb_right").css({ top: (150 - $(window).scrollTop()) + "px" });
            $("#asb_left").css({ top: (150 - $(window).scrollTop()) + "px" });
            $("#asb_right").css({ top: (150 - $(window).scrollTop()) + "px" });
        }
    });
</script>
@endif


</section>
