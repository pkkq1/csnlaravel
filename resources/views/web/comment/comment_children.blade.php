<?php
use App\Library\Helpers;
?>
<div class="media">
    <img class="mr-3" src="{{$reply['user']['user_avatar']}}" alt="Generic placeholder image">
    <div class="media-body">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="media-title mt-0 mb-1"><a href="#" title="{{$reply['user']['name']}}">{{$reply['user']['name']}}</a> at <span>{{date('H:i', $reply['comment_time'])}}</span></h5>
            <time><?php echo Helpers::timeElapsedString($reply['comment_time']); ?></time>
        </div>
        <p class="media-text">{{$reply['comment_text']}}</p>
    </div>
</div>