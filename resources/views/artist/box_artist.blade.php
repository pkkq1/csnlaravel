<div class="box_profile" style="padding: 0px!important;">
    <div class="container" style="position: relative;">
        <div style="position: relative;width: 100%">
            <img src="{{$artist->artist_cover ? PUBLIC_COVER_ARTIST_PATH.$artist->artist_cover : '/imgs/no_cover_artist.jpg'}}" style="width: 100%; height: 100%;" />
            <div class="media user11">
            <div class="media-left mr-4 align-self-center">
            {{--<img id="view_user_avatar_2" src="{{$artist->artist_cover ? PUBLIC_AVATAR_ARTIST_SOURCE_PATH.$artist->artist_cover.'?v='.time() : ''}}">--}}
            </div>
            <div class="media-body align-self-center">
            </div>
            </div>
            <div class="thumb-mask media align-items-stretch"><h4 class="media-right align-self-center artist_name_box">{{$artist->artist_nickname}}</h4></div>
        </div>
    </div>
</div>
