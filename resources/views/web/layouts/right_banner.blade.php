<?php
    $catalog = config('constants.catalog');
?>
    <div id="right1_banner">
        <!-- BlueSeed - asynchronous code for placement 2043 Chiasenhac Right Banner -->
        <ins class="hadar-placement" data-hdpm="2043" ></ins><script id="jshd1pm_2043" src="https://static.blueseed.tv/ajs/display.js"></script>
    </div>

    @if(isset($short))
        @foreach($catalog as $key => $val)
            <a class="catalog1 weekend" style="background-image: url('/imgs/chude/{{$val['img_web']}}')" href="/chu-de/{{$key}}.html" title="Romance">
                <span>{{$val['label']}}</span>
            </a>
            @if($key == 2)
                @break;
            @endif
        @endforeach
    @else
        @foreach($catalog as $key => $val)
            <a class="catalog1 weekend" style="background-image: url('/imgs/chude/{{$val['img_web']}}')" href="/chu-de/{{$key}}.html" title="Romance">
                <span>{{$val['label']}}</span>
            </a>
        @endforeach
    @endif
