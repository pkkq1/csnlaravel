<?php
use App\Library\Helpers;
$titleMeta = $category->cat_title . ' - '. Config::get('constants.app.title');
global $memberVip;
$memberVip = Helpers::checkMemberVip();

$metaKeyWorld = 'bang xep hang, music, mp3, m4a, flac, lossless, video, mv, hd, mp4, csn, nghe nhạc, tải nhạc, lời bài hát, lyrics';
$metaDesc = 'Nghe nhạc online chất lượng cao kèm lyrics, chia sẻ và tải nhạc dạng mp3, mp4, m4a, lossless.';

if ($caption == 'Video Clip') {
    $metaKeyWorld = $metaKeyWorld . ', Video bài hát,Video Clip nhạc mới nhất, MV hot nhất, video clip nhạc hot nhất, video clip, music video, tai video, video nhac, video chat luong cao';
} elseif ($caption == 'Video Clip >   Việt Nam') {
    $titleMeta = 'Video Việt Nam | Tuyển tập Video Clip Việt Nam Hay Nhất, Chất Lượng Cao';
    $metaDesc = 'Video clip Việt Nam : Cập nhật những MV clip âm nhạc Việt Nam gồm thể loại nhạc trẻ, trữ tình, quê hương, rock/rap hiphop hay hot mới nhất. Nghe nhạc hay online mới nhất, tải nhạc MP3 chất lượng cao 320kbpsmp3, mp4, m4a, lossless.';
    $metaKeyWorld = $metaKeyWorld . ',Video bài hát,Video Clip nhạc mới nhất, MV hot nhất, video clip nhạc hot nhất, video clip, music video, tai video, video nhac, video chat luong cao, video clip bài hát việt nam';
} elseif ($caption == 'Video Clip >   US-UK') {
    $titleMeta = 'Video Clip Nhạc Âu Mỹ | Tuyển tập MV Âu Mỹ Hay Nhất, Chất Lượng Cao';
    $metaDesc = 'Tuyển tập Video clip nhạc Âu Mỹ mới nhất, chất lượng Full HD do các nhóm nhạc, ca sĩ US - UK thể hiện. Nghe nhạc hay online mới nhất, tải nhạc MP3 chất lượng cao 500kbps, 320kbps tại chiasenhac.vn';
    $metaKeyWorld = $metaKeyWorld . ', Video Clip Âu Mỹ, MV Ca nhạc Âu Mỹ, MV hot nhất Âu Mỹ, video au my, clip au my, mv au my, tải nhạc âu mỹ , Dowload nhạc âu mỹ';
} elseif ($caption == 'Video Clip >   Hoa') {
    $titleMeta = 'Video Clip Nhạc Hoa | Tuyển tập MV Nhạc Hoa Ngữ Hay Nhất, Chất Lượng Cao';
    $metaDesc = 'Tuyển tập Video clip nhạc hoa ngữ mới nhất, chất lượng Full HD do các nhóm nhạc, ca sĩ nổi tiếng thể hiện. Nghe nhạc hay online mới nhất, tải nhạc MP3 chất lượng cao 500kbps, 320kbps tại chiasenhac.vn';
    $metaKeyWorld = $metaKeyWorld . ', Video Clip Hoa Ngữ, MV Ca nhạc trung quốc, MV hot nhất trung quốc, video trung quốc, clip trung quốc, mv hoa ngữ';
} elseif ($caption == 'Video Clip >   Hàn') {
    $titleMeta = 'Video Clip Nhạc Hàn | Tuyển tập MV Nhạc Hàn Quốc Hot Nhất, Chất Lượng Cao';
    $metaDesc = 'Trải nghiệm hàng triệu bài hát và MV Hàn Quốc có bản quyền chất lượng cao tại kho nhạc Chiasenhac. Cùng nghe và tải nhạc online miễn phí trên nhiều nền tảng.';
    $metaKeyWorld = $metaKeyWorld . '';
} elseif ($caption == 'Video Clip >   Live') {
    $titleMeta = 'Video Bài Hát Live | Tuyển tập MV bài hát Live hay nhất, Chất Lượng Cao';
    $metaDesc = 'Cập nhật top những video Live mới nhất, hay nhất, hot nhất, và được yêu thích nhất hiện nay';
    $metaKeyWorld = $metaKeyWorld . ', Video bài hát live, video live, clip live, MV bài hát live, tải video live';
} elseif ($caption == 'Video Clip >   Nhật') {
    $titleMeta = 'Video Ca Nhạc Nhật Bản | Tuyển tập những MV ca nhạc Nhật bản mới nhất ';
    $metaDesc = 'Video ca nhạc nhật bản - Tuyển tập Album ca nhạc nhật bản hot nhất, hay nhất cùng với các bản nhạc anime buồn, nhẹ nhàng sâu lắng';
    $metaKeyWorld = $metaKeyWorld . ', Video ca nhạc, Video bài hát nhật bản, Video nhạc nhật, tải Video bài hát nhật, Video clip nhật bản, Video clip nhật bản mới nhất';
} elseif ($caption == 'Video Clip >   nước khác') {
    $titleMeta = 'Video nhạc nước ngoài | Tuyển tập những MV hot nhất';
    $metaDesc = 'Video Nhạc Nước Ngoài, tất cả MV hot đẹp nhất của Nhạc Nước Ngoài, đầy đủ video clip mới phát hành chất lượng cao HD 720 1080';
    $metaKeyWorld = $metaKeyWorld . ', video nước ngoài, video clip nước ngoài, clip nước ngoài, tải video nước ngoài, tải clip bài hát nước ngoài';
} elseif ($caption == 'Nhạc Việt Nam') {
    $titleMeta = 'Nhạc Việt Nam | Tuyển tập Album những bài hát  hot nhất';
    $metaDesc = 'Album Nhạc Việt Được Nghe Nhiều 2020 - Various Artists Lắng nghe ngay những bản Hits thành công nhất trong năm 2020 và đừng quên theo dõi playlist tại chiasenhac.vn';
    $metaKeyWorld = $metaKeyWorld . ', Nhạc Việt Nam, Bài hát việt nam, Ca nhạc việt nam, nhạc việt nam, ca nhạc việt nam, âm nhạc việt nam, nhạc, việt nam hay nhất, nhạc việt nam tôi, nhạc việt nam tôi đâu, âm nhạc việt nam hiện nay, tải nhạc việt nam ơi, nghe nhạc việt nam ơi, nhạc việt nam hay, nhạc việt nam không lời, ca nhạc việt nam hay nhất';
} elseif ($caption == 'Nhạc Việt Nam >  Pop, rock...') {
    $titleMeta = 'Nhạc Pop, Rock Hot | Album bài hát  hot nhất hiện nay';
    $metaDesc = 'Nghe nhạc pop, rock HOT hay nhất, chọn lọc các thể loại .Tải album nhạc pop miễn phí, playlist MP3 với chất lượng cao 500kbps, 320kbps.';
    $metaKeyWorld = $metaKeyWorld . ', nhạc pop,nhạc pop ballad, nhạc pop hay, nhạc pop việt nam, nhạc pop việt, nhạc pop 2020,nhạc pop ballad việt hay nhất,nhạc pop hay nhất,nhạc pop rock, nhạc rock, nhạc rock hay, nhạc rock việt, nhạc rock ballad, nhạc rock việt nam, nhạc rock không lời, nhạc rock hay nhất, ban nhạc rock, nhạc rock bất hủ, tải nhạc pop , tải nhạc Rock';
} elseif ($caption == 'Nhạc Việt Nam >  Rap, hiphop') {
    $titleMeta = 'Nhạc Rap, Hiphop | Những Ca Khúc Hay Nhất 2020';
    $metaDesc = 'Nghe nhạc Rap, hiphop Việt Nam hay nhất, chọn lọc danh sách top những ca khúc hot nhất hiện tại của thể loại nhạc rap, hiphop Việt Nam';
    $metaKeyWorld = $metaKeyWorld . ', nhạc rap, nhạc rap hay, nhạc rap buồn, nhạc rap 2020, ca nhạc rap, nhạc rap chế, nhạc rap remix, nhạc rap không lời, nhạc rap ko lời, nhạc rap việt, nhạc hiphop, nhạc hiphop thiếu nhi, nhạc hiphop hay, nhạc hiphop hay nhất, tải nhạc hiphop, tải nhạc rap việt nam';
} elseif ($caption == 'Nhạc Việt Nam >  Dance, remix') {
    $titleMeta = 'Nhạc Dance, Remix | Album bài hát yêu thích nhất 2020';
    $metaDesc = 'Tuyển tập bài nhạc Dance Remix hay nhất sôi động ,cập nhật những ca khúc nhac remix, Dj, nhạc sàn, nhạc dance mới nhất năm 2020';
    $metaKeyWorld = $metaKeyWorld . ', nhạc dance remix, tải nhạc dance remix, nghe nhạc dance remix, nhạc dance , nhạc remix, tải nhạc dance , tải nhạc remix, nghe nhạc dance remix online, nghe nhạc dance online, nghe nhạc remix online';
} elseif ($caption == 'Nhạc Việt Nam >  Truyền thống') {
    $titleMeta = 'Nhạc truyền thống | Cập nhật những bài hát truyền thống hay nhất';
    $metaDesc = 'Playlist Nhạc Truyền Thống do ca sĩ Đang Cập Nhật thể hiện, thuộc thể loại nhạc Cách Mạng. Các bạn có thể nghe, download thể loại âm nhạc truyền thống phong phú nhất về mặt giai điệu trong kho tàng ca dao, dân ca vì mỗi bài lại có một giai điệu riêng, và cho đến nay ';
    $metaKeyWorld = $metaKeyWorld . ', nhạc truyền thống, nhạc truyền thống cách mạng, nhạc truyền thống việt nam, nhạc truyền thống remix, âm nhạc truyền thống việt nam, ca nhạc truyền thống cách mạng, nghe nhạc truyền thống cách mạng, nhạc truyền thống của việt nam, nhạc truyền thống việt nam mp3,nhạc truyền thống hàn quốc mp3, album nhạc truyền thống cách mạng, nghe ca nhạc truyền thống, nhạc truyền thống cách mạng mp3, nhạc truyền thống việt nam không lời, liên khúc nhạc truyền thống, ca nhạc truyền thống việt nam, nghe nhạc truyền thống việt nam, nhạc truyền thống quân đội';
} elseif ($caption == 'Nhạc US-UK') {
    $titleMeta = 'Nhạc Âu Mỹ | Tuyển tập nhạc hay chọn lọc US - UK';
    $metaDesc = 'Tuyển tập danh sách 100 bài hát US - UK hot nhất được nghe nhiều nhất trên Chiasenhac. Danh sách bài hát này được hệ thống tự động đề xuất dựa trên lượt nghe, lượt share, lượt comment v.v của từng bài hát trên tất cả các nền tảng Web, Mobile web, App và  được cập nhật hằng tuần dựa trên các chỉ số của tuần đó';
    $metaKeyWorld = $metaKeyWorld . ', nhạc âu mỹ, nhạc âu mỹ hay, nhạc âu mỹ bất hủ, nhạc âu mỹ buồn, nhạc âu mỹ 2020, nhạc âu mỹ hay nhất mọi thời đại, nhạc âu mỹ mới nhất, tải nhạc âu mỹ miễn phí, nhạc âu mỹ remix, nhạc âu mỹ nhẹ nhàng, nhạc âu mỹ sôi dộng, bảng xếp hạng nhạc âu mỹ mới nhất, nhạc âu mỹ 2020, nhạc âu mỹ tik tok, nhạc âu mỹ nhẹ nhàng sâu lắng, bảng xếp hạng nhạc âu mỹ 2020, nhạc âu mỹ không lời, ca nhạc âu mỹ, nghe nhạc us - uk, tải nhạc us - uk';
} elseif ($caption == 'Nhạc US-UK >  Pop, rock...') {
    $titleMeta = 'Nhạc Pop US - UK | Top 100 ca khúc Âu Mỹ hay nhất 2020';
    $metaDesc = 'Nghe Album top 100 pop usuk hay nhat - Tải album những bài hát pop MP3 500kbps, 320kbps cực nhanh của V.A , tuyển chọn trong playlist nhạc v.a và update bởi chiasenhac';
    $metaKeyWorld = $metaKeyWorld . ', nhạc pop âu mỹ, nhạc pop âu mỹ hay nhất, nhạc pop âu mỹ hay nhất mọi thời đại, nhạc pop âu mỹ 2019,nhạc pop âu mỹ hay, top 100 nhạc pop âu mỹ, tuyển tập nhạc pop âu mỹ hay nhất, những bài nhạc pop âu mỹ hay nhất, bảng xếp hạng nhạc pop âu mỹ, nhạc pop âu mỹ bất hủ, nhạc pop âu mỹ mới nhất, tải nhạc pop âu mỹ, tải nhạc pop us-uk, nghe nhạc pop us-uk, nhạc us-uk hay nhất';
} elseif ($caption == 'Nhạc US-UK >  Rap, hiphop') {
    $titleMeta = 'Nhạc Rap,Hiphop US-UK | Cập nhật danh sách những bài hát Âu Mỹ hay nhất';
    $metaDesc = 'Tuyển tập những bản Rap/Hiphop và R&B Âu Mỹ thịnh hành và hot nhất thế giới ... Tuyển Chọn Những Bản Nhạc Rap Việt Buồn Tâm Trạng Hay Nhất 2020. Cùng cảm nhận và nghe nhạc mp3 chất lượng cao. Tải nhạc Lossless, 500kbps , 320kbps, mp3 hoàn toàn miễn phí';
    $metaKeyWorld = $metaKeyWorld . ', nhạc rap âu mỹ,nhạc rap âu mỹ hay nhất, nhạc rap âu mỹ hay, những bản nhạc rap âu mỹ hay nhất, tuyển tập nhạc rap âu mỹ hay nhất, nhạc rap âu mỹ hay nhất 2020, top nhạc rap âu mỹ, tải nhạc rap âu mỹ, nghe nhạc rap âu mỹ online, Nhạc hiphop âu mỹ hay, top những bài hiphop âu mỹ hay, tải nhạc hiphop âu mỹ, bảng xếp hạng nhạc rap âu mỹ hiện nay, bảng xếp hạng nhạc hiphop âu mỹ';
} elseif ($caption == 'Nhạc US-UK >  Dance, remix') {
    $titleMeta = 'Nhạc Dan Remix | Tuyển chọn Nhạc Trẻ Âu Mỹ cực hot hiện nay';
    $metaDesc = 'Các bạn có thể nghe, download (tải nhạc) bài hát lk nhac tre dance 2013 remix mp3, playlist/album, MV/Video lk nhac tre dance 2020 remix  với chất lượng cao 500kbps, 320kbps miễn phí tại chiasenhac.vn';
    $metaKeyWorld = $metaKeyWorld . ', nhạc dance âu mỹ,nhạc dance âu mỹ, hay nhất mọi thời đại, nhạc dance âu mỹ 2020, nhạc, dance âu mỹ hay nhất, nhạc dance âu mỹ hay, album nhạc dance âu mỹ, những bản nhạc dance âu mỹ hay nhất, những bài nhạc dance âu mỹ hay nhất, top 100 nhạc dance âu mỹ, nhạc dance âu mỹ bất hủ, tuyển tập nhạc dance âu mỹ hay nhất, nhạc dance âu mỹ không lời';
} elseif ($caption == 'Nhạc Hoa') {
    $titleMeta = 'Nhạc Hoa | Top hits những bản nhạc trung quốc từng gây nghiện trên BXH';
    $metaDesc = 'Cùng lắng nghe những ca khúc dễ thương và nhiều cảm xúc hay nhất Tik Tok Trung Quốc và Việt Nam 2020. Bạn có thể dowload những bài nhạc gây nghiện với chất lượng cao và miễn phí tại chiasenhac.vn';
    $metaKeyWorld = $metaKeyWorld . ', nhạc hoa lời việt, nhạc hoa không lời, nhạc hoa ko lời, nhạc hoa hay, nhạc hoa remix, nhạc hoa vinh, nhạc hoa lời việt remix, nhạc hoa bất hủ, nhạc hoa lời việt hay, ca nhạc hoa cài mái tóc, nhạc hoa cài mái tóc, nhạc hoa nở về đêm, nhạc hoa tik tok, nhạc hoa mp3, nhạc hoa buồn, nhạc hoa bằng lăng, nhạc hoa lời việt bất hủ, ca nhạc hoa mười giờ, nhạc hoa ngữ, nhạc hoa mười giờ, ca nhạc hoa lời việt, nhạc hoa hay nhất mọi thời đại, tải nhạc hoa ngữ, dowload nhạc hoa ngữ, nghe nhạc hoa ngữ';
}
?>
@section('meta')
    <meta name="copyright" content="{{env('APP_URL')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="{{$metaKeyWorld}}">
    <meta name="description" content="{{$metaDesc}}">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL')}}/imgs/no_cover.png" />
    <meta name="title" content="{{$titleMeta}}" />
    <meta property="og:image" content="{{env('APP_URL')}}/imgs/no_cover.png" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$titleMeta}}" />
    <meta property="og:description" content="{{$metaDesc}}" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('mobile.layouts.app')
