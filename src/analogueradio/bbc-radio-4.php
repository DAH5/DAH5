---
nav_item: bbc-radio-4
page_title: BBC Radio 4 - Analogue Radio
layout: src/analogueradio/_inc/base.php
---

<h2>BBC Radio 4</h2>
<p>An archive containing various clips of this radio station. Analogue and Digital versions available.</p>

--- loop( dir = "src/analogueradio/bbc-radio-4/198kHz-LW" ) ---

<div class="w3-row">
    <div class="w3-col m3">
        <p><a href="--- loop.uri ---"><img src="--- loop.video-poster-url ---" class="w3-image w3-round-large"></a></p>
    </div>

    <div class="w3-col m9 w3-padding w3-padding-16">
        <div class="w3-large">
            --- loop.clip-title ---
        </div>

        <div class="w3-small">
            <b>Duration:</b> --- loop.clip-duration ---
        </div>

        <div class="w3-padding-16">
            <a href="--- loop.uri ---" class="w3-button w3-round w3-dark-gray">Play Clip</a>
        </div>
    </div>
</div>

--- endloop ---
