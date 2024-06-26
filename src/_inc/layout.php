---
content_placeholder: CONTENT GOES HERE
---
<?php include 'src/_inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en" style="background-image: url( '<?php echo IMAGES_URL; ?>/gifs/backgrounds/fireworks_background.gif' );">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata[ 'page-title' ] ) ) echo $metadata[ 'page-title' ] . ' - '; ?>DAH5</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/base.css">

        <?php if( isset( $metadata[ 'stylesheets' ] ) && $metadata[ 'stylesheets' ] ): ?>
            <?php $stylesheets = explode( '::', $metadata[ 'stylesheets' ] ); ?>
            
            <?php foreach( $stylesheets as $stylesheet ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </head>

    <body>
        <div class="container">
            <header>
                <h1><img src="<?php echo IMAGES_URL; ?>/logos/dah5-logo-2024-alternate-150x35.png" alt="DAH5 Logo"></h1>
            </header>

            <main>
                <nav>
                    <h2>MENU</h2>

                    <a href="/"--- if( main-nav-item == "home" ) --- class="current"--- endif ---><span class="bullet">&bullet;</span> Home</a>
                    <a href="/about"--- if( main-nav-item == "about" ) --- class="current"--- endif ---><span class="bullet">&bullet;</span> About</a>
                    <a href="/games"--- if( main-nav-item == "games" ) --- class="current"--- endif ---><span class="bullet">&bullet;</span> Games</a>
                    <a href="/tools"--- if( main-nav-item == "tools" ) --- class="current"--- endif ---><span class="bullet">&bullet;</span> Tools</a>
                    <a href="/a-z"--- if( main-nav-item == "a-z" ) --- class="current"--- endif ---><span class="bullet">&bullet;</span> A - Z</a>
                </nav>

                <section class="content">
                    <h2>--- metadata.page-title ---</h2>

                    CONTENT GOES HERE
                </section>
            </main>

            <footer>
                <p>
                    <img src="<?php echo IMAGES_URL; ?>/gifs/bluline.gif" alt="Line Gif">
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