<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{env('APP_URL')}}/sitemap_category.xml</loc>
        <lastmod><?php echo date("Y-m-d\TH:i:s+00:00"); ?></lastmod>
    </sitemap>
    <sitemap>
        <loc>{{env('APP_URL')}}/sitemap_artist.xml</loc>
        <lastmod><?php echo date("Y-m-d\TH:i:s+00:00"); ?></lastmod>
    </sitemap>
    <sitemap>
        <loc>{{env('APP_URL')}}/sitemap_music.xml</loc>
        <lastmod><?php echo date("Y-m-d\TH:i:s+00:00"); ?></lastmod>
    </sitemap>
    <sitemap>
        <loc>{{env('APP_URL')}}/sitemap_video.xml</loc>
        <lastmod><?php echo date("Y-m-d\TH:i:s+00:00"); ?></lastmod>
    </sitemap>
</sitemapindex>
