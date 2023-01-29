<?php

$page_title = "Find URLs in String";
$current_nav_item = "tools";
$section = "Tools";
$sectionURL = "/tools/";
$stylesheets[] = "/assets/css/tools.css";
$scripts['footer'][] = "/assets/javascript/tool-find-urls-in-string.js";

$page_content = function() {
?>

<h2>Find URLs in String</h2>

<p><textarea id="txtFindUrlsInString" disabled></textarea></p>
<p><input type="checkbox" id="excludeTrailingBracketFindUrlsInString" disabled> <label for="excludeTrailingBracketFindUrlsInString">Exclude Trailing Bracket <b>)</b></label></p>
<p><button id="btnFindUrlsInString" disabled>Go</button></p>
<p><b>Result:</b></p>
<div class="result" id="resultFindUrlsInString">Please enable JavaScript to use this tool.</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'base.php';
