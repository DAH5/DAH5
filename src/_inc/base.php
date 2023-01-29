<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ): ?><?php echo $page_title; ?> - <?php endif; ?>DAH5<?php if( isset( $section ) && $section ): ?> <?php echo $section; ?><?php endif; ?></title>
        
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'head-styles.php'; ?>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'head-scripts.php'; ?>
    </head>
    
    <body>
        <div class="container">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'header.php'; ?>

            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'main-nav.php'; ?>

            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'content-section.php'; ?>

            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'footer.php'; ?>
        </div>
        
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'footer-scripts.php'; ?>
    </body>
</html>
