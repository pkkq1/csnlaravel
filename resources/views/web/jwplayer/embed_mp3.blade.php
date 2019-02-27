<?php
use App\Library\Helpers;
$autoPlay = isset($_GET['auto']) ? $_GET['auto'] : 'false';
$file_url = Helpers::file_url($music);
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="csnplayer" style="position:relative; z-index: 99999; width:100%;"> </div>
</body>
<link rel="stylesheet" type="text/css" href="/css/csn-player.css">
<script src="/assets/jwplayer-7.12.0/jwplayer.js"></script>
<script>
    jwplayer.key="dWwDdbLI0ul1clbtlw+4/UHPxlYmLoE9Ii9QEw==";
    var player = jwplayer('csnplayer');
    var firstPlayer = true;

    player.setup({
        width: "100%",
        height: "100%",
        stretching: 'fill',
        base: '/assets/jwplayer-7.12.0/',
        sources: [
            <?php
            $typeJwSource = $music->cat_id == CAT_VIDEO ? 'mp4' : 'mp3';
            for ($i=0; $i<sizeof($file_url); $i++){
                echo '{"file": "'. $file_url[$i]['url'] .'", "label": "'. $file_url[$i]['label'] .'", "type": "'.$typeJwSource.'", "default": '. (($i==1) ? 'true' : 'false') .'},';
            }
            ?>
        ],
        image: '<?php echo Helpers::cover_url($music->cover_id) ?>',
        title:'<?php echo $music->music_title ?>',
        skin: {
            name: 'nhac'
        },
        timeSliderAbove: true,
        autostart: <?php echo $autoPlay == 'true' ? 'true' : 'false' ?>,
        repeat: true,
        plugins: {
            '/js/nhac-audio.js': {
                resounded: true,
                performance: true,
                perform_debug: true,
                duration: 20,
                msisdn: '',
                package_id: 0,
                album_id : '0',
                content_type: 'song',
                utm_source: '',
                utm_medium: '',
                utm_term: '',
                utm_content: '',
                utm_campaign: '',
                device_id: '',
                channel: 'WEB',
                url_referer: '',
                action_type: 'play_song',
                player_type: 'NotDRM',
                service_id: 0,
                source_rec: 'rand',
                listen_state: 'online',
                other_info: '',
                expired_time: 0,
                version: '1.0'
            }
        }
    });

    var device_type = 'desktop';
    var listPlayed =Array();
    var logPlayAudioFlag = false;
    var firstPause = false;

    var embed = 'false';
    var userStatus = 1;
    jwplayer().onBeforePlay(function() {
        //logPlayAudioFlag = true;
        //console.log('set flag again|'+logPlayAudioFlag);
    });
    jwplayer().onQualityLevels(function(event){
        var bitrateIndex = event.currentQuality;
        var currQL = jwplayer().getQualityLevels();
        var qualityObj = currQL[bitrateIndex];
        if(userStatus==0){
            if(qualityObj.label!='128K'){
                for(var i=0; i<currQL.length;i++){
                    if(currQL[i].label=='128K'){
                        jwplayer().setCurrentQuality(i);
                    }
                }
            }
        }else{
            for(var i=0; i<currQL.length;i++){
                if(currQL[i].label=='320K'){
                    jwplayer().setCurrentQuality(i);
                }
            }
        }
    });
    jwplayer().onQualityChange(function(event){
        console.log('onQualityChange',event.currentQuality);
        var setQuality = false;
        var currEQIndex = jwplayer().getCurrentQuality();
        var currQL = jwplayer().getQualityLevels();
        var bitrate = currQL[currEQIndex].label;
        bitrate = parseInt(bitrate);
        var defaultProfile = '128K';
        if(userStatus==0 && bitrate==320){
            NhacVnCoreJs.popupLoginVegaId();
            var isSetDf = false;
            for(var i=0; i<currQL.length;i++){
                if(!isSetDf){
                    if(currQL[i].label=='128K'){
                        defaultProfile='128K';
                        isSetDf=true;
                    }
                }
            }
            //console.log('set pr:',defaultProfile);
            if(defaultProfile!='' && setQuality==false){
                for(var i=0; i<currQL.length;i++){
                    if(currQL[i].label==defaultProfile && currEQIndex!=i){
                        jwplayer().setCurrentQuality(i);
                        setQuality=true;
                    }
                }
            }
        }

    })
    jwplayer().onBeforeComplete(function() {
        if(logPlayAudioFlag == false && typeof AutoPlay=='function'){
            AutoPlay();
        }
    });
</script>
<style>
    .jw-icon-nextsong {
        display: none;
    }
    .jw-icon-auto-next-on {
        display: none;
    }
</style>
</html>

