---
page-title: Tools
main-nav-item: tools
layout: src/_inc/layout.php
---

<section class="minisite-header">
    <div class="container">
        <h1>Tools</h1>
    </div>
</section>

<section style="padding: 64px 0px;">
    <div class="container">
        <p><i>Some web based tools to help with some tedious tasks that can be a pain to do manually.</i></p>

        <h4>Available Tools</h4>

        <?php

        $tools = array
        (
            array
            (
                'title' => 'Find URLs in String',
                'url' => '/tools/find-urls-in-string'
            ),
            array
            (
                'title' => 'DNS Lookup Tool',
                'url' => '/tools/dns-lookup'
            ),
        );

        ?>

        <?php if( isset( $tools ) && is_array( $tools ) && count( $tools ) > 0 ): ?>
            <?php foreach( $tools as $tool ): ?>
                <?php if( ! isset( $tool['title'], $tool['url'] ) || ! $tool['title'] || ! $tool['url'] ) continue; ?>
                <p><b><?php echo $tool['title']; ?></b> - <a href="<?php echo $tool['url']; ?>">Go to Tool</a></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
