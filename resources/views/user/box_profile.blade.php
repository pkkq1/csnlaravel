<div class="box_profile">
    <div class="container">
        <div class="media user11">
            <div class="media-left mr-4 align-self-center">
                <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/36063652_497737147312215_4042785808724262912_n.jpg?_nc_cat=0&oh=17c6d0fa7aa364c65001e00841474c29&oe=5BFCAFD9" alt="">
            </div>
            <div class="media-body align-self-center">
                <h4 class="media-title">AnhTu220791</h4>
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
@if(Auth::user())
    @if(Auth::user()->id == $user->id)
    <div class="modal fade edit_profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="title">Chỉnh sửa tài khoản</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="change_avatar">
                                <img src="{{Auth::user()->app_id ? Auth::user()->user_avatar : PUBLIC_AVATAR_PATH . Auth::user()->user_avatar}}" alt="{{Auth::user()->name}}">
                                <div class="form-group">
                                    <label for="file_avarta"><i class="material-icons">photo_camera</i> Thay đổi ảnh đại diện</label>
                                    <input type="file" class="form-control-file" id="file_avarta">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <form action="profile_submit" class="profile_submit1" method="get" accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="" value="{{Auth::user()->username}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail12">Link URL của bạn</label>
                                    <input type="text" class="form-control disabled" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="" value="chiasenhac.com/user/{{Auth::user()->id}}">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Tên</label>
                                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="" value="{{Auth::user()->id}}">
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
                                        <input type="text" class="form-control"  name="user_birthday" id="user_birthday" placeholder="" value="{{Auth::user()->user_birthday}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_phone_number">Số điện thoại</label>
                                        <input type="date" class="form-control"  name="user_phone_number" id="user_phone_number" aria-describedby="phone" placeholder="" value="{{Auth::user()->user_phone_number}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="user_interests">Thông tin</label>
                                        <textarea class="form-control" id="user_interests" name="user_interests" rows="3">{{Auth::user()->user_interests}}</textarea>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" title="" class="cancel" data-dismiss="modal">Hủy</a>
                                    <button class="btn btn-secondary ml-3">Hoàn tất</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endif