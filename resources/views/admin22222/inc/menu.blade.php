<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- ========================================================= -->
      <!-- ========== Top menu right items (ordered left) ========== -->
      <!-- ========================================================= -->

      <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->
      @if (config('backpack.base.setup_auth_routes'))
        @if (csn_auth()->guest())
            <li><a href="/login">đăng nhập</a></li>
            <li><a href="/register">đăng ký</a></li>
        @else
            <li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i> thoát</a></li>
        @endif
       @endif
       <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
