---
page-title: Home
main-nav-item: home
layout: src/_inc/layout.php
javascripts:
- /assets/javascript/homepage.js
---

<section class="minisite-header">
    <div class="container">
        <h1>Welcome to DAH5!</h1>
    </div>
</section>

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="hero-widget">
                <div class="greeting-section">
                    <span id="time-greeting">Welcome</span>
                </div>
                
                <div class="time-display">
                    <div class="date-section">
                        <span id="welcome-widget-date">Welcome to DAH5</span>
                    </div>
                    <div class="clock-section" id="clock-container">
                        <div class="time-unit">
                            <span id="hours">--</span>
                            <span class="time-label">Hours</span>
                        </div>
                        <div class="time-separator">:</div>
                        <div class="time-unit">
                            <span id="minutes">--</span>
                            <span class="time-label">Minutes</span>
                        </div>
                        <div class="time-separator">:</div>
                        <div class="time-unit">
                            <span id="seconds">--</span>
                            <span class="time-label">Seconds</span>
                        </div>
                    </div>
                </div>

                <p><a href="/about" class="cta-button">About DAH5</a></p>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <span class="scroll-text">Scroll to explore</span>
            <div class="scroll-arrow">↓</div>
        </div>
    </div>
</section>

<section class="tools-teaser" style="background: #4F5B93; color: #ffffff;">
    <div class="container">
        <div class="teaser-content">
            <h2 style="color: #fff;">StaticPHP - The Fast and Simple Static Site Generator</h2>
            <p class="teaser-intro" style="color: #fff;">Empowering you to develop great sites in ways you never knew were possible.</p>
            
            <div class="teaser-features">
                <div class="feature">
                    <div class="feature-icon">⚡</div>
                    <h3>Blazing Fast</h3>
                    <p>StaticPHP generates static websites within seconds.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">👍</div>
                    <h3>Easy To Use</h3>
                    <p>Simple to setup, and easy to run, makes it accessible to everyone.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">🛠️</div>
                    <h3>Flexible and Powerful</h3>
                    <p>Extensive customisation options to fit your needs.</p>
                </div>
            </div>

            <div class="teaser-cta">
                <a href="<?php echo STATICPHP_URL; ?>" target="_blank" class="cta-button">Check Out StaticPHP</a>
            </div>
        </div>
    </div>
</section>

<section class="games-teaser" style="background: transparent; background-image: url( '/assets/images/gifs/backgrounds/5HFPCUGHY5MPW7FPDI57HXOFX2VVP6Y7.gif' );">
    <div class="container">
        <div class="teaser-content">
            <h2 style="color: #fff;">The Love Calculator Game</h2>
            <p class="teaser-intro" style="color: #fff;">Discover how much two people could be in love with each other using this simple game.</p>
            
            <div class="teaser-features">
                <div class="feature">
                    <div class="feature-icon">📱</div>
                    <h3>Mobile Friendly</h3>
                    <p>Access it on the go and while with friends, it works on any web-enabled device!</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">💑</div>
                    <h3>Quick & Easy</h3>
                    <p>No downloads needed - just play directly in your internet browser!</p>
                </div>
            </div>

            <div class="teaser-cta">
                <a href="/lovecalculator" class="cta-button">Go to Love Calculator</a>
            </div>
        </div>
    </div>
</section>

<section class="site-explorer">
    <div class="container">
        <div class="explorer-content">
            <h2>Discover More</h2>
            <p class="explorer-intro">The A-Z page is your gateway to everything on the site. From games and tools to articles and resources, find exactly what you're looking for.</p>
            
            <div class="explorer-cta">
                <a href="/a-z" class="cta-button">Visit A-Z</a>
            </div>
        </div>
    </div>
</section>