@section('content')
    <div class="header">
        @include('mobile.layouts.header_top')
        <!-- swiper1-->
        <div class="header_sub_menu">
            <div data-itemmenu="4" class="swiper-container music_news swiper1">
                <div class="swiper-wrapper">
                    @if($category->cat_id != CATEGORY_ID_VIDEO)
                    <div class="swiper-slide tab-music selected album-{{CURRENT_YEAR}}" data-tab="album-{{CURRENT_YEAR}}">Album {{CURRENT_YEAR}}</div>
                    <div class="swiper-slide tab-music album-moi" data-tab="album-moi">Album Mới</div>
                    <div class="swiper-slide tab-music bai-hat-moi" data-tab="bai-hat-moi">Bài Hát Mới</div>
                    <div class="swiper-slide tab-music  vua-download" data-tab="vua-download">Vừa Download</div>
                    @else
                    <div class="swiper-slide tab-music selected video-{{CURRENT_YEAR}}" data-tab="video-{{CURRENT_YEAR}}">Video {{CURRENT_YEAR}}</div>
                    <div class="swiper-slide tab-music video-moi" data-tab="video-moi">Video mới</div>
                    <div class="swiper-slide tab-music video-vua-download" data-tab="video-vua-download">Vừa download</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        @if(!$memberVip)
        <div style="position: relative; text-align: center;">
{{--            @if(View::exists('cache.code_ads.mobile_masthead'))--}}
                @include('cache.code_ads.mobile_masthead')
            {{--@endif--}}
        </div>
        @endif
        <div class="sidebar_top">
            <!-- swiper2-->
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    @if($category->cat_id != CATEGORY_ID_VIDEO)
                        <div class="swiper-slide" data-tab="album-{{CURRENT_YEAR}}">
                            <div class="container">
                                <div class="block block_album block_profile_playlist">
                                    <div class="row row-sm" id="album-{{CURRENT_YEAR}}">
                                        <?php echo $firstTab ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-tab="album-moi">
                            <div class="container">
                                <div class="block block_album block_profile_playlist">
                                    <div class="row row-sm" id="album-moi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_bxhbaihat block_more" data-tab="bai-hat-moi">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_bxhbaihat block_more" id="bai-hat-moi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_bxhbaihat block_more" data-tab="vua-download">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_bxhbaihat block_more" id="vua-download"></div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="swiper-slide" data-tab="video-{{CURRENT_YEAR}}">
                            <div class="container">
                                <div class="block block_album block_profile_playlist">
                                    <div class="row row-sm" id="video-{{CURRENT_YEAR}}">
                                        <?php echo $firstTab ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_bxhbaihat block_more" data-tab="video-moi">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_bxhbaihat block_more" id="video-moi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block_bxhbaihat block_more" data-tab="video-vua-download">
                            <div class="container">
                                <div class="block block_baihat">
                                    <div class="block_bxhbaihat block_more" id="video-vua-download"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
