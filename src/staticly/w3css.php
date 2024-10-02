---
page_title: W3.CSS
staticly_page: w3css
layout: src/staticly/_inc/base.php
---

<section class="w3-white w3-padding-64 w3-center">
    <div class="w3-content w3-padding">
        <p class="w3-jumbo"><b>W3</b><span class="w3-text-green">&bullet;</span>CSS</p>
        <h3 class="w3-xxxlarge">A Quality Alternative</h3>
        <p class="w3-xlarge w3-text-camo-gray">Front End CSS Framework by <span class="w3-text-green">W3 Schools</span>.</p>
        <p class="w3-large"><a href="https://www.w3schools.com/w3css" target="_blank" class="w3-button w3-metro-dark-green w3-hover-metro-dark-green w3-text-white w3-hover-text-white w3-round-xxlarge w3-padding-large">Visit <b>W3</b><span class="w3-text-light-green">&bullet;</span>CSS Website</a></p>
        <p class="w3-padding-32"></p>
    </div>
</section>

<section class="w3-padding-64 w3-bottombar w3-border-gray">
    <div class="w3-content w3-padding">
        <p><b>To get started, just link to the CSS file.</b></p>
        <p class="w3-metro-darken w3-padding overflow w3-large w3-round-xlarge"><code><span style="color: var( --color-html-bracket );">&lt;</span><span style="color: var( --color-html-tag );">link</span>&nbsp;<span style="color: var( --color-html-attr );">rel</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"stylesheet"</span>&nbsp;<span style="color: var( --color-html-attr );">type</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"text/css"</span>&nbsp;<span style="color: var( --color-html-attr );">href</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"<?php echo STORAGE_DOMAIN; ?>/w3css/4.15/w3.css"</span><span style="color: var( --color-html-bracket );">&gt;</span></code></p>

        <p>&nbsp;</p>

        <p><b>Other available files are...</b></p>

        <?php

        $w3css_files = array( "w3-colors-2021", "w3-colors-camo", "w3-colors-flat", "w3-colors-food", "w3-colors-highway", "w3-colors-ios", "w3-colors-metro", "w3-colors-safety", "w3-colors-signal", "w3-colors-vivid", "w3-colors-win8" );

        foreach( $w3css_files as $w3css_file )
        {
            $path_to_w3css_file = __DIR__ . DIRECTORY_SEPARATOR . "w3css" . DIRECTORY_SEPARATOR . $w3css_file;

            $w3css_file_url = STORAGE_DOMAIN . "/w3css/" . $w3css_file;

            ?>
            
            <p class="w3-metro-darken w3-padding overflow w3-large w3-round-xlarge"><code><span style="color: var( --color-html-bracket );">&lt;</span><span style="color: var( --color-html-tag );">link</span>&nbsp;<span style="color: var( --color-html-attr );">rel</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"stylesheet"</span>&nbsp;<span style="color: var( --color-html-attr );">type</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"text/css"</span>&nbsp;<span style="color: var( --color-html-attr );">href</span><span style="color: var( --color-html-equals );">=</span><span style="color: var( --color-html-string );">"<?php echo $w3css_file_url . ".css"; ?>"</span><span style="color: var( --color-html-bracket );">&gt;</span></code></p>
            
            <?php
        }

        ?>
    </div>
</section>
