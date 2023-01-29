<?php

$page_title = "About";
$current_nav_item = "about";

$scripts['footer'][] = "/assets/javascript/anti-email-harvesting.js";

$page_content = function() {
?>

<h1>About DAH5</h1>
<p>Hello, I'm David, and this is my website.</p>

<h2>What is DAH5?</h2>
<p>DAH5 is a personal internet alias of mine, created back in 2005 for exploring the technologies that make up the world wide web, and for working on some personal projects.</p>
<p>Today, the DAH5 name represents a long history of my personal achievements, and my continued evolution online.</p>

<h2>Technologies Behind the Website</h2>
<p>Developed using my own Static Site Generater called <a href="https://github.com/DavidHunterScot/StaticPHP" target="_blank">StaticPHP</a>, and hosted by <a href="https://pages.cloudflare.com" target="_blank">CloudFlare Pages</a>. The source code is available on <a href="https://github.com/DavidHunterScot/DAH5" target="_blank">GitHub</a>.</p>

<h2>Contact</h2>
<p>If you wish to get in touch, you can send an email.</p>
<p><b class="email_address">contact [at] dah5 [dot] com</b></p>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'base.php';
