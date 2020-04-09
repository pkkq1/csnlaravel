<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
if(isset($covers) && $covers) {
    foreach ($covers['data'] as $item) {
        echo '<url>
        <loc>' . env('APP_URL') .$item['album_link'][0] . '</loc>
        <video:video>
            <video:cover>' . $item['album_cover_thumb'][0] . '</video:cover>
            <video:title><![CDATA[' . $item['music_album'][0] . ' - ' . $item['album_music_artist'][0] . ']]></video:title>
            <video:artist><![CDATA[' . $item['album_music_artist'][0] . ']]></video:artist>
        </video:video>
    </url>';
    }
}
if(isset($musics) && $musics) {
    foreach ($musics['data'] as $item) {
        echo '<url>
        <loc>' . $item['music_link'][0] . '</loc>
        <video:video>
            <video:cover>' . $item['music_cover'][0] . '</video:cover>
            <video:title><![CDATA[' . $item['music_title'][0] . ' - ' . $item['music_artist'][0] . ']]></video:title>
            <video:artist><![CDATA[' . $item['music_artist'][0] . ']]></video:artist>
        </video:video>
    </url>';
    }
}
echo '</urlset>';