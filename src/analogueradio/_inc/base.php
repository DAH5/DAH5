---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>Analogue Radio</title>

        <link rel="stylesheet" type="text/css" href="<?php echo W3CSS_URL; ?>/4.15/w3.css">
        <link rel="stylesheet" type="text/css" href="<?php echo W3CSS_URL; ?>/w3-colors-metro.css">
        <link rel="stylesheet" type="text/css" href="<?php echo WEBFONTS_URL; ?>/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/video-player.css">

        <style type="text/css">
            body, h1, h2, h3, h4, h5, h6
            {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>

    <body class="w3-metro-darken">
        <div class="w3-auto w3-padding w3-black" style="border-radius: 0 0 20px 20px;">
            <h1><b><a href="/" style="text-decoration: none;">Analoge Radio</a></b></h1>
            <nav class="w3-bar w3-border-bottom w3-border-white">
                <a href="/analogueradio" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><?php echo isset( $metadata[ 'nav_item' ] ) && $metadata[ 'nav_item' ] == "home" ? '<b>Home</b>' : 'Home' ?></a>
                <a href="/analogueradio/bbc-radio-4" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><?php echo isset( $metadata[ 'nav_item' ] ) && $metadata[ 'nav_item' ] == "bbc-radio-4" ? '<b>BBC Radio 4</b>' : 'BBC Radio 4'; ?></a>
            </nav>
            
            {{ content }}
        </div>

        <footer class="w3-padding w3-center w3-small">
            <p>Archive by <a href="https://weburl.net/davidhunter" target="_blank">David Hunter</a>. <?php include 'src/_inc/poweredby.php'; ?></p>
            <p><a href="/"><img src="<?php echo IMAGES_URL; ?>/logos/dah5-logo-2024-alternate-150x35.png" alt="DAH5 Logo"></a></p>
        </footer>

        <script type="text/javascript" src="/assets/javascript/video-player.js"></script>
    </body>
</html>