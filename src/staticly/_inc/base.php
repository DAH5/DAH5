---
site_name: Staticly

content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata[ 'page_title' ] ) && $metadata[ 'page_title' ] ) echo $metadata[ 'page_title' ] . " - "; ?><?php echo $metadata[ 'site_name' ]; ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo W3CSS_URL; ?>/4.15/w3.css">
        <link rel="stylesheet" type="text/css" href="<?php echo W3CSS_URL; ?>/w3-colors-metro.css">
        <link rel="stylesheet" type="text/css" href="<?php echo W3CSS_URL; ?>/w3-colors-camo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo WEBFONTS_URL; ?>/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/staticly/assets/css/staticly.css">
    </head>

    <body class="w3-camo-black">
        <header class="w3-black w3-border-bottom w3-border-amber w3-center">
            <div class="w3-auto">
                <div class="w3-row">
                    <div class="w3-left w3-mobile">
                        <h1><b><a href="/staticly" class="w3-button w3-hover-none w3-hover-text-gray" style="color: var( --color-html-tag );"><span style="color: var( --color-html-bracket );">&lt;</span>--- metadata.site_name ---<span style="color: var( --color-html-bracket );">&gt;</span></a></b></h1>
                    </div>

                    <div class="w3-right w3-mobile">
                        <nav class="w3-bar w3-padding-24 w3-large ">
                            <a href="/staticly" class="w3-bar-item w3-button w3-hover-none w3-hover-text-gray w3-text-gray">Home</a>
                            <a href="/staticly/w3css" class="w3-bar-item w3-button w3-hover-none w3-hover-text-gray w3-text-gray"><b>W3</b><span class="w3-text-green">&bullet;</span>CSS</a>
                            <a href="/staticly/webfonts" class="w3-bar-item w3-button w3-hover-none w3-hover-text-gray w3-text-gray"><i>Web<b>Fonts</b></i></a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        {{ content }}

        <footer class="w3-black w3-text-gray w3-center w3-border-top w3-border-amber w3-small w3-padding-16">
            <div class="w3-auto w3-row">
                <p class="w3-half">Copyright &copy; <a href="https://weburl.net/davidhunter" target="_blank">David Hunter</a>.</p>
                <p class="w3-half"><a href="/"><img src="/assets/images/logos/dah5-logo-2024-alternate-150x35.png" alt="DAH5 Logo"></a></p>
            </div>
        </footer>
    </body>
</html>
