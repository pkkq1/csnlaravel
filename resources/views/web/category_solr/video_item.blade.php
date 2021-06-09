<?php
use App\Library\Helpers;
?>
@if($video['data'])
<div class="row row10px float-col-width-video">
    <?php
    array_map(function ($item) {
    ?>
    <div class="col">
        <div class="card card1 video">
            <div class="card-header" style="background-image: url({{$item['video_cover'][0]}});">
                <a href="{{$item['video_link'][0]}}" title="{{$item['video_title'][0]}}">
                    <span class="icon-play"></span>
                </a>
            </div>
            <span class="time"><img src="/mobile/assets/images/icon/ic_menu_clock.png" width="14"><?php echo $item['video_length_html'][0] ?></span>
            <span class="card-text bitrate_video"><?php echo $item['video_bitrate_html'][0] ?></span>
            <div class="card-body">
                <p class="card-title"><a href="{{$item['video_link'][0]}}" title="{{$item['video_title'][0]}}">{{$item['video_title'][0]}}</a></p>
                <p class="card-text"><?php echo $item['video_artist_html'][0] ?></p>
            </div>
        </div>
    </div>
    <?php
    }, $video['data'])
    ?>
</div>
<center><?php Helpers::pagingCustom($video['page'], $video['rows'], $video['row_total'] ?? 0, '<a href="/tab_category?page=%d">%d</a>') ?></center>
@endif