<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
foreach ($musics['data'] as $item) {
    echo '<url>
        <loc>' . $item['music_link'][0] . '</loc>
        <video:video>
            <video:video:thumbnail_loc>' . $item['music_cover'][0] . '</video:video:thumbnail_loc>
            <video:title><![CDATA[' . $item['music_title'][0] . ' - ' . $item['music_artist'][0] . ']]></video:title>
        </video:video>
    </url>';
}
echo '</urlset>';