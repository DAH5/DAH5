---
site_title: StaticPHP
site_tagline: Fast and Simple Static Site Generator
stylesheets: /staticphp/assets/css/staticphp.css
content_placeholder: {{ content }}
---
<?php include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'header.php'; ?>

<div class="staticphp">
    <div class="header">
        <div class="container">
            <div class="logo">
                <h1><a href="/staticphp">StaticPHP</a></h1>
            </div>

            <ul class="navbar">
                <li><a href="/staticphp"<?php if( isset( $metadata[ 'staticphp_nav_item' ] ) && $metadata[ 'staticphp_nav_item' ] == 'home' ) echo ' class="current"'; ?>>Home</a></li>
                <li><a href="/staticphp/features"<?php if( isset( $metadata[ 'staticphp_nav_item' ] ) && $metadata[ 'staticphp_nav_item' ] == 'features' ) echo ' class="current"'; ?>>Features</a></li>
                <li><a href="/staticphp/docs/getting-started"<?php if( isset( $metadata[ 'staticphp_nav_item' ] ) && $metadata[ 'staticphp_nav_item' ] == 'docs' ) echo ' class="current"'; ?>>Docs</a></li>
                <li><a href="/staticphp/download"<?php if( isset( $metadata[ 'staticphp_nav_item' ] ) && $metadata[ 'staticphp_nav_item' ] == 'download' ) echo ' class="current"'; ?>>Download</a></li>
            </ul>

            <div class="clearfloat"></div>
        </div>
    </div>

    <?php if( isset( $metadata[ 'staticphp_nav_item' ] ) && $metadata[ 'staticphp_nav_item' ] == 'docs' ): ?>
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

    <?php if( isset( $metadata[ 'staticphp_nav_item' ] ) && $metadata[ 'staticphp_nav_item' ] == "docs" ): ?>
        <div class="hero">
            <div class="container">
                <h2>--- metadata.page-title ---</h2>
                --- if( page_subtitle ) ---<p>--- metadata.page_subtitle ---</p>--- endif ---
            </div>
        </div>

        <div class="container">

    <?php endif; ?>

    {{ content }}

    <?php if( isset( $metadata[ 'staticphp_nav_item' ] ) && $metadata[ 'staticphp_nav_item' ] == "docs" ): ?>
        </div>
    <?php endif; ?>

    <div class="footer">
        <div class="container">
            <p class="text">StaticPHP is available on <a href="http://weburl.net/github/staticphp" target="_blank">GitHub</a> and <a href="https://weburl.net/gitlab/staticphp" target="_blank">GitLab</a>.</p>
        </div>
    </div>
</div>

<?php include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'footer.php'; ?>