<!DOCTYPE html>
<html>
@include('mobile.layouts.header')
<body>
<!--  Yo verify campaign 16/8/2019 -->
<script type="text/javascript" async defer src="//ss.yomedia.vn/js/1/230/ads.js"></script>

@yield('content')
@include('mobile.layouts.footer')
@yield('contentJS')

@hasSection('in_home')
@endif

<script type="text/javascript">
    window._urq = window._urq || [];
    _urq.push(['initSite', '64a158d0-87a5-4e3d-a4dd-5518adf94d93']);
    (function() {
        var ur = document.createElement('script'); ur.type = 'text/javascript'; ur.async = true;
        ur.src = ('https:' == document.location.protocol ? 'https://cdn.userreport.com/userreport.js' : 'http://cdn.userreport.com/userreport.js');
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ur, s);
    })();
</script>

</body>
<?php
//global $timeStart;
//echo '<center>'.number_format((microtime(true) - $timeStart), 2).'</center>';
?>
</html>
