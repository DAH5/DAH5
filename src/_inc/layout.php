---
content_placeholder: CONTENT GOES HERE
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata[ 'page-title' ] ) ) echo $metadata[ 'page-title' ] . ' - '; ?>DAH5</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/base2.css">
    </head>

    <body>
        <div class="container">
            <header>
                <h1><img src="/assets/images/logos/dah5-logo-2024-alternate-150x35.png" alt="DAH5 Logo"></h1>
            </header>

            <main>
                <nav>
                    <h2>MENU</h2>

                    <a href="/"<?php if( isset( $metadata[ 'main-nav-item' ] ) && $metadata[ 'main-nav-item' ] == 'home' ) echo ' class="current"'; ?>><span class="bullet">&bullet;</span> Home</a>
                    <a href="/about"<?php if( isset( $metadata[ 'main-nav-item' ] ) && $metadata[ 'main-nav-item' ] == 'about' ) echo ' class="current"'; ?>><span class="bullet">&bullet;</span> About</a>
                    <a href="/games"<?php if( isset( $metadata[ 'main-nav-item' ] ) && $metadata[ 'main-nav-item' ] == 'games' ) echo ' class="current"'; ?>><span class="bullet">&bullet;</span> Games</a>
                    <a href="/tools"<?php if( isset( $metadata[ 'main-nav-item' ] ) && $metadata[ 'main-nav-item' ] == 'tools' ) echo ' class="current"'; ?>><span class="bullet">&bullet;</span> Tools</a>
                    <a href="/a-z"<?php if( isset( $metadata[ 'main-nav-item' ] ) && $metadata[ 'main-nav-item' ] == 'a-z' ) echo ' class="current"'; ?>><span class="bullet">&bullet;</span> A - Z</a>
                </nav>

                <section class="content">
                    <h2>--- metadata.page-title ---</h2>

                    CONTENT GOES HERE
                </section>
            </main>

            <footer>
                <p>
                    <img src="/assets/images/gifs/bluline.gif" alt="Line Gif">
                </p>

                <p>
                    Copyright &copy; <a href="/davidhunter">David Hunter</a>. All rights reserved.<br>
                    <?php include 'src' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'poweredby.php'; ?>
                </p>
            </footer>
        </div>

        <?php if( isset( $metadata[ 'javascripts' ] ) && $metadata[ 'javascripts' ] ): ?>
            <?php $javascripts = explode( '::', $metadata[ 'javascripts' ] ); ?>

            <?php foreach( $javascripts as $javascript ): ?>
                <script src="<?php echo $javascript; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>