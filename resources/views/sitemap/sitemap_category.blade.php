<?php
use App\Library\Helpers;
echo '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($arrDefCat as $item) {
    echo '<sitemap>
            <loc>' . env('APP_URL'). '/sitemap' . $item . '.xml</loc>
            <changefreq>always</changefreq>
            <priority>0.9</priority>
            <lastmod>' . date("Y-m-d\TH:i:s+00:00") . '</lastmod>
        </sitemap>';
}
foreach ($cat_id2info as $item) {
    foreach ($item as $item_2) {
        echo '<sitemap>
                <loc>' . env('APP_URL') . '/sitemap/' . substr(Helpers::category_url($item_2), 0, -1) . '.xml</loc>
                <changefreq>always</changefreq>
                <priority>0.9</priority>
                <lastmod>' . date("Y-m-d\TH:i:s+00:00") . '</lastmod>
            </sitemap>';
    }
}
echo '</sitemapindex>';