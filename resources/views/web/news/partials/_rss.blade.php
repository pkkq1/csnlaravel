<!doctype html>
<html lang="en" prefix="op: http://media.facebook.com/op#">
<head>
    <meta charset="utf-8">
    <meta property="op:markup_version" content="v1.0">
    <meta property="fb:article_style" content="default"/>
    <link rel="canonical" href="{{ route('news.detail.index', ['slug' => $blog->slug]) }}">
    <title>{{ $blog->title }}</title>
</head>
<body>
<article>
    <header>
        <h1>{{  $blog->title  }}</h1>
        <h2> {{ $blog->short_content }}</h2>
        <h3 class="op-kicker">
            SAO VIỆT
        </h3>
        <address>
            {{ $blog->article_by_user_name }}
        </address>
        <time class="op-published" dateTime="{{ $blog->created_at->format('c') }}">{{ $blog->created_at->format('M d Y, h:i a') }}</time>
        <time class="op-modified" dateTime="{{ $blog->created_at->format('c') }}">{{ $blog->created_at->format('M d Y, h:i a') }}</time>
    </header>

    {{ $blog->content }}

    <footer>
        <aside>
            A short footer note for your each Instant Articles.
        </aside>
        <small>© Copyright {{ date('Y') }}</small>
    </footer>
</article>
</body>
</html>