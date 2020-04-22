<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$pageTotal = ceil($music_page['row_total']/1000);
for ($i = 1; $i <= $pageTotal; $i++) {
    echo '<url>
            <loc>' . env('APP_URL'). '/sitemap/full_2020_p' . $i . '.xml</loc>
            <changefreq>always</changefreq>
            <priority>0.9</priority>
            <lastmod>' . date("Y-m-d\TH:i:s+00:00") . '</lastmod>
        </url>';
}
echo '</urlset>';