---
page-title: WHOIS Lookup Tool
main-nav-item: tools
stylesheets: /assets/css/tools.css
javascripts: /assets/javascript/tool-whois-lookup.js
layout: src/_inc/layout.php
---

<section class="minisite-header">
    <div class="container">
        <h1>Tools</h1>
    </div>
</section>

<section>
    <div class="container">
        <h2>WHOIS Lookup Tool</h2>

        <p id="msgDisabled">Please enable JavaScript to use this tool.</p>

        <form method="POST" id="form" data-apiurl="https://networktools.weburl.net">
            <p><label for="txtDomain"><b>Domain:</b> </label><input type="text" id="txtDomain" disabled></p>
            <p><button type="submit" id="btnSubmit" disabled>Submit</button></p>
        </form>

        <div class="result" id="result"></div>
    </div>
</section>
