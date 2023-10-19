---
content_placeholder: {{ content }}
current_nav_item: analogueradio
stylesheets: /assets/w3css/4.15/w3.css::https://w3css.storage.dah5.com/w3-colors-metro.css::/assets/webfonts/poppins/poppins.css::/analogueradio/assets/css/analogueradio.css
---
<?php include 'src/_inc/header.php'; ?>
        </div>
    </div>
</section>

<div>
    <div class="w3-auto w3-padding" style="border-radius: 0 0 20px 20px;">
        <h1><b><a href="/analogueradio" style="text-decoration: none;">Analoge Radio</a></b></h1>
        <nav class="w3-bar w3-border-bottom w3-border-white">
            <a href="/analogueradio" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><?php echo isset( $metadata['analogueradio_nav_item'] ) && $metadata['analogueradio_nav_item'] == "home" ? '<b>Home</b>' : 'Home' ?></a>
            <a href="/analogueradio/bbc-radio-4" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><?php echo isset( $metadata['analogueradio_nav_item'] ) && $metadata['analogueradio_nav_item'] == "bbc-radio-4" ? '<b>BBC Radio 4</b>' : 'BBC Radio 4'; ?></a>
        </nav>
        
        {{ content }}
    </div>
</div>

<section>
    <div>
        <div>
<?php include 'src/_inc/footer.php'; ?>
