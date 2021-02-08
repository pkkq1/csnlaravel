<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/">
    <channel>
        <title>{{ $title }}</title>
        <link>{{ url('/') }}</link>
        <language>en-us</language>
        <lastBuildDate>{{ date('c') }}</lastBuildDate>
        @forelse($blogs as $key => $blog)
            <item>
                <title><![CDATA[{{ $blog->title }}]]></title>
                <link>{{ route('news.detail.index', ['slug' => $blog->slug]) }}</link>
                <guid>{{ $blog->id }}</guid>
                <pubDate>{{ date('c', strtotime($blog->date_publish)) }}</pubDate>
                <author>{{ $blog->article_by_user_name }}</author>
                <description><![CDATA[{{ $blog->short_content }}]]></description>
                <content:encoded>
                    <![CDATA[
                    @include('web.news.partials._rss')
                    ]]>
                </content:encoded>
            </item>
        @empty
            <item>No feeds found</item>
        @endforelse
    </channel>
</rss>