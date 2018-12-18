<?php
use App\Library\Helpers;
$dataCover = $cover->toArray();
?>
@if($dataCover['data'])
<div class="row row10px float-col-width">
    <?php
    array_map(function ($item) {
    $url = Helpers::album_url($item);
    ?>
    <div class="col">
        <div class="card card1">
            <div class="card-header" style="background-image: url({{Helpers::cover_url($item['cover_id'])}});">
                <a href="{{$url}}" title="{{$item['music_album']}}">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="card-body">
                <h3 class="card-title"><a href="{{$url}}" title="{{$item['music_album']}}">{{$item['music_album']}}</a></h3>
            </div>
        </div>
    </div>
    <?php
    }, $dataCover['data']);
    ?>
</div>
<center><?php echo $cover->links() ?></center>
@else
    <div class="center-text-mes"><span>Chưa có album nào</span></div>
@endif