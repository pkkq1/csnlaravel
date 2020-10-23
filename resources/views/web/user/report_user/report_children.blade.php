<?php
use App\Library\Helpers;
$user = Auth::user();
$avatarUser = Helpers::pathThumbAvatar($user->user_avatar, $user->user_id, env('DATA_URL'));
?>
<div class="media">
    <a href="javascript:void(0)"><img class="mr-3" src="<?php echo $avatarUser ?>"></a>
    <div class="media-body">
        <div class="d-flex align-items-center justify-content-between body_commnet_replay">
            <h5 class="media-title mt-0 mb-1"><a href="javascript:void(0)" title="<?php echo $user->name; ?>"><?php echo $user->name; ?></a></h5>
            <time class="comment_time"><?php echo Helpers::timeElapsedString($newContent['time']); ?></time>
        </div>
        <p class="media-text"><?php echo $newContent['content'] ?></p>
    </div>
</div>