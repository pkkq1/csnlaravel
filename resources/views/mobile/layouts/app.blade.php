<!DOCTYPE html>
<html>
<?php
use App\Library\Helpers;
global $memberVip;
$memberVip = Helpers::checkMemberVip();
?>
@include('mobile.layouts.header')
<body>
<!--  Yo verify campaign 16/8/2019 -->
<script type="text/javascript" async defer src="//ss.yomedia.vn/js/1/230/ads.js"></script>
<!--  GroupM verify campaign 13/8/2020 -->
<img src="//vn-gmtdmp.mookie1.com/t/v2/learn?tagid=V2_35893&src.rand=[timestamp]" style="display:none;"/>

@yield('content')
@include('mobile.layouts.footer')
@yield('contentJS')

@hasSection('in_home')
@endif

</body>
<?php
//global $timeStart;
//echo '<center>'.number_format((microtime(true) - $timeStart), 2).'</center>';
?>
</html>
