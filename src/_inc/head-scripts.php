<?php if( isset( $scripts['head'] ) && is_array( $scripts['head'] ) && count( $scripts['head'] ) > 0 ): ?>
    <?php foreach( $scripts['head'] as $script ): ?>
        <?php if( ! isset( $script['src'] ) ) continue; ?>
        <script type="text/javascript" src="<?php echo $script['src']; ?>"<?php if( isset( $script['defer'] ) ): ?> defer="defer"<?php endif; ?>></script>
    <?php endforeach; ?>
<?php endif; ?>
