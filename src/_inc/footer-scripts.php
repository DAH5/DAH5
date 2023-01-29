<?php if( isset( $scripts['footer'] ) && is_array( $scripts['footer'] ) && count( $scripts['footer'] ) > 0 ): ?>
    <?php foreach( $scripts['footer'] as $script ): ?>
        <script type="text/javascript" src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
