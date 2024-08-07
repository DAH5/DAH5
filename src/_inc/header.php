<?php include 'src/_inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>--- if( article_title ) ------ metadata.article_title --- - Blog - --- endif ------ if( page-title ) ------ metadata.page-title --- - --- endif ------ if( docs_nav_item ) ---Docs - --- endif ------ if( site_title ) ------ metadata.site_title --- - --- endif ---DAH5</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/base.css">

        <?php if( isset( $metadata[ 'stylesheets' ] ) && $metadata[ 'stylesheets' ] ): ?>
            <?php $stylesheets = explode( '::', $metadata[ 'stylesheets' ] ); ?>
            
            <?php foreach( $stylesheets as $stylesheet ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </head>

    <body>
        <header>
            <div class="container">
                <div class="logos">
                    <div class="logo">
                        <a href="/"><img src="/assets/images/logos/dah5-logo-2024-alternate-150x35.png" alt="DAH5" width="107" height="25"></a>
                    </div>

                    --- if( logo && logo_url ) ---
                    <div class="logo">
                        <a href="--- metadata.logo_url ---"><img src="--- metadata.logo ---"></a>
                    </div>
                    --- endif ---
                </div>

                <?php if( isset( $metadata[ 'site_nav' ] ) && $metadata[ 'site_nav' ] ): ?>
                <nav>
                    <?php $site_nav_items = explode( '::', $metadata[ 'site_nav' ] ); ?>
                    <?php foreach( $site_nav_items as $site_nav_item ): ?>
                        <?php $site_nav_item_parts = explode( ':', $site_nav_item ); ?>
                        <a href="<?php echo $site_nav_item_parts[ 1 ]; ?>"<?php if( isset( $site_nav_item_parts[ 2 ], $metadata[ 'site_nav_item' ] ) && $site_nav_item_parts[ 2 ] == $metadata[ 'site_nav_item' ] ) echo ' class="current"'; ?>><?php echo $site_nav_item_parts[ 0 ]; ?></a>
                    <?php endforeach; ?>
                </nav>
                <?php else: ?>
                <nav>
                    <a href="/"--- if( main-nav-item == "home" ) --- class="current"--- endif --->Home</a>
                    <a href="/games"--- if( main-nav-item == "games" ) --- class="current"--- endif --->Games</a>
                    <a href="/tools"--- if( main-nav-item == "tools" ) --- class="current"--- endif --->Tools</a>
                    <a href="/a-z"--- if( main-nav-item == "a-z" ) --- class="current"--- endif --->A - Z</a>
                    <div class="clearfloat"></div>
                </nav>
                <?php endif; ?>

                <div class="clearfloat"></div>
            </div>
        </header>

        --- if( archived ) ---
        <section class="archived">
            <div class="container">
                <p class="heading">Archived Page</p>
                <p class="description">This page has been archived because there is no intention to update it in the future.</p>
            </div>
        </section>
        --- endif ---
