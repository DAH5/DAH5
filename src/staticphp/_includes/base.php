---
site_title: StaticPHP
site_tagline: A Static Site Generator written in PHP. It turns source PHP files into static HTML files.
site_author: David Hunter
site_author_url: https://davidhunter.scot/
images_url: https://images.storage.ict.rocks
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ) echo '--- metadata.page_title --- - '; if( isset( $metadata['current_nav_item'], $metadata['docs_nav_item'] ) && $metadata['current_nav_item'] == "docs" ) echo 'Docs - '; ?><?php echo $metadata['site_title']; ?><?php if( ! isset( $metadata['page_title'] ) || ! $metadata['page_title'] ) echo ' - ' . $metadata['site_tagline']; ?></title>

        <link rel="stylesheet" type="text/css" href="https://staticly.cc/webfonts/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/staticphp/assets/css/main.css">
    </head>
    
    <body class="w3-light-gray">
        <header>
            <div class="container">
                <h1><a href="/">--- metadata.site_title ---</a></h1>
            </div>
        </header>

        <?php

        $main_nav_items[] = array
        (
            "id" => "home",
            "text" => "Home",
            "url" => "/staticphp",
        );
        
        $main_nav_items[] = array
        (
            "id" => "about",
            "text" => "About",
            "url" => "/staticphp/about",
        );

        $main_nav_items[] = array
        (
            "id" => "docs",
            "text" => "Docs",
            "url" => "/staticphp/docs",
        );

        $docs_navitems[] = array
        (
            "id" => "getting-started",
            "url" => "/staticphp/docs/getting-started",
            "text" => "Getting Started"
        );

        $docs_navitems[] = array
        (
            "id" => "metadata",
            "url" => "/staticphp/docs/metadata",
            "text" => "MetaData"
        );

        $docs_navitems[] = array
        (
            "id" => "php-files",
            "url" => "/staticphp/docs/php-files",
            "text" => "PHP Files"
        );

        $docs_navitems[] = array
        (
            "id" => "html-files",
            "url" => "/staticphp/docs/html-files",
            "text" => "HTML Files"
        );

        $docs_navitems[] = array
        (
            "id" => "functional-blocks",
            "url" => "/staticphp/docs/functional-blocks",
            "text" => "Functional Blocks"
        );

        ?>

        <nav class="main">
            <div class="container">
                <?php foreach( $main_nav_items as $main_nav_item ): ?>
                    
                <a href="<?php echo $main_nav_item['url']; ?>"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == $main_nav_item['id'] ) echo ' class="current"'; if( substr( $main_nav_item['url'], 0, 7 ) == "http://" || substr( $main_nav_item['url'], 0, 8 ) == "https://" ) echo ' target="_blank"'; ?>><?php echo $main_nav_item['text']; ?></a>
                
                <?php endforeach; ?>
            </div>
        </nav>

        <section class="content">
            <?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "docs" ): ?>
                <div class="container docs">
                    <div class="sidebar">
                        <h1><a href="/docs">Documentation</a></h1>
                        
                        <input type="checkbox" class="toggle-checkbox" id="toggle-docs-menu">
                        
                        <p class="toggle-docs-menu-btn"><label for="toggle-docs-menu">Toggle Menu</label></p>

                        <nav>
                            <?php foreach( $docs_navitems as $navitem ): ?>
                                <a href="<?php echo $navitem['url']; ?>"<?php if( isset( $metadata['docs_nav_item'] ) && $metadata['docs_nav_item'] == $navitem['id'] ) echo ' class="current"'; ?>><?php echo $navitem['text']; ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>

                    <div class="content">
                        {{ content }}
                    </div>
                </div>
            <?php else: ?>
                <div class="container">
                    {{ content }}
                </div>
            <?php endif; ?>
        </section>

        <footer>
            <div class="container">
                <p class="small">Copyright &copy; <a href="<?php echo $metadata['site_author_url']; ?>" target="_blank" style="text-decoration: none;"><?php echo $metadata['site_author']; ?></a>.</p>
                <p class="tiny">Site built and deployed from <a href="https://github.com/DavidHunterScot/StaticPHP-Website" target="_blank">Source Code on GitHub</a>.</p>
            </div>
        </footer>
    </body>
</html>
