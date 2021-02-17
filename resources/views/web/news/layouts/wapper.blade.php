<header class="c-header">
    <div class="c-header__top">
        <div class="o-container">
            <div class="u-flex--wrap u-flex__y--center u-flex__x--between">
                <div class="c-btn__menu--mobile only-sp"><span></span></div>
                <div class="c-logo">
                    <h1> <a href="/"><img src="{{env('IMG_DATA_URL')}}images/logo-h.png" alt=""></a></h1>
                </div>
                <div rel="show--menu" class="c-list__menu--main">
                    <nav>
                        <ul class="u-flex--wrap u-flex__x--end">
                            <li><a href="{{URL::to('/')}}" title="Trang chủ"><i class="c-icon--home"></i><span>TRANG CHỦ</span></a></li>
                            <li><a href="{{URL::to('/')}}/tin-tuc/tin-noi-bat.html" title="Tin nổi bật"><span>TIN NỔI BẬT</span></a></li>
                            <li><a href="{{URL::to('/')}}/tin-tuc/tin-moi-nhat.html" title="Tin mới nhất"><span>TIN MỚI NHẤT</span></a></li>
                            @include('cache.news_category')
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>