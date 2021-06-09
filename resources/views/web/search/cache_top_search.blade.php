<?php
use App\Library\Helpers;
?>
<p class="card-title">Bài Hát Tìm Kiếm Nhiều Nhất</p>
<ul class="list-unstyled list_music">
    @foreach($musicArr as $key => $item)
            <li class="media align-items-stretch li_item_result">
                <a class="search-line parent-line search-line-music" href="{{Helpers::listen_url($item)}}">
                <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                    <div><p class="media-title mt-0 mb-0 span_h5" title="{{$item['music_title']}}">{{$item['music_title']}}</p>
                        <div class="author"><?php echo str_replace(';', '; ', $item['music_artist']) ?></div>
                    </div>
                    <small class="type_music c1"><?php echo Helpers::bitrate2str($item['music_bitrate']); ?></small>
                </div>
                </a>
            </li>
    @endforeach
</ul>



