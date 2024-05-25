---
site_title: StaticPHP
site_tagline: A Static Site Generator written in PHP. It turns source PHP files into static HTML files.
content_placeholder: {{ content }}
stylesheets: /staticphp/assets/css/main.css
current_nav_item: staticphp
---
<?php include 'src/_inc/header.php'; ?>

    <div class="staticphp">
        <div class="header">
            <h2 class="container padding-16"><a href="/">--- metadata.site_title ---</a></h2>
        </div>

        <?php

        $staticphp_nav_items[] = array
        (
            "id" => "home",
            "text" => "Home",
            "url" => "/staticphp",
        );
        
        $staticphp_nav_items[] = array
        (
            "id" => "about",
            "text" => "About",
            "url" => "/staticphp/about",
        );

        $staticphp_nav_items[] = array
        (
            "id" => "docs",
            "text" => "Docs",
            "url" => "/staticphp/docs",
        );

        $staticphp_docs_navitems[] = array
        (
            "id" => "getting-started",
            "url" => "/staticphp/docs/getting-started",
            "text" => "Getting Started"
        );

        $staticphp_docs_navitems[] = array
        (
            "id" => "metadata",
            "url" => "/staticphp/docs/metadata",
            "text" => "MetaData"
        );

        $staticphp_docs_navitems[] = array
        (
            "id" => "php-files",
            "url" => "/staticphp/docs/php-files",
            "text" => "PHP Files"
        );

        $staticphp_docs_navitems[] = array
        (
            "id" => "html-files",
            "url" => "/staticphp/docs/html-files",
            "text" => "HTML Files"
        );

        $staticphp_docs_navitems[] = array
        (
            "id" => "functional-blocks",
            "url" => "/staticphp/docs/functional-blocks",
            "text" => "Functional Blocks"
        );

        $staticphp_docs_navitems[] = array
        (
            "id" => "minify",
            "url" => "/staticphp/docs/minify",
            "text" => "Minify"
        );

        ?>

        <div class="container padding-16 inline-block-parent nav">
            <?php for( $sni = 0; $sni < count( $staticphp_nav_items ); $sni++ ): ?>
                <?php $main_nav_item = $staticphp_nav_items[ $sni ]; ?>
                
                <a href="<?php echo $main_nav_item['url']; ?>" class="<?php if( isset( $metadata['staticphp_nav_item'] ) && $metadata['staticphp_nav_item'] == $main_nav_item['id'] ) echo ' current'; ?>"<?php if( substr( $main_nav_item['url'], 0, 7 ) == "http://" || substr( $main_nav_item['url'], 0, 8 ) == "https://" ) echo ' target="_blank"'; ?>><?php echo $main_nav_item['text']; ?></a>
                
                <?php if( $sni < count( $staticphp_nav_items ) - 1 ): ?>
                    &nbsp;
                <?php endif; ?>
            <?php endfor; ?>
        </div>

        <div class="background-white">
            <div class="container padding-16">
                <?php if( isset( $metadata['staticphp_nav_item'] ) && $metadata['staticphp_nav_item'] == "docs" ): ?>
                    <div class="docs">
                        <div class="sidebar">
                            <h1><a href="/staticphp/docs">Documentation</a></h1>
                            
                            <input type="checkbox" class="toggle-checkbox" id="toggle-docs-menu">
                            
                            <p class="toggle-docs-menu-btn"><label for="toggle-docs-menu">Toggle Menu</label></p>

                            <div class="nav staticphp-docs">
                                <?php foreach( $staticphp_docs_navitems as $navitem ): ?>
                                    <a href="<?php echo $navitem['url']; ?>"<?php if( isset( $metadata['docs_nav_item'] ) && $metadata['docs_nav_item'] == $navitem['id'] ) echo ' class="current"'; ?>><?php echo $navitem['text']; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="content">
                            {{ content }}
                        </div>
                    </div>
                <?php else: ?>
                    {{ content }}
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php include 'src/_inc/footer.php'; ?>
