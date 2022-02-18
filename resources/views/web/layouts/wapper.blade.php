<?php
use App\Library\Helpers;
?>
<header id="header" class="">
    <div class="top">
        <div class="container" style="position: relative;">
            <div class="d-flex align-items-center justify-content-between">
                <figure class="m-0">
                    <a href="{{env('APP_URL')}}/" title="" class="logo">
                        <img src="{{env('IMG_DATA_URL')}}imgs/logo-web-official.png" style="padding-left: 15px;" alt="Logo Chiasenhac" />
                    </a>
                    <figcaption class="d-none">explanatory caption</figcaption>
                </figure>
                <form action="<?php echo env('SEARCH_TEMPLATE_URL'); ?>/tim-kiem">
                    <!-- a class="old_redirect_web" href="http://old.chiasenhac.vn/" target="_blank"><img src="{{env('IMG_DATA_URL')}}imgs/csn_bancu.png" alt="Logo Chiasenhac old" style="float: left; margin-right: 10px;"></a -->
                        @if(0 && Auth::check() && !$memberVip)
                            <a href="/chia-se-nhac-vip.html"><img src="/imgs/csn_muavip.png" style="float: left; margin-right: 10px;" height="32px"></a>
                        @endif
                    <div class="form-group m-0" style="float:left">
                        <i class="material-icons">search</i>
                        <input type="search" name="q" class="form-control" value="{{$_GET['q'] ?? ''}}" autocomplete="on" class="biginput" id="search_autocomplete" onkeydown="search_keyDown(event)" onkeyup="search_keyUp()" placeholder="nhập bài hát, video, tên nghệ sỹ bạn cần tìm">
                        <div class="search_layout_top card suggest" style="z-index: 990000;">
                            <div class="card-body">
                                @include('cache.top_search')
                                <?php
                                    $searchRecent = '';
                                    if(Auth::check()) {
                                        $searchRecent = Auth::user()->user_music_search_recent;
                                    }else{
                                        if($_COOKIE['remember_search'] ?? '') {
                                            $searchRecent = $_COOKIE['remember_search'];
                                        }
                                    }
                                    $searchRecent = unserialize($searchRecent);
                                ?>
                                @if($searchRecent)
                                <hr>
                                <p class="card-title">Lịch sử tìm kiếm của bạn</p>
                                <ul class="list-unstyled list_music list_remember_search">
                                    @foreach(array_reverse($searchRecent) as $key => $item)
                                    <li class="media align-items-stretch li_item_result li_item_result_{{$key}}">
                                        <a class="search-line parent-line" href="/tim-kiem?q={{urlencode ($item) }}">
                                            <div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
                                                <div><p class="media-title mt-0 mb-0 span_h5" title="">{{$item}}</p>
                                                </div>
                                                <span onclick="delete_remember({{$key}}, '{{htmlspecialchars($item, ENT_QUOTES)}}')" class="ic_delete_remember"><img class="img_delete_remember" src="/images/ic_delete_remember_search.png"></span>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div class="search_layout card suggest" style="z-index: 990001;">
                        </div>
                    </div>
                    <div class="box-history-music">
                        <a class="list-inline-item" style="position: relative; float:left; margin-left: 25px; margin-right: -49px;"><i onclick="showHistoryMusic()" class="material-icons history-music" style="position: inherit;top: 5px; cursor: pointer;">history</i></a>
                        <div class="box_history_music box_show_add_playlist card" style="display: none" id="answer-history-music">
                            <div class="card-body d-flex flex-column">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <p class="card-title title_history_music">Bài hát vừa nghe</p>
                                <div class="box_show_playlist_popup box_show_history_music mb-2" style="height: 230px;">
                                    <div class="list-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(Auth::check())
                        <?php
                        $notify = Auth::user()->notifyCount();
                        ?>
                        @if($notify > 0)
                        @endif
                    @endif
                </form>
                <ul class="list-inline m-0">
                    @if(Auth::check())
                        <?php
                            $notify = Auth::user()->notifyCount();
                        ?>
                        @if($notify > 0)
                        <div class="box-notify-music" onclick="showNotify()">
                            <a href="javascript:void(0)" style="float: left">
                                <i class="fa fa-bell-o" style="font-size: 20px; float: left; color: white"></i>
                            </a>
                            <span class="badge badge-danger number-dropdown">{{($notify > 10 ? '9+' : $notify)}}</span>
                            <ul class="dropdown-menu-left pull-right box_notify" style="display: none">
                                <li role="presentation">
                                    <label class="dropdown-menu-header-csn">Thông báo</label>
                                </li>
                                <div class="scroll_notify">
                                    <ul class="timeline timeline-icons timeline-sm">
                                        <?php
                                        $notifyData = Auth::user()->notifyList();
                                        ?>
                                        @foreach($notifyData as $item)
                                            <?php
                                            $fa_font = 'fa-flag';
                                            if($item->type == 'reply_comment' || $item->type == 'reply_comment'){
                                                $fa_font = 'fa-comment';
                                            }elseif($item['type'] == 'message'){
                                                $fa_font = 'fa-comments-o';
                                            }elseif($item->type == 'upload_success'){
                                                $fa_font = 'fa-check';
                                            }
                                            ?>
                                            <a href="{{$item->link_url}}">
                                                <li>
                                                    <p>{{$item->text}}<span class="timeline-icon"><i class="fa {{$fa_font}}" style="color:red"></i></span><span class="timeline-date"><?php echo Helpers::timeElapsedString(strtotime($item->created_at)); ?></span></p>
                                                </li>
                                            </a>
                                        @endforeach
                                    </ul>
                                </div>
                            </ul>
                            <script>
                                $("#dropdownNotify").on("click change", function (e) {
                                    // document.getElementById("dropdown-notify-content").style.left = '-280px';
                                });
                            </script>
                        </div>
                        @else
                        <div class="box-notify-music">
                            <a href="/user/{{Auth::user()->id}}?tab=notify" style="float: left; margin-right: 5px;">
                                <i class="fa fa-bell-o" style="font-size: 20px; float: left; color: white"></i>
                            </a>
                        </div>
                        @endif
                        <li class="list-inline-item"><a href="{{env('APP_URL')}}/user/{{Auth::user()->id}}" title="{{Auth::user()->name}}">
                                <span class="wapper-name">{{Auth::user()->name}}</span></a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item"><a href="{{env('APP_URL')}}/logout?back={{url()->current()}}" title="Đăng ký">Thoát</a></li>
                    @else
                        <li class="list-inline-item"><a href="javascript:void(0)" onclick="switchAuth('myModal_login')" title="Đăng nhập">Đăng nhập</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item"><a href="javascript:void(0)" onclick="switchAuth('myModal_register')" title="Đăng ký">Đăng ký</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <nav class="bottom navbar navbar-expand-lg navbar-light bg-light ghw-bottom-header">
        <div class="collapse navbar-collapse container" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/nhac-hot.html">Xếp Hạng</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/nhac-hot.html" title="">BXH Hôm Nay</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/tuan.html" title="BXH tuần này">BXH Tuần Này</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/thang-{{CURRENT_MONTH}}-{{CURRENT_YEAR}}.html" title="BXH tháng 9">BXH Tháng {{CURRENT_MONTH}}</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/nam-2020.html" title="BXH năm 2020">BXH Năm 2020</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/nam-2021.html" title="BXH năm 2021">BXH Năm 2021</a></li>
                        <li><a href="{{env('APP_URL')}}/bang-xep-hang/nam-2022.html" title="BXH năm 2022">BXH Năm 2022</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/hd/video.html">Video Clip</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/hd/video/v-video.html" title="Video Việt Nam">Video Việt Nam</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/us-video.html" title="Video US-UK">Video US-UK</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/c-video.html" title="Video Hoa">Video Hoa</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/k-video.html" title="Video Hàn">Video Hàn</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/l-video.html" title="Video Live">Video Live</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/h-video.html" title="Video Hài">Video Hài</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/j-video.html" title="Video Nhật">Video Nhật</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/f-video.html" title="Video Pháp">Video Pháp</a></li>
                        <li><a href="{{env('APP_URL')}}/hd/video/o-video.html" title="Video Nước Khác">Video Nước Khác</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/mp3/vietnam.html">Việt Nam</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-truyen-thong.html" title="Nhạc truyền thống">Nhạc Truyền Thống</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/mp3/us-uk.html">US-UK</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/mp3/chinese.html">Nhạc Hoa</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/chinese/c-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/chinese/c-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/chinese/c-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/mp3/korea.html">Nhạc Hàn</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/korea/k-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/korea/k-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/korea/k-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/mp3/japan.html">Nhạc Nhật</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/japan/j-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/japan/j-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/japan/j-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/mp3/france.html">Nhạc Pháp</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/france/f-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/france/f-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/france/f-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{env('APP_URL')}}/mp3/other.html">Nước khác</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="{{env('APP_URL')}}/mp3/other/o-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/other/o-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                        <li><a href="{{env('APP_URL')}}/mp3/other/o-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                    </ul>
                </li>
                <li class="nav-item this_more">
                    <a class="nav-link iconmenu" href="javascript:void(0)"><i class="material-icons">more_horiz</i></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="javascript:void(0)" onclick="redirectUpload('{{env('APP_URL')}}/dang-tai')" style="text-decoration: none;" title=""><button id="btn_cloud_up" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light" type="button"><i class="material-icons">cloud_upload</i> Upload</button></a>
            </form>
        </div>
        <div id="menu-expand" class="menu-expand-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="box_item">
                            <p class="title">Xếp Hạng</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/nhac-hot.html" title="">BXH Hôm Nay</a></li>
                                <li><a href="{{env('APP_URL')}}/bang-xep-hang/tuan.html" title="BXH tuần này">BXH Tuần Này</a></li>
                                <li><a href="{{env('APP_URL')}}/bang-xep-hang/thang-09-2018.html" title="BXH tháng 9">BXH Tháng 9</a></li>
                                <li><a href="{{env('APP_URL')}}/bang-xep-hang/nam-2017.html" title="BXH năm 2017">BXH Năm 2017</a></li>
                                <li><a href="{{env('APP_URL')}}/bang-xep-hang/nam-2018.html" title="BXH năm 2018">BXH Năm 2018</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">video Clip</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/hd/video/v-video.html" title="Video Việt Nam">Video Việt Nam</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/us-video.html" title="Video US-UK">Video US-UK</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/c-video.html" title="Video Hoa">Video Hoa</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/k-video.html" title="Video Hàn">Video Hàn</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/l-video.html" title="Video Live">Video Live</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/h-video.html" title="Video Hài">Video Hài</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/j-video.html" title="Video Nhật">Video Nhật</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/f-video.html" title="Video Pháp">Video Pháp</a></li>
                                <li><a href="{{env('APP_URL')}}/hd/video/o-video.html" title="Video Nước Khác">Video Nước Khác</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">Việt Nam</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/vietnam/v-truyen-thong.html" title="Nhạc Truyền Thống">Nhạc Truyền Thống</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">US-UK</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/us-uk/us-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">Nhạc Hoa</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/chinese/c-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/chinese/c-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/chinese/c-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">Nhạc Hàn</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/korea/k-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/korea/k-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/korea/k-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="box_item">
                            <p class="title">Nhạc Nhật</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/japan/j-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/japan/j-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/japan/j-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">Nhạc Pháp</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/france/f-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/france/f-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/france/f-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">Nước Khác</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/other/o-pop.html" title="Nhạc Pop, Rock">Nhạc Pop, Rock</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/other/o-rap-hiphop.html" title="Nhạc Rap, Hiphop">Nhạc Rap, Hiphop</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/other/o-dance-remix.html" title="Nhạc Dance, Remix">Nhạc Dance, Remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <p class="title">playback</p>
                            <ul class="list-unstyled">
                                <li><a href="{{env('APP_URL')}}/mp3/beat-playback/v-instrumental.html" title="Playback Việt Nam">Playback Việt Nam</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/beat-playback/us-instrumental.html" title="Playback US-UK">Playback US-UK</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/beat-playback/c-instrumental.html" title="Playback Hoa">Playback Hoa</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/beat-playback/k-instrumental.html" title="Playback Hàn">Playback Hàn</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/beat-playback/j-instrumental.html" title="Playback Nhật">Playback Nhật</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/beat-playback/f-instrumental.html" title="Playback Pháp">Playback Pháp</a></li>
                                <li><a href="{{env('APP_URL')}}/mp3/beat-playback/o-instrumental.html" title="Playback Nước Khác">Playback Nước Khác</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </nav>
</header>
