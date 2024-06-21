<header class="dh">
    <div class="container">
        <div class="logo">
            <h1 class="title"><a href="/davidhunter">--- metadata.site_title ---</a></h1>
            <p class="tagline">--- metadata.site_tagline ---</p>
        </div>

        <nav>
            <a href="/davidhunter"<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == "home" ): ?> class="current"<?php endif; ?>>Home</a>
            <a href="/davidhunter/blog"<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == "blog" ): ?> class="current"<?php endif; ?>>Blog</a>
            <a href="/davidhunter/projects"<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == "projects" ): ?> class="current"<?php endif; ?>>Projects</a>
        </nav>
    </div>
</header>
