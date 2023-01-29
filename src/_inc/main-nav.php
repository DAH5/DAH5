        <input type="checkbox" id="nav-toggle">
      
        <nav class="main">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'main-nav-items.php'; ?>
            
            <?php if( isset( $main_nav_items ) && is_array( $main_nav_items ) ): ?>
                <?php foreach( $main_nav_items as $main_nav_item ): ?>
                    <?php if( ! is_array( $main_nav_item ) || ! isset( $main_nav_item['name'], $main_nav_item['text'], $main_nav_item['url'] ) ) continue; ?>
                    <a href="<?php echo $main_nav_item['url']; ?>"<?php if( isset( $current_nav_item ) && $current_nav_item == $main_nav_item['name'] ): ?> class="current"<?php endif; ?>><?php echo $main_nav_item['text']; ?></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </nav>
