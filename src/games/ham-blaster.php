<?php

$page_title = "Ham Blaster";
$description = "Currently in Development!";
$current_nav_item = "games";
$section = "Games";
$sectionURL = "/games/";
$stylesheets[] = "/assets/css/game-ham-blaster.css";
$scripts['footer'][] = "/assets/javascript/game-ham-blaster.js";

$page_content = function() {
?>

<div class="hamblaster">
    <h1>Ham Blaster</h1>
    <p><i>Currently in Development!</i></p>
    
    <div id="screen" class="screen">

    </div>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'base.php';
