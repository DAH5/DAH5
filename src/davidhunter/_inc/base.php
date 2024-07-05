---
site_title: David Hunter
site_tagline: Internet Services Specialist
stylesheets: /davidhunter/assets/css/stylesheet.css::/assets/webfonts/poppins/poppins.css
content_placeholder: {{ content }}
---
<?php include 'src/_inc/header.php'; ?>
        <div class="davidhunter">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'site-header.php'; ?>

            <?php

            if( isset( $metadata['article_author'] ) && $metadata['article_author'] == "David Hunter" )
                $avatar_url = IMAGES_URL . "/avatars/davidhunter_illustration_transparent_1.png";

            ?>

            <main>
                <div class="container">
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
                </div>
            </main>
        </div>
<?php include 'src/_inc/footer.php'; ?>
