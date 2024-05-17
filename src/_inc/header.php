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
        
        <link rel="stylesheet" type="text/css" href="<?php echo WEBFONTS_URL; ?>/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

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
    </head>
    
    <body>
        <?php

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

        <header>
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="<?php echo IMAGES_URL; ?>/logos/dah5-logo-2024-alternate.png" class="logo"></a>
                </div>

                <nav>
                    <?php if( isset( $main_nav_items ) && is_array( $main_nav_items ) ): ?>
                        <?php foreach( $main_nav_items as $main_nav_item ): ?>
                            <?php if( ! is_array( $main_nav_item ) || ! isset( $main_nav_item['name'], $main_nav_item['text'], $main_nav_item['url'] ) ) continue; ?>
                            <a href="<?php echo $main_nav_item['url']; ?>"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == $main_nav_item['name'] ): ?> class="current"<?php endif; ?>><?php echo $main_nav_item['text']; ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </nav>
            </div>
        </header>

        <?php if( isset( $metadata['section'] ) && $metadata['section'] ): ?>
        <section class="section-title">
            <div class="container">
                <?php if( isset( $metadata['sectionURL'] ) && $metadata['section'] && $metadata['sectionURL'] ): ?>
                    <a href="<?php echo $metadata['sectionURL']; ?>" class="section-title"><?php echo $metadata['section']; ?></a>
                <?php else: ?>
                    <span class="section-title"><?php echo $metadata['section']; ?></span>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <section class="content"<?php if( isset( $metadata['content_background_image'] ) && $metadata['content_background_image'] ) echo ' style="background-image: url(\'' . IMAGES_URL . $metadata['content_background_image'] . '\');"'; ?>>
            <div class="container">
                <?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "reference" ): ?>
                    <nav>
                        <a href="/reference/html/"<?php if( isset( $metadata['reference_section'] ) && $metadata['reference_section'] == "html" ): ?> class="current"<?php endif; ?>>HTML</a>
                        
                        <?php if( isset( $metadata['reference_section'], $metadata['reference_page'] ) && $metadata['reference_section'] == "html" ): ?>
                            <div>
                                <a href="/reference/html/"<?php if( $metadata['reference_page'] == "intro" ): ?> class="current"<?php endif; ?>>Intro</a>
                            </div>
                        <?php endif; ?>
                    </nav>
                <?php endif; ?>
                <div class="content">
                    <?php if( isset( $metadata['reference_section'] ) ): ?>
                        <?php if( $metadata['reference_section'] == "html" ): ?>
                            <h1>HTML Reference</h1>
                        <?php endif; ?>
                    <?php endif; ?>
