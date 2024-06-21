---
page-title: Games
main-nav-item: games
layout: src/_inc/layout.php
---
    
    
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

<article>
    <p>Here are a selection of games I have created over time.</p>

    <ul>
        <?php foreach( $games as $game ): ?>
            <li><a href="<?php echo $game[ 'url' ]; ?>"><?php echo $game[ 'title' ]; ?></a> - <?php echo $game[ 'description' ]; ?></li>
        <?php endforeach; ?>
    </ul>
</article>
