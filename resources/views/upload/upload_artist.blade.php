@section('hidden_wapper', true)
@extends('layouts.app')
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
@endsection
@section('content')
    <div class="box_profile">
        <div class="container">
            <div class="media user11">
                <div class="media-left mr-4 align-self-center">
                    <img src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/30656592_875212052650180_4881000052937457664_n.jpg?_nc_cat=0&oh=aabcaaa4646781829967f7a9fc069ad4&oe=5B579C42" alt="">
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
                                <img src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/30656592_875212052650180_4881000052937457664_n.jpg?_nc_cat=0&oh=aabcaaa4646781829967f7a9fc069ad4&oe=5B579C42" alt="">
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
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="box_playlist border-0">
                    <h3 class="title">UPLOAD ARTIST</h3>
                    <img src="{{ Storage::files('AAA13_org.jpg')}}"></img>
                </div>
                <div class="card card_playlist">
                    <div class="card-body">
                        <form action="/upload/store_artist" method="post" accept-charset="utf-8">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label for="artist_nickname" class="col-sm-4 col-form-label">Nghệ Danh</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="artist_nickname" name="artist_nickname" placeholder="Blooming Days - The 2nd Mini Album">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="artist_birthday" class="col-sm-4 col-form-label">Ngày Sinh</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="artist_birthday" class="form-control" id="artist_birthday">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="artist_gender" class="col-sm-4 col-form-label">Giới Tính</label>
                                        <div class="col-sm-8">
                                            <select name="artist_gender" id="artist_gender" class="form-control">
                                                <option>Nam</option>
                                                <option>Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 col-form-label">
                                            <label for="artist_avatar">Avatar</label> <br>
                                            <small>(Hình tối thiểu 500 x 500 pixels. Nếu nhỏ hơn sẽ bị mất hình và lấy hình mặc định của Chiasenhac)</small>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="media">
                                                <img class="mr-3" id="artist_avatar_uploaded" src="https://avatar-nct.nixcdn.com/playlist/2018/04/10/6/e/4/6/1523352297919.jpg" alt="">
                                                <div class="media-body">
                                                    <div class="form-group">
                                                        <label for="choose_artist_avatar">Chọn file ảnh</label>
                                                        <input type="file" class="form-control-file" name="choose_artist_avatar" id="choose_artist_avatar">
                                                        <input type="text" hidden name="artist_avatar" class="form-control-file" id="artist_avatar">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 col-form-label">
                                            <label for="inputPassword">Cover</label> <br>
                                            <small>(Hình tối thiểu 1170 x 300 pixels. Nếu nhỏ hơn sẽ bị mất hình và lấy hình mặc định của Chiasenhac)</small>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="media">
                                                <img class="mr-3" id="artist_cover_uploaded" src="https://avatar-nct.nixcdn.com/playlist/2018/04/10/6/e/4/6/1523352297919.jpg" alt="">
                                                <div class="media-body">
                                                    <div class="form-group">
                                                        <label for="artist_cover">Chọn file ảnh</label>
                                                        <input type="file" class="form-control-file" id="artist_cover">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-primary btn-lg">Lưu</button>
                                            <button type="button" class="btn btn-primary btn-lg">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                <div class="card mb-3 cardads">
                    <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crop Image</h4>
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
                    <button type="button" class="btn btn-success crop_image">Crop Image</button>
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/croppie.js"></script>
    <script>artist_avatar
        $(document).ready(function(){

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
            $('#choose_artist_avatar').on('change', function(){
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
                    $('#uploadimageModal').modal('hide');
                    $('#artist_avatar').val(response);
                    $('#artist_avatar_uploaded').attr("src", response);
                    // $("#uploadimageModal" ).val("");
                })
            });
        });
    </script>
@endsection