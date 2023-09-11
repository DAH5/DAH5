---
dh_current_page: blog
page_title: Blog
footer_scripts: /davidhunter/assets/js/blog-search.js
layout: src/davidhunter/_inc/base.php
---

<form class="blog-search-form" id="blog-search-form">
    <fieldset>
        <input type="text" name="searchbox" id="searchbox">
        <button type="submit">Search</button>
    </fieldset>
</form>

<h2 class="blog-title">All Blog Entries</h2>

<section class="blog-entries">
    --- loop( dir = "src/davidhunter/blog", sort = "descending", json = "public/davidhunter/api/blog/entries.json" ) ---
    <article>
        <h3 class="title">--- loop.article_title ---</h3>
        <p class="metadata">Published by --- loop.article_author --- on --- loop.article_date --- at --- loop.article_time ---.</p>
        <p class="description">--- loop.article_description ---</p>
        <p class="buttons">
            <a href="--- loop.uri ---">Read More</a>
        </p>
    </article>
    --- endloop ---
</section>