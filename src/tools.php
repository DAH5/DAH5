<?php

$page_title = "Tools";
$current_nav_item = "tools";
$section = "Tools";
$sectionURL = "/tools/";

$page_content = function() {
?>

<p><i>Some web based tools to help with some tedious tasks that can be a pain to do manually.</i></p>

<h2>Available Tools</h2>

<?php

$tools = array
(
    array
    (
        'title' => 'Find URLs in String',
        'url' => '/tools/find-urls-in-string'
    ),
);

?>

<?php if( isset( $tools ) && is_array( $tools ) && count( $tools ) > 0 ): ?>
    <?php foreach( $tools as $tool ): ?>
        <?php if( ! isset( $tool['title'], $tool['url'] ) || ! $tool['title'] || ! $tool['url'] ) continue; ?>
        <p><b><?php echo $tool['title']; ?></b> - <a href="<?php echo $tool['url']; ?>">Go to Tool</a></p>
    <?php endforeach; ?>
<?php endif; ?>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'base.php';
