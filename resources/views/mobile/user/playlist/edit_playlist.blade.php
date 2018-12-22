<?php
$titleMeta = 'Chỉnh sửa playlist';
$i = 1;
use App\Library\Helpers;
$user = Auth::user();
?>
@extends('mobile.layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
    <script type="text/javascript" src="/node_modules/sortablejs/Sortable.min.js"></script>
@endsection
@section('content')
    <div class="header">
        <div class="header_top">
            <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse"><a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a><a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            </nav>
        </div>
    </div>
    <main class="main main_profile">
        <section class="block_box_profile">
            <div class="container">
                <div class="box_profile py-3">
                    <div class="box_profile__header"><a href="{{'/user/'.Auth::user()->id}}"><img id="view_user_avatar_2" src="<?php echo Helpers::pathAvatar(Auth::user()->user_avatar, Auth::user()->id) ?>?time={{time()}}" alt="{{Auth::user()->name}}"></a></div>
                    <div class="box_profile__body">
                        <h4 class="media-title user_name">{{Auth::user()->name}}</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item"><strong>{{number_format(Auth::user()->user_music)}}</strong><small> upload</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="swiper-container">
            <div data-tab="playlist" class="swiper-slide">
                <div class="container">
                    <div class="block block_album block_profile_playlist card_playlist edit_playlist_mobile">
                        <div class="box_playlist">
                            <div class="block_header d-flex flex-row justify-content-between mb-2">
                                <h3 class="main_title text-pink mb-0">PLAYLIST</h3>
                            </div>
                            <div>
                                <div class="form-group form-check">
                                    <input type="checkbox" value="all" class="form-check-input check-all" id="">
                                    <a href="javascript:void(0)" onclick="deleteSelectPlaylist()" style="margin-left: 17px;" title="xoá playlist đã chọn" class="btn btn-secondary"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    <a href="/user/playlist/them" title="" class="btn btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" id="list_table">
                            <table class="table">
                                <tbody>
                                @foreach($playlistUser as $item)
                                    <?php
                                    $user = Helpers::playlist_url($item->toArray());
                                    ?>
                                    <tr id="playlist_{{$item->playlist_id}}">
                                        <td class="pl-0">
                                            <div class="form-group">
                                                <input type="checkbox" value="{{$item->playlist_id}}" class="check_select">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a class="mr-3" href="{{$user}}" title=""><img src="{{$item->playlist_cover ? Helpers::file_path($item->playlist_id, PUBLIC_MUSIC_PLAYLIST_PATH, true).$item->playlist_id . '.png?v=' . time() : '/imgs/avatar_default.png'}}" alt="{{$item->playlist_title}}"></a>
                                                <div class="media-body">
                                                    <h4 class="media-title"><a href="{{$user}}" title="{{$item->playlist_title}}">{{$item->playlist_title}}</a></h4>
                                                    <ul class="list-unstyled">
                                                        <li><i class="material-icons">mic</i> {{number_format($item->playlist_music_total)}}</li>
                                                        <li><i class="material-icons">headset</i> {{$item->playlist_listen}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="/user/playlist/cap-nhat/{{$item->playlist_id}}" title="" class="btn btn-danger btn-action"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a>
                                            <a href="javascript:void(0)" onclick="deletePlaylist([{{$item->playlist_id}}], 'Bạn có muốn xóa playlist {{$item->playlist_title}} này không?')" class="btn btn-secondary btn-action"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('popupMusic')

@endsection
@section('contentJS')
    <script>
        var valDelete = [];
        function deletePlaylist(ids = [], msg) {
            if(ids.length == 0) {
                alertModal('Bạn chưa chọn playlist muốn xóa.');
                return false;
            }
            Lobibox.confirm({
                title: "Xác nhận",
                msg: msg,
                callback: function ($this, type, ev) {
                    if (type === 'yes') {
                        $.ajax({
                            url: "/user/playlist/delete",
                            type: "POST",
                            dataType: "json",
                            data: {playlis_ids: ids},
                            beforeSend: function () {
                                if(loaded) return false;
                                loaded = true;
                            },
                            success: function(data) {
                                if(data.status) {
                                    console.log(ids);
                                    ids.forEach(function(val) {
                                        $('#playlist_' + val).remove();
                                    });
                                }
                                Lobibox.notify((data.status ? 'success' : 'error'), {
                                    size: 'mini',
                                    sound: false,
                                    delay: 1500,
                                    delayIndicator: false,
                                    msg: data.message
                                });
                            }
                        });
                    } else if (type === 'no') {

                    }
                }
            });
        }
        $('.check-all').change(function () {
            if($('.check-all:checked').val() == 'all') {
                $('.check_select').prop( "checked", true );
            }else{
                $('.check_select').prop( "checked", false );
            }
        });
        function deleteSelectPlaylist() {
            valDelete = [];
            $('.check_select:checked').each(function(i){
                valDelete[i] = $(this).val();
            });
            deletePlaylist(valDelete, 'bạn có muốn xóa danh sách playlist đã chọn này không?');
        }

    </script>
@endsection