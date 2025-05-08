---
page-title: Games
main-nav-item: games
layout: src/_inc/layout.php
stylesheets: /assets/css/games.css
---
    
    
<?php

$games = array
(
    array
    (
        'title' => 'Love Calculator',
        'description' => 'Find out how much you could be in love with someone using this simple game.',
        'url' => '/games/love-calculator',
        'category' => 'Fun',
        'difficulty' => 'Easy',
        'playTime' => '1-2 minutes',
        'lastUpdated' => '2024',
        'icon' => '💖',
        'gameClass' => 'love-calculator'
    ),
    array
    (
        'title' => 'The Bored Game',
        'description' => 'You\'ve heard of board games, right? Well, this is nothing like that! A game that\'s so boring, it\'s actually fun to play.',
        'url' => '/games/bored-game',
        'category' => 'Puzzle',
        'difficulty' => 'Medium',
        'playTime' => '5-10 minutes',
        'lastUpdated' => '2024',
        'icon' => '😴',
        'gameClass' => 'bored-game'
    ),
);

?>

<section class="minisite-header">
    <div class="container">
        <h1>Games</h1>
    </div>
</section>

<section class="games-section">
    <div class="container">
        <p class="games-intro">Here are a selection of games I have created over time. Each one is designed to be simple, fun, and easy to play!</p>
        
        <div class="games-grid">
            <?php foreach($games as $game): ?>
                <article class="game-card <?php echo $game['gameClass']; ?>">
                    <div class="game-card-icon"><?php echo $game['icon']; ?></div>
                    <h2 class="game-card-title">
                        <a href="<?php echo $game['url']; ?>"><?php echo $game['title']; ?></a>
                    </h2>
                    <p class="game-card-description"><?php echo $game['description']; ?></p>
                    <div class="game-card-meta">
                        <div class="game-card-meta-row">
                            <div class="game-card-meta-label">Category</div>
                            <div class="game-card-meta-value"><?php echo $game['category']; ?></div>
                        </div>
                        <div class="game-card-meta-row">
                            <div class="game-card-meta-label">Difficulty</div>
                            <div class="game-card-meta-value"><?php echo $game['difficulty']; ?></div>
                        </div>
                        <div class="game-card-meta-row">
                            <div class="game-card-meta-label">Play Time</div>
                            <div class="game-card-meta-value"><?php echo $game['playTime']; ?></div>
                        </div>
                    </div>
                    <a href="<?php echo $game['url']; ?>" class="game-card-link">Play Now</a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>