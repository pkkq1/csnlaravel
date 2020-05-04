<?php
use App\Library\Helpers;
?>
<div class="d-flex align-items-center justify-content-between" id="header_playlist">
    <span class="title"></span>
    @if($mySelf)
        <span>
                                    <a class="btn btn-danger" href="/user/playlist/them" title="Tạo playlist"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a>
                                    <a class="btn btn-secondary" href="/user/playlist/chinh-sua" title=""><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a>
                                    <a class="btn btn-secondary" onclick="pupop_qr_code()" href="javascript:void(0)" title=""><i class="fa fa-qrcode" aria-hidden="true"></i> QR code</a>
                                </span>
    @endif
</div>
<div class="row row10px" id="playlist">
    @if(count($playlist))
        @foreach($playlist as $key2 => $item)
            <?php
            $url = Helpers::playlist_url($item->toArray());
            $tagHref = $item->playlist_music_total > 0 ? '<a href="'.$url.'" title="'.$item->playlist_title.'">' : '<a href="javascript:void(0)" onclick="alertModal(\'Playlist vẫn chưa có bài hát nào.\');" title="'.$item->playlist_title.'">';
            ?>
            <div class="col">
                <div class="card card1">
                    <div class="card-header" style="background-image: url({{$item->playlist_cover ? Helpers::file_path($item->playlist_id, env('DATA_URL').MUSIC_PLAYLIST_THUMB_200_PATH, true).$item->playlist_id . '.jpg' : env('IMG_DATA_URL').'imgs/avatar_default.png'}});">
                        <?php echo $tagHref ?><span class="icon-play"></span></a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            <?php echo $tagHref ?>{{$item->playlist_title}}</a>
                        </h3>
                        @if($item->playlist_artist)
                            <p class="card-text" style="padding: 0px;">
                                <?php
                                $artistPlaylist = unserialize($item->playlist_artist);
                                if($artistPlaylist) {
                                    $artistNames = [];
                                    $artistIds = [];
                                    $i = 0;
                                    foreach($artistPlaylist as $key => $item) {
                                        $artistNames[] = $item['name'];
                                        $artistIds[] = $key;
                                        if(++$i == 2)
                                            break;
                                    }
                                    echo Helpers::rawHtmlArtists(implode(';', $artistIds), implode(';', $artistNames));
                                }
                                ?>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="center-text-mes"><span>
                                        @if($mySelf)
                    Bạn chưa có playlist nào, <a href="/user/playlist/them">click vào đây để tạo playlist</a>
                @else
                    {{$user->name}} chưa tạo playlist nào.
                @endif
                                </span></div>
    @endif
</div>