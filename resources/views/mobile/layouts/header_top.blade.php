<?php
use Jenssegers\Agent\Agent;
$Agent = new Agent();
?>
<div class="header_top">
    <nav class="navbar navbar-expand-lg navbar-dark flex-row-reverse">
        <a href="#" class="navbar-brand text-white button_search"><i aria-hidden="true" class="fa fa-search"></i></a>
        @if($Agent->isAndroidOS())
        <a href="http://chiasenhac.vn/app/csn.html" target="_blank" style="margin-left: 70px;"><img src="/imgs/csn_app.png"></a>
        @endif
        <a href="/" class="navbar-brand logo"><img src="/images/logo-header.png" alt="logo"></a>
        <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    </nav>
</div>

@if ( 0 )
<main class="main" style="position: relative;">
<div style="position: relative; text-align: center;">
    <!-- Blueseed- Asynchronous Code for Ad Placement 1813 Chiasenhac Masthead Mobile Deleted -->
    <ins class="hadar-placement" data-hdpm="1813"></ins>
    <script id="jshd1pm_1813" src="https://static.blueseed.tv/ajs/display.js"></script>
    <img src="http://data.chiasenhac.com/banner/banner_beta_300x150.jpg" height="150px">
</div>
</main>
@endif
