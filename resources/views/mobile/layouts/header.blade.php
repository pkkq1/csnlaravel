<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ $titleMeta or Config::get('constants.app.title') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/mobile/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/mobile/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mobile/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/mobile/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/mobile/assets/css/swiper.min.css">
    <link rel="stylesheet" href="/mobile/assets/css/style.css">
    <link rel="stylesheet" href="/mobile/assets/css/responsive.css">
    <link rel="stylesheet" href="/mobile/assets/css/custom.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('contentCSS')
    <script src="/mobile/assets/js/jquery-3.3.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        var csrfToken = "{{csrf_token()}}";
        var loaded = false;
        var timeOutLoading = 0;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
        $( document ).ajaxStart(function() {
            timeOutLoading = setTimeout(function(){
                waitingDialog.show();
            }, 1200);
        });
        $( document ).ajaxStop(function() {
            clearTimeout(timeOutLoading);
            waitingDialog.hide();
            loaded = false;
        });
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '<?php echo env('FACEBOOK_APP_ID') ?>',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v3.1'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>