<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ): ?><?php echo $page_title; ?> - <?php endif; ?>DAH5<?php if( isset( $section ) && $section ): ?> <?php echo $section; ?><?php endif; ?></title>
        
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

        <?php if( isset( $stylesheets ) && is_array( $stylesheets ) && count( $stylesheets ) > 0 ): ?>
            <?php foreach( $stylesheets as $stylesheet ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if( isset( $scripts['head'] ) && is_array( $scripts['head'] ) && count( $scripts['head'] ) > 0 ): ?>
            <?php foreach( $scripts['head'] as $script ): ?>
                <?php if( ! isset( $script['src'] ) ) continue; ?>
                <script type="text/javascript" src="<?php echo $script['src']; ?>"<?php if( isset( $script['defer'] ) ): ?> defer="defer"<?php endif; ?>></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </head>
    
    <body>
        <div class="container">
            <header>
                <label for="nav-toggle" class="bars">
                    &#9776;
                </label>

                <a href="/"><img src="/assets/images/dah5-logo-2022.svg" class="logo"></a>
                
                <?php if( isset( $section, $sectionURL ) && $section && $sectionURL ): ?>
                    <a href="<?php echo $sectionURL; ?>" class="section-title"><?php echo $section; ?></a>
                <?php elseif( isset( $section ) && $section ): ?>
                    <span class="section-title"><?php echo $section; ?></span>
                <?php endif; ?>
            </header>

            <input type="checkbox" id="nav-toggle">
      
            <nav class="main">
                <?php

                $main_nav_items[] = array
                (
                    "name" => "home",
                    "text" => "Home",
                    "url" => "/"
                );

                $main_nav_items[] = array
                (
                    "name" => "about",
                    "text" => "About",
                    "url" => "/about"
                );

                $main_nav_items[] = array
                (
                    "name" => "games",
                    "text" => "Games",
                    "url" => "/games"
                );

                $main_nav_items[] = array
                (
                    "name" => "tools",
                    "text" => "Tools",
                    "url" => "/tools"
                );

                $main_nav_items[] = array
                (
                    "name" => "reference",
                    "text" => "Reference",
                    "url" => "/reference"
                );

                ?>
                
                <?php if( isset( $main_nav_items ) && is_array( $main_nav_items ) ): ?>
                    <?php foreach( $main_nav_items as $main_nav_item ): ?>
                        <?php if( ! is_array( $main_nav_item ) || ! isset( $main_nav_item['name'], $main_nav_item['text'], $main_nav_item['url'] ) ) continue; ?>
                        <a href="<?php echo $main_nav_item['url']; ?>"<?php if( isset( $current_nav_item ) && $current_nav_item == $main_nav_item['name'] ): ?> class="current"<?php endif; ?>><?php echo $main_nav_item['text']; ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </nav>

            <section class="content">
                <?php if( isset( $current_nav_item ) && $current_nav_item == "reference" ): ?>
                    <nav>
                        <a href="/reference/html/"<?php if( isset( $reference_section ) && $reference_section == "html" ): ?> class="current"<?php endif; ?>>HTML</a>
                        
                        <?php if( isset( $reference_section, $reference_page ) && $reference_section == "html" ): ?>
                            <div>
                                <a href="/reference/html/"<?php if( $reference_page == "intro" ): ?> class="current"<?php endif; ?>>Intro</a>
                            </div>
                        <?php endif; ?>
                    </nav>
                <?php endif; ?>
                <div class="content">
                    <?php if( isset( $reference_section ) ): ?>
                        <?php if( $reference_section == "html" ): ?>
                            <h1>HTML Reference</h1>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php $page_content(); ?>
                </div>
            </section>

            <footer>
                Unless otherwise stated, website and content is by <a href="https://davidhunter.scot" target="_blank">David Hunter</a>.
                <script type="text/javascript">
                    document.write( '<br><a href="javascript: toggle_color_scheme();">Toggle Color Scheme</a>' );
                    function toggle_color_scheme()
                    {
                        document.body.classList.toggle( 'toggle-color-scheme' );
                    }
                </script>
            </footer>
        </div>
        
        <?php if( isset( $scripts['footer'] ) && is_array( $scripts['footer'] ) && count( $scripts['footer'] ) > 0 ): ?>
            <?php foreach( $scripts['footer'] as $script ): ?>
                <script type="text/javascript" src="<?php echo $script; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
