<!DOCTYPE html>
<html>
@include('layouts.header')
<body>
<div id="fb-root"></div>
<section class="wrapper_content">
@include('layouts.wapper')
@hasSection('hidden_wapper')

@else
    <div class="ads_box" id="pc_masthead" onchange="pc_masthead_change();" style="padding: 10px">
        <div class="container text-center">
               <div id="bsmasthead-wrapper"></div>
        </div>
    </div>
@endif
@yield('content')

@include('layouts.footer')
</section>
@yield('contentJS')

<!-- PC masthead -->
<script>
    function pc_masthead_change() {
        $('#pc_masthead').css("padding", "20px");
        alert("masthead changed");
    }
    $( document ).ready(function() {
        $('#pc_masthead').on('change', function () {
            console.log(1);
        })
        console.log($('#pc_masthead').height());
    });
    // $('pc_masthead').contentchanged() {
    //     alert('changed')
    // }
</script>
<script src="//d3.hadarone.com/ads-sync.js?placement=1365"></script>

</body>
<?php
    global $timeStart;
    echo '<center>'.(microtime(true) - $timeStart).'</center>';
?>
</html>
