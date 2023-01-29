<?php

$page_title = "Love Calculator";
$description = "Find out how much you could be in love with someone using this simple game.";
$current_nav_item = "games";
$section = "Games";
$sectionURL = "/games/";
$stylesheets[] = "/assets/css/game-love-calculator.css";
$scripts['footer'][] = "/assets/javascript/game-love-calculator.js";

$page_content = function() {
?>

<h1>Welcome to Love Calculator!</h1>
<p class="description">Find out how much you could be in love with someone using this simple game.</p>

<div id="nojs">
    PLEASE ENABLE JAVASCRIPT TO PLAY THIS GAME!
</div>

<div id="alertBox">
    <div id="alertBoxText">Sample text.</div>
    <button id="alertBoxCloseButton">Close</button>
</div>

<div id="game">
    <p>
        <label for="txtFirstName">First Person</label>
        <input type="text" id="txtFirstName" disabled>
    </p>

    <p>
        <label for="txtSecondName">Second Person</label>
        <input type="text" id="txtSecondName" disabled>
    </p>

    <p class="buttons">
        <button type="button" id="btnPlay" disabled>Play</button>
        <button type="button" id="btnSwap" disabled>Swap</button>
        <button type="button" id="btnReset" disabled>Reset</button>
    </p>
</div>

<p class="disclaimer"><b>Disclaimer:</b> This is a game intended for a bit of fun. Please do not take the results too seriously.</p>

<p><b>How to Play?</b></p>
<p>Put your name in the first box, then put the name of someone you know into the second box, then press Play!</p>
<p>Afterwards, press the Swap button to switch the names around, and see how much they could be in love with you.</p>
<p>When you are done, press clear to remove both names from the boxes and have another go, or give someone else a go.</p>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'base.php';