@section('contentJS')
    <script>
        $('#album-<?php echo CURRENT_YEAR ?>').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            categoryTab($(this).attr('href'), 'album-<?php echo CURRENT_YEAR ?>', true);
        });
        $('#video-<?php echo CURRENT_YEAR ?>').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            categoryTab($(this).attr('href'), 'video-<?php echo CURRENT_YEAR ?>', true);
        });
        function slideSwiperChange(swiper){
            let tabSelected = $('.swiper2').find('.swiper-slide-active');
            let tab =  tabSelected.data('tab');
            if($('#'+tab).html().length == 0) {
                categoryTab('/tab_category', tab, true);
            }
        }
        function categoryTab(url, tab, floatTab = false) {
            if(($('#'+tab).html()).length == 0 || floatTab) {
                $.ajax({
                    url: window.location.origin + url,
                    type: "POST",
                    dataType: "html",
                    data: {
                        'cat_id': <?php echo $category->cat_id; ?>,
                        'cat_level' : <?php echo $category->cat_level; ?>,
                        'tab': tab ? tab : 'album_<?php echo CURRENT_YEAR ?>'
                    },
                    beforeSend: function () {
                        if(loaded) return false;
                        loaded = true;
                        $('html,body').animate({ scrollTop: 0 }, 400);
                    },
                    success: function(response) {
                        $('#'+tab).html(response);
                        $('#'+tab).find('.pagination li a').on('click', function (e) {
                            e.preventDefault();
                            categoryTab($(this).attr('href'), tab, true);
                        });
                        $('.'+tab).click();
                        swiper2.update();
                    }
                });
            }
        }

        <?php
        if(isset($_GET['tab'])) {
        ?>
        $( document ).ready(function() {
            setTimeout(function(){
                $('.<?php echo $_GET['tab'] ?>').click();
            }, 600);
        });
        <?php
        }
        ?>
    </script>
@endsection