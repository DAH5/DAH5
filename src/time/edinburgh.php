---
page-title: Edinburgh Time
layout: src/_inc/layout.php
javascripts: /time/solar-time.js
---

<style>
    /* Edinburgh Time Page Container */
    .edinburgh-time-container {
        font-family: 'Georgia', serif;
        padding: 50px 20px;
        background: url('/time/EdinburghCastleSkyline.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #f4f4f4;
        text-align: center;
        box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.6);
    }

    /* Title and Subtitle */
    .edinburgh-time-container h1 {
        font-size: 3em;
        margin-bottom: 10px;
        color: #fdfdfd;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }

    .edinburgh-subtitle {
        font-size: 1.1em;
        margin-bottom: 40px;
        color: #dcdcdc;
        font-style: italic;
    }

    /* Grid Layout for Time Cards */
    .edinburgh-time-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
    }

    /* Time Cards with Stone Texture */
    .edinburgh-time-card {
        background-color: rgba(33, 47, 41, 0.9);
        padding: 25px 20px;
        width: 300px;
        border-radius: 15px;
        border: 2px solid #3e5641;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .edinburgh-time-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.8);
    }

    /* Time Display Styling */
    .time-display {
        font-size: 3em;
        font-weight: bold;
        margin: 15px 0;
    }

    /* Solar Time Colors */
    .solar-time-card {
        border-top: 5px solid #8bc34a;
    }

    .solar-time {
        color: #aed581;
    }

    /* Atomic Time Colors */
    .atomic-time-card {
        border-top: 5px solid #00acc1;
    }

    .atomic-time {
        color: #4dd0e1;
    }

    /* Normal Time Colors */
    .normal-time-card {
        border-top: 5px solid #ffa726;
    }

    .normal-time {
        color: #ffcc80;
    }

    /* Description Text */
    .time-description {
        font-size: 0.9em;
        color: #c5e1a5;
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

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .edinburgh-time-grid {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<div class="edinburgh-time-container">
    <h1>🏰 Edinburgh Time Hub</h1>
    <p class="edinburgh-subtitle">Solar and Future Time Systems from the Royal Observatory</p>

    <div class="edinburgh-time-grid">
        <!-- Solar Time Card -->
        <div class="edinburgh-time-card solar-time-card">
            <h2>🌤️ Edinburgh Solar Time (EST)</h2>
            <p class="time-display solar-time" data-solar-api-identifier="EdinburghRoyalObservatory">Loading...</p>
            <p class="time-description">Tracking the sun above Scotland's capital.</p>
        </div>

        <!-- Atomic Time Card -->
        <div class="edinburgh-time-card atomic-time-card">
            <h2>⚛️ Atomic Time (EAT)</h2>
            <p class="time-display atomic-time">Coming Soon...</p>
            <p class="time-description">Precision timekeeping, fit for royalty.</p>
        </div>

        <!-- Normal Time Card -->
        <div class="edinburgh-time-card normal-time-card">
            <h2>🕰️ Normal Time (ENT)</h2>
            <p class="time-display normal-time">Placeholder...</p>
            <p class="time-description">Standard time in the heart of Edinburgh.</p>
        </div>
    </div>

    <p><a href="/time" class="time-link">Explore More Time →</a></p>
</div>
