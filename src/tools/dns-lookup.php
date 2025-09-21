---
page-title: DNS Lookup Tool
main-nav-item: tools
stylesheets: /assets/css/tools.css
javascripts: /assets/javascript/tool-dns-lookup.js
layout: src/_inc/layout.php
---

<section class="minisite-header">
    <div class="container">
        <h1>Tools</h1>
    </div>
</section>

<section>
    <div class="container">
        <h2>DNS Lookup Tool</h2>

        <p id="msgDisabled">Please enable JavaScript to use this tool.</p>

        <form method="POST" id="form" data-apiurl="https://networktools.cloudhosted.net">
            <p><label for="txtDomain"><b>Domain:</b> </label><input type="text" id="txtDomain" disabled></p>
            <p>
                <label for="listType"><b>Type:</b> </label>
                <select id="listType" disabled>
                    <option value="ALL">ALL</option>
                    <option value="SOA">SOA</option>
                    <option value="NS">NS</option>
                    <option value="A">A</option>
                    <option value="AAAA">AAAA</option>
                    <option value="CNAME">CNAME</option>
                    <option value="MX">MX</option>
                    <option value="TXT">TXT</option>
                </select>
            </p>
            <p>
                <label for="listNS"><b>Name Server IPs:</b> </label>
                <select id="listNS" disabled>
                    <option value="1.1.1.1+1.0.0.1">Cloudflare DNS (1.1.1.1 & 1.0.0.1)</option>
                    <option value="8.8.8.8+8.8.4.4">Google DNS (8.8.8.8 & 8.8.4.4)</option>
                    <option value="1.1.1.1+8.8.8.8">Cloudflare & Google DNS (1.1.1.1 & 8.8.8.8)</option>
                    <option value="custom">Custom Name Server IPs (Enter Below)</option>
                </select>
            </p>
            <p id="pNS"><label for="txtNS"><b>Custom Name Server IPs:</b> </label><input type="text" id="txtNS" placeholder="1.1.1.1 8.8.8.8" disabled></p>
            <p><button type="submit" id="btnSubmit" disabled>Submit</button></p>
        </form>

        <div class="result" id="result"></div>
    </div>
</section>
