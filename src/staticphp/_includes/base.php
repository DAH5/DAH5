---
site_title: StaticPHP
site_tagline: Fast and Simple Static Site Generator
site_author: David Hunter
site_author_url: /davidhunter/
logo: /staticphp/assets/images/logo-1-107x25.png
logo_url: /staticphp
site_nav: Home:/staticphp:home::Features:/staticphp/features:features::Docs:/staticphp/docs:docs::Download:/staticphp/download:download
content_placeholder: {{ content }}
stylesheets: /staticphp/assets/css/main.css
---
<?php include 'src/_inc/header.php'; ?>

    <div class="staticphp">
        <div class="header"></div>

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
                    <h2>--- metadata.page-title ---</h2>
                    --- if( page-subtitle ) ---<p>--- metadata.page-subtitle ---</p>--- endif ---
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
                <p class="text">StaticPHP is available on <a href="http://github.com/DAH5/StaticPHP" target="_blank">GitHub</a> and <a href="http://gitlab.com/DAH5/StaticPHP" target="_blank">GitLab</a>.</p>
            </div>
        </div>
    </div>

<?php include 'src/_inc/footer.php'; ?>
