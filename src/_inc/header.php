<?php

if( ! defined( "DOMAIN" ) )
    define( "DOMAIN", "dah5.com" );
if( ! defined( "STORAGE_DOMAIN" ) )
    define( "STORAGE_DOMAIN", "storage.dah5.com" );
if( ! defined( "IMAGES_URL" ) )
    define( "IMAGES_URL", "/assets/images" );
if( ! defined( "VIDEOS_URL" ) )
    define( "VIDEOS_URL", "https://videos." . STORAGE_DOMAIN );
if( ! defined( "W3CSS_URL" ) )
    define( "W3CSS_URL", "/assets/w3css" );
if( ! defined( "WEBFONTS_URL" ) )
    define( "WEBFONTS_URL", "/assets/webfonts" );

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ): ?><?php echo $metadata['page_title']; ?> - <?php endif; if( isset( $metadata['article_title'] ) && $metadata['article_title'] ): echo $metadata['article_title'] . ' - '; endif; if( isset( $metadata['staticphp_nav_item'], $metadata['docs_nav_item'] ) && $metadata['staticphp_nav_item'] == "docs" ) echo 'Docs - '; if( isset( $metadata['dh_current_page'], $metadata['article_title'] ) && $metadata['dh_current_page'] == "blog" ) echo 'Blog - '; if( isset( $metadata['dh_current_page'] ) ) echo 'David Hunter - '; ?>DAH5<?php if( isset( $metadata['section'] ) && $metadata['section'] ): ?> <?php echo $metadata['section']; ?><?php endif; ?></title>
        
        <link rel="stylesheet" type="text/css" href="/assets/css/base.css">
        <link rel="stylesheet" type="text/css" href="<?php echo WEBFONTS_URL; ?>/poppins/poppins.css">

        <?php if( isset( $metadata['stylesheets'] ) ): ?>
            <?php foreach( explode( "::", $metadata['stylesheets'] ) as $stylesheet ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if( isset( $metadata['scripts_head'] ) ): ?>
            <?php foreach( explode( "::", $metadata['scripts_head'] ) as $script ): ?>
                <script type="text/javascript" src="<?php echo $script; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>

        <style type="text/css">
            body, h1, h2, h3, h4, h5, h6 { font-family: "Poppins", sans-serif; }

            .w3-auto { max-width: 80rem; }
        </style>
    </head>
    
    <body class="<?php if( isset( $metadata[ 'body_class' ] ) && trim( $metadata[ 'body_class' ] ) ) echo trim( $metadata[ 'body_class' ] ); else echo 'background-light-gray'; ?>">
        <?php

        $main_nav_items[] = array
        (
            "name" => "home",
            "text" => "Home",
            "url" => "/"
        );

        $main_nav_items[] = array
        (
            "name" => "analogueradio",
            "text" => "Analogue Radio",
            "url" => "/analogueradio"
        );

        $main_nav_items[] = array
        (
            "name" => "staticphp",
            "text" => "StaticPHP",
            "url" => "/staticphp"
        );

        $main_nav_items[] = array
        (
            "name" => "staticly",
            "text" => "Staticly",
            "url" => "/staticly"
        );

        $main_nav_items[] = array
        (
            "name" => "a-z",
            "text" => "A-Z",
            "url" => "/a-z"
        );

        ?>

        <div class="background-very-dark">
            <div class="container padding-16 inline-block-parent middle header-nav">
                <a href="/" class="logo">
                    <img src="<?php echo IMAGES_URL; ?>/logos/dah5-logo-2024-alternate-verydarkgraybg.png" alt="DAH5 Logo">
                </a>

                &nbsp;&nbsp;
                
                <?php if( isset( $main_nav_items ) && is_array( $main_nav_items ) ): ?>
                    <?php for( $mni = 0; $mni < count( $main_nav_items ); $mni++ ): ?>
                        <?php $main_nav_item = $main_nav_items[ $mni ]; ?>
                        <?php if( ! is_array( $main_nav_item ) || ! isset( $main_nav_item['name'], $main_nav_item['text'], $main_nav_item['url'] ) ) continue; ?>
                        <a href="<?php echo $main_nav_item['url']; ?>"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == $main_nav_item['name'] ): echo ' class="current"'; endif; ?>><?php echo $main_nav_item['text']; ?></a>
                        
                        <?php if( $mni < count( $main_nav_items ) - 1 ): ?>
                            &nbsp;&nbsp;
                        <?php endif; ?>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>

        <?php if( isset( $metadata['section'] ) && $metadata['section'] ): ?>
        <section>
            <div class="container padding-16">
                <?php if( isset( $metadata['sectionURL'] ) && $metadata['section'] && $metadata['sectionURL'] ): ?>
                    <a href="<?php echo $metadata['sectionURL']; ?>" class="text-xlarge"><b><?php echo $metadata['section']; ?></b></a>
                <?php else: ?>
                    <span class="text-xlarge"><b><?php echo $metadata['section']; ?></b></span>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>
