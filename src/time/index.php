---
page-title: Time
layout: src/_inc/layout.php
javascripts: /time/solar-time.js
---

<style>
    /* Time Landing Page Container */
    .time-landing-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 50px 20px;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: #f0f0f0;
        text-align: center;
    }

    /* Page Title and Subtitle */
    .time-landing-container h1 {
        font-size: 3em;
        margin-bottom: 10px;
        color: #ffffff;
    }

    .time-hub-subtitle {
        font-size: 1.2em;
        margin-bottom: 40px;
        color: #cfd8dc;
    }

    /* Grid Layout for Observatory Cards */
    .time-hub-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    /* Observatory Cards */
    .time-hub-card {
        background-color: #263238;
        padding: 30px 25px;
        width: 320px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .time-hub-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.7);
    }

    /* Solar Time Display */
    .time-display {
        font-size: 2.8em;
        font-weight: bold;
        margin: 20px 0;
        color: #ffeb3b;
    }

    /* Greenwich Card */
    .greenwich-card {
        border-top: 5px solid #fbc02d;
    }

    /* Edinburgh Card */
    .edinburgh-card {
        border-top: 5px solid #66bb6a;
    }

    /* Explore Links */
    .time-link {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #00796b;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .time-link:hover {
        background-color: #004d40;
    }

    /* Footer Note */
    .time-footer-note {
        margin-top: 40px;
        font-size: 0.9em;
        color: #b0bec5;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .time-hub-grid {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<div class="time-landing-container">
    <h1>🌍 The Time Hub</h1>
    <p class="time-hub-subtitle">Live Solar Time Across Historic Observatories</p>

    <div class="time-hub-grid">
        <!-- Greenwich Solar Time -->
        <div class="time-hub-card greenwich-card">
            <h2>☀️ Greenwich Solar Time (GST)</h2>
            <p class="time-display solar-time" data-solar-api-identifier="GreenwichRoyalObservatory">Loading...</p>
            <a href="/time/greenwich" class="time-link">Explore Greenwich Time →</a>
        </div>

        <!-- Edinburgh Solar Time -->
        <div class="time-hub-card edinburgh-card">
            <h2>🌄 Edinburgh Solar Time (EST)</h2>
            <p class="time-display solar-time" data-solar-api-identifier="EdinburghRoyalObservatory">Loading...</p>
            <a href="/time/edinburgh" class="time-link">Explore Edinburgh Time →</a>
        </div>
    </div>

    <p class="time-footer-note">More observatories coming soon...</p>
</div>
