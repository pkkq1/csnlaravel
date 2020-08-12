<nav>
    <ul>
        <li class="warehouse_stage_fullcensor da-duyet" data-key="fullcensor"><a class="da-duyet" onclick="musicUploadTab('warehouse_stage_fullcensor', 'fullcensor', 'da-duyet')" href="javascript:void(0)"><span>Đã Duyệt</span></a></li>
        <li class="warehouse_stage_uncensor cho-xu-ly" data-key="uncensor"><a class="cho-xu-ly" onclick="musicUploadTab('warehouse_stage_uncensor', 'uncensor', 'cho-xu-ly')" href="javascript:void(0)"><span>Chờ Xử Lý</span></a></li>
        <li class="warehouse_stage_delete da-xoa" data-key="delete"><a class="da-xoa" onclick="musicUploadTab('warehouse_stage_delete', 'delete', 'da-xoa')" href="javascript:void(0)"><span>Đã Xóa</span></a></li>
        <li class="warehouse_stage_album album" data-key="album"><a class="album" onclick="musicUploadTab( 'warehouse_stage_album', 'album', 'album')" href="javascript:void(0)"><span>Album</span></a></li>
        @if((Auth::check() && Auth::user()->hasPermission('duyet_sua_nhac')))
        <li class="approval_stage_fullcensor_by da-duyet-boi" data-key="fullcensor_by"><a class="da-duyet-boi" onclick="musicUploadTab( 'approval_stage_fullcensor_by', 'fullcensor_by', 'da-duyet-boi')" href="javascript:void(0)"><span>Duyệt Bởi {{$user_name}}</span></a></li>
        <li class="approval_stage_delete_by da-xoa-boi" data-key="delete_by"><a class="da-xoa-boi" onclick="musicUploadTab( 'approval_stage_delete_by', 'delete_by', 'da-xoa-boi')" href="javascript:void(0)"><span>Xóa Bởi {{$user_name}}</span></a></li>
        @endif
    </ul>
</nav>
<div class="content-wrap-2 tab-content-category">
    <section id="warehouse_stage_fullcensor" class="upload_content_stage_fullcensor"></section>
    <section id="warehouse_stage_uncensor" class="upload_content_stage_uncensor"></section>
    <section id="warehouse_stage_delete" class="upload_content_stage_delete"></section>
    <section id="warehouse_stage_album" class="upload_content_stage_album"></section>
    @if((Auth::check() && Auth::user()->hasPermission('duyet_sua_nhac')))
    <section id="approval_stage_fullcensor_by" class="upload_content_stage_fullcensor_by"></section>
    <section id="approval_stage_delete_by" class="upload_content_stage_delete_by"></section>
    @endif
</div>
