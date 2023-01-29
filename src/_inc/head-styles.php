<link rel="stylesheet" type="text/css" href="/assets/css/main.css">

<?php if( isset( $stylesheets ) && is_array( $stylesheets ) && count( $stylesheets ) > 0 ): ?>
    <?php foreach( $stylesheets as $stylesheet ): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
    <?php endforeach; ?>
<?php endif; ?>
