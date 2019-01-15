<?php
global $allpage_banner;
?>
<!DOCTYPE html>
<html>
@include('web.layouts.header')
<body>
@if( isset($allpage_banner) && $allpage_banner == true )
<a target="_blank" href="https://clicktrackingv2.userreport.com/?BLV5a6cbb86;https://yame.vn/shop/ao-thun?s=2&utm_source=background_CSN&utm_medium=CPD">
    <div style="text-align: center; height: 150px; position: relative; background-color: #e8ce79; background-repeat: no-repeat; background-position: center; z-index: -1;">
        <div class="atag" style="position: absolute; top: 0px; left: 0; right: 0; z-index: 0;">
            <img src="https://data.chiasenhac.com/banner/yame2/Top_2.jpg" border="0" width="1000" height="150" />
        </div>
        <img src="https://visitanalytics.userreport.com/hit.gif?t=BLV5a6cbb86">
    </div>
</a>
@endif

<div id="fb-root"></div>
<section class="wrapper_content">
@include('web.layouts.wapper')
@hasSection('hidden_wapper')

@else
    <div class="ads_box" id="pc_masthead" onchange="pc_masthead_change();">
        <div class="container text-center">
               <div id="bsmasthead-wrapper"></div>
        </div>
    </div>
@endif
@yield('content')

@include('web.layouts.footer')
</section>
@yield('contentJS')

<!-- PC masthead -->

</body>
</html>
