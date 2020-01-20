<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($top_artist_rows as $item) {
    echo '<url>
            <loc>' . env('APP_URL') . $item['artist_url'] . '</loc>
            <changefreq>always</changefreq>
            <priority>0.9</priority>
        </url>';
}
echo '</urlset>';