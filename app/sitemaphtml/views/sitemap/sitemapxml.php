<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
  <loc><?php echo \Asgard\Core\App::get('url')->base() ?></loc>
  <changefreq>weekly</changefreq>
</url>
<url>
  <loc><?php echo \Asgard\Core\App::get('url')->to('') ?></loc>
  <changefreq>weekly</changefreq>
</url>
<?php
#example
/*
foreach(Actualite::all() as $a): ?>
<url>
  <loc><?php echo $a->url() ?></loc>
  <changefreq>weekly</changefreq>
</url>
<?php endforeach
*/
?>
</urlset>