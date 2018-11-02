<?php
use App\Library\Helpers;
$titleMeta = $category->cat_title . ' - '. Config::get('constants.app.title');
?>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <ul class="nav nav-tabs nav-justified nav_bxh" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" onclick="categoryTab('/tab_category', 'album')" id="album-tab" data-toggle="tab" href="#album" role="tab" aria-controls="home" aria-selected="true">Album</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="categoryTab('/tab_category', 'music')" id="music-tab" data-toggle="tab" href="#music" role="tab" aria-controls="home" aria-selected="true">Bài Hát</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="categoryTab('/tab_category', 'video')" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="home" aria-selected="true">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="categoryTab('/tab_category', 'download')" id="download-tab" data-toggle="tab" href="#download" role="tab" aria-controls="home" aria-selected="true">Download</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="album" role="tabpanel" aria-labelledby="album-tab"><?php echo $cover ?></div>
                    <div class="tab-pane fade" id="music" role="tabpanel" aria-labelledby="music-tab"></div>
                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab"></div>
                    <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab"></div>
                </div>
            </div>
            <div class="col-md-3">
                <a class="catalog1 weekend" style="background-image: url(https://i.scdn.co/image/6a6098cd1369420b9b6ff941ff41ded1b1dceb06);" href="#" title="">
                    <span>weekend</span>
                </a>
                <a class="catalog1 edm" style="background-image: url(https://i.scdn.co/image/c8ffd7bd0df17c05fd8a1efef33ad793eea0e47d);" href="#" title="">
                    <span>EDM</span>
                </a>
                <a class="catalog1 love" style="background-image: url(https://i.scdn.co/image/56228f9353b23405516a6ea8af1c22083f450b57);" href="#" title="">
                    <span>love</span>
                </a>
                <br>
                <div class="card mb-3 cardads">
                    <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('contentJS')
<script>
    $('#album').find('.pagination li a').on('click', function (e) {
        e.preventDefault();
        categoryTab($(this).attr('href'), 'album', true);
    });
    function categoryTab(url, tab, floatTab = false) {
        if(($('#'+tab).html()).length == 0 || floatTab) {
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: {
                    'cat_id': <?php echo $category->cat_id; ?>,
                    'cat_level' : <?php echo $category->cat_level; ?>,
                    'tab': tab ? tab : 'album'
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    $('#'+tab).html(response);
                    $('html,body').animate({ scrollTop: 0 }, 400);


                    $('#'+tab).find('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        categoryTab($(this).attr('href'), tab, true);
                    });
                }
            });
        }
    }
    <?php
        if(!$cover) {
            ?>
            // $('#music-tab').click();
            <?php
        }
    ?>
</script>
@endsection


