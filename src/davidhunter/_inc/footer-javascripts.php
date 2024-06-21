<?php if( isset( $metadata['footer_scripts'] ) ): ?>
    <?php foreach( explode( "::", $metadata['footer_scripts'] ) as $script ): ?>
        <script type="text/javascript" src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
