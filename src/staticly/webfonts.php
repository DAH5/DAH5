---
page_title: WebFonts
staticly_page: webfonts
layout: src/staticly/_inc/base.php
---

<section class="w3-white w3-padding-64 w3-center">
    <div class="w3-content w3-padding">
        <p class="w3-jumbo"><i>Web<b>Fonts</b></i></p>
        <p class="w3-xlarge w3-text-camo-gray">Choosing the right font can make all the difference!</p>
        <p class="w3-padding-32"></p>
    </div>
</section>

<section class="w3-padding-64 w3-bottombar w3-border-gray">
    <div class="w3-content w3-padding">
        <?php

        $webfonts = array( "droid-serif", "merriweather", "montserrat", "nunito", "poppins", "raleway", "ubuntu" );
        $webfont_types = array( "serif", "serif", "sans-serif", "sans-serif", "sans-serif", "sans-serif", "sans-serif" );

        $num_of_webfonts = count( $webfonts );

        $webfont_id = 0;

        for( $wf = 0; $wf < $num_of_webfonts; $wf++ )
        {
            $webfont = $webfonts[ $wf ];
            $webfont_type = $webfont_types[ $wf ];

            if( $webfont == "." || $webfont == ".." )
                continue;

            $webfont_id++;

            $webfont_name = ucwords( str_replace( "-", " ", $webfont ) );
            $webfont_url = 'https://webfonts.' . STORAGE_DOMAIN . '/' . $webfont . '/' . $webfont . '.css';
            ?>

            <div class="w3-padding-large w3-padding-64 w3-<?php echo ( $wf % 2 !== 0 ) ? 'right' : 'left'; ?>-align<?php if( $webfont_id !== 1 ) echo ' w3-border-gray w3-border-top'; ?> item-<?php echo $wf; ?> webfont-id-<?php echo $webfont_id; ?>">
                <link rel="stylesheet" type="text/css" href="<?php echo $webfont_url; ?>">
                <h3 class="font-<?php echo $webfont; ?>"><b><?php echo $webfont_name; ?></b></h3>
                <p class="w3-metro-darken w3-padding overflow w3-large w3-round-xlarge"><code><span style="color: var( --color-html-bracket );">&lt;</span><span style="color: var( --color-html-tag );">link</span> <span style="color: var( --color-html-attr );">rel</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"stylesheet"</span> <span style="color: var( --color-html-attr );">type</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"text/css"</span> <span style="color: var( --color-html-attr );">href</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"<?php echo $webfont_url; ?>"</span><span style="color: var( --color-html-bracket );">&gt;</span></code></p>
                <p class="font-<?php echo $webfont; ?>">Apply it using the included CSS class...</p>
                <p class="w3-metro-darken w3-padding overflow w3-large w3-round-xlarge"><code><span style="color: var( --color-html-bracket );">&lt;</span><span style="color: var( --color-html-tag );">span</span> <span style="color: var( --color-html-attr );">class</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"font-<?php echo $webfont; ?>"</span><span style="color: var( --color-html-bracket );">&gt;</span><span style="color: var( --color-html-text );"><?php echo $webfont_name; ?> WebFont</span><span style="color: var( --color-html-bracket );">&lt;/</span><span style="color: var( --color-html-tag );">span</span><span style="color: var( --color-html-bracket );">&gt;</span></code></p>
                <p class="font-<?php echo $webfont; ?>">Or apply it manually in your own CSS styling...</p>
                <p class="w3-metro-darken w3-padding overflow w3-large w3-round-xlarge"><code><span style="color: var( --color-html-bracket );">&lt;</span><span style="color: var( --color-html-tag );">span</span> <span style="color: var( --color-html-attr );">style</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"font-family: '<?php echo $webfont_name; ?>', <?php echo $webfont_type; ?>;"</span><span style="color: var( --color-html-bracket );">&gt;</span><span style="color: var( --color-html-text );"><?php echo $webfont_name; ?> WebFont</span><span style="color: var( --color-html-bracket );">&lt;/</span><span style="color: var( --color-html-tag );">span</span><span style="color: var( --color-html-bracket );">&gt;</span></code></p>
            </div>

            <?php
        }

        ?>
    </div>
</section>
