<header id="header" class="">
    <div class="top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <figure class="m-0">
                    <a href="/" title="" class="logo">Chiasenhac.com</a>
                    <figcaption class="d-none">explanatory caption</figcaption>
                </figure>
                <form>
                    <div class="form-group m-0">
                        <i class="material-icons">search</i>
                        <input type="text" class="form-control" value="{{(isset($search) ? $search : '')}}"  class="biginput" id="search_autocomplete" placeholder="nhập bài hát, video, tên nghệ sỹ bạn cần tìm...">
                        <div class="search_layout card suggest">
                        </div>
                    </div>
                </form>
                <ul class="list-inline m-0">
                    @if(Auth::check())
                        <li class="list-inline-item"><a href="/user/{{Auth::user()->id}}" title="{{Auth::user()->name}}">{{Auth::user()->name}}</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item"><a href="/logout" title="Đăng ký">Thoát</a></li>
                    @else
                        <li class="list-inline-item"><a href="/login" title="Đăng nhập">Đăng nhập</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item"><a href="/register" title="Đăng ký">Đăng ký</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <nav class="bottom navbar navbar-expand-lg navbar-light bg-light ghw-bottom-header">
        <div class="collapse navbar-collapse container" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Xếp hạng</a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a href="#" title="">Nhạc pop, rock...</a></li>
                        <li><a href="#" title="">Nhạc rap, hiphop</a></li>
                        <li><a href="#" title="">Nhạc dance, remix</a></li>
                        <li><a href="#" title="">Nhạc truyền thống</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Video Clip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Playback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Việt Nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">US-UK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nhạc Hoa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nhạc Hàn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nhạc Nhật</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nước khác</a>
                </li>
                <li class="nav-item this_more">
                    <a class="nav-link iconmenu" href="#"><i class="material-icons">more_horiz</i></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="/dang-tai" style="text-decoration: none;" title=""><button id="btn_cloud_up" class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light" type="button"><i class="material-icons">cloud_upload</i> Upload</button></a>
            </form>
        </div>
        <div id="menu-expand" class="menu-expand-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">giáng sinh</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Playlist Video GS</a></li>
                                <li><a href="#" title="">Playlist GS Việt Nam</a></li>
                                <li><a href="#" title="">Playlist GS US-UK</a></li>
                                <li><a href="#" title="">Playlist GS Hàn</a></li>
                                <li><a href="#" title="">Playlist Playback GS</a></li>
                                <li><a href="#" title="">Playlist GS Tổng hợp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">xếp hạng</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">BXH hôm nay</a></li>
                                <li><a href="#" title="">BXH tuần này</a></li>
                                <li><a href="#" title="">BXH tháng 12</a></li>
                                <li><a href="#" title="">BXH năm 2015</a></li>
                                <li><a href="#" title="">BXH năm 2016</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">video clip</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Video Việt Nam</a></li>
                                <li><a href="#" title="">Video US-UK</a></li>
                                <li><a href="#" title="">Video Hoa</a></li>
                                <li><a href="#" title="">Video Hàn</a></li>
                                <li><a href="#" title="">Video Nhật</a></li>
                                <li><a href="#" title="">Video Pháp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">playback</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Playback Việt Nam</a></li>
                                <li><a href="#" title="">Playback US-UK</a></li>
                                <li><a href="#" title="">Playback Hoa</a></li>
                                <li><a href="#" title="">Playback Hàn</a></li>
                                <li><a href="#" title="">Playback Nhật</a></li>
                                <li><a href="#" title="">Playback Pháp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">Việt Nam</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Nhạc pop, rock...</a></li>
                                <li><a href="#" title="">Nhạc rap, hiphop</a></li>
                                <li><a href="#" title="">Nhạc dance, remix</a></li>
                                <li><a href="#" title="">Nhạc truyền thống</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">US-UK</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Nhạc pop, rock...</a></li>
                                <li><a href="#" title="">Nhạc rap, hiphop</a></li>
                                <li><a href="#" title="">Nhạc dance, remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">nhạc hoa</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Nhạc pop, rock...</a></li>
                                <li><a href="#" title="">Nhạc rap, hiphop</a></li>
                                <li><a href="#" title="">Nhạc dance, remix</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">nhạc hàn</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Nhạc pop, rock...</a></li>
                                <li><a href="#" title="">Nhạc rap, hiphop</a></li>
                                <li><a href="#" title="">Nhạc dance, remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_item">
                            <h3 class="title">nước khác</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Nhạc pop, rock...</a></li>
                                <li><a href="#" title="">Nhạc rap, hiphop</a></li>
                                <li><a href="#" title="">Nhạc dance, remix</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </nav>
</header>
