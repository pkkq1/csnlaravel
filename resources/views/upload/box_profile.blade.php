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
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".edit_profile">Chỉnh sửa <i class="material-icons">mode_edit</i></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade edit_profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="title">Chỉnh sửa tài khoản</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="change_avatar">
                            <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/36756842_506596209759642_5276681860770955264_n.jpg?_nc_cat=0&oh=09ecc0176189a5ab0bb568f9babe11bf&oe=5C114DBD" alt="">
                            <div class="form-group">
                                <label for="file_avarta"><i class="material-icons">photo_camera</i> Thay đổi ảnh đại diện</label>
                                <input type="file" class="form-control-file" id="file_avarta">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form action="profile_submit" class="profile_submit1" method="get" accept-charset="utf-8">
                            <div class="form-group">
                                <label for="exampleInputEmail11">Username</label>
                                <input type="email" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp" placeholder="" value="AnhTu220791">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail12">Link URL của bạn</label>
                                <input type="email" class="form-control disabled" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="" value="chiasenhac.com/anhtu220791">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail13">Tên</label>
                                    <input type="email" class="form-control" id="exampleInputEmail13" aria-describedby="emailHelp" placeholder="" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail14">Họ và đệm</label>
                                    <input type="email" class="form-control" id="exampleInputEmail14" aria-describedby="emailHelp" placeholder="" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail15">City</label>
                                    <input type="email" class="form-control" id="exampleInputEmail15" aria-describedby="emailHelp" placeholder="" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail16">Quốc gia</label>
                                    <input type="email" class="form-control" id="exampleInputEmail16" aria-describedby="emailHelp" placeholder="" value="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail17">Thông tin</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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