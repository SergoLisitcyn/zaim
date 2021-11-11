<?php
echo '<?xml version="1.0" encoding="utf-8"?' . ">\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://kz.smartzaim.kz/</loc>
        <lastmod>2021-11-11T17:55:23+00:00</lastmod>
        <priority>1.00</priority>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://kz.smartzaim.kz/faq</loc>
        <lastmod>2021-11-11T17:55:23+00:00</lastmod>
        <priority>0.80</priority>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://kz.smartzaim.kz/valuta-bagamy</loc>
        <lastmod>2021-11-11T17:55:23+00:00</lastmod>
        <priority>0.80</priority>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://kz.smartzaim.kz/contact</loc>
        <lastmod>2021-11-11T17:55:23+00:00</lastmod>
        <priority>0.80</priority>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://kz.smartzaim.kz/rating</loc>
        <lastmod>2021-11-11T17:55:23+00:00</lastmod>
        <priority>0.80</priority>
        <changefreq>weekly</changefreq>
    </url>
    <?php foreach($urls as $url): ?>
<url>
        <loc><?= $host.'/' . $url['loc']; ?></loc>
        <lastmod><?= $url['lastmod']; ?></lastmod>
        <priority><?= $url['priority']; ?></priority>
        <changefreq>weekly</changefreq>
    </url>
    <?php endforeach; ?>
</urlset>