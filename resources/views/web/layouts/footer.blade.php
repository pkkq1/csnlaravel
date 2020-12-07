
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
                        if(typeof  data.success === 'undefined') {
                            // dataSearch = response( data );
                            response(data);
                        }else {
                            alertModal(data.message);
                        }

                    }
                } );
            }
        }).autocomplete( "instance" )._renderItemData = function( ul, item ) {
            var theHtml = rawBodySearch(rawArtist(item.artist['data'], item.q), rawMusic(item.music['data'], item.q),
                rawAlbum(item.album['data'], item.q), rawVideo(item.video['data'], item.q), rawTopMusic(item.top_music['data'], item.q));
            if(theHtml.length != 29) {
                theHtml = '<span style="float: right;margin-right: 7px;margin-top: 1px;"><a onclick="redirectSearch()" href="javascript:void(0)">Xem tất cả</a></span>' + theHtml;
            }
            $(".suggest").fadeIn("fast");
            $('.search_layout').html(theHtml);
            $( "<li>" ).appendTo( ul );
            $('.search_event .search-line-music').click(function () {
                Cookies.set('search_search', $(this).attr('href'));
                var cookieName = 'search_search';
                var cookieValue = $(this).attr('href');
                var myDate = new Date();
                myDate.setMonth(myDate.getMonth() + 12);
                document.cookie = cookieName +"=" + cookieValue + ";expires=" + myDate
                    + ";domain=vi.chiasenhac.vn;path=/";
            });
            this.element.removeClass( "ui-autocomplete-loading" );
            return true;
        };
    });
    var enableHasKeyMove = false;
    var divSeachDisplay = $('.search_layout_top');
    function search_keyDown(event) {
        if(event.keyCode == 38 || event.keyCode == 40) {
            enableHasKeyMove = true;
            var hasKeyMove = false;
            var posKeyMove = -1;
            var lenghItem = divSeachDisplay.find('.li_item_result').length - 1;
            divSeachDisplay.find('.li_item_result').each(function( i, index ) {
               if($( this ).hasClass('select_key_move')) {
                    if((i == lenghItem && event.keyCode == 40) || (i == 0 && event.keyCode == 38)) {
                        hasKeyMove= false;
                    }else{
                        if(event.keyCode == 40) {
                            posKeyMove = ++i;
                        }else{
                            posKeyMove = --i;
                        }
                        hasKeyMove= true;
                    }
                   return false;
               }
            });
            $('.select_key_move').removeClass('select_key_move');
            if(!hasKeyMove) {
                if(event.keyCode == 38) {
                    posKeyMove = lenghItem;
                    divSeachDisplay.find('.li_item_result').last().addClass('select_key_move');
                }else{
                    posKeyMove = 0;
                    divSeachDisplay.find('.li_item_result').first().addClass('select_key_move');
                }
            }else{
                divSeachDisplay.find('.li_item_result').each(function( i, index ) {
                    if(i == posKeyMove) {
                        $(this).addClass('select_key_move');
                    }
                });
            }
        }else{
            if(event.keyCode != 13) {
                enableHasKeyMove = false;
            }
        }
        if(event.keyCode == 13 && enableHasKeyMove) {
            event.preventDefault();
            document.location.href = $('.select_key_move').find('a').first().attr('href');
            return false;
        }
    }
    function search_keyUp() {
        if($('#search_autocomplete').val()) {
            $('.search_layout').css('display', 'block');
            divSeachDisplay = $('.search_layout');
        }else {
            $('.search_layout').css('display', 'none');
            divSeachDisplay = $('.search_layout_top');
        }
    }
    function rawBodySearch(artist, music, album, video, top_music) {
        return '<div class="card-body">' +
            top_music +
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
                    '  <li class="media align-items-stretch li_item_result">' +
                    '  <a class="search-line search-line-music" href="' + value.music_link + '" title="' + value.music_title + ' - ' + value.music_artist + '">' +
                    // '      <div class="media-left align-items-stretch mr-2">' +
                    // '              <img src="' + value.music_cover + '" alt="' + value.music_title + '">' +
                    // '           <i class="material-icons">play_circle_outline</i>' +
                    // '      </div>' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <h5 class="media-title mt-0 mb-0 span_h5">' + searchHighlight(q, value.music_title) + '</h5>' +
                    '          <div class="author">' + value.music_artist + '</div>' +
                    '          <small class="type_music c1">' + value.music_bitrate_html + '</small>' +
                    '      </div>' +
                    '  </a>'+
                    '  </li>';
            });
            if(song.trim()) {
                return '<h4 class="card-title">Top Kết Quả</h4>' +
                    '<ul class="list-unstyled list_music">' +
                    song +
                    '</ul><hr>';
            }
        }
        return '';
    }
    function rawArtist(artists, q) {
        if(artists.length > 0) {
            var artist = '';
            $.each( artists, function( key, value ) {
                artist = artist +
                        '  <li class="media align-items-stretch li_item_result">' +
                        ' <a class="search-line" href="' + value.artist_link + '" title="' + value.artist_nickname + '">' +
                        '      <div class="media-left align-items-stretch mr-2" style="display: inline-block; margin-right: 3px!important;">' +
                        '         <img src="' + value.artist_avatar + '" alt="' + value.artist_nickname + '">' +
                        '      </div>' +
                        '      <div class="media-body align-self-center flex-column justify-content-between p-0"  style="display: inline-block;">' +
                        '          <div>' +
                        '              <h5 class="media-title mt-0 mb-0 span_h5">' + searchHighlight(q, value.artist_nickname) + '</h5>' +
                        '          </div>' +
                        '      </div>' +
                        ' </a>'+
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
                    '  <li class="media align-items-stretch li_item_result">' +
                        '<a class="search-line parent-line search-line-music" href="' + value.music_link + '">' +
                        '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                        '          <div>' +
                        '              <h5 class="media-title mt-0 mb-0 span_h5" title="' + value.music_title + ' - ' + value.music_artist + '">' + searchHighlight(q, value.music_title) + '</h5>' +
                        '              <div class="author">' + (value.music_artist).replace(/;/g, '; ') + '</div>' +
                        '          </div>' +
                        '          <small class="type_music c1">' + value.music_bitrate_html + '</small>' +
                        '      </div>' +
                        '</a>'
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
                    '  <li class="media align-items-stretch li_item_result">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '          <a class="search-line search-line-music" href="' + value.album_link + '">' +
                    '              <img src="' + value.album_cover + '" alt="' + value.music_album + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '          </a>' +
                    '      </div>' +
                    '      <a class="search-line search-line-music" href="' + value.album_link + '" title="' + value.music_album + ' - ' + value.album_artist + '">' +
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
                    '  <li class="media align-items-stretch parent-line li_item_result">' +
                    '      <div class="media-left align-items-stretch mr-2">' +
                    '          <a class="search-line search-line-music" href="' + value.video_link + '">' +
                    '              <img src="' + value.video_cover + '" alt="' + value.video_title + '">' +
                    '              <i class="material-icons">play_circle_outline</i>' +
                    '              <p class="time text-white mb-0 px-2 py-1"><img src="{{env('IMG_DATA_URL')}}images/ic_menu_clock.png" width="14"> ' + value.video_length_html + '</p>' +
                    '          </a>' +
                    '      </div>' +
                    '      <a class="search-line search-line-music" title="' + value.video_title + ' - ' + value.video_artist + '"  href="' + value.video_link + '" >' +
                    '      <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">' +
                    '          <div>' +
                    '              <h5 class="media-title mt-0 mb-0 span_h5" title="' + value.video_title + ' - ' + value.video_artist + '">' + searchHighlight(q, value.video_title) + '</h5>' +
                    '              <div class="author">' + value.video_artist + '</div>' +
                    '          </div>' +
                    '          <small class="type_music c1">' + value.video_bitrate_html + '</small>' +
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
        window.location.href = "<?php echo env('SEARCH_TEMPLATE_URL'); ?>/tim-kiem?q=" + $('#search_autocomplete').val();
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
                        <form class="col-md-12" id="form-login" action="javascript:authLogin();">
                            <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                                <div class="input-field">
                                    <input type="text" class="email" name="email" placeholder="Tên đăng nhập hoặc email" />
                                    <input type="password" class="password" name="password" placeholder="Mật khẩu" name="password"/>
                                    <div class="login_action">
                                        <input type="checkbox" checked id="remember" name="remember" onkeydown="if (event.keyCode == 13) return authLogin();" {{ old('remember') ? 'checked' : '' }}>
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
                        <form class="col-md-12" action="javascript:authRegister();">
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
                                        <label style="cursor: pointer; font-size: 13px; display: inline;" for="contact_csn">Tôi đã đọc và đồng ý các điều kiện<a target="_blank" href="/chinh-sach-chia-se-nhac" > Thỏa thuận sử dụng</a></label>
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
                        <form class="col-md-12" action="javascript:authForgot();">
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
                url: window.location.origin + '/login',
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
                    if(back_url) {
                        window.location = back_url;
                    }else{
                        <?php
                        if(($_GET['back_url'] ?? '') != '') {
                            echo "window.location = '".($_GET['back_url'] ?? '')."';";
                        }else{
                            echo 'location.reload();';
                        }
                        ?>
                    }

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
                url: window.location.origin + '/register',
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
                url: window.location.origin + '/password/email',
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
                url: window.location.origin + "/music/history_listen",
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
    function showNotify() {
        $('.box_notify').css('display', 'inherit');
        $('body').append('<div id="boxOutPlaylist" style="display: block; z-index: 99999;" role="dialog" class="modal"> </div>');
        window.onclick = function(event) {
            if(event.target == document.getElementById('boxOutPlaylist')) {
                $('.box_notify').css('display', 'none');
                $('#boxOutPlaylist').remove();
            }
        };
        $('.box-notify-music .badge-danger').html('&nbsp;&nbsp;');
        $('.box-notify-music .badge-danger').removeClass('badge-danger')
        $.ajax({
            url: window.location.origin + "/user/show_notify",
            type: "POST",
            dataType: "json",
            data: {},
            beforeSend: function () {
                if(loaded) return false;
                loaded = true;
            },
            success: function(data) {

            }
        });
    }
    $('.box_history_music').find('.close').on('click', function () {
        $('.box_history_music').css('display', 'none');
        $('.box_notify').css('display', 'none');
        $('#boxOutPlaylist').remove();
    })
    function redirectUpload(url) {
        <?php
        if(!Auth::check()) {
        ?>
        back_url = url;
        $('#myModal_login').on('hidden.bs.modal', function () {
            back_url = '';
        })
        $('#myModal_register').on('hidden.bs.modal', function () {
            back_url = '';
        })
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
        <?php
        global $startTime;
        use App\Models\ErrorBugSlowModel;
        //                    $endTime = number_format(microtime(true) - $startTime, 3);
        $endTime = round(microtime(true) - LARAVEL_START, 2);
        if($endTime > 5) {
            ErrorBugSlowModel::firstOrCreate([
                'type' => 'slow',
                'link' => url()->full(),
                'device_display' => 'web',
                'time_load' => $endTime,
            ]);
        }
        ?>
        <div class="row align-items-end">
            <div class="col-10 offset-3">
                <ul class="csn-nav-footer">
                    <li>
                        <a href="javascript:void(0);" onclick="alert_gioi_thieu();" style="color: #a9a9a9;" title="Giới Thiệu">Giới thiệu</a>
                    </li>
                    <li>
                        <div class="csn-link-special">•</div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" onclick="openContact();" style="color: #a9a9a9;" title="Góp ý">Góp ý</a>
                    </li>
                    <li>
                        <div class="csn-link-special">•</div>
                    </li>
                    <li>
                        <a href="/chinh-sach-chia-se-nhac.html" style="color: #a9a9a9;" title="Nội quy và chính sách Chia Sẻ Nhạc" target="_blank">Nội quy và chính sách Chia Sẻ Nhạc</a></li>
                    <li>
                        <div class="csn-link-special">•</div>
                    </li>
                    <li>
                        <div>Page generation time: {{ $endTime }} seconds</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="{{URL::to('/')}}/js/lobiboxcsn.min.js"></script>
<script>
    function alert_gioi_thieu() {
        $("#myModal .modal-body").html('<div class="modal_content_csn">' +
            '<span class="csn-logo"><img src="https://data.chiasenhac.com/imgs/logo-web-official.png" style="margin-bottom: 15px;" alt="Logo Chiasenhac"></span>' +
            '<div class="z-copyright-content">Công ty cổ phần công nghệ CSN<br>' +
            'Chủ sở hữu website: Ông Nguyễn Hoàng Minh Quân<br>' +
            'Giấy phép MXH số 92/GP-BTTTT do Bộ TT&TT cấp ngày 11/03/2020<br>' +
            'Giấy Chứng nhận Đăng ký Kinh doanh số 0314660744 do Sở kế hoạch và đầu tư thành phố Hồ Chí Minh cấp ngày 05/10/2017.</br></br>' +

            'Tòa nhà Fideco, số 28 Phùng Khắc Khoan, Phường Đa Kao, Quận 01, TP.HCM<br>' +
            'info@chiasenhac.com<br>' +
            '(028) 7300 8199 - Ext: 999<br>' +
            '</div>');
        $("#myModal .modal-dialog").removeClass('modal-sm');
        $("#myModal").modal();
    }
    function openContact() {
        $('#myConfirmModal .contact_email').val('');
        $('#myConfirmModal .contact_text').val('');
        confirmModal('@if(!Auth::user())<input style="width: 100%;margin-bottom: 10px" type="email" class="contact_email" placeholder="Email liên hệ"><input style="width: 100%;margin-bottom: 10px" type="text" class="contact_phone" placeholder="Số Điện Thoại liên hệ (không bắt buộc)">@endif<textarea style="width: 100%" class="contact_text" rows="6" placeholder="Nội dung góp ý"></textarea>', 'Gửi góp ý về Chia Sẻ Nhạc', '', 'Gửi');
        $("#myConfirmModal .btn-ok").on('click', function () {
            @if(!Auth::user())
            if($('#myConfirmModal .contact_email').val().length < 5){
                alertModal('Vui lòng nhập email trên 5 ký tự');
                return false;
            }
            @endif
            if($('#myConfirmModal .contact_text').val().length < 5){
                alertModal('Vui lòng nhập nội dung trên 5 ký tự');
                return false;
            }
            $.ajax({
                url: window.location.origin + '/report/send_contact',
                type: "POST",
                dataType: "json",
                data: {
                    'email': $('#myConfirmModal .contact_email').val(),
                    'phone': $('#myConfirmModal .contact_phone').val(),
                    'text': $('#myConfirmModal .contact_text').val(),
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    if(response.success) {
                        $('.modal').find('.close_confirm').click();

                    }else{

                    }
                    alertModal(response.message);
                }
            });
        })
    }
</script>

@if( $sb_banner == false && false ) /*isset($allpage_banner) && $allpage_banner == true )*/
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

    screenW = window.innerWidth;
    screenH = window.innerHeight;

    var b_top = 0;
    if ( screenW > 1280 )
    {
        if ( screenH < 850 )
        {
            if ( screenH > 500 ) {
                b_top = screenH - 800 - 50;
            } else
            {
                b_top = 500 - 800 - 50;
            }
        }

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV24cc65fe;https://sunhee.vn/?utm_source=BSD_Adnetwork&utm_medium=Chiasenhac&utm_campaign=Launch"><div id="bgsb_left" style="position: fixed; top: '+ b_top + 'px; left: 0px; width: 100%; height: 1080px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: -1075px; margin-right: 0px; z-index:-2;">');
        document.write('<div style="width: 490px; height: 1080px; position: relative; background-color: #94d5fd; background-repeat: no-repeat; background-position: center;"/> <img src="https://data.chiasenhac.com/banner/sunhee/bg_left.jpg" border="0" width="490" height="1080" /> </div>');
        document.write('<img src="https://visitanalytics.userreport.com/hit.gif?t=BLV24cc65fe&t=<?php echo time(); ?>">');
        document.write('</div></div></a>');

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV24cc65fe;https://sunhee.vn/?utm_source=BSD_Adnetwork&utm_medium=Chiasenhac&utm_campaign=Launch"><div id="asb_left" style="position: fixed; top: '+ (b_top + 350) + 'px; left: 0px; width: 100%; height: 500px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: -720px; margin-right: 0px; z-index:1;">');
        document.write('<iframe src="https://data.chiasenhac.com/banner/sunhee/left/left.html" frameborder="0" scrolling="no" width="122" height="500" /></iframe>');
        document.write('</div></div></a>');

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV6a500067;https://sunhee.vn/?utm_source=BSD_Adnetwork&utm_medium=Chiasenhac&utm_campaign=Launch"><div id="bgsb_right" style="position: fixed; top: '+ b_top +'px; right: 0px; width: 100%; height: 1080px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: 585px; margin-right: 0px; z-index:-2;">');
        document.write('<div style="width: 490px; height: 1080px; position: relative; background-color: #94d5fd; background-repeat: no-repeat; background-position: center;"/> <img src="https://data.chiasenhac.com/banner/sunhee/bg_right.jpg" border="0" width="490" height="1080" /> </div>');
        document.write('<img src="https://visitanalytics.userreport.com/hit.gif?t=BLV6a500067&t=<?php echo time(); ?>">');
        document.write('</div></a></div>');

        document.write('<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV6a500067;https://sunhee.vn/?utm_source=BSD_Adnetwork&utm_medium=Chiasenhac&utm_campaign=Launch"><div id="asb_right" style="position: fixed; top: '+ (b_top + 350) + 'px; left: 0px; width: 100%; height: 500px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: 590px; margin-right: 0px; z-index:1;">');
        document.write('<iframe src="https://data.chiasenhac.com/banner/sunhee/right/right.html" frameBorder="0" scrolling="no" height="500" width="130"></iframe>');
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
        if ( $(window).scrollTop() > b_top )
        {
            $("#bgsb_left").css({ top: b_top + "px" });
            $("#bgsb_right").css({ top: b_top + "px" });
            //$("#asb_left").css({ top: "0px" });
            //$("#asb_right").css({ top: "0px" });
        }
        else
        {
            $("#bgsb_left").css({ top: (0 - $(window).scrollTop()) + "px" });
            $("#bgsb_right").css({ top: (0 - $(window).scrollTop()) + "px" });
            //$("#asb_left").css({ top: (0 - $(window).scrollTop()) + "px" });
            //$("#asb_right").css({ top: (0 - $(window).scrollTop()) + "px" });
        }
    });

</script>
@endif

@if( rand(1,100) < 0 )
    <!-- Flight Tag: Chiasenhac - Vn/Yamaha/Apr19/JanusPromotion -->
    <script type="text/javascript">
        var screenW = 640, screenH = 480;
        screenW = screen.width;
        screenH = screen.height;

        if ( screenW > 1280 )
        {
            var b_width = 120;
            var b_height = 600;
            var a_marginleft = 600;
            var b_marginleft = -(a_marginleft + b_width);//-(492 + b_width);

            document.write('<div id="asb_left" style="position: fixed; top: 57px; left: 0pt; width: 100%; height: ' + b_height + 'px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: ' + b_marginleft + 'px; margin-right: 0pt; z-index:-1;">');
            document.write('<div id="innity_page_skin_expandable_left"></div>');
            document.write('</div></div>');

            document.write('<div id="asb_right" style="position: fixed; top: 57px; right: 0px; width: 100%; height: ' + b_height + 'px; overflow: hidden; visibility: hidden;"><div style="position: absolute; visibility: visible; left: 50%; margin-left: ' + a_marginleft + 'px; margin-right: 0pt; z-index:-1;">');
            document.write('<div id="innity_page_skin_expandable_right"></div>');
            document.write('</div></div>');

            document.write('<div id="innity_adslot_238602"></div> ');
            document.write('<s' + 'cript type="text/javascript">');
            document.write(' innity_country = "VN";');
            document.write(' innity_path = "/201904_27652/102485/";');
            document.write(' innity_proxy = "proxy_238602";');
            document.write(' innity_ord = "ord=[timestamp]";');
            document.write(' </s'+'cript>');
            document.write(' <s'+'cript type="text/javascript" src="https://cdn.innity.net/global.js">'+'</s'+'cript>');
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

        if ( screenW > 1280 )
        {
            $( window ).scroll(function() {
                if ( $(window).scrollTop() > 57 )
                {
                    $("#asb_left").css({ top: "0px" });
                    $("#asb_right").css({ top: "0px" });
                }
                else
                {
                    $("#asb_left").css({ top: (57 - $(window).scrollTop()) + "px" });
                    $("#asb_right").css({ top: (57 - $(window).scrollTop()) + "px" });
                }
            });
        }

    </script>
@endif

</section>
