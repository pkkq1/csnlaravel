<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
foreach ($videos['data'] as $item) {
    echo '<url>
        <loc>' . $item['video_link'][0] . '</loc>
        <video:video>
            <video:thumbnail_loc>' . $item['video_cover'][0] . '</video:thumbnail_loc>
            <video:title><![CDATA[' . $item['video_title'][0] . ' - ' . $item['video_artist'][0] . ']]></video:title>
            <video:artist>' . $item['video_artist'][0] . '</video:artist>
        </video:video>
    </url>';
}
echo '</urlset>';