<?php
use App\Library\Helpers;
echo '<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd" >';
$pageTotal = ceil($music_page['row_total']/1000);
for ($i = 1; $i <= $pageTotal; $i++) {
    echo '<url>
            <loc>' . env('APP_URL'). '/sitemap/full_2020_p' . $i . '.xml</loc>
            <lastmod>' . date("Y-m-d\TH:i:s+00:00") . '</lastmod>
        </url>';
}
echo '</urlset>';