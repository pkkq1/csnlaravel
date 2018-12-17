<?php
use App\Library\Helpers;
$perPage = $artistFavourite->toArray()['per_page'];
$curentPage = $artistFavourite->toArray()['current_page'];
$data = $artistFavourite->toArray()['data'];
?>
@if($data)
<div class="row row10px">
    <div class="col">
        <ul class="list-unstyled list_music">
            <?php
            array_map(function($i, $item) use($perPage, $curentPage) {
            if($i < 5) {
            $url = Helpers::artistUrl($item['artist']['artist_id'], $item['artist']['artist_nickname']);
            ?>
            <a href="{{$url}}" title="{{$item['artist']['artist_nickname']}}"><li class="media align-items-stretch items-stretch-{{$item['artist']['artist_id']}}">
                <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                    <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                </div>
                <div class="media-left align-items-stretch mr-2">
                    <img src="{{$item['artist']['artist_cover'] ? PUBLIC_COVER_ARTIST_PATH.$item['artist']['artist_avatar'] : '/imgs/no_cover.jpg'}}" alt="{{$item['artist']['artist_nickname']}}">
                </div>
                <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0 align-self-center">
                    <div>
                        <h5 class="media-title mt-0 mb-0 title_home_tablet">
                            {{$item['artist']['artist_nickname']}}</h5>
                    </div>
                </div>
            </li></a>
            <?php
            }
            }, array_keys($data), $data);
            ?>
        </ul>
    </div>
    <div class="col">
        <ul class="list-unstyled list_music">
            <?php
            array_map(function($i, $item) use($perPage, $curentPage) {
            if($i >= 5) {
            $url = Helpers::artistUrl($item['artist']['artist_id'], $item['artist']['artist_nickname']);
            ?>
            <a href="{{$url}}" title="{{$item['artist']['artist_nickname']}}"><li class="media align-items-stretch items-stretch-{{$item['artist']['artist_id']}}">
                    <div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
                        <span class="counter">{{sprintf("%02d", (($curentPage - 1) * $perPage) + ++$i)}}</span>
                    </div>
                    <div class="media-left align-items-stretch mr-2">
                        <img src="{{$item['artist']['artist_cover'] ? PUBLIC_COVER_ARTIST_PATH.$item['artist']['artist_avatar'] : '/imgs/no_cover.jpg'}}" alt="{{$item['artist']['artist_nickname']}}">
                    </div>
                    <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0 align-self-center">
                        <div>
                            <h5 class="media-title mt-0 mb-0 title_home_tablet">
                                {{$item['artist']['artist_nickname']}}</h5>
                        </div>
                    </div>
                </li></a>
            <?php
            }
            }, array_keys($data), $data);
            ?>
        </ul>
    </div>
</div>
<center>{{$artistFavourite->links()}}</center>
@else
    <div class="center-text-mes"><span>Chưa có ca sĩ nào</span></div>
@endif