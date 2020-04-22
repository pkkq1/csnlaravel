<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
foreach ($videos['data'] as $item) {
    echo '<url>
        <loc>' . $item['video_link'][0] . '</loc>
        <video:video>
            <video:thumbnail_loc>' . $item['video_cover'][0] . '</video:thumbnail_loc>
            <video:title><![CDATA[' . htmlspecialchars_decode($item['video_title'][0], ENT_QUOTES) . ' - ' . htmlspecialchars_decode($item['video_artist'][0], ENT_QUOTES) . ']]></video:title>
        </video:video>
        <lastmod>' . date("Y-m-d\Th:i:s+00:00") . '</lastmod>
    </url>';
}
echo '</urlset>';