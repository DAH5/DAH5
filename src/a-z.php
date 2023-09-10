---
page_title: A-Z
layout: src/_inc/base.php
---

<h2>--- metadata.page_title ---</h2>

<p>This page has a complete list of all pages on the DAH5 website. It may also include pages in development with broken features.</p>

<ul class="sitemap">
--- loop( dir = "src", ignores = "404;staticphp" ) ---
    <li><a href="--- loop.uri ---">--- loop.page_title ---</a></li>
--- endloop ---
</ul>
