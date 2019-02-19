<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
@if(backpack_user()->can('xet_duyet_ca_si_(list)') || backpack_user()->can('danh_sach_ca_si_(list)'))
<li class="treeview">
    <a href="#"><i class="fa fa-address-card"></i> <span>Ca Sĩ</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        @if(backpack_user()->can('xet_duyet_ca_si_(list)'))
        <li><a href="{{env('APP_URL').'/'.config('backpack.base.route_prefix', 'admin')}}/artist_upload"><i class="fa fa-font-awesome"></i> <span>Xét Duyệt Ca Sĩ</span></a></li>
        @endif
        @if(backpack_user()->can('danh_sach_ca_si_(list)'))
        <li><a href="{{env('APP_URL').'/'.config('backpack.base.route_prefix', 'admin')}}/artist"><i class="fa fa-arrow-circle-right"></i> <span>Danh Sách Ca Sĩ</span></a></li>
        @endif
    </ul>
</li>
@endif
@if(backpack_user()->can('danh_muc_csn_(list)') || backpack_user()->can('danh_muc_playlist_(list)'))
<li class="treeview">
    <a href="#"><i class="fa fa-list"></i> <span>Danh Mục</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        @if(backpack_user()->can('danh_muc_csn_(list)'))
        <li><a href="{{env('APP_URL').'/'.config('backpack.base.route_prefix', 'admin')}}/category_csn"><i class="fa fa-font-awesome"></i> <span>Danh Mục CSN</span></a></li>
        @endif
        @if(backpack_user()->can('danh_muc_playlist_(list)'))
        <li><a href="{{env('APP_URL').'/'.config('backpack.base.route_prefix', 'admin')}}/category_playlist"><i class="fa fa-tag"></i> <span>Danh Mục Playlist</span></a></li>
        @endif
    </ul>
</li>
@endif
@if(backpack_user()->can('playlist_user_(list)') || backpack_user()->can('playlist_publisher_(list)'))
<li class="treeview">
    <a href="#"><i class="fa fa-list-alt"></i> <span>Playlist</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        @if(backpack_user()->can('playlist_user_(list)'))
        <li><a href="{{env('APP_URL').'/'.config('backpack.base.route_prefix', 'admin')}}/playlist_user"><i class="fa fa-bars"></i> <span>Playlist User</span></a></li>
        @endif
        @if(backpack_user()->can('playlist_publisher_(list)'))
        <li><a href="{{env('APP_URL').'/'.config('backpack.base.route_prefix', 'admin')}}/playlist_publisher"><i class="fa fa-align-right"></i> <span>Playlist Publisher</span></a></li>
        @endif
    </ul>
</li>
@endif
@if(backpack_user()->can('duyet_sua_nhac') || backpack_user()->can('duyet_sua_karaoke'))
<li class="treeview">
    <a href="#"><i class="fa fa-play"></i> <span>Nhạc/Video</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{backpack_url('music')}}"><i class="fa fa-music"></i> <span>Nhạc / Karaoke</span></a></li>
        <li><a href="{{backpack_url('video')}}"><i class="fa fa-video-camera"></i> <span>Video</span></a></li>
    </ul>
</li>
@endif

@if(backpack_user()->can('comment_(list)'))
    <li class="treeview">
        <a href="#"><i class="fa fa-comment"></i> <span>Bình luận</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ backpack_url('comment') }}"><i class="fa fa-comment"></i> <span>Bình luận</span></a></li>
            <li><a href="{{ backpack_url('comment_replay') }}"><i class="fa fa-comments"></i> <span>Trả lời bình luận</span></a></li>
        </ul>
    </li>
@endif
@if(backpack_user()->can('search_results(list)'))
    <li><a href="{{ backpack_url('search_results') }}"><i class="fa fa-search"></i> <span>Kết quả tìm kiếm</span></a></li>
@endif
<!-- Users, Roles Permissions -->
@if(backpack_user()->can('user_(list)') || backpack_user()->can('role_permission_(list)'))
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        @if(backpack_user()->can('user_(list)'))
        <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        @endif
        @if(backpack_user()->can('role_permission_(list)'))
        <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
        <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
        @endif
    </ul>
</li>
@endif
@if(backpack_user()->can('advanced_(list)'))
<li class="treeview">
    <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
        <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
        <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
        <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
    </ul>
</li>
@endif