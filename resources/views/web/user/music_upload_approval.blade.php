<?php
    use App\Library\Helpers;
?>
@if(key($stageData) != 'album')
    <?php $dataArr = $stageData[key($stageData)]->toArray()['data']; ?>
    @if($dataArr)
    <div class="row row10px">
        <div class="col">
            <ul class="list-unstyled list_music">
                <?php
                $perPage =$stageData[key($stageData)]->toArray()['per_page'];
                $curentPage = $stageData[key($stageData)]->toArray()['current_page'];
                array_map(function($i, $item) use($perPage, $curentPage, $stage) {
                    $url = '/dang-tai/'.($item['cat_id'] == CAT_VIDEO ? 'video' : 'nhac').'/'.$item['music_id'];
                    $url_listen = ($stage == 'fullcensor' ? Helpers::listen_url($item) : $url);
                    ?>
                    <li class="media align-items-stretch items-stretch-{{$item['music_id']}}">
                        <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                            <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                        </div>
                        <div class="media-left align-items-stretch mr-2">
                            <a href="{{$url_listen}}" title="{{$item['music_title']}}">
                                <img src="{{($item['cat_id'] == CAT_VIDEO ? Helpers::thumbnail_url($item) : Helpers::coverThumb(Helpers::cover_url($item['cover_id'])))}}" class="{{($item['cat_id'] == CAT_VIDEO ? 'video_thumbnail' : 'nhac_thumbnail')}}" alt="{{$item['music_title']}}">
                                <i class="material-icons">play_circle_outline</i>
                            </a>
                        </div>
                        <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                            <div>
                                <h5 class="media-title mt-0 mb-0 title_home_tablet"><a href="{{$url}}" title="{{$item['music_shortlyric'] ?? $item['music_title']}}">{{$item['music_title']}}</a></h5>
                                <div class="author title_home_tablet"><?php echo Helpers::rawHtmlArtists($item['music_artist_id'], $item['music_artist']) ?></div>
                            </div>
                            @if($item['cat_id'] != CAT_VIDEO)
                                <small class="type_music"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                            @endif
                        </div>
                        <div class="media-right align-self-center">
                            <small class="time_stt"><?php echo Helpers::timeElapsedString($item['music_last_update_time']); ?></small>
                            <ul class="list-inline" style="margin-right:0px">
                                <li class="list-inline-item"><a href="{{$url}}" target="_blank" title="Đã tạo: {{date('m/d/Y', $item['music_time'])}}">Chỉnh Sửa</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php
                }, array_keys($dataArr), $dataArr);
                ?>
            </ul>
        </div>
    </div>
    <center data-page="{{$stage}}">{{$stageData[key($stageData)]->links()}}</center>
    @else
        <div class="center-text-mes"><span>Chưa có bài hát nào {{$titleMes}}.</span></div>
    @endif
@endif
@if(isset($stageData['album']))
    <?php $dataArr = $stageData['album']->toArray()['data']; ?>
    @if($dataArr)
    <div class="row row10px float-col-width">
        <?php
        array_map(function ($i, $item) {
        $url = Helpers::album_url($item);
        ?>
        <div class="col">
            <div class="card card1">
                <div class="card-header" style="background-image: url({{Helpers::coverThumb(Helpers::cover_url($item['cover_id']), MUSIC_COVER_THUMB_200_PATH)}});">
                    <a class="btn-album-remove btn btn-danger" href="{{'/dang-tai/album/'.$item['cover_id']}}" title="Chỉnh sửa" >Chỉnh sửa</a>
                    <a href="{{$url}}" title="{{$item['music_album']}}">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a href="{{$url}}" title="Nghe {{$item['music_album']}}">{{$item['music_album']}}</a></h3>
                </div>
            </div>
        </div>
        <?php
        }, array_keys($dataArr), $dataArr)
        ?>
    </div>
    <center data-page="{{$stage}}">{{$stageData['album']->links()}}</center>
    @else
        <div class="center-text-mes"><span>Chưa có album nào.</span></div>
    @endif
@endif