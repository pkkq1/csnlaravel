<?php
use App\Library\Helpers;
use App\Models\UserModel;
global $memberVip;
$memberVip = Helpers::checkMemberVip();
isset($float_edit) ? $float_edit = $float_edit : $float_edit = false;
$vipInfo = null;
if($mySelf) {
    $vipInfo = Auth::user()->levelInfo()->first();
}else{
    $vipInfo = $user->levelInfo()->first();
}
?>
<style>

    .box_banner_profile {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-image: url("<?php echo ($vipInfo && $user->vip_time_exprited > time()) ? Helpers::pathUserCover($user->user_cover, $user->id, env('DATA_URL')) : '/images/banner-default.png' ?>");
    }
</style>
<div class="box_profile">
    <div class="container">
        <div class="media user11 box_banner_profile">
            @if($mySelf)
            <button type="button" class="btn btn-secondary btn-secondary-gray edit_banner_photo">Chỉnh sửa ảnh bìa <i style="font-size: 14px" class="material-icons">mode_edit</i></button>
            <input type="file" class="file_edit_banner_photo" hidden />
            <input type="text" hidden name="user_cover_value" value="" alt="" class="form-control-file user_cover_value">
            @endif
        </div>
        <div class="box_avatar_profile">
            <div class="media-left mr-4 align-self-center">
                <a href="{{'/user/'.$user->id}}" >
                    <img id="view_user_avatar_2" src="<?php echo Helpers::pathAvatar($user->user_avatar, $user->id, env('DATA_URL')) ?>" alt="{{$user->name}}" alt="{{$user->name}}">
                </a>
            </div>
        </div>
        <div class="box_detail_profile media-body align-self-center">
            <h4 class="media-title user_name">{{$user->name}} <span style="font-weight: 400;">{{((!$user->username || is_numeric($user->username)) ? '' : '('.$user->username.')')}}</span>@if($vipInfo && $user->vip_time_exprited > time())<img alt="Tài Khoản VIP" title="Tài Khoản VIP" style="width: 30px; margin-left: 5px; margin-top: -5px;" src="/imgs/vip_label.png" >@endif</h4>
            @if($vipInfo && $mySelf)
                @if(Auth::user()->vip_time_exprited > time())
                    <span style="color: red; font-weight: 400; margin-bottom: 8px" title="Ngày hết hạn là: {{date('d/m/Y', Auth::user()->vip_time_exprited)}}">Bạn đang là Vip: {{$vipInfo->level_name}}</span>
                @else
                    <a href="/chia-se-nhac-vip.html"><span style="font-weight: 400; margin-bottom: 8px" title="Đã hết hạn vào: {{date('d/m/Y', Auth::user()->vip_time_exprited)}}">Bạn đã hết VIP click vào đây để gia hạn.</span></a>
                @endif
            @endif
            <ul class="list-inline" style="margin-bottom: 5px;">
                <li class="list-inline-item"><b>{{number_format($user->user_music)}}</b> <small> upload</small></li>
                @if(Auth::check() && Auth::user()->hasPermission('user_(update)'))
                    <li class="list-inline-item"><a target="_blank" href="/admin/user/{{$user->id}}/edit">Cấp Quyền User</a></li>
                @endif
            </ul>
            @if(Auth::user() && $float_edit == true)
                @if(Auth::user()->id == $user->id)
                    <a class="click_modal_profile" style="font-size: 14px;" href="javascript:void(0)" data-toggle="modal" data-target=".edit_profile">Chỉnh sửa <i style="font-size: 12px" class="material-icons">mode_edit</i></a>
                    <a onclick="pupop_qr_code()" href="javascript:void(0)" title="">QR code <i class="fa fa-qrcode" aria-hidden="true"></i></a>
                @endif
            @endif
        </div>
    </div>
</div>
@if(Auth::check() && Auth::user()->id == $user->id)
<div class="modal fade edit_profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="title">Chỉnh sửa tài khoản</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="change_avatar">
                            <img class="mr-3" id="view_user_avatar" src="<?php echo Helpers::pathAvatar($user->user_avatar, $user->id) ?>?time={{time()}}" alt="{{Auth::user()->name}}">
                            <div class="form-group">
                                <label for="choose_user_avatar"><i class="material-icons">photo_camera</i> Thay đổi ảnh đại diện</label>
                                <input type="file" class="form-control-file" name="choose_user_avatar" id="choose_user_avatar">
                                <input type="text" hidden name="user_avatar" value="" alt="" class="form-control-file" id="user_avatar">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form action="" class="profile_submit1" method="get" autocomplete="off" accept-charset="utf-8">
                            <div class="form-group">
                                <label for="username">Tên Tài Khoản</label>
                                <input type="text" {{Auth::user()->username ? 'disabled ' : ''}}class="form-control" id="username" aria-describedby="emailHelp" placeholder="bắt buộc nhập" value="{{Auth::user()->username}}">
                            </div>
                            @if(!Auth::user()->username)
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" id="repassword" name="repassword" placeholder="" value="">
                                </div>
                            </div>
                            @else
                                <span href="javascript:void(0);" title="" class="btn_change_password" onclick="showChangePassWord();">Thay đổi mật khẩu</span>
                                <div class="form-row input_change_pass" style="display: none">
                                    <div class="form-group col-md-6">
                                        <label for="name">Mật khẩu cũ</label>
                                        <input type="password" autocomplete="new-password" class="form-control" id="current_password" name="current_password" placeholder="" value="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Mật khẩu mới</label>
                                        <input type="password" autocomplete="new-password" class="form-control" id="password" name="password" placeholder="" value="">
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail12">Link URL của bạn</label>
                                <input type="text" class="form-control disabled" disabled id="exampleInputEmail12" placeholder="" value="{{env('APP_URL').'/user/'.Auth::user()->id}}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Tên</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="" value="{{Auth::user()->name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user_gender">Giới tính</label>
                                    <select name="user_gender" id="user_gender" class="form-control">
                                        <option {{ (Auth::user()->user_gender == 0 ? 'selected' : '') }} value="0">Nam</option>
                                        <option {{ (Auth::user()->user_gender == 1 ? 'selected' : '') }} value="1">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user_birthday">Số điện thoại</label>
                                    <input type="text" class="form-control"  name="user_phone_number" id="user_phone_number" placeholder="" value="{{Auth::user()->user_phone_number}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user_phone_number">Ngày Sinh</label>
                                    <input type="date" class="form-control"  name="user_birthday" id="user_birthday" aria-describedby="phone" placeholder="" value="{{Auth::user()->user_birthday}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user_birthday">Chứng Minh Nhân Dân</label>
                                    <input type="text" class="form-control"  name="user_identity_card" id="user_identity_card" placeholder="" value="{{Auth::user()->user_identity_card}}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="user_interests">Thông tin</label>
                                    <textarea class="form-control" id="user_interests" name="user_interests" rows="3">{{Auth::user()->user_interests}}</textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="#" title="" class="cancel cancel_model_profile" data-dismiss="modal">Hủy</a>
                                <button onclick="updateProfile();" class="btn btn-secondary ml-3">Hoàn tất</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog update_avatar">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cắt sửa ảnh</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 text-center">
                        <div id="image_demo" style="width:470px; margin-top:30px"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success crop_image">Cắt ảnh</button>
                <button class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/croppie.js"></script>
@if($float_edit == true)
<script>
    var oldViewAvatar = $('#view_user_avatar').attr("src");
    var oldAvatar = $('#user_avatar').val();
    <?php
        if($mySelf){
            ?>
            var selectImage = 'avatar';
            $(document).ready(function(){
                $('#choose_user_avatar').on('change', function(){
                    selectImage = 'avatar';
                    $('#image_demo').html('');
                    $('.update_avatar').css("max-width", "535px")
                    $image_crop = $('#image_demo').croppie({
                        enableExif: true,
                        viewport: {
                            width:300,
                            height:300,
                            type:'circle' //circle
                        },
                        boundary:{
                            width:300,
                            height:300
                        },
                        // showZoomer: false,
                        enableOrientation: true,
                        mouseWheelZoom: '',
                    });
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        $image_crop.croppie('bind', {
                            url: event.target.result
                        }).then(function(){
                            console.log('jQuery bind complete');
                        });
                    }
                    reader.readAsDataURL(this.files[0]);
                    $('#uploadimageModal').modal('show');
                });

                $('.edit_banner_photo').click(function() {
                    @if($memberVip)
                    $('.file_edit_banner_photo').trigger('click');
                    @else
                    alertModal('Chỉ có thành viên VIP mới có quyền chỉnh sửa ảnh bìa');
                    @endif
                });

                $('.file_edit_banner_photo').on('change', function(){
                    selectImage = 'cover';
                    $('#image_demo').html('');
                    $('.modal-dialog').css("max-width", "815px")
                    $('#image_demo').html('');
                    $image_crop = $('#image_demo').croppie({
                        enableExif: true,
                        viewport: {
                            width:780,
                            height:200,
                            type:'square' //circle
                        },
                        boundary:{
                            width:780,
                            height:200
                        },
                        size: {
                            width: 1140,
                            height: 300
                        },
                        // showZoomer: false,
                        enableOrientation: true,
                        mouseWheelZoom: '',
                    });
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        $image_crop.croppie('bind', {
                            url: event.target.result
                        }).then(function(){
                            console.log('jQuery bind complete');
                        });
                    }
                    reader.readAsDataURL(this.files[0]);
                    $('#uploadimageModal').modal('show');
                });

                $('.crop_image').click(function(event){
                    console.log(selectImage);
                    if(selectImage == 'avatar'){
                        $image_crop.croppie('result', {
                            type: 'canvas',
                            size: {
                                width: 500,
                                height: 500
                            }
                        }).then(function (response) {
                            const info = $image_crop.croppie('get');
                            $('#uploadimageModal').modal('hide');
                            $('#user_avatar').val(response);
                            $('#view_user_avatar').attr("src", response);
                        })
                    }else{
                        $image_crop.croppie('result', {
                            type: 'canvas',
                            size: {
                                width: 1140,
                                height: 300
                            }
                        }).then(function (response) {
                            const info = $image_crop.croppie('get');
                            $('#uploadimageModal').modal('hide');
                            $('.box_banner_profile').css('background-image', 'url(' + response + ')');
                            getAjaxCover(response);
                        })
                    }

                });
                function getAjaxCover(dataImage) {
                    $.ajax({
                        type:'POST',
                        url: '/user/upload_image_banner',
                        data: {cover_img : dataImage},
                        dataType: 'json',
                        success:function(data){
                            if(data.success) {

                            }else{
                                alertModal(data.message);
                            }
                        },
                    });
                }
            });
            $('.cancel_model_profile').on('click', function () {
                $('#user_avatar').val('');
                $('#view_user_avatar').attr("src", oldViewAvatar);
            })
            $('.profile_submit1').submit(false);
            <?php
            if(!Auth::user()->username) {
            ?>
            $('.click_modal_profile').click(function() {
                alertModal('Lần đăng nhập với tài khoản facebook hoặc google sẽ cập nhật thêm thông tin tên tài khoản và mật khẩu.');
            })
            <?php
            }
            ?>
            function showChangePassWord() {
                $('.input_change_pass').toggle('slow');
            }
            function updateProfile() {
                resetInputLogin();
                if(($('.profile_submit1').find('#username').val()) < 4) {
                    addErrorInput($('#username'), 'Tên tài khoản không được để trống và lớn hơn 4 ký tự');
                    return false;
                }
                if(($('.profile_submit1').find('#name').val()).length < 4) {
                    addErrorInput($('#name'), 'Tên không được để trống và lớn hơn 4 ký tự');
                    return false;
                }
                if(($('.profile_submit1').find('#name').val()).length >30) {
                    addErrorInput($('#name'), 'Tên không được quá dài 30 ký tự');
                    return false;
                }
                if(($('.profile_submit1').find('#user_identity_card').val()).length != 9 && ($('.profile_submit1').find('#user_identity_card').val()).length != 0) {
                    addErrorInput($('#user_identity_card'), 'Chứng minh nhân dân phải đủ 9 ký tự');
                    return false;
                }
                $.ajax({
                    url: window.location.origin + "/user/update",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        'name': $('.profile_submit1').find('#name').val(),
                        'user_gender': $('.profile_submit1').find('#user_gender').val(),
                        'user_birthday': $('.profile_submit1').find('#user_birthday').val(),
                        'user_phone_number': $('.profile_submit1').find('#user_phone_number').val(),
                        'user_interests': $('.profile_submit1').find('#user_interests').val(),
                        'user_avatar': $('#user_avatar').val(),
                        'username': $('#username').val(),
                        'password': $('#password').val(),
                        'repassword': $('#repassword').val(),
                        'current_password': $('#current_password').val(),
                        'user_identity_card': $('#user_identity_card').val()
                    },
                    beforeSend: function () {
                        if(loaded) return false;
                        loaded = true;
                    },
                    statusCode: {
                        401: function () {
                            window.location.replace('/login');
                            return false;
                        }
                    },
                    success: function (response) {
                        if(response.success) {
                            if($('#user_avatar').val()){
                                $("#view_user_avatar_2").attr("src", '<?php echo (strpos(Auth::user()->user_avatar, "http") !== false) ? "" : Helpers::file_path($user->id, PUBLIC_AVATAR_PATH, true) ?>' + response.data.user_avatar + '?v=' + Date.now())
                                $('#user_avatar').val("");
                            }
                            oldViewAvatar = $('#view_user_avatar').attr("src");
                            $('.user_name').html(response.data.name);
                            $('.edit_profile').modal('toggle');
                            Lobibox.notify('success', {
                                size: 'mini',
                                sound: false,
                                delay: 1500,
                                delayIndicator: false,
                                msg: response.message
                            });
                            $('#password').val('');
                            $('#current_password').val('');
                            if(response.data.refresh)
                                location.reload();
                        }else{

                            $.each( response.data, function( key, value ) {
                                addErrorInput($('.profile_submit1').find('#' + key), value);
                            });
                        }
                    }
                });
                return false;
            }

            function resetInputLogin() {
                $('.profile_submit1').find('.input-help-block').remove();
                $('.profile_submit1').find('.alert').remove();
                $('.profile_submit1').find('input').removeClass('input-has-error');
            }
            function addErrorInput(tag, content) {
                tag.addClass('input-has-error');
                tag.before('<span class="input-help-block"><strong>' + content + '</strong></span>');
            }
            <?php
        }
    ?>
</script>
@endif
@endif
