<script src="/js/lobibox.min.js"></script>
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
</section>
