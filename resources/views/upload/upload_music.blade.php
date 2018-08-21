@section('hidden_wapper', true)
<?php
$titleMeta = 'Cập nhật nhạc mới - ' . Config::get('constants.app.title');
?>
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="/css/typeaheadjs.css">

    <link rel="stylesheet" type="text/css" href="/css/token-input.css">
    <link rel="stylesheet" type="text/css" href="/css/token-input-facebook.css">
@endsection
@extends('layouts.app')
@section('content')
    @include('upload.box_profile', ['user' => 'data'])
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <ul class="nav nav-tabs nav-upload" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="upload_lyric-tab" data-toggle="tab" href="#upload_lyric" role="tab" aria-controls="upload_lyric" aria-selected="true">Upload bài hát</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="upload_album-tab" data-toggle="tab" href="#upload_album" role="tab" aria-controls="upload_album" aria-selected="false">upload album</a>
                    </li>
                </ul>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ $message }}
                    </div>
                @endif
                <div class="tab-content upload-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="upload_lyric" role="tabpanel" aria-labelledby="upload_lyric-tab">
                        <div class="box_upload_file d-flex align-items-center justify-content-center{{ $errors->has('drop_files') ? ' has-error-drop-file' : '' }}" >
                            <form action="/upload/file_music" class="box_process{{ $errors->has('drop_html') ? '' : ' dropzone' }}" enctype="multipart/form-data">
                                @if(old('drop_html'))
                                    <?php echo old('drop_html'); ?>
                                @else
                                    <h5 class="count_file_music" style="text-align: left;"></h5>
                                    <div class="form-group m-0 fallback"><label for="upload_lyric_file" class="text-center"><img src="/imgs/ copy.png" alt=""><h3 class="title">Chọn file để upload</h3><small>Bạn có thể kéo và thả file vào đây</small><input name="file" type="file" multiple /></label><input type="file" class="form-control-file" id="upload_lyric_file"></div>
                                @endif
                            </form>

                        </div>
                        @if ($errors->has('drop_files'))
                            <span class="help-block" style="color: #ff4e55;">
                                    <strong>{{ $errors->first('drop_files') }}</strong>
                                </span>
                        @endif
                        <hr>
                        <form action="/upload/music" method="post" class="form_music has_drop_file" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="row row10px">
                                <div class="col-12">
                                    <div class="box_right_upload form-row">
                                        <div class="form-group col-12">
                                            <label for="exampleInputEmail1">Bài hát gốc</label>
                                        </div>
                                        <div class="form-group col-12{{ $errors->has('music_title') ? ' has-error' : '' }}">
                                            <label for="music_title">Tên bài hát</label>
                                            <input type="text" class="form-control" id="music_title" value="{{ old('music_title') }}" name="music_title" placeholder="Nhập tên bài hát">
                                            @if ($errors->has('music_title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group music_artist col-12{{ $errors->has('music_artist') ? ' has-error' : '' }}">
                                            <label for="music_artist">Ca sĩ</label>
                                            <input type="text" class="form-control" name="music_artist_id" value="{{ old('music_artist_id') }}" id="music_artist_id">
                                            <input type="hidden" class="form-control" name="music_artist" value="{{ old('music_artist') }}" id="music_artist" placeholder="Nhập tên ca sĩ">
                                            @if ($errors->has('music_artist'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_artist') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-12{{ $errors->has('music_composer') ? ' has-error' : '' }}">
                                            <label for="music_composer">Sáng tác</label>
                                            <input type="text" class="form-control" name="music_composer" id="music_composer" placeholder="">
                                            @if ($errors->has('music_composer'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_composer') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4{{ $errors->has('music_production') ? ' has-error' : '' }}">
                                            <label for="music_production">Hãng sản xuất</label>
                                            <input type="text" class="form-control" name="music_production" id="music_composer" placeholder="">
                                            @if ($errors->has('music_production'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_production') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4{{ $errors->has('music_album_id') ? ' has-error' : '' }}">
                                            <label for="music_album_id">Hãng đĩa</label>
                                            <input type="text" class="form-control" name="music_album_id" id="music_album_id" placeholder="">
                                            @if ($errors->has('music_album_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_album_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4{{ $errors->has('music_year') ? ' has-error' : '' }}">
                                            <label for="music_year">Năm phát hành</label>
                                            <input type="text" class="form-control" name="music_year" id="music_year" placeholder="">
                                            @if ($errors->has('music_year'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_year') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                                            <label for="cat_id">Chuyên mục</label>
                                            <select class="form-control" name="cat_id" id="cat_id" onchange="cat_level_reload(this.value);">
                                                <option value="2">Beat, Playback</option>
                                                <option value="3">Nhạc Việt Nam</option>
                                                <option value="4">Nhạc US-UK</option>
                                                <option value="5">Nhạc Hoa</option>
                                                <option value="6">Nhạc Hàn</option>
                                                <option value="7">Nhạc Nhật</option>
                                                <option value="8">Nhạc Pháp</option>
                                                <option value="9">Nhạc nước khác</option>
                                            </select>
                                            @if ($errors->has('cat_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cat_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3{{ $errors->has('cat_level') ? ' has-error' : '' }}">
                                            <label for="cat_level" style="opacity: 0;">csn</label>
                                            <select class="form-control" name="cat_level" id="cat_level" onchange="cat_sublevel_reload(this.value);">
                                                <option value="1">Nhạc pop, rock...</option>
                                                <option value="2">Nhạc rap, hiphop</option>
                                                <option value="3">Nhạc dance, remix</option>
                                                <option value="4">Nhạc truyền thống</option>
                                            </select>
                                            @if ($errors->has('cat_level'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cat_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3{{ $errors->has('cat_sublevel') ? ' has-error' : '' }}">
                                            <label for="cat_sublevel" style="opacity: 0;">csn</label>
                                            <select class="form-control" name="cat_sublevel" id="cat_sublevel">
                                                <option value="1">Nhạc trẻ</option>
                                                <option value="2">Nhạc rock</option>
                                                <option value="3">Thiếu nhi</option>
                                                <option value="4">Trữ tình</option>
                                                <option value="7">Nhạc chế</option>
                                            </select>
                                            @if ($errors->has('cat_sublevel'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cat_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="cat_custom" style="opacity: 0;">csn</label>
                                            <select class="form-control" name="cat_custom" id="cat_custom">
                                                <option value="0">---</option>
                                                <option value="1">Giáng sinh</option>
                                                <option value="2">Năm mới</option>
                                                <option value="3">Nhà giáo VN</option>
                                                <option value="6">Hát Live</option>
                                                <option value="4">Phụ nữ</option>
                                                <option value="5">Bóng đá</option>
                                                <option value="7">Nhạc chế</option>
                                                <option value="8">Ca sĩ mới</option>
                                                <option value="9">Bonus track</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-12{{ $errors->has('music_lyric') ? ' has-error' : '' }}">
                                            <label for="music_lyric">Lời bài hát</label>
                                            <textarea class="form-control" name="music_lyric" id="music_lyric" rows="9"></textarea>
                                            @if ($errors->has('music_lyric'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_lyric') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="music_note">Ghi chú</label>
                                            <textarea class="form-control" name="music_note" id="music_note" rows="3"></textarea>
                                        </div>
                                        <div class="form-group col-12{{ $errors->has('music_source_url') ? ' has-error' : '' }}">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <label for="music_source_url" class="m-0">Full link nguồn dowload</label>
                                                <small>Yêu cầu bắt buộc khi upload nhạc lossless</small>
                                            </div>
                                            <input type="text" class="form-control" name="music_source_url" id="music_source_url" placeholder="">
                                            @if ($errors->has('music_source_url'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('music_source_url') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="drop_files" class="drop_files" value="{{old('drop_files')}}">
                                        <input type="hidden" name="drop_html" class="drop_html" value="{{old('drop_html')}}">
                                        <div class="text-center col-12">
                                            <button type="submit" class="btn btn-danger btn-upload">Tải lên</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="upload_album" role="tabpanel" aria-labelledby="upload_album-tab">
                        <div class="box_upload_file d-flex align-items-center justify-content-center">
                            <div class="box_process">
                                <h5 class="title">Đang tải lên 6 mục</h5>
                                <div class="scroll_album">
                                    <div class="media">
                                        <img class="mr-3 align-self-center" src="/imgs/document.png" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h4 class="media-title"><a href="#" title="">Da-Lo-Yeu-Em-Nhieu-JustaTee.mp3</a> <small class="text-danger">1m 23s</small></h4>
                                                <a href="#" title="" class="close"><i class="material-icons">close</i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="mr-3 align-self-center" src="/imgs/document.png" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h4 class="media-title"><a href="#" title="">Da-Lo-Yeu-Em-Nhieu-JustaTee.mp3</a> <small class="text-danger">1m 23s</small></h4>
                                                <a href="#" title="" class="close"><i class="material-icons">close</i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="mr-3 align-self-center" src="/imgs/document.png" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h4 class="media-title"><a href="#" title="">Da-Lo-Yeu-Em-Nhieu-JustaTee.mp3</a> <small class="text-danger">1m 23s</small></h4>
                                                <a href="#" title="" class="close"><i class="material-icons">close</i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="mr-3 align-self-center" src="/imgs/document.png" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h4 class="media-title"><a href="#" title="">Da-Lo-Yeu-Em-Nhieu-JustaTee.mp3</a> <small class="text-danger">1m 23s</small></h4>
                                                <a href="#" title="" class="close"><i class="material-icons">close</i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="mr-3 align-self-center" src="/imgs/document.png" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h4 class="media-title"><a href="#" title="">Da-Lo-Yeu-Em-Nhieu-JustaTee.mp3</a> <small class="text-danger">1m 23s</small></h4>
                                                <a href="#" title="" class="close"><i class="material-icons">close</i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="mr-3 align-self-center" src="/imgs/document.png" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h4 class="media-title"><a href="#" title="">Da-Lo-Yeu-Em-Nhieu-JustaTee.mp3</a> <small class="text-danger">1m 23s</small></h4>
                                                <a href="#" title="" class="close"><i class="material-icons">close</i></a>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-center upload_text_desc"><small>Bạn có thể upload nhiều bài hát cùng lúc bằng cách nhấn giữ phím Ctrl và click chọn các files.</small></p>
                        <hr>
                        <div class="row row10px">
                            <div class="col-3">
                                <div class="card cover_upload">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <form>
                                            <div class="form-group text-center m-0">
                                                <label for="exampleFormControlFile2">
                                                    <i class="material-icons">camera_alt</i>
                                                    <div class="txt">Upload Cover</div>
                                                </label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile2">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar_upload">
                    <h3 class="title">Hướng dẫn Upload nhạc mới</h3>
                    <ul class="list-unstyled">
                        <li><span>Bước 1:</span> Nhấn nút + Chọn tập tin để tải lên... để upload bài hát từ máy tính lên server chiasenhac.com</li>
                        <li><span>Bước 2:</span> Điền tên <span>Ca sĩ</span> trình bày ở dưới phần <span>Tên bài hát</span>.</li>
                        <li><span>Bước 3:</span> Chỉnh sửa lại <span>Tên bài hát</span> cho chính xác.</li>
                        <li><span>Bước 4:</span> Hệ thống sẽ tự động chọn 1 bài hát trong cơ sở dữ liệu có thông tin bài hát gần giống nhất với thông tin bạn đã điền vào. Nếu hệ thống chọn không chính xác, bạn hãy click vào <span>Chọn bài khác</span> ở khung <span>Bài hát gốc</span> để chọn lại cho đúng hoặc chỉnh sửa lại <span>Tên bài hát</span> 1 lần nữa giống bước 3 để tự bổ sung thông tin.</li>
                        <li><span>Bước 5:</span> Bổ sung, chỉnh sửa các thông tin còn lại cho chính xác.</li>
                        <li><span>Bước 6:</span> Nhập link nguồn nhạc mà bạn đã bài hát này về. Nếu bạn rip nhạc từ CD gốc thì vui lòng gửi link file ảnh bìa của CD để chứng minh.</li>
                    </ul>
                    <hr>
                    <h3 class="title">Lưu ý</h3>
                    <ul class="list-unstyled">
                        <li>Nếu vì 1 lý do nào đó, bạn cần thay đổi Tên bài hát hoặc tên ca sĩ thì bạn phải thực hiện lại thứ tự các bước như trên.</li>
                        <li>Bạn chỉ cần upload file bài hát ở chất lượng cao nhất mà bạn có, hệ thống sẽ xử lý thành các định dạng có chất lượng thấp hơn để phù hợp yêu cầu nghe nhạc của mọi người.</li>
                        <li>Sau khi file nhạc và thông tin bài hát đã được tải lên hệ thống thành công, bạn phát hiện có thông tin nhập chưa chính xác, cần chỉnh sửa thì bạn vẫn có 5 phút để thể thay đổi. Sau thời hạn 5 phút mà hệ thống không phát hiện thay đổi nào mới thì hệ thống bắt đầu xử lý bài hát của bạn để đăng lên.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="box_space"></div>
@endsection

@section('contentJS')
    <script type="text/javascript" src="/js/dropzone.js"></script>
    <script type="text/javascript" src="/js/bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="/js/typeahead.bundle.js"></script>
    <script type="text/javascript" src="/js/jquery.tokeninput.js"></script>
    <script>
        $(".form_music").keypress(function(e) {
            //Enter key
            if (e.which == 13) {
                return false;
            }
        });
        Dropzone.prototype.defaultOptions.maxFiles = 1;
        // Dropzone.prototype.defaultOptions.acceptedFiles = '';
        Dropzone.prototype.defaultOptions.headers = {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        };
        Dropzone.prototype.defaultOptions.callResponseSuccess = function(result) {
            if(result.status === true) {
                var oldFileDrops = $('.drop_files').val();
                $('.drop_files').val(oldFileDrops ? oldFileDrops + ';' + result.file_name : result.file_name);
                $('.dz-message').remove();
                $('.drop_html').val($('.dropzone').html());
            }
        };
        <?php
          if(old('drop_html'))
            echo 'Dropzone.prototype.defaultOptions.disableDropZone = true;
                  Dropzone.prototype.defaultOptions.maxFiles = 0;';
        ?>

        $(document).ready(function() {
            $("#music_artist_id").tokenInput("/artist/search", {
                theme: "facebook",
                preventDuplicates: true,
                setInputName: "#music_artist",
                noResultsText: 'Không có tên ca sĩ',
                tokenDelimiter: ';',
                hintText: 'Nhập tên ca sĩ',
                searchingText: 'Đang tìm ca sĩ',
                prePopulate: [
                        <?php
                        if(old('music_artist') && old('music_artist_id')) {
                            $oldArtistName = explode(';', old('music_artist'));
                            $oldArtistId = explode(';', old('music_artist_id'));
                            foreach ($oldArtistName as $key => $val) {
                                $oldArtist[] = [
                                    'id' => $oldArtistId[$key],
                                    'name' => $val
                                ];
                                echo '{id: ' . $oldArtistId[$key] . ', name: "' . $val . '"},';
                            }
                        }
                        ?>
                ],
                addFunction: function (){
                }
            });
        });


        var cat_id_selected = 3;
        function cat_level_reload(cat_id)
        {
            cat_id_selected = cat_id;
            document.getElementById('cat_level').options.length = 0;
            if (cat_id == 1) {
                document.getElementById('cat_level').options[0]=new Option("Video Việt Nam", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Video US-UK", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Video Hoa", "3", false, false);
                document.getElementById('cat_level').options[3]=new Option("Video Hàn", "4", false, false);
                document.getElementById('cat_level').options[4]=new Option("Video Nhật", "5", false, false);
                document.getElementById('cat_level').options[5]=new Option("Video Pháp", "6", false, false);
                document.getElementById('cat_level').options[6]=new Option("Video nước khác", "7", false, false);
                document.getElementById('cat_level').options[7]=new Option("Video Live", "8", false, false);
                document.getElementById('cat_level').options[8]=new Option("Video Hài", "9", false, false);
            }
            if (cat_id == 2) {
                document.getElementById('cat_level').options[0]=new Option("Playback Việt Nam", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Playback US-UK", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Playback Hoa", "3", false, false);
                document.getElementById('cat_level').options[3]=new Option("Playback Hàn", "4", false, false);
                document.getElementById('cat_level').options[4]=new Option("Playback Nhật", "5", false, false);
                document.getElementById('cat_level').options[5]=new Option("Playback Pháp", "6", false, false);
                document.getElementById('cat_level').options[6]=new Option("Playback nước khác", "7", false, false);
            }
            if (cat_id == 3) {
                document.getElementById('cat_level').options[0]=new Option("Nhạc pop, rock...", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Nhạc rap, hiphop", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Nhạc dance, remix", "3", false, false);
                document.getElementById('cat_level').options[3]=new Option("Nhạc truyền thống", "4", false, false);
            }
            if (cat_id == 4) {
                document.getElementById('cat_level').options[0]=new Option("Nhạc pop, rock...", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Nhạc rap, hiphop", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Nhạc dance, remix", "3", false, false);
            }
            if (cat_id == 5) {
                document.getElementById('cat_level').options[0]=new Option("Nhạc pop, rock...", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Nhạc rap, hiphop", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Nhạc dance, remix", "3", false, false);
            }
            if (cat_id == 6) {
                document.getElementById('cat_level').options[0]=new Option("Nhạc pop, rock...", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Nhạc rap, hiphop", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Nhạc dance, remix", "3", false, false);
            }
            if (cat_id == 7) {
                document.getElementById('cat_level').options[0]=new Option("Nhạc pop, rock...", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Nhạc rap, hiphop", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Nhạc dance, remix", "3", false, false);
            }
            if (cat_id == 8) {
                document.getElementById('cat_level').options[0]=new Option("Nhạc pop, rock...", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Nhạc rap, hiphop", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Nhạc dance, remix", "3", false, false);
            }
            if (cat_id == 9) {
                document.getElementById('cat_level').options[0]=new Option("Nhạc pop, rock...", "1", false, false);
                document.getElementById('cat_level').options[1]=new Option("Nhạc rap, hiphop", "2", false, false);
                document.getElementById('cat_level').options[2]=new Option("Nhạc dance, remix", "3", false, false);
            }
            cat_sublevel_reload(1);
        }

        function cat_sublevel_reload(cat_level)
        {
            document.getElementById('cat_sublevel').options.length = 0;

            if ( cat_id_selected == 2 )
            {
                document.getElementById('cat_sublevel').options[0]=new Option("Beat, Playback", "1", false, false);
                document.getElementById('cat_sublevel').options[1]=new Option("Instrumental", "2", false, false);
                document.getElementById('cat_sublevel').options[2]=new Option("Audiophile", "3", false, false);
                document.getElementById('cat_sublevel').options[3]=new Option("Classical", "4", false, false);
                document.getElementById('cat_sublevel').options[4]=new Option("New Age", "5", false, false);
                document.getElementById('cat_sublevel').options[5]=new Option("Remix, Dance, Trance...", "6", false, false);
                document.getElementById('cat_sublevel').options[6]=new Option("Electronic", "7", false, false);
                document.getElementById('cat_sublevel').options[7]=new Option("Soundtrack", "8", false, false);

            }
            else if ( cat_id_selected == 3 )
            {
                if ( cat_level == 1 )
                {
                    document.getElementById('cat_sublevel').options[0]=new Option("Nhạc trẻ", "1", false, false);
                    document.getElementById('cat_sublevel').options[1]=new Option("Nhạc rock", "2", false, false);
                    document.getElementById('cat_sublevel').options[2]=new Option("Thiếu nhi", "3", false, false);
                    document.getElementById('cat_sublevel').options[3]=new Option("Trữ tình", "4", false, false);
                    document.getElementById('cat_sublevel').options[4]=new Option("Nhạc chế", "7", false, false);

                }

                if ( cat_level == 3 )
                {
                    document.getElementById('cat_sublevel').options[0]=new Option("Remix", "1", false, false);
                    document.getElementById('cat_sublevel').options[1]=new Option("Dance", "2", false, false);
                    document.getElementById('cat_sublevel').options[2]=new Option("Electronic", "3", false, false);
                    document.getElementById('cat_sublevel').options[3]=new Option("DJ, Nonstop", "4", false, false);

                }

                if ( cat_level == 4 )
                {
                    document.getElementById('cat_sublevel').options[0]=new Option("Quê hương", "5", false, false);
                    document.getElementById('cat_sublevel').options[1]=new Option("Tiền chiến", "6", false, false);
                    document.getElementById('cat_sublevel').options[2]=new Option("Tân cổ", "8", false, false);
                    document.getElementById('cat_sublevel').options[3]=new Option("Cải lương", "9", false, false);

                }
            }
            else if ( cat_id_selected > 3 )
            {
                if ( cat_level == 1 )
                {
                    document.getElementById('cat_sublevel').options[0]=new Option("Pop", "1", false, false);
                    document.getElementById('cat_sublevel').options[1]=new Option("Rock", "2", false, false);
                    document.getElementById('cat_sublevel').options[2]=new Option("Children's music", "3", false, false);
                    document.getElementById('cat_sublevel').options[3]=new Option("R&B/Soul", "7", false, false);
                    document.getElementById('cat_sublevel').options[4]=new Option("Jazz", "8", false, false);
                    document.getElementById('cat_sublevel').options[5]=new Option("Country", "9", false, false);
                    document.getElementById('cat_sublevel').options[6]=new Option("Classical", "10", false, false);
                    document.getElementById('cat_sublevel').options[7]=new Option("Soundtrack", "11", false, false);

                }

                if ( cat_level == 3 )
                {
                    document.getElementById('cat_sublevel').options[0]=new Option("Remix", "1", false, false);
                    document.getElementById('cat_sublevel').options[1]=new Option("Dance", "2", false, false);
                    document.getElementById('cat_sublevel').options[2]=new Option("Electronic", "3", false, false);
                    document.getElementById('cat_sublevel').options[3]=new Option("DJ, Nonstop", "4", false, false);
                }
            }
        }
        document.getElementById('cat_id').value = 3;
        cat_level_reload(3);

    </script>
@endsection
