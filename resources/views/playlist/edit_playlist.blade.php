@section('hidden_wapper', true)
<?php
$titleMeta = 'Chỉnh sửa playlist';
$i = 1;
use App\Library\Helpers;
?>
@extends('layouts.app')
@section('contentCSS')

@endsection
@section('content')
    @include('user.box_profile', ['user' => Auth::user()])
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="box_playlist">
                    <h3 class="title">playlist</h3>
                    <div>
                        <div class="form-group form-check">
                            <input type="checkbox" value="all" class="form-check-input check-all" id="">
                            <a href="javascript:void(0)" onclick="deleteSelectPlaylist()" title="xoá playlist đã chọn" class="btn btn-secondary"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
                                    <div class="form-group form-check">
                                        <input type="checkbox" value="{{$item->playlist_id}}" class="form-check-input check-input" id="check_select">
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <a class="mr-3" href="{{$user}}" title=""><img src="{{$item->playlist_cover ? PUBLIC_MUSIC_PLAYLIST_PATH.$item->playlist_id . '.png?v=' . time() : '/imgs/avatar_default.png'}}" alt="{{$item->playlist_title}}"></a>
                                        <div class="media-body">
                                            <h4 class="media-title"><a href="{{$user}}" title="{{$item->playlist_title}}">{{$item->playlist_title}}</a></h4>
                                            <ul class="list-unstyled">
                                                <li><i class="material-icons">mic</i> Đang cập nhật</li>
                                                <li><i class="material-icons">headset</i> {{$item->playlist_listen}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="/user/playlist/cap-nhat/{{$item->playlist_id}}" title="" class="btn btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a>
                                    <a href="javascript:void(0)" onclick="deletePlaylist([{{$item->playlist_id}}], 'Bạn có muốn xóa playlist {{$item->playlist_title}} này không?')" class="btn btn-secondary"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                <a class="catalog1 weekend" style="background-image: url(https://i.scdn.co/image/6a6098cd1369420b9b6ff941ff41ded1b1dceb06);" href="#" title="">
                    <span>weekend</span>
                </a>
                <a class="catalog1 edm" style="background-image: url(https://i.scdn.co/image/c8ffd7bd0df17c05fd8a1efef33ad793eea0e47d);" href="#" title="">
                    <span>EDM</span>
                </a>
                <a class="catalog1 love" style="background-image: url(https://i.scdn.co/image/56228f9353b23405516a6ea8af1c22083f450b57);" href="#" title="">
                    <span>love</span>
                </a>
                <br>
            </div>
        </div>
    </div>
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
                $('.check-input').prop( "checked", true );
            }else{
                $('.check-input').prop( "checked", false );
            }
        });
        function deleteSelectPlaylist() {
            valDelete = [];
            $('.check-input:checked').each(function(i){
                valDelete[i] = $(this).val();
            });
            deletePlaylist(valDelete, 'bạn có muốn xóa danh sách playlist đã chọn này không?');
        }

    </script>
@endsection
