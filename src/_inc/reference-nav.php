            <nav>
                <a href="/reference/html/"<?php if( isset( $reference_section ) && $reference_section == "html" ): ?> class="current"<?php endif; ?>>HTML</a>
                
                <?php if( isset( $reference_section, $reference_page ) && $reference_section == "html" ): ?>
                    <div>
                        <a href="/reference/html/"<?php if( $reference_page == "intro" ): ?> class="current"<?php endif; ?>>Intro</a>
                    </div>
                <?php endif; ?>
            </nav>