<?php
use App\Library\Helpers;
?>
<?php echo ($pagingHtml ? '<ul class="list-unstyled ul_comments">' : '') ?>
    <?php
    array_map(function ($item) use ($commentReply) {
    ?>
        <li class="media" id="comment-{{$item['comment_id']}}" style="width: 100%">
            <img class="mr-3" src="{{(strpos($item['user']['user_avatar'], 'http') !== false) ? $item['user']['user_avatar'] : PUBLIC_AVATAR_PATH . $item['user']['user_avatar']}}" alt="{{$item['user']['name']}}">
            <div class="media-body">
                <div class="body_commnet">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="media-title mt-0 mb-1"><a href="#" title="{{$item['user']['name']}}">{{$item['user']['name']}}</a> at <span>{{date('H:i', $item['comment_time'])}}</span></h5>
                        <time><?php echo Helpers::timeElapsedString($item['comment_time']); ?></time>
                    </div>
                    <p class="media-text">{{$item['comment_text']}}</p>
                    <div class="reply_comment" data-comment_id="{{$item['comment_id']}}">Trả lời</div>
                </div>
                <div class="post_comment_reply post_comment_reply_{{$item['comment_id']}}">
                    <form class="box_form_comment form-comment-{{$item['comment_id']}}">
                        <div class="form-group emoji-picker-container">
                            <textarea class="form-control comment" name="comment" rows="3" placeholder="Trả lời bình luận của bạn tại đây." data-emojiable="true"></textarea>
                            <input type="hidden" class="reply_cmt_id" name="reply_cmt_id" value="{{$item['comment_id']}}">
                            <button id="btn_cloud_up" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light"  onclick="postComment({{$item['comment_id']}})" style="float: left; margin-top: 5px!important; margin-bottom: 10px!important; min-width: 75px;">Trả Lời</button>
                        </div>
                    </form>
                </div>
                <div class="comment-reply-{{$item['comment_id']}}">
                <?php
                    if($commentReply) {
                        foreach ($commentReply as $reply) {
                            if($reply['comment_id'] == $item['comment_id']){
                            ?>
                            <div class="media">
                                <img class="mr-3" src="{{(strpos($reply['user']['user_avatar'], 'http') !== false) ? $reply['user']['user_avatar'] : PUBLIC_AVATAR_PATH . $reply['user']['user_avatar']}}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="media-title mt-0 mb-1"><a href="#" title="{{$reply['user']['name']}}">{{$reply['user']['name']}}</a> at <span>{{date('H:i', $reply['comment_time'])}}</span></h5>
                                        <time><?php echo Helpers::timeElapsedString($reply['comment_time']); ?></time>
                                    </div>
                                    <p class="media-text">{{$reply['comment_text']}}</p>
                                </div>
                            </div>
                            <?php
                            }
                        }
                    }
                ?></div>
            </div>
        </li>
    <?php
    }, $comment['data']);
    ?>
<?php echo $pagingHtml ? '</ul>' : '' ?>
{{($pagingHtml ?? '')}}