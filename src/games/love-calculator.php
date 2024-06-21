---
stylesheets: /assets/css/game-love-calculator.css
footer_scripts: /assets/javascript/game-love-calculator.js
body_class: body
---

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Love Calculator - DAH5 Games</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/game-love-calculator.css">
    </head>

    <body>
        <p class="logo"><a href="/games"><img src="/assets/images/logos/dah5-logo-2024-alternate-150x35.png"> Games</a></p>

        <div class="container">
            <h1>Love Calculator</h1>
            <p>Find out how much you could be in love with someone using this simple game.</p>

            <p><b>How to Play?</b></p>
            <p>Put your name in the first box, then put the name of someone you know into the second box, then press Play!</p>
            <p>Afterwards, press the Swap button to switch the names around, and see how much they could be in love with you.</p>
            <p>When you are done, press clear to remove both names from the boxes and have another go, or give someone else a go.</p>

            <p class="disclaimer"><b>Disclaimer:</b> This is a game intended for a bit of fun. Please do not take the results too seriously.</p>

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
        </div>

        <script type="text/javascript" src="/assets/javascript/game-love-calculator.js"></script>
    </body>
</html>
