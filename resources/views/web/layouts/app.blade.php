<?php
use App\Library\Helpers;
global $allpage_banner;
global $memberVip;
if($memberVip == null)
    $memberVip = Helpers::checkMemberVip();
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
@endif


    @hasSection('in_home')
    @else
    @endif

@hasSection('in_edit')
@else
    @hasSection('in_player')
        <div class="ads_box" id="pc_masthead">
            <div class="container text-center">
                <div id="bsmasthead-wrapper">
                    <!-- BlueSeed - asynchronous code for placement 1643 Chiasenhac Masthead Player Desktop -->
                    <ins class="hadar-placement" data-hdpm="1643"></ins>
                    <script id="jshd1pm_1643" src="https://static.blueseed.tv/ajs/display.js"></script>
                </div>
            </div>
        </div>

        @hasSection('in_player_lava')
            <div class="ads_box" id="pc_masthead_bg">
                <div class="container text-center">
                    <div id="bsmasthead-wrapper">
                        <!-- Ad Tag-980x250 for Publisher chiasenhac - LAVA DIGITAL-->
                        <script src='https://pub.lavanetwork.net/sites/chiasenhac/chiasenhac_masthead.js'></script>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div class="ads_box" id="pc_masthead">
            <div class="container text-center">
                <div id="bsmasthead-wrapper">
                    <!-- BlueSeed - asynchronous code for placement 1365 Chiasenhac Masthead Desktop -->
                    <ins class="hadar-placement" data-hdpm="1365"></ins>
                    <script id="jshd1pm_1365" src="https://static.blueseed.tv/ajs/display.js"></script>
                </div>
            </div>
        </div>
    @endif
@endif

@yield('content')

@include('web.layouts.footer')
</section>
@yield('contentJS')

@hasSection('in_edit')
@else
    @if(!$memberVip)
    @hasSection('in_player')
        <!-- BlueSeed - asynchronous code for placement 1640 Chiasenhac Balloon Music Player Desktop -->
        <script id="jshd1pm_1640" src="https://d2.blueseed.tv/ads-sync.js?placement=1640"></script>
    @else
        <!-- BlueSeed - asynchronous code for placement 1468 Chiasenhac Balloon Home Page Desktop -->
        <script id="jshd1pm_1468" src="https://d2.blueseed.tv/ads-sync.js?placement=1468"></script>
    @endif

        <?php
        $cookie_name = "csn_popup_pc";
        $session_ads_popup = isset($_COOKIE[$cookie_name]) ? intval(unserialize(stripslashes($_COOKIE[$cookie_name]))) : 0;
        if ($session_ads_popup < 1) {
            @setcookie($cookie_name, serialize($session_ads_popup + 1), time() + 30, '/', '.chiasenhac.vn', 0);

            // Blueseed - Mobile In flow - Popup // backup code Ambient
            echo '<!-- BlueSeed - asynchronous code for placement 1883 Chiasenhac InFlow Desktop -->
    <script id="jshd1pm_1883" src="https://d2.blueseed.tv/ads-sync.js?placement=1883"></script>';
        }
        ?>
    @endif
@endif

</body>
</html>
