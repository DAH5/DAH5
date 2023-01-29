<?php

$page_title = "Password Hasher";
$current_nav_item = "tools";
$section = "Tools";
$sectionURL = "/tools/";
$stylesheets[] = "/assets/css/tools.css";
$scripts['footer'][] = "https://cdnjs.cloudflare.com/ajax/libs/bcryptjs/2.2.0/bcrypt.min.js";
$scripts['footer'][] = "/assets/javascript/tool-password-hasher.js";

$page_content = function() {
?>

<h2>Password Hasher</h2>

<p><b>Please Note:</b> This tool is currently a Work in Progress!</p>

<p>Need to store a password somewhere? Do not store it in plaintext, hash it first using this tool.</p>

<div id="nojs">Please enable JavaScript to use this tool!</div>

<p>
  <label for="txtPassword">Password:</label>
  <input type="password" id="txtPassword" disabled>
</p>

<p id="result">
  
</p>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'base.php';
