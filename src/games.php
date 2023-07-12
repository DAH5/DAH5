---
page_title: Games
current_nav_item: games
section: Games
sectionURL: /games/
layout: src/_inc/base.php
---

<p>Here are a selection of games I have created over time.</p>

<?php

$games = array
(
    array
    (
        'title' => 'Love Calculator',
        'description' => 'Find out how much you could be in love with someone using this simple game.',
        'url' => '/games/love-calculator'
    ),
);

?>

<?php if( isset( $games ) ): ?>
    <ul>
        <?php foreach( $games as $game ): ?>
            <?php if( ! isset( $game['url'], $game['title'], $game['description'] ) || ! $game['url'] || ! $game['title'] || ! $game['description'] ) continue; ?>
            <li><a href="<?php echo $game['url']; ?>"><?php echo $game['title']; ?></a> - <?php echo $game['description']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
