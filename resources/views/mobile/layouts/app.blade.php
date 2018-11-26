<!DOCTYPE html>
<html>
@include('mobile.layouts.header')
<body>
@yield('content')
@include('mobile.layouts.footer')
@yield('contentJS')
</body>
<?php
global $timeStart;
echo '<center>'.(microtime(true) - $timeStart).'</center>';
?>
</html>
