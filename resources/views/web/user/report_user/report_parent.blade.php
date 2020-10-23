<?php
use App\Library\Helpers;
$reportData = $result->toArray()['data'];
$pagingHtml = $result->links();
$user = Auth::user();
$Itemreply = '';
$avatarUser = Helpers::pathThumbAvatar($user->user_avatar, $user->user_id, env('DATA_URL'));
use App\Models\ReportCommentModel;
use App\Models\ReportMusicModel;
?>


<?php echo ($pagingHtml ? '<ul class="list-unstyled ul_comments">' : '') ?>
    <?php
    if($reportData) {
        array_map(function ($item) use ($avatarUser, $Itemreply, $user) {
        $reportText = unserialize($item['report_text']);
        $reportTypeId = $item['report_type'].'-'.$item['id'];
        ?>
            <li class="media" data-status="<?php echo $item['notifi_read'] ?>" id="report-<?php echo $reportTypeId ?>" style="width: 100%; padding: 10px 5px 5px 10px;border-bottom: 1px solid #a1a1a1; <?php echo $item['notifi_read'] == 1 ? 'background: #5f5d5d24;' : '' ?>">
                <a href="javascript:void(0)"><img class="mr-3" src="<?php echo $item['report_type'] == 'music' ? '/imgs/black-music-icon.jpg' : $item['report_type'] == 'comment' ? '/imgs/black-comment-icon.jpg' : '/imgs/black-flag-icon.jpg' ?>" alt="test1234"></a>
                <div class="media-body">
                    <div class="body_commnet">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="media-title mt-0 mb-1">
                                @if( $item['report_type'] == 'contact')
                                    <a href="javascript:void(0)">Góp ý của bạn</a>
                                @else
                                    <a href="javascript:void(0)">Bạn đã phản hồi <?php echo $item['report_type'] == 'music' ? 'nhạc' : 'bình luận' ?> "<?php echo $item['report_option'] ?>"</a>
                                @endif
                                <i style="font-size: 12px"> <?php echo Helpers::timeElapsedString(strtotime($item['updated_at'])); ?></i>
                            </h5>
                        </div>
                        <div class="reply_report" data-report-count="<?php echo count($reportText) ?>" onclick="showReport(<?php echo $item['id'] ?>, '<?php echo $item['report_type'] ?>')" data-report-id="<?php echo $reportTypeId ?>">Hiển Thị (<?php echo count($reportText) ?>)</div>
                    </div>
                    <div class="post_comment_reply post_comment_reply_<?php echo $reportTypeId ?>">
                        <br>
                        <div class="comment-reply-<?php echo $reportTypeId ?>">
                            <?php
                            foreach ($reportText as $Itemreply) {
                            $key = key($Itemreply);
                            if($key == 'user') {
                                $name = $user->name;
                            }else{
                                $name = 'Hỗ trợ ' . $Itemreply[$key]['name'];
                            }
                            ?>
                            <div class="media" id="comment-316">
                                <a href="javascript:void(0)"><img class="mr-3" src="<?php echo $key == 'user' ? $avatarUser : '/imgs/avatar_admin.jpg'  ?>" alt="test1234"></a>
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between body_commnet_replay">
                                        <h5 class="media-title mt-0 mb-1"><a href="javascript:void(0)" title="<?php echo $name; ?>"><?php echo $name; ?></a></h5>
                                        <time class="comment_time"><?php echo Helpers::timeElapsedString($Itemreply[$key]['time']); ?></time>
                                    </div>
                                    <p class="media-text"><?php echo $Itemreply[$key]['content'] ? $Itemreply[$key]['content'] : '<i>empty</i>'; ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        @if($item['status'] != 2)
                        <form class="box_form_report form-report-<?php echo $reportTypeId ?>">
                            <div class="form-group emoji-picker-container">
                                <textarea data-report-type="<?php echo $item['report_type'] ?>" data-report-id="<?php echo $item['id'] ?>" class="form-control comment" name="comment" rows="3" placeholder="Trả lời phản hồi của bạn tại đây." data-emojiable="true"></textarea>
                                <button id="btn_cloud_up" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light" onclick="postReport('<?php echo $reportTypeId ?>')" style="float: left; margin-top: 5px!important; margin-bottom: 10px!important; min-width: 75px;">Trả Lời</button>
                            </div>
                        </form>
                        <br/>
                        @else
                            <i>Đã Đóng</i>
                        @endif
                    </div>
                </div>
            </li>
        <?php
        }, $reportData);
    }else{
        ?>
        <div class="row row10px" id="playlist">
            <div class="center-text-mes"><span>Bạn chưa có phản hồi nào</span>
            </div>
        </div>
        <?php
        }
    ?>
<?php echo $pagingHtml ? '</ul>' : '' ?>
<center>{{($pagingHtml ?? '')}}</center>