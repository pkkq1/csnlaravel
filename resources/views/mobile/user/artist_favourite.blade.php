<?php
use App\Library\Helpers;
$artistData = $artistFavourite->toArray();
?>
@if($artistData['data'])
    <?php
    array_map(function($item) {
    $item = $item['artist'];
    $url = Helpers::artistUrl($item['artist_id'], $item['artist_nickname']);
    ?>
    <div class="element mb-2">
        <a href="{{$url}}"><div class="image100 mr-2 d-inline-block align-middle" style="background : url('{{$item['artist_cover'] ? env('DATA_URL').COVER_ARTIST_CROP_PATH.$item['artist_avatar'] : env('IMG_DATA_URL').'imgs/no_cover.jpg'}}') no-repeat center;background-size: cover;"></div></a>
        <div class="content d-inline-block align-middle">
            <a href="{{$url}}"><h6 class="name_song text-black mb-1 card-title">{{$item['artist_nickname']}}</h6></a>
        </div>
    </div>
    <?php
    }, $artistData['data']);
    ?>
    <center>{{$artistFavourite->links()}}</center>
@else
    <div class="center-text-mes"><span>Chưa có ca sĩ nào</span></div>
@endif
