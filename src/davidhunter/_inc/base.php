---
site_title: David Hunter
site_tagline: Internet Services Specialist
stylesheets: /davidhunter/assets/css/stylesheet.css
content_placeholder: {{ content }}
current_nav_item: davidhunter
---

<?php include 'src/_inc/header.php'; ?>

<header>
    <div class="container padding-16">
        <h2><a href="/" class="w3-button"><b>--- metadata.site_title ---</b></a></h2>
    </div>
</header>

<?php

$dh_nav_items[] = array
(
    "id" => "home",
    "text" => "Home",
    "url" => "/davidhunter",
);

$dh_nav_items[] = array
(
    "id" => "blog",
    "text" => "Blog",
    "url" => "/davidhunter/blog",
);

$dh_nav_items[] = array
(
    "id" => "projects",
    "text" => "Projects",
    "url" => "/davidhunter/projects",
);

?>

<nav class="container padding-16 inline-block-parent nav">
    <?php for( $dni = 0; $dni < count( $dh_nav_items ); $dni++ ): ?>
        <?php $dh_nav_item = $dh_nav_items[ $dni ]; ?>
        
        <a href="<?php echo $dh_nav_item['url']; ?>" class="<?php if( isset( $metadata['dh_current_page'] ) && $metadata['dh_current_page'] == $dh_nav_item['id'] ) echo ' current'; ?>"<?php if( substr( $dh_nav_item['url'], 0, 7 ) == "http://" || substr( $dh_nav_item['url'], 0, 8 ) == "https://" ) echo ' target="_blank"'; ?>><?php echo $dh_nav_item['text']; ?></a>
        
        <?php if( $dni < count( $dh_nav_items ) - 1 ): ?>
            &nbsp;
        <?php endif; ?>
    <?php endfor; ?>
</nav>

<?php

if( isset( $metadata['article_author'] ) && $metadata['article_author'] == "David Hunter" )
    $avatar_url = IMAGES_URL . "/avatars/davidhunter_illustration_transparent_1.png";

?>

<main class="background-white">
    <div class="container padding-16">
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

<?php include 'src/_inc/footer.php'; ?>
