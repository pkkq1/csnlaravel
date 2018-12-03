<?php
use App\Library\Helpers;
?>
@if($cover->toArray()['data'])
    <?php
    array_map(function ($item) {
    $url = Helpers::album_url($item);
    $album_artist_id = $item['album_artist_id_1'];
    $album_artist = $item['album_artist_1'];
    if($item['album_artist_id_2']) {
        $album_artist_id = $album_artist_id. ';'.$item['album_artist_id_2'];
        $album_artist = $album_artist. ';'.$item['album_artist_2'];
    }
    ?>
    <div class="element mb-2">
        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{Helpers::cover_url($item['cover_id'])}}') no-repeat center;background-size: cover;"></div></a>
        <div class="content d-inline-block align-middle">
            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['music_album']}}</h6></a>
            <p class="name_singer text-gray mb-1 author"><?php echo Helpers::rawHtmlArtists($album_artist_id, $album_artist) ?></p>
            <p class="loss text-pink mb-0"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></p>
        </div>
    </div>
    <?php
    }, $cover->toArray()['data']);
    ?>
<center><?php echo str_replace(url()->current(), '/tab_category',$cover->links()) ?></center>
@endif