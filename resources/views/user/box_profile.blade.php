<div class="box_profile">
    <div class="container">
        <div class="media user11">
            <div class="media-left mr-4 align-self-center">
                <img id="view_user_avatar_2" src="{{(strpos($user->user_avatar, 'http') !== false) ? $user->user_avatar : PUBLIC_AVATAR_PATH . $user->user_avatar}}" alt="{{$user->name}}" alt="{{$user->name}}">
            </div>
            <div class="media-body align-self-center">
                <h4 class="media-title user_name">{{$user->name}}</h4>
                <ul class="list-inline">
                    <li class="list-inline-item"><b>193.085</b> <small>upload(17Gb)</small></li>
                    <li class="list-inline-item"><b>193.085</b> <small>download</small></li>
                </ul>
                @if(Auth::user())
                    @if(Auth::user()->id == $user->id)
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".edit_profile">Chỉnh sửa <i class="material-icons">mode_edit</i></button>
                    @endif
                @endif
            </div>
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
                            <img class="mr-3" id="view_user_avatar" src="{{(strpos(Auth::user()->user_avatar, 'http') !== false) ? Auth::user()->user_avatar : PUBLIC_AVATAR_PATH . Auth::user()->user_avatar}}" alt="{{Auth::user()->name}}">
                            <div class="form-group">
                                <label for="choose_user_avatar"><i class="material-icons">photo_camera</i> Thay đổi ảnh đại diện</label>
                                <input type="file" class="form-control-file" name="choose_user_avatar" id="choose_user_avatar">
                                <input type="text" hidden name="user_avatar" value="{{Auth::user()->user_avatar}}" alt="" class="form-control-file" id="user_avatar">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form action="" class="profile_submit1" method="get" accept-charset="utf-8">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="" value="{{Auth::user()->username}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail12">Link URL của bạn</label>
                                <input type="text" class="form-control disabled" id="exampleInputEmail12" placeholder="" value="chiasenhac.com/user/{{Auth::user()->id}}">
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
<script>
    var oldViewAvatar = $('#view_user_avatar').attr("src");
    var oldAvatar = $('#user_avatar').val();
    $(document).ready(function(){
        $('#choose_user_avatar').on('change', function(){
            $('#image_demo').html('');
            $('.update_avatar').css("max-width", "500px")
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                    width:300,
                    height:300,
                    type:'square' //circle
                },
                boundary:{
                    width:300,
                    height:300
                },
                showZoomer: false,
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
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (response) {
                const info = $image_crop.croppie('get');
                $('#uploadimageModal').modal('hide');
                $('#user_avatar').val(response);
                $('#view_user_avatar').attr("src", response);
                // $('#view_user_avatar_2').attr("src", response);
            })
        });
    });
    $('.cancel_model_profile').on('click', function () {
        $('#user_avatar').val('');
        $('#view_user_avatar').attr("src", oldViewAvatar);
    })
    $('.profile_submit1').submit(false);
    function updateProfile() {
        if(!$('.profile_submit1').find('#name').val()) {
            alertModal('Tên không được để trống');
            return false;
        }
        $.ajax({
            url: "/user/update",
            type: "POST",
            dataType: 'json',
            data: {
                'name': $('.profile_submit1').find('#name').val(),
                'user_gender': $('.profile_submit1').find('#user_gender').val(),
                'user_birthday': $('.profile_submit1').find('#user_birthday').val(),
                'user_phone_number': $('.profile_submit1').find('#user_phone_number').val(),
                'user_interests': $('.profile_submit1').find('#user_interests').val(),
                'user_avatar': $('#user_avatar').val()
            },
            beforeSend: function () {
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
                        $("#view_user_avatar_2").attr("src", '<?php echo (strpos(Auth::user()->user_avatar, "http") !== false) ? "" : PUBLIC_AVATAR_PATH ?>' + response.data.user_avatar + '?v=' + Date.now())
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
                }

            }
        });
        return false;
    }
</script>
@endif
