<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $titleMeta or Config::get('constants.app.title') }}</title>
    <link rel="icon" href="/imgs/favicon.ico" type="image/x-icon" />
    <!-- CSS -->
    {{--<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    {{--<link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick-theme.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/node_modules/swiper/dist/css/swiper.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/node_modules/show-more/showmore-default.css">--}}
    <link rel="stylesheet" type="text/css" href="/assets/emoji-picker-master/lib/css/emoji.css">
    {{--<link rel="stylesheet" type="text/css" href="/assets/jQuery-File-Upload-9.21.0/css/jquery.fileupload.css">--}}
    {{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css">--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
    <link rel="stylesheet" href="/css/lobibox.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.css">
    @yield('contentCSS')
    <!-- JS -->
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/vendor/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    {{--<script type="text/javascript" src="/node_modules/popper.js/dist/umd/popper.js"></script>--}}
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    {{--<script type="text/javascript" src="/node_modules/slick-carousel/slick/slick.js"></script>--}}
    {{--<script type="text/javascript" src="/node_modules/swiper/dist/js/swiper.min.js"></script>--}}
    {{--<script type="text/javascript" src="/node_modules/show-more/jquery.show-more.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/emoji-picker-master/lib/js/config.js"></script>--}}
    <script type="text/javascript" src="/assets/emoji-picker-master/lib/js/util.js"></script>
    <script type="text/javascript" src="/assets/emoji-picker-master/lib/js/jquery.emojiarea.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/functions.js"></script>
    <script src="/js/waves.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    {{--<script type="text/javascript" src="/js/jquery.autocomplete.min.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/emoji-picker-master/lib/js/emoji-picker.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/jquery.iframe-transport.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/jquery.fileupload.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/jquery.fileupload-process.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/jquery.fileupload-image.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/jquery.fileupload-audio.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/jquery.fileupload-video.js"></script>--}}
    {{--<script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/jquery.fileupload-validate.js"></script>--}}
    <script>
        var csrfToken = "{{csrf_token()}}";
        var loaded = false;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
        $( document ).ajaxStop(function() {
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
