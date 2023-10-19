---
section: Staticly
sectionURL: /staticly
current_nav_item: staticly
stylesheets: /assets/w3css/4.15/w3.css::/assets/w3css/w3-colors-camo.css::/assets/w3css/w3-colors-metro.css::/staticly/assets/css/staticly.css
content_placeholder: {{ content }}
---
<?php include 'src/_inc/header.php'; ?>
        </div>
    </div>
</section>

<nav class="w3-bar" style="background-color: var( --color-background-alt ); color: var( --color-text );">
    <div class="container">
        <a href="/staticly" class="w3-bar-item w3-button w3-hover-none"><?php if( isset( $metadata['staticly_page'] ) && $metadata['staticly_page'] == "home" ) echo '<b>Home</b>'; else echo 'Home'; ?></a>
        <a href="/staticly/w3css" class="w3-bar-item w3-button w3-hover-none"><?php if( isset( $metadata['staticly_page'] ) && $metadata['staticly_page'] == "w3css" ) echo '<b>W3.CSS</b>'; else echo 'W3.CSS'; ?></a>
        <a href="/staticly/webfonts" class="w3-bar-item w3-button w3-hover-none"><?php if( isset( $metadata['staticly_page'] ) && $metadata['staticly_page'] == "webfonts" ) echo '<b>WebFonts</b>'; else echo 'WebFonts'; ?></a>
    </div>
</nav>

{{ content }}

<section>
    <div>
        <div>
<?php include 'src/_inc/footer.php'; ?>
