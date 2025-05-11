---
page-title: Tools
main-nav-item: tools
layout: src/_inc/layout.php
---

<section class="minisite-header">
    <div class="container">
        <h1>Web Tools</h1>
        <p class="lead">A collection of useful web-based tools to help you with various tasks</p>
    </div>
</section>

<section class="tools-section">
    <div class="container">
        <div class="tools-grid">
            <!-- Textpad Tool -->
            <div class="tool-card">
                <div class="tool-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h2>Textpad</h2>
                <p>A simple, browser-based text editor with file operations. Create, edit, and save text files directly in your browser.</p>
                <a href="/tools/textpad" class="btn btn-primary" target="_blank">Use Tool</a>
            </div>

            <!-- DNS Lookup Tool -->
            <div class="tool-card">
                <div class="tool-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h2>DNS Lookup</h2>
                <p>Look up DNS records for any domain name. Get A, AAAA, MX, TXT, and other DNS record information.</p>
                <a href="/tools/dns-lookup" class="btn btn-primary">Use Tool</a>
            </div>

            <!-- rDNS Lookup Tool -->
            <div class="tool-card">
                <div class="tool-icon">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h2>rDNS Lookup</h2>
                <p>Perform reverse DNS lookups to find the hostname associated with an IP address.</p>
                <a href="/tools/rdns-lookup" class="btn btn-primary">Use Tool</a>
            </div>

            <!-- WHOIS Lookup Tool -->
            <div class="tool-card">
                <div class="tool-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h2>WHOIS Lookup</h2>
                <p>Get detailed domain registration information including owner details, registration dates, and more.</p>
                <a href="/tools/whois-lookup" class="btn btn-primary">Use Tool</a>
            </div>

            <!-- Find URLs in String -->
            <div class="tool-card">
                <div class="tool-icon">
                    <i class="fas fa-link"></i>
                </div>
                <h2>Find URLs in String</h2>
                <p>Extract and validate URLs from any text string. Perfect for cleaning up text or finding links.</p>
                <a href="/tools/find-urls-in-string" class="btn btn-primary">Use Tool</a>
            </div>
        </div>

        <div class="tools-footer">
            <p>Need a specific tool that's not listed here? <a href="/about#contact">Get in Touch</a> with your suggestion!</p>
        </div>
    </div>
</section>

<style>
.tools-section {
    padding: 4rem 0;
}

.tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.tool-card {
    background: #fff;
    border-radius: 8px;
    padding: 2rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.tool-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.tool-icon {
    font-size: 2.5rem;
    color: #007bff;
    margin-bottom: 1rem;
}

.tool-card h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #333;
}

.tool-card p {
    color: #666;
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

.btn-primary {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    background: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background 0.2s ease;
}

.btn-primary:hover {
    background: #0056b3;
}

.tools-footer {
    text-align: center;
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
}

.lead {
    font-size: 1.25rem;
    color: #666;
    margin-top: 1rem;
}

@media (max-width: 768px) {
    .tools-grid {
        grid-template-columns: 1fr;
    }
}
</style>
