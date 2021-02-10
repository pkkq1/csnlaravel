@include('cache.news.popular_category')
@include('cache.news.news_post')
@include('cache.bxh.bxh_today')
<?php
global $popular_category;
global $hot_music_rows;
global $news_post;
use App\Library\Helpers;
use Jenssegers\Agent\Agent;
$listPopular_page = Helpers::getRandLimitArr($popular_category[$article->category_id], 4);
$topMusic = array_slice($hot_music_rows[3], 0, 5);
$flagArticle = 0;
if(count($articleTags) > 0) {
    $flagArticle = 1;
    $articleTags = Helpers::getRandLimitArr($articleTags->toArray(), 4);
}else{
    $flagArticle = 2;
    $articleTags = Helpers::getRandLimitArr($news_post, 4);
}
$Agent = new Agent();
?>
@section('meta')
<meta name="title" content="{{$article->title}}" />
    <meta property="fb:app_id" content="419934814770318" />
    <meta property="og:image" content="{{env('APP_URL') . '/' .$article->image}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$article->title}}" />
    <meta property="og:description" content="{{$article->short_content}}" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('web.news.layouts.app')

@section('content')
    <section class="c-section">
        <div class="o-container">
            <div class="c-wraper">
                <div class="c-main-content" <?php echo $Agent->isMobile() == 'mobile' ? 'style="width: 100%"' : ''?>>
                    <div class="c-content__main">
                        <div class="c-post">
                            <div class="c-post__header">
                                <h2 class="c-title-lg">{{$article->title}}</h2>
                                <div class="u-text--center"><small>{{$article->article_by_user_name}} {{date("H:i d/m/Y", strtotime($article->date_publish))}}</small></div>
                            </div>
                            <div class="c-post__body">
                                <?php echo $article->content ?>
                            </div>
                        </div>
                    </div>
                    @if($article->tags_name)
                    <div class="c-block__badge">
                        <h3 class="c-title-md">Từ khóa: </h3>
                        <?php
                            $tags_name = explode(';', $article->tags_name);
                            $tags_slug = explode(';', $article->tags_slug);
                        ?>
                        @foreach($tags_name as $key => $item)
                            <a target="_blank" href="/tin-tuc/tag/{{$tags_slug[$key]}}" class="c-badge">{{$item}}</a>
                        @endforeach
                    </div>
                    @endif
                    <div class="c-block__social"><img src="{{env('IMG_DATA_URL')}}images/social.png" alt=""></div>
                    <div class="c-border__dash"></div>
                    <div class="c-block__comment">
                        <div class="fb-comments" data-href="{{url()->current()}}" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
                @if($Agent->isMobile() != 'mobile')
                <div class="c-siderbar">
                    <div class="c-box c-box__siderbar c-box__siderbar--type01">
                        <div class="c-box__header u-background__gradien">
                            <h2>TIN NỔI BẬT</h2>
                        </div>
                        <div class="c-box__content">
                            <div class="c-list__container c-list__container--01 c-list__container--03">
                                @foreach($listPopular_page as $item)
                                    <div class="c-list__item">
                                        <div class="c-card c-card__02">
                                            <div class="c-card__header">
                                                <div class="c-thumbnail">
                                                    <div class="c-thumbnail--ratio">
                                                        <a href="/tin-tuc/{{$item['slug']}}-p-{{$item['id']}}.html" title="{{$item['title']}}">
                                                            <img src="<?php echo Helpers::news_image($item['image']) ?>" alt="{{$item['title']}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-card__body">
                                                <h4 class="c-card__title"><a title="{{$item['title']}}" href="/tin-tuc/{{$item['slug']}}-p-{{$item['id']}}.html">{{$item['title']}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="c-box c-box__siderbar c-box__siderbar--type02">
                        <div class="c-box__header u-background__gradien--orange">
                            <h2>BXH NHẠC VIỆT</h2>
                        </div>
                        <div class="c-box__content">
                            <div class="c-table c-table__bxh">
                                @foreach($topMusic as $key => $item)
                                    <?php
                                    $url = SUB_BXH_NOW_MUSIC.'vietnam.html?playlist='.++$key;
                                    ?>
                                    <div class="c-table__row">
                                        <div class="c-slot"><span>{{sprintf("%02d", $key)}}</span></div>
                                        <div class="c-infor">
                                            <h5 class="c-title"><a href="{{$url}}">{{$item['music_title']}}</a></h5>
                                            <p class="c-auth"><?php echo $item['music_artist_html'] ?></p>
                                        </div>
                                        <div class="c-count"><span>{{number_format($item['music_listen'])}}</span></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @if($flagArticle > 0)
                    <div class="c-box c-box__siderbar c-box__siderbar--type03">
                        <div class="c-box__header">
                            @if($flagArticle == 1)
                                <h2>TIN LIÊN QUAN</h2>
                            @else
                                <h2>TIN MỚI NHẤT</h2>
                            @endif
                        </div>
                        <div class="c-box__content">
                            <div class="c-list__container c-list__container--01 c-list__container--03">
                                @foreach($articleTags as $item)
                                    <div class="c-list__item">
                                        <div class="c-card c-card__02">
                                            <div class="c-card__header">
                                                <div class="c-thumbnail">
                                                    <div class="c-thumbnail--ratio"><img src="<?php echo Helpers::news_image($item['image']) ?>" alt="Card image cap"></div>
                                                </div>
                                            </div>
                                            <div class="c-card__body">
                                                <h4 class="c-card__title"><a href="/tin-tuc/{{$item['slug']}}-p-{{$item['id']}}.html">{{$item['title']}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @else
                    @if($flagArticle > 0)
                    <div class="c-box c-box__siderbar c-box__siderbar--type01" style="width: 100%;">

                        <div class="c-box__header u-background__gradien">
                            @if($flagArticle == 1)
                                <h2>TIN LIÊN QUAN</h2>
                            @else
                                <h2>TIN MỚI NHẤT</h2>
                            @endif
                        </div>
                        <div class="c-box__content">
                            <div class="c-list__container c-list__container--01 c-list__container--03" style=" width: 100%; max-width: inherit; margin: 0; ">
                                @foreach($articleTags as $item)
                                    <div class="c-list__item">
                                        <div class="c-card c-card__02">
                                            <div class="c-card__header">
                                                <div class="c-thumbnail">
                                                    <div class="c-thumbnail--ratio">
                                                        <a href="/tin-tuc/{{$item['slug']}}-p-{{$item['id']}}.html" title="{{$item['title']}}">
                                                            <img src="<?php echo Helpers::news_image($item['image']) ?>" alt="Card image cap">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-card__body">
                                                <h4 class="c-card__title"><a style="font-size: 22px;line-height: 32px;" title="{{$item['title']}}" href="/tin-tuc/{{$item['slug']}}-p-{{$item['id']}}.html">{{$item['title']}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                @endif
            </div>
        </div>
    </section>
    <?php
        if($Agent->isMobile()) {
            ?>
            <style>
                .c-wraper .c-main-content .c-title-lg {
                    font-size: 60px;
                    line-height: 70px;
                }
                .c-wraper .c-main-content p {
                    font-size: 41px;
                    line-height: 80px;
                }
                .c-wraper .c-main-content p img {
                    width: 100%!important;
                    height: auto!important;
                }
                .c-list__container--03 .c-list__item .c-card__header {
                    width: 30%;
                }
                .c-list__container--03 .c-list__item .c-card__body {
                    width: 70%;
                    padding-left: 20px;
                }
            </style>
            <?php
        }
    ?>
@endsection
@section('contentJS')
    <script>
        $('.c-post__body').find('img').parent().addClass('a_img_content');
    </script>
@endsection