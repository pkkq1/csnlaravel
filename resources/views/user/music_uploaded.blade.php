<?php
    use App\Library\Helpers;
?>
@if(isset($music['stage_uncensor']) && $music['stage_uncensor']->toArray()['data'])
<?php echo $stage == 'all' ? '<div class="stage_uncensor">' : '' ?>
    <div class="box_header d-flex justify-content-between align-items-end">
        <span class="title m-0">Chờ xử lý</span>
    </div>
    <ul class="list-unstyled list_music music_kq">
        <?php
        array_map(function ($item) {
        $url = '#';
        ?>
        <li class="media align-items-stretch">
            <div class="media-left align-items-stretch mr-2">
                <a href="{{$item['music_link']}}" title="{{$item['music_title']}}">
                    <img src="{{$item['music_cover']}}" alt="{{$item['music_title']}}">
                    <i class="material-icons">play_circle_outline</i>
                </a>
            </div>
            <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                <div>
                    <h5 class="media-title mt-0 mb-0"><a href="{{$item['music_link']}}" title="{{$item['music_title']}}" class="search_title">{{$item['music_title']}}</a></h5>
                    <div class="author"><?php echo $item['music_artist'] ?></div>
                </div>
                <small class="type_music c1"><?php echo $item['music_bitrate'] ?></small>
            </div>
            <div class="media-right align-self-center">
                <small class="time_stt">{{number_format($item['music_listen'])}}</small>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{MUSIC_PATH.$item['music_filename']}}" title="download {{$item['music_title']}}"><i class="material-icons">file_download</i></a></li>
                    <li class="list-inline-item"><a href="{{Helpers::fbShareLink($item['music_link'], true)}}" target="_blank" title="chia sẻ {{$item['music_title']}}"><i class="material-icons">share</i></a></li>
                </ul>
            </div>
        </li>
        <?php
        }, array_keys($music['stage_uncensor']->toArray()['data']),$music['stage_uncensor']->toArray()['data'])
        ?>
    </ul>



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
    },  array_keys($music['stage_uncensor']->toArray()['data']),$music['stage_uncensor']->toArray()['data'])
    ?>
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
        <?php
        array_map(function ($i, $item) {
        $url = url()->current().'/../redirect/'.$item['music_id'];
        ?>
        @if ($i == 5)
        </div>
        <div class="row row10px">
        @endif
        <div class="col">
            <div class="card card1">
                <div class="card-header" style="background-image: url({{Helpers::cover_url($item['album_id'])}});">
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
        }, array_keys($music['stage_fullcensor']->toArray()['data']),$music['stage_fullcensor']->toArray()['data'])
        ?>
    </div>
    <center data-page="fullcensor">{{$music['stage_fullcensor']->links()}}</center>
<?php echo $stage == 'all' ? '</div>' : '' ?>
@endif
@if(isset($music['stage_delete']) && $music['stage_delete']->toArray()['data'])
<?php echo $stage == 'all' ? '<div class="stage_delete">' : '' ?>
    <div class="box_header d-flex justify-content-between align-items-end">
        <span class="title m-0">Đã xóa</span>
    </div>
    <div class="row row10px next">
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
        }, array_keys($music['stage_delete']->toArray()['data']),$music['stage_delete']->toArray()['data'])
        ?>
    </div>
    <center data-page="delete">{{$music['stage_delete']->links()}}</center>
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