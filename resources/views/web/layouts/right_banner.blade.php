<?php
    $catalog = config('constants.catalog');
?>
    <div id="right1_banner"> </div>

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
