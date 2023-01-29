        <section class="content">
            <?php if( isset( $current_nav_item ) && $current_nav_item == "reference" ): ?>
                <?php include __DIR__ . DIRECTORY_SEPARATOR . 'reference-nav.php'; ?>
            <?php endif; ?>
            <div class="content">
                <?php if( isset( $reference_section ) ): ?>
                    <?php if( $reference_section == "html" ): ?>
                        <h1>HTML Reference</h1>
                    <?php endif; ?>
                <?php endif; ?>

                <?php $page_content(); ?>
            </div>
        </section>
