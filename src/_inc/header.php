        <header>
            <label for="nav-toggle" class="bars">
                &#9776;
            </label>

            <a href="/"><img src="/assets/images/dah5-logo-2022.svg" class="logo"></a>
            
            <?php if( isset( $section, $sectionURL ) && $section && $sectionURL ): ?>
                <a href="<?php echo $sectionURL; ?>" class="section-title"><?php echo $section; ?></a>
            <?php elseif( isset( $section ) && $section ): ?>
                <span class="section-title"><?php echo $section; ?></span>
            <?php endif; ?>
        </header>
