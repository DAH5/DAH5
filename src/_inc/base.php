---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ): ?><?php echo $metadata['page_title']; ?> - <?php endif; ?>DAH5<?php if( isset( $metadata['section'] ) && $metadata['section'] ): ?> <?php echo $metadata['section']; ?><?php endif; ?></title>
        
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
        <div class="container">
            <header>
                <label for="nav-toggle" class="bars">
                    &#9776;
                </label>

                <a href="/"><img src="/assets/images/dah5-logo-2022.svg" class="logo"></a>
                
                <?php if( isset( $metadata['section'], $metadata['sectionURL'] ) && $metadata['section'] && $metadata['sectionURL'] ): ?>
                    <a href="<?php echo $metadata['sectionURL']; ?>" class="section-title"><?php echo $metadata['section']; ?></a>
                <?php elseif( isset( $metadata['section'] ) && $metadata['section'] ): ?>
                    <span class="section-title"><?php echo $metadata['section']; ?></span>
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
                        <a href="<?php echo $main_nav_item['url']; ?>"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == $main_nav_item['name'] ): ?> class="current"<?php endif; ?>><?php echo $main_nav_item['text']; ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </nav>

            <section class="content">
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

                    {{ content }}
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
        
        <?php if( isset( $metadata['footer_scripts'] ) ): ?>
            <?php foreach( explode( "::", $metadata['footer_scripts'] ) as $script ): ?>
                <script type="text/javascript" src="<?php echo $script; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
