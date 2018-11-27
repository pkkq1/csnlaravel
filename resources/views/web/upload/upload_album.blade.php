@section('hidden_wapper', true)
<?php
use App\Library\Helpers;
$titleMeta = 'Cập nhật nhạc mới - ' . Config::get('constants.app.title');
?>
@section('contentCSS')
    <link rel="stylesheet" type="text/css" href="/css/croppie.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/typeaheadjs.css">

    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/token-input.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/token-input-facebook.css">
@endsection
@extends('web.layouts.app')
@section('content')
    @include('web.user.box_profile', ['user' =>  Auth::user(), 'float_edit' => false])
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <ul class="nav nav-tabs nav-upload" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="upload_lyric-tab" href="/dang-tai/nhac" >Upload bài hát</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="upload_album-tab" href="/dang-tai/album" >upload album</a>
                    </li>
                </ul>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>Thành công!</strong> <?php echo $message ?>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> <?php echo $message ?>
                    </div>
                @endif
                <div class="tab-content upload-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="upload_lyric" role="tabpanel" aria-labelledby="upload_lyric-tab">
                        <div class="box_upload_file d-flex align-items-center justify-content-center{{ $errors->has('drop_files') ? ' has-error-drop-file' : '' }}" >
                            <form action="/dang-tai/file-nhac" class="box_process{{ ($errors->has('drop_html') || isset($album)) ? '' : ' dropzone' }}" enctype="multipart/form-data">
                                @if(old('drop_html'))
                                    <?php echo old('drop_html'); ?>
                                @else
                                    @if(isset($album))
                                        <?php
                                        $uploadFile = $album->uploadFIle();
                                        ?>
                                        <h5 class="count_file_music title" style="text-align: left;">Đang tải lên {{count($uploadFile)}} mục</h5>
                                        @foreach($uploadFile as $item)
                                            <div class="media dz-processing"><img class="mr-3 align-self-center" src="/imgs/document.png" alt="">
                                                <div class="media-body align-self-center">
                                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                                        <h4 class="media-title"><a href="#" data-dz-name="" title="">{{$item->music_filename_upload}}</a>
                                                            <small data-dz-size="" class="text-danger"><strong>{{Helpers::formatBytes($item->music_filesize)}}</strong>
                                                            </small>
                                                            <small data-progress-present="" class="text-danger data-progress-present"
                                                                   style=" color: #8c959a!important;">100%
                                                            </small>
                                                        </h4>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar dz-upload" role="progressbar"
                                                             data-dz-uploadprogress="" style="width: 100%;"
                                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h5 class="count_file_music" style="text-align: left;"></h5>
                                        <div class="form-group m-0 fallback"><label for="upload_lyric_file" class="text-center"><img src="/imgs/ copy.png" alt=""><h3 class="title">Chọn file để upload</h3><small>Bạn có thể kéo và thả file vào đây</small><input name="file" type="file" multiple /></label><input type="file" class="form-control-file" id="upload_lyric_file"></div>
                                    @endif
                                @endif
                            </form>

                        </div>
                        @if ($errors->has('drop_files'))
                            <span class="help-block" style="color: #ff4e55;">
                                    <strong>{{ str_replace('drop files', 'upload', $errors->first('drop_files')) }}</strong>
                                </span>
                        @endif
                        <p class="text-center upload_text_desc"><small>Bạn có thể upload nhiều bài hát cùng lúc bằng cách nhấn giữ phím Ctrl và click chọn các files.</small></p>
                        <hr>
                        <form action="" method="post" class="form_music has_drop_file" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="row row10px">
                                <div class="col-3 {{ $errors->has('album_cover') ? ' has-error' : '' }}">
                                    @if ($errors->has('album_cover'))
                                        <span class="help-block">
                                            <strong>{{ str_replace('album cover', 'cover', $errors->first('album_cover')) }}</strong>
                                        </span>
                                    @endif
                                    <div class="card cover_upload form-group" <?php echo isset($album) ? 'style="padding-top: 0px; font-size: 200%;"' : '' ?>>
                                        @if(isset($album))
                                        <label for="choose_album_cover" class="card-body d-flex align-items-center justify-content-center" style="z-index: 9999"></label>
                                        <img class="mr-3" {{isset($album) ? '' : 'hidden'}} id="album_cover_uploaded" src="{{isset($album) ? Helpers::file_path($album->album_id, PUBLIC_COVER_ALBUM_CROP_PATH, true).$album->cover_filename : '/imgs/avatar_default.png?v='.time()}}" alt="" style="z-index: 999; width: 177px;">
                                        @else
                                        <label for="choose_album_cover" class="card-body d-flex align-items-center justify-content-center" style="z-index: 9999">
                                            <div class="form-group text-center m-0 icon_camera_cover">
                                                <label for="choose_album_cover">
                                                    <i class="material-icons">camera_alt</i>
                                                    <div class="txt">Upload Cover</div>
                                                </label>
                                            </div>
                                        </label>
                                        <img class="mr-3" id="album_cover_uploaded" src="{{isset($album) ? COVER_ALBUM_SOURCE_PATH.$album->cover_filename : '/imgs/avatar_default.png'}}" alt="" style="z-index: 999; width: 177px;">
                                        @endif

                                        <div class="media-body">
                                            <input type="file" hidden class="form-control-file" name="choose_album_cover" id="choose_album_cover">
                                            <input type="text" hidden  class="form-control-file" name="album_cover" id="album_cover">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="box_right_upload form-row">
                                        <div class="form-group col-12{{ $errors->has('music_album') ? ' has-error' : '' }}">
                                            <label for="music_title">Tên album</label>
                                            <input type="text" class="form-control" id="music_album" value="{{ old('music_album') ?? $album->album_name ?? '' }}" name="music_album" placeholder="Nhập tên album">
                                            @if ($errors->has('music_album'))
                                                <span class="help-block">
                                                    <strong>{{str_replace('music album', 'tên album', $errors->first('music_album')) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group music_artist col-12{{ $errors->has('music_artist') ? ' has-error' : '' }}">
                                            <label for="music_artist">Ca sĩ</label>
                                            <input type="text" {{isset($album) ? 'disabled' : ''}} class="form-control" name="music_artist_id" value="{{ old('music_artist_id') }}" placeholder="Nhập tên ca sĩ" id="music_artist_id">
                                            <input type="hidden" {{isset($album) ? 'disabled' : ''}} class="form-control" name="music_artist" value="{{ old('music_artist') }}" id="music_artist" placeholder="Nhập tên ca sĩ">
                                            @if ($errors->has('music_artist'))
                                                <span class="help-block">
                                                    <strong>{{ str_replace('music artist', 'ca sĩ', $errors->first('music_artist')) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group col-12{{ $errors->has('music_composer') ? ' has-error' : '' }}">
                                            <label for="music_composer">Sáng tác</label>
                                            <input type="text" class="form-control" {{isset($album) ? 'disabled' : ''}} name="music_composer" value="{{ old('music_composer')}}" id="music_composer" placeholder="">
                                            @if ($errors->has('music_composer'))
                                                <span class="help-block">
                                                    <strong>{{ str_replace('music composer', 'sáng tác', $errors->first('music_composer')) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4{{ $errors->has('music_production') ? ' has-error' : '' }}">
                                            <label for="music_production">Hãng sản xuất</label>
                                            <input type="text" class="form-control" value="{{ old('music_production') ?? $album->album_production ?? '' }}" name="music_production" id="music_production" placeholder="">
                                            @if ($errors->has('music_production'))
                                                <span class="help-block">
                                                    <strong>{{ str_replace('music production', 'hãng sản xuất', $errors->first('music_production')) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4{{ $errors->has('music_album_id') ? ' has-error' : '' }}">
                                            <label for="music_album_id">Hãng đĩa</label>
                                            <input type="text" class="form-control" value="{{ old('music_album_id') ?? $album->album_code ?? '' }}" name="music_album_id" id="music_album_id" placeholder="">
                                            @if ($errors->has('music_album_id'))
                                                <span class="help-block">
                                                    <strong>{{ str_replace('music album id', 'hãng đĩa', $errors->first('music_album_id')) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-4{{ $errors->has('music_year') ? ' has-error' : '' }}">
                                            <label for="music_year">Năm phát hành</label>
                                            <input type="text" class="form-control" name="music_year" value="{{ old('music_year') ?? $album->album_year ?? '' }}" id="music_year" placeholder="">
                                            @if ($errors->has('music_year'))
                                                <span class="help-block">
                                                    <strong>{{ str_replace('music year', 'năm phát hành', $errors->first('music_year')) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group col-3{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                                            <label for="cat_id">Chuyên mục</label>
                                            <select {{isset($album) ? 'disabled' : ''}} class="form-control" name="cat_id" id="cat_id" onchange="cat_level_reload(this.value);">
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
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group col-3{{ $errors->has('cat_level') ? ' has-error' : '' }}">
                                            <label for="cat_level" style="opacity: 0;">csn</label>
                                            <select {{isset($album) ? 'disabled' : ''}} class="form-control" name="cat_level" id="cat_level" onchange="cat_sublevel_reload(this.value);">
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
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group col-3{{ $errors->has('cat_sublevel') ? ' has-error' : '' }}">
                                            <label for="cat_sublevel" style="opacity: 0;">csn</label>
                                            <select {{isset($album) ? 'disabled' : ''}} class="form-control" name="cat_sublevel" id="cat_sublevel">
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
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group col-3">
                                            <label for="cat_custom" style="opacity: 0;">csn</label>
                                            <select {{isset($album) ? 'disabled' : ''}} class="form-control" name="cat_custom" id="cat_custom">
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
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group col-12">
                                            <label for="music_note">Ghi chú</label>
                                            <textarea {{isset($album) ? 'disabled' : ''}} class="form-control" name="music_note" id="music_note" rows="3">{{ old('music_note')}}</textarea>
                                        </div>
                                        <div {{isset($album) ? 'hidden' : ''}} class="form-group col-12{{ $errors->has('music_source_url') ? ' has-error' : '' }}">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <label for="music_source_url" class="m-0">Full link nguồn download</label>
                                                <small>Yêu cầu bắt buộc khi upload nhạc lossless</small>
                                            </div>
                                            <input {{isset($album) ? 'disabled' : ''}} type="text" class="form-control" value="{{ old('music_source_url')}}" name="music_source_url" id="music_source_url" placeholder="">
                                            @if ($errors->has('music_source_url'))
                                                <span class="help-block">
                                                    <strong>{{ str_replace('music source url', 'nguồn download', $errors->first('music_source_url')) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="drop_files" class="drop_files" value="{{old('drop_files')}}">
                                        <input type="hidden" name="drop_html" class="drop_html" value="{{old('drop_html')}}">
                                        <input type="hidden" name="music_filesize" class="music_filesize" value="{{old('music_filesize')}}">
                                        <input type="hidden" name="action_upload" class="action_upload" value="{{ isset($album) ? 'edit' : 'create' }}">
                                        <div class="text-center col-12">
                                            <button type="submit" class="btn btn-danger btn-upload">{{isset($album) ? 'Cập nhật' : 'Tải lên'}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
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
    <script type="text/javascript" src="/js/dropzone.js"></script>
    <script type="text/javascript" src="/js/croppie.js"></script>
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
        // Dropzone.prototype.defaultOptions.acceptedFiles = '';
        Dropzone.prototype.defaultOptions.headers = {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        };
        Dropzone.prototype.defaultOptions.callResponseSuccess = function(result) {
            if(result.status === true) {
                var oldFileDrops = $('.drop_files').val();
                var oldFileSize = $('.music_filesize').val();
                $('.drop_files').val(oldFileDrops ? oldFileDrops + ';' + result.file_name : result.file_name);
                $('.music_filesize').val(oldFileSize ? oldFileSize + ';' + result.file_size : result.file_size);
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
            $("#music_artist_id").tokenInput("/dang-tai/ca-si/tim-kiem", {
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

        $(document).ready(function(){
            $('#choose_album_cover').on('change', function(){
                $('#image_demo').html('');
                $('.modal-dialog').css("max-width", "500px")
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
                    $('#uploadimageModal').modal('hide');
                    $('#album_cover').val(response);
                    $('#album_cover_uploaded').removeAttr('hidden');
                    $('.icon_camera_cover').remove();
                    $('.cover_upload').css({"padding-top": "0px", "font-size": "200%"})
                    $('#album_cover_uploaded').attr("src", response);
                })
            });
        });
    </script>
@endsection
