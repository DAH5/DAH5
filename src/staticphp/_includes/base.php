---
site_title: StaticPHP
site_tagline: Fast and Simple Static Site Generator
site_author: David Hunter
site_author_url: /davidhunter/
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $metadata[ 'page_title' ] ) && $metadata[ 'page_title' ] ) echo $metadata[ 'page_title' ] . ' - '; ?>--- metadata.site_title --- - --- metadata.site_tagline ---</title>

        <link rel="stylesheet" type="text/css" href="/staticphp/assets/css/main.css">
    </head>

    <body>
        <div class="header">
            <div class="container">
                <div class="logo">
                    <h1><a href="/staticphp">--- metadata.site_title ---</a></h1>
                </div>

                <ul class="navbar">
                    <li><a href="/staticphp/"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'home' ) echo ' class="current"'; ?>>Home</a></li>
                    <li><a href="/staticphp/features"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'features' ) echo ' class="current"'; ?>>Features</a></li>
                    <li><a href="/staticphp/docs"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'docs' ) echo ' class="current"'; ?>>Docs</a></li>
                    <li><a href="/staticphp/download"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'download' ) echo ' class="current"'; ?>>Download</a></li>
                </ul>

                <div class="clearfloat"></div>
            </div>
        </div>

        <?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'docs' ): ?>
            <div class="docs-nav">
                <div class="container">
                    <div class="dropdown">
                        <a href="#" class="button">Documentation Navigation</a>

                        <ul class="content">
                            <li><a href="/staticphp/docs/getting-started"<?php if( isset( $metadata[ 'docs_nav_item' ] ) && $metadata[ 'docs_nav_item' ] == 'getting-started' ) echo ' class="current"'; ?>>Getting Started</a></li>
                            <li><a href="/staticphp/docs/metadata"<?php if( isset( $metadata[ 'docs_nav_item' ] ) && $metadata[ 'docs_nav_item' ] == 'metadata' ) echo ' class="current"'; ?>>MetaData</a></li>
                            <li><a href="/staticphp/docs/functional-blocks"<?php if( isset( $metadata[ 'docs_nav_item' ] ) && $metadata[ 'docs_nav_item' ] == 'functional-blocks' ) echo ' class="current"'; ?>>Functional Blocks</a></li>
                            <li><a href="/staticphp/docs/customisation"<?php if( isset( $metadata[ 'docs_nav_item' ] ) && $metadata[ 'docs_nav_item' ] == 'customisation' ) echo ' class="current"'; ?>>Customisation</a></li>
                            <li><a href="/staticphp/docs/html-files"<?php if( isset( $metadata[ 'docs_nav_item' ] ) && $metadata[ 'docs_nav_item' ] == 'html-files' ) echo ' class="current"'; ?>>HTML Files</a></li>
                            <li><a href="/staticphp/docs/php-files"<?php if( isset( $metadata[ 'docs_nav_item' ] ) && $metadata[ 'docs_nav_item' ] == 'php-files' ) echo ' class="current"'; ?>>PHP Files</a></li>
                            <li><a href="/staticphp/docs/markdown-files"<?php if( isset( $metadata[ 'docs_nav_item' ] ) && $metadata[ 'docs_nav_item' ] == 'markdown-files' ) echo ' class="current"'; ?>>Markdown Files</a></li>

                            <div class="clearfloat"></div>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == "docs" ): ?>
            <div class="hero">
                <div class="container">
                    <h2>--- metadata.page_title ---</h2>
                </div>
            </div>

            <div class="container">

        <?php endif; ?>

        {{ content }}

        <?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == "docs" ): ?>
            </div>
        <?php endif; ?>

        <div class="footer">
            <div class="container">
                <p class="text">Copyright &copy; <a href="--- metadata.site_author_url ---">--- metadata.site_author ---</a>.<br>StaticPHP is available on <a href="http://github.com/DAH5/StaticPHP" target="_blank">GitHub</a> and <a href="http://gitlab.com/DAH5/StaticPHP" target="_blank">GitLab</a>.</p>
                <p class="logo"><a href="/"><img src="<?php echo IMAGES_URL; ?>/logos/dah5-logo-2024-alternate-150x35.png" alt="DAH5 Logo"></a></p>
            </div>
        </div>
    </body>
</html>
