<?php
    $catalog = config('constants.catalog');
?>

    <div id="right1_banner">
        @if ($category->cat_id == 6)
            <a href="https://www.facebook.com/groups/csn.kpop.fan/" target="_blank"><img src="/images/banner/kpop-fbgroup-300x170.jpg" width="300" height="170"></a>
        @else
            <!-- BlueSeed - asynchronous code for placement 2043 Chiasenhac Right Banner -->
            <ins class="hadar-placement" data-hdpm="2043" ></ins><script id="jshd1pm_2043" src="https://static.blueseed.tv/ajs/display.js"></script>
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
