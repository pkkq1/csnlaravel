<?php
use App\Library\Helpers;
$Data = $result->toArray()['data'];
$pagingHtml = $result->links();
$selfAvatar = Helpers::pathAvatar(Auth::user()->user_avatar, Auth::user()->id);
$hr_user = false;
?>
<?php echo ($pagingHtml ? '<ul class="list-unstyled ul_comments">' : '') ?>
<?php
if($Data) {
array_map(function ($item) use ($selfAvatar, &$hr_user) {
$avatar = (!$item['admin_reply_id'] ? $selfAvatar : (Helpers::pathAvatar($item['admin_reply_id'].'.jpg', $item['admin_reply_id'])));
?>
<li class="media" data-status="<?php echo $item['read'] ?>" id="notify-<?php echo $item['id'] ?>" style="width: 100%;
padding: 10px 5px 5px 10px;
border-bottom: 1px solid #a1a1a1;
">
    <img class="mr-3" src="{{$avatar}}" alt="test1234">
    <div class="media-body">
        <div class="body_commnet">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="media-title mt-0 mb-1" style="color: black;"><?php echo $item['text'] ?></h5>
            </div>
            <i style="font-size: 12px; color: #9B9B9B;"><?php echo Helpers::timeElapsedString(strtotime($item['created_at'])); ?></i>
        </div>
    </div>
</li>
<?php
}, array_reverse($Data));
?>
<a class="btn btn-secondary-gray"  href="javascript:void(0);" onclick="SendMsgCsn();" style="color: black;">Gửi Tin</a>
<?php
}else{
?>
<div class="row row10px" id="playlist">
    <div class="center-text-mes">
        Bạn chưa có tin nhắn nào
        <a class="btn btn-secondary-gray"  href="javascript:void(0);" onclick="SendMsgCsn();" style="color: black;">Hãy Gửi Tin</a>
    </div>
</div>
<?php
}
?>
<br/>
<?php echo $pagingHtml ? '</ul>' : '' ?>
<center>{{($pagingHtml ?? '')}}</center>
