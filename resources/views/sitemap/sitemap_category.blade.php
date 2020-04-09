<?php
use App\Library\Helpers;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($arrDefCat as $item) {
    echo '<url>
            <loc>' . env('APP_URL'). '/sitemap' . $item . '.xml</loc>
            <changefreq>always</changefreq>
            <priority>0.9</priority>
        </url>';
}
foreach ($cat_id2info as $item) {
    foreach ($item as $item_2) {
        echo '<url>
                <loc>' . env('APP_URL') . '/sitemap/' . substr(Helpers::category_url($item_2), 0, -1) . '.xml</loc>
                <changefreq>always</changefreq>
                <priority>0.9</priority>
            </url>';
    }
}
echo '</urlset>';