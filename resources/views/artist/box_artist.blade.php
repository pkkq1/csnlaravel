<div class="box_profile">
    <div class="container">
        <div class="media user11">
            <div class="media-left mr-4 align-self-center">
                <img id="view_user_avatar_2" src="{{$artist->artist_cover ? PUBLIC_AVATAR_ARTIST_SOURCE_PATH.$artist->artist_cover.'?v='.time() : ''}}">
            </div>
            <div class="media-body align-self-center">
                <h4 class="media-title user_name">{{$artist->artist_nickname}}</h4>
            </div>
        </div>
    </div>
</div>
