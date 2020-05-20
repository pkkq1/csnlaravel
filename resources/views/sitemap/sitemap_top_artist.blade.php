<?php
use App\Library\Helpers;
echo '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($top_artist_rows as $item) {
    echo '<sitemap>
            <loc>' . env('APP_URL') . '/sitemap' . str_replace('.html', '.xml', $item['artist_url']) . '</loc>
            <changefreq>always</changefreq>
            <priority>0.9</priority>
            <lastmod>' . date("Y-m-d\TH:i:s+00:00") . '</lastmod>
        </sitemap>';
}
echo '</sitemapindex>';