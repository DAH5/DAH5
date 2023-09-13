---
site_title: David Hunter
site_tagline: Internet Services Specialist
stylesheets: /davidhunter/assets/css/stylesheet.css
content_placeholder: {{ content }}
current_nav_item: davidhunter
---

<?php include 'src/_inc/header.php'; ?>

<header class="dh">
    <div class="logo">
        <h1 class="title"><a href="/davidhunter">--- metadata.site_title ---</a></h1>
        <p class="tagline">--- metadata.site_tagline ---</p>
    </div>

    <nav>
        <a href="/davidhunter"<?php if( isset( $metadata['dh_current_page'] ) && $metadata['dh_current_page'] == "home" ): ?> class="current"<?php endif; ?>>Home</a>
        <a href="/davidhunter/blog"<?php if( isset( $metadata['dh_current_page'] ) && $metadata['dh_current_page'] == "blog" ): ?> class="current"<?php endif; ?>>Blog</a>
        <a href="/davidhunter/projects"<?php if( isset( $metadata['dh_current_page'] ) && $metadata['dh_current_page'] == "projects" ): ?> class="current"<?php endif; ?>>Projects</a>
    </nav>
</header>

<?php

if( isset( $metadata['article_author'] ) && $metadata['article_author'] == "David Hunter" )
    $avatar_url = IMAGES_URL . "/avatars/davidhunter_illustration_transparent_1.png";

?>

<main>
    <?php if( isset( $metadata['article_title'], $metadata['article_description'], $metadata['article_author'], $metadata['article_date'], $metadata['article_time'] ) ): ?>
        <article class="blog-entry">
            <div class="metadata">
                <?php if( isset( $avatar_url ) && $avatar_url ): ?>
                    <div class="avatar"><img src="<?php echo $avatar_url; ?>" alt="<?php echo $metadata['article_author']; ?>'s Avatar"></div>
                <?php endif; ?>

                <div class="info">
                    <p><b>Written By</b><br>--- metadata.article_author ---</p>
                    <p><b>Published</b><br><?php echo str_replace( " at ", "<br>", date( "jS F Y \a\\t g:i a", strtotime( $metadata['article_date'] . " " . $metadata['article_time'] ) ) ); ?></p>
                </div>
            </div>
            
            <div class="content">
                <h2 class="title">--- metadata.article_title ---</h2>

                {{ content }}
            </div>
        </article>
    <?php else: ?>
        {{ content }}
    <?php endif; ?>
</main>

<?php include 'src/_inc/footer.php'; ?>
