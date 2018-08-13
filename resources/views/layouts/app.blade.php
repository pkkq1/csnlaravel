<!DOCTYPE html>
<html>
@include('layouts.header')
<body>
<div id="fb-root"></div>
@include('layouts.wapper')
@hasSection('hidden_wapper')

@else
    <div class="ads_box">
        <div class="container text-center">
            {{--<iframe id="ifH_Mashead872-shrink" frameborder="0" scrolling="no"--}}
                    {{--src="https://stc-nas.nixcdn.com/v4/ads/2018/04/05/1522923233762-8c5TESnZFqJ8Vc.html?click_url=https%3A%2F%2Fapinas.nct.vn%2Fv4%2Fclick%3Fd%3D7b2274696d65223a2231353233323436303830333533222c226c6b223a22624e6a6343454c64567153436a50684a656177725151634b516d6147704f2b38222c22746172676574223a22687474707325334125324625324662732e73657276696e672d7379732e636f6d25324673657276696e6725324661645365727665722e6273253346636e2533447472642532366d63253344636c69636b253236706c692533443234363539343631253236506c754944253344302532366f726425334425354274696d657374616d70253544227d&amp;name_obj=&amp;domain=https://www.nhaccuatui.com/"--}}
                    {{--style="width: 970px; height: 250px; margin: 0px; padding: 0px; border-width: 0px; z-index: 99999;"></iframe>--}}
            <img id="ifH_Mashead872-shrink" frameborder="0" scrolling="no"
                    src="/imgs/img_nav.png"
                    style="width: 970px; height: 250px; margin: 0px; padding: 0px; border-width: 0px; z-index: 99999;" />
        </div>
    </div>
@endif
@yield('content')

@include('layouts.footer')
@yield('contentJS')
</body>
</html>
