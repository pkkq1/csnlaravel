<?php
    $catalog = config('constants.catalog');
    use App\Library\Helpers;
    global $memberVip;
    if($memberVip == null)
        $memberVip = Helpers::checkMemberVip();
?>

    <div id="right1_banner">
        @if (isset($category->cat_id) && $category->cat_id == 6)
            <a href="https://www.facebook.com/groups/csn.kpop.fan/" target="_blank"><img src="/images/banner/kpop-fbgroup-300x170.jpg" width="300" height="170"></a>
        @else
            <!-- BlueSeed - asynchronous code for placement 2043 Chiasenhac Right Banner -->
            @if(!$memberVip)
                    @hasSection('in_player')
                        <script src="//d2.blueseed.tv/ads-sync.js?placement=2043"></script>
                    @else
                        <script src="//d2.blueseed.tv/ads-sync.js?placement=2044"></script>
                    @endif
            @endif
        @endif
    </div>

    <br>

    @if(isset($short))
        <?php $id = 1; ?>
        @foreach($catalog as $key => $val)
            <a class="catalog1 weekend" style="background-image: url('/imgs/chude/{{$val['img_web']}}')" href="/chu-de/{{$key}}.html" title="{{$val['label']}}">
                <span>{{$val['label']}}</span>
            </a>
            @if(++$id > 2)
                @break;
            @endif
        @endforeach
    @else
        @foreach($catalog as $key => $val)
            <a class="catalog1 weekend" style="background-image: url('/imgs/chude/{{$val['img_web']}}')" href="/chu-de/{{$key}}.html" title="{{$val['label']}}">
                <span>{{$val['label']}}</span>
            </a>
        @endforeach
    @endif
