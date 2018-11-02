<?php
use App\Library\Helpers;
?>
@if($music->toArray()['data'])
<div class="row row10px float-col-width">
    <?php
    array_map(function ($item) {
    $url = Helpers::listen_url($item);
    ?>
    <div class="col">
        <div class="card card1">
            <div class="card-header" style="background-image: url({{Helpers::cover_url($item['cover_id'])}});">
                <a href="{{$url}}" title="{{$item['music_title']}}">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="card-body">
                <h3 class="card-title"><a href="{{$url}}" title="{{$item['music_title']}}">{{$item['music_title']}}</a></h3>
                <p class="card-text"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></p>
            </div>
        </div>
    </div>
    <?php
    }, $music->toArray()['data'])
    ?>
</div>
<center>{{$music->links()}}</center>
@endif