
<?php
global $hot_music_rows;
global $hot_video_rows;
?>
@include('cache.bxh.'.$cacheBxh)
<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
foreach ($hot_music_rows as $itemMusic) {
    foreach ($itemMusic as $item) {
        echo '<url>
		<loc>' .$item['music_url'] . '</loc>
		<video:video>
			<video:thumbnail_loc>' . $item['cover_html'] . '</video:thumbnail_loc>
			<video:title><![CDATA[' . htmlspecialchars_decode($item['music_title'], ENT_QUOTES) . ' - ' . htmlspecialchars_decode($item['music_artist'], ENT_QUOTES) . ']]></video:title>
			<video:description><![CDATA[' . htmlspecialchars_decode($item['music_shortlyric'], ENT_QUOTES) . ']]></video:description>
            <lastmod>' . date("Y-m-d\Th:i:s+00:00") . '</lastmod>
		</video:video>
	</url>';
    }
}
foreach ($hot_video_rows as $itemVideo) {
    foreach ($itemVideo as $item) {
        echo '<url>
		<loc>' .$item['music_url'] . '</loc>
		<video:video>
			<video:thumbnail_loc>' . $item['cover_html'] . '</video:thumbnail_loc>
			<video:title><![CDATA[' . htmlspecialchars_decode($item['music_title'], ENT_QUOTES) . ' - ' . htmlspecialchars_decode($item['music_artist'], ENT_QUOTES) . ']]></video:title>
			<video:description><![CDATA[' . htmlspecialchars_decode($item['music_shortlyric'], ENT_QUOTES) . ']]></video:description>
			<lastmod>' . date("Y-m-d\Th:i:s+00:00") . '</lastmod>
		</video:video>
	</url>';
    }
}
echo '</urlset>';