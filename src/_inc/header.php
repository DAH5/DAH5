<?php include 'src/_inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
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
        <header>
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="/assets/images/logos/dah5-logo-2024-alternate-150x35.png" alt="DAH5" width="107" height="25"></a>
                </div>

                <nav>
                    <a href="/"--- if( main-nav-item == "home" ) --- class="current"--- endif --->Home</a>
                    <a href="/games"--- if( main-nav-item == "games" ) --- class="current"--- endif --->Games</a>
                    <a href="/tools"--- if( main-nav-item == "tools" ) --- class="current"--- endif --->Tools</a>
                    <a href="/a-z"--- if( main-nav-item == "a-z" ) --- class="current"--- endif --->A - Z</a>
                    <div class="clearfloat"></div>
                </nav>

                <div class="clearfloat"></div>
            </div>
        </header>
