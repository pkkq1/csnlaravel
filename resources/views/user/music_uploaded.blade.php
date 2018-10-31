<?php
    use App\Library\Helpers;
?>
@if(isset($music['stage_uncensor']) && $music['stage_uncensor']->toArray()['data'])
<?php echo $stage == 'all' ? '<div class="stage_uncensor">' : '' ?>
    <div class="box_header d-flex justify-content-between align-items-end">
        <span class="title m-0">Chờ xử lý</span>
    </div>
<div class="row row10px">
    <div class="col">
        <ul class="list-unstyled list_music">
            <?php
            $stageUncensor = array_reverse($music['stage_uncensor']->toArray()['data']);
            $perPage = $music['stage_uncensor']->toArray()['per_page'];
            $curentPage = $music['stage_uncensor']->toArray()['current_page'];
            array_map(function($i, $item) use($perPage, $curentPage) {
                if($i < 5) {
                    $url = '#';
                    ?>
                    <li class="media align-items-stretch items-stretch-{{$item['music_id']}}">
                        <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                            <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                        </div>
                        <div class="media-left align-items-stretch mr-2">
                            <a href="{{$url}}" title="{{$item['music_title']}}">
                                <img src="{{Helpers::cover_url($item['album_id'])}}" alt="{{$item['music_title']}}">
                                <i class="material-icons">play_circle_outline</i>
                            </a>
                        </div>
                        <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                            <div>
                                <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                                <div class="author title_home_tablet"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                            </div>
                            <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                        </div>
                        <div class="media-right align-self-center">
                            <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                            <ul class="list-inline" style="margin-right:0px">
                                <li class="list-inline-item"><a href="{{$url}}" target="_blank" title="nghe riêng nhạc {{$item['music_title']}}">Chỉnh Sửa</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php
                }
            }, array_keys($stageUncensor), $stageUncensor);
            ?>
        </ul>
    </div>
    <div class="col">
        <ul class="list-unstyled list_music">
            <?php
            array_map(function($i, $item) use($perPage, $curentPage) {
                if($i >= 5) {
                $url = '#';
                    ?>
                        <li class="media align-items-stretch items-stretch-{{$item['music_id']}}">
                            <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                                <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                            </div>
                            <div class="media-left align-items-stretch mr-2">
                                <a href="{{$url}}" title="{{$item['music_title']}}">
                                    <img src="{{Helpers::cover_url($item['album_id'])}}" alt="{{$item['music_title']}}">
                                    <i class="material-icons">play_circle_outline</i>
                                </a>
                            </div>
                            <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                                <div>
                                    <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                                    <div class="author title_home_tablet"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                                </div>
                                <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                            </div>
                            <div class="media-right align-self-center">
                                <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                                <ul class="list-inline" style="margin-right:0px">
                                    <li class="list-inline-item"><a href="{{$url}}" target="_blank" title="nghe riêng nhạc {{$item['music_title']}}">Chỉnh Sửa</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php
                }
            }, array_keys($stageUncensor), $stageUncensor);
            ?>
        </ul>
    </div>
</div>
<center data-page="uncensor">{{$music['stage_uncensor']->links()}}</center>

<?php echo $stage == 'all' ? '</div>' : ''?>
@endif
@if(isset($music['stage_fullcensor']) && $music['stage_fullcensor']->toArray()['data'])
<?php echo $stage == 'all' ? '<div class="stage_fullcensor">' : '' ?>
    <div class="box_header d-flex justify-content-between align-items-end">
        <span class="title m-0">Đã duyệt</span>
    </div>
    <div class="row row10px">
        <div class="col">
            <ul class="list-unstyled list_music">
                <?php
                $stageFullcensor = array_reverse($music['stage_fullcensor']->toArray()['data']);
                $perPage = $music['stage_fullcensor']->toArray()['per_page'];
                $curentPage = $music['stage_fullcensor']->toArray()['current_page'];
                array_map(function($i, $item) use($perPage, $curentPage) {
                if($i < 5) {
                $url = url()->current().'/../redirect/'.$item['music_id'];
                ?>
                <li class="media align-items-stretch items-stretch-{{$item['music_id']}}">
                    <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                        <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                    </div>
                    <div class="media-left align-items-stretch mr-2">
                        <a href="{{$url}}" target="_blank" title="{{$item['music_title']}}">
                            <img src="{{Helpers::cover_url($item['album_id'])}}" alt="{{$item['music_title']}}">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                            <div class="author title_home_tablet"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                        </div>
                        <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                        <ul class="list-inline" style="margin-right:0px">
                            <li class="list-inline-item"><a href="{{$url}}" target="_blank">Chỉnh Sửa</a></li>
                        </ul>
                    </div>
                </li>
                <?php
                }
                }, array_keys($stageFullcensor), $stageFullcensor);
                ?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled list_music">
                <?php
                array_map(function($i, $item) use($perPage, $curentPage) {
                if($i >= 5) {
                $url = url()->current().'/../redirect/'.$item['music_id'];
                ?>
                <li class="media align-items-stretch items-stretch-{{$item['music_id']}}">
                    <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                        <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                    </div>
                    <div class="media-left align-items-stretch mr-2">
                        <a href="{{$url}}" target="_blank" title="{{$item['music_title']}}">
                            <img src="{{Helpers::cover_url($item['album_id'])}}" alt="{{$item['music_title']}}">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                            <div class="author title_home_tablet"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                        </div>
                        <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                        <ul class="list-inline" style="margin-right:0px">
                            <li class="list-inline-item"><a href="{{$url}}" target="_blank">Chỉnh Sửa</a></li>
                        </ul>
                    </div>
                </li>
                <?php
                }
                }, array_keys($stageFullcensor), $stageFullcensor);
                ?>
            </ul>
        </div>
    </div>
    <center data-page="fullcensor">{{$music['stage_fullcensor']->links()}}</center>
<?php echo $stage == 'all' ? '</div>' : '' ?>
@endif
@if(isset($music['stage_delete']) && $music['stage_delete']->toArray()['data'])
    <?php echo $stage == 'all' ? '<div class="stage_fullcensor">' : '' ?>
    <div class="box_header d-flex justify-content-between align-items-end">
        <span class="title m-0">Đã Xoá</span>
    </div>
    <div class="row row10px">
        <div class="col">
            <ul class="list-unstyled list_music">
                <?php
                $stageFullcensor = array_reverse($music['stage_delete']->toArray()['data']);
                $perPage = $music['stage_delete']->toArray()['per_page'];
                $curentPage = $music['stage_delete']->toArray()['current_page'];
                array_map(function($i, $item) use($perPage, $curentPage) {
                if($i < 5) {
                $url = '#';
                ?>
                <li class="media align-items-stretch items-stretch-{{$item['music_id']}}">
                    <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                        <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                    </div>
                    <div class="media-left align-items-stretch mr-2">
                        <a href="{{$url}}" title="{{$item['music_title']}}">
                            <img src="{{Helpers::cover_url($item['album_id'])}}" alt="{{$item['music_title']}}">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                            <div class="author title_home_tablet"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                        </div>
                        <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                        <ul class="list-inline" style="margin-right:0px">
                            <li class="list-inline-item"><a href="{{$url}}" target="_blank">Chỉnh Sửa</a></li>
                        </ul>
                    </div>
                </li>
                <?php
                }
                }, array_keys($stageFullcensor), $stageFullcensor);
                ?>
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled list_music">
                <?php
                array_map(function($i, $item) use($perPage, $curentPage) {
                if($i >= 5) {
                $url = '#';
                ?>
                <li class="media align-items-stretch items-stretch-{{$item['music_id']}}">
                    <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                        <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                    </div>
                    <div class="media-left align-items-stretch mr-2">
                        <a href="{{$url}}" title="{{$item['music_title']}}">
                            <img src="{{Helpers::cover_url($item['album_id'])}}" alt="{{$item['music_title']}}">
                            <i class="material-icons">play_circle_outline</i>
                        </a>
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                        <div>
                            <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                            <div class="author title_home_tablet"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                        </div>
                        <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                    </div>
                    <div class="media-right align-self-center">
                        <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                        <ul class="list-inline" style="margin-right:0px">
                            <li class="list-inline-item"><a href="{{$url}}" target="_blank">Chỉnh Sửa</a></li>
                        </ul>
                    </div>
                </li>
                <?php
                }
                }, array_keys($stageFullcensor), $stageFullcensor);
                ?>
            </ul>
        </div>
    </div>
    <center data-page="fullcensor">{{$music['stage_delete']->links()}}</center>
    <?php echo $stage == 'all' ? '</div>' : '' ?>
@endif
@if(isset($music['album']) && $music['album']->toArray()['data'])
<?php echo $stage == 'all' ? '<div class="stage_album">' : '' ?>
    <div class="box_header d-flex justify-content-between align-items-end">
        <span class="title m-0">Album</span>
    </div>
    <div class="row row10px">
        <?php
        array_map(function ($i, $item) {
        $url = '#';
        ?>
        @if ($i == 5)
        </div>
        <div class="row row10px">
        @endif
        <div class="col">
            <div class="card card1">
                <div class="card-header" style="background-image: url({{Helpers::cover_url($item['album_id'])}});">

                    <a href="{{$url}}" title="{{$item['album_name']}}">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a href="{{$url}}" title="{{$item['album_name']}}">{{$item['album_name']}}</a></h3>
                </div>
            </div>
        </div>
        <?php
        }, array_keys($music['album']->toArray()['data']),$music['album']->toArray()['data'])
        ?>
    </div>
    <center data-page="album">{{$music['album']->links()}}</center>
<?php echo $stage == 'all' ? '</div>' : '' ?>
@endif