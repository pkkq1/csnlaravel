<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
foreach ($musics as $item) {
    echo '<url>
		<loc>' . env('APP_URL'). '/' .$item['music_url'] . '</loc>
		<video:video>
			<video:cover>' . $item['cover_html'] . '</video:cover>
			<video:title><![CDATA[' . $item['music_title'] . ' - ' . $item['music_artist'] . ']]></video:title>
			<video:description><![CDATA[' . $item['music_shortlyric'] . ']]></video:description>
		</video:video>
	</url>';
}
echo '</urlset>';