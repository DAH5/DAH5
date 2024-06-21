<?php if( isset( $metadata['stylesheets'] ) ): ?>
    <?php foreach( explode( "::", $metadata['stylesheets'] ) as $stylesheet ): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
    <?php endforeach; ?>
<?php endif; ?>
