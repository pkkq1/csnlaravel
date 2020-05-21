<nav>
    <ul>
        <li class="tab-current approval_stage_fullconvert"><a onclick="musicApprovalTab('approval_stage_fullconvert', 'fullconvert')" href="javascript:void(0)"><span>Chờ Duyệt</span></a></li>
        <li class="approval_stage_fullconvert_video"><a onclick="musicApprovalTab('approval_stage_fullconvert_video', 'fullconvert_video')" href="javascript:void(0)"><span>Chờ Duyệt Video  </span></a></li>
        <li class="approval_stage_fullcensor"><a onclick="musicApprovalTab('approval_stage_fullcensor', 'fullcensor')" href="javascript:void(0)"><span>Đã Duyệt</span></a></li>
        <li class="approval_stage_uncensor"><a onclick="musicApprovalTab('approval_stage_uncensor', 'uncensor')" href="javascript:void(0)"><span>Chờ Xử Lý</span></a></li>
        <li class="approval_stage_delete"><a onclick="musicApprovalTab('approval_stage_delete', 'delete')" href="javascript:void(0)"><span>Đã Xóa</span></a></li>
        <li class="approval_stage_fullcensor_by"><a onclick="musicApprovalTab('approval_stage_fullcensor_by', 'fullcensor_by')" href="javascript:void(0)"><span>Đã Duyệt bởi {{Auth::user()->name}}</span></a></li>
    </ul>
</nav>
<div class="content-wrap-2 tab-content-category">
    <section id="approval_stage_fullconvert" class="approval_content_stage_fullconvert content-current"></section>
    <section id="approval_stage_fullconvert_video" class="approval_content_stage_fullconvert_video"></section>
    <section id="approval_stage_fullcensor" class="approval_content_stage_fullcensor"></section>
    <section id="approval_stage_uncensor" class="approval_content_stage_uncensor"></section>
    <section id="approval_stage_delete" class="approval_content_stage_delete"></section>
    <section id="approval_stage_fullcensor_by" class="approval_content_stage_fullcensor_by"></section>
</div>
