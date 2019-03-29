<!DOCTYPE html>
<html>
@include('mobile.layouts.header')
<body>
@yield('content')
@include('mobile.layouts.footer')
@yield('contentJS')

@hasSection('in_home')
    <!-- Flight Tag: Chiasenhac - PS/TG/VN/OppoF11/Campaign -->
    <script type="text/javascript">
        innity_country = "VN";
        innity_flight = "99996";
    </script>
    <script type="text/javascript" src="https://cdn.innity.net/flight.js"></script>
@endif

</body>
<?php
//global $timeStart;
//echo '<center>'.number_format((microtime(true) - $timeStart), 2).'</center>';
?>
</html>
