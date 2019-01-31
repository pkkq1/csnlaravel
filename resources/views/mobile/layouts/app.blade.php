<!DOCTYPE html>
<html>
@include('mobile.layouts.header')
<body>
@yield('content')
@include('mobile.layouts.footer')
@yield('contentJS')

<!-- BlueSeed - asynchronous code for placement 1849 CHIASENHAC.VN - mobile native button -->
<script id="jshd1pm_1849" src="https://d2.blueseed.tv/ads-sync.js?placement=1849"></script>

</body>
<?php
//global $timeStart;
//echo '<center>'.number_format((microtime(true) - $timeStart), 2).'</center>';
?>
</html>
