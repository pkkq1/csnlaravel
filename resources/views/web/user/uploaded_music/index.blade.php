<nav>
    <ul>
        <li class="tab-current warehouse_stage_fullcensor"><a onclick="musicUploadTab('warehouse_stage_fullcensor', 'fullcensor')" href="javascript:void(0)"><span>Đã Duyệt</span></a></li>
        <li class="warehouse_stage_uncensor"><a onclick="musicUploadTab('warehouse_stage_uncensor', 'uncensor')" href="javascript:void(0)"><span>Chờ Xử Lý</span></a></li>
        <li class="warehouse_stage_delete"><a onclick="musicUploadTab('warehouse_stage_delete', 'delete')" href="javascript:void(0)"><span>Đã Xóa</span></a></li>
        <li class="warehouse_stage_album"><a onclick="musicUploadTab( 'warehouse_stage_album', 'album')" href="javascript:void(0)"><span>Album</span></a></li>
    </ul>
</nav>
<div class="content-wrap-2 tab-content-category">
    <section id="warehouse_stage_fullcensor" class="upload_content_stage_fullcensor content-current"></section>
    <section id="warehouse_stage_uncensor" class="upload_content_stage_uncensor"></section>
    <section id="warehouse_stage_delete" class="upload_content_stage_delete"></section>
    <section id="warehouse_stage_album" class="upload_content_stage_album"></section>
</div>
