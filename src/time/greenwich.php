---
page-title: Greenwich Time
layout: src/_inc/layout.php
javascripts: /time/solar-time.js
---

<style>
    /* Greenwich Time Page Container */
    .greenwich-time-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 40px 20px;
        background: linear-gradient(135deg, #1b2735, #090a0f);
        color: #f0f0f0;
        text-align: center;
    }

    /* Title and Subtitle */
    .greenwich-time-container h1 {
        font-size: 3em;
        margin-bottom: 10px;
    }

    .greenwich-subtitle {
        font-size: 1.2em;
        margin-bottom: 40px;
        color: #b0bec5;
    }

    /* Grid Layout for Time Cards */
    .time-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    /* Individual Time Cards */
    .time-card {
        background-color: #263238;
        padding: 25px 20px;
        width: 300px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .time-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.7);
    }

    /* Time Display Styling */
    .time-display {
        font-size: 3em;
        font-weight: bold;
        margin: 15px 0;
    }

    /* Description Text */
    .time-description {
        font-size: 0.9em;
        color: #b0bec5;
    }

    /* Solar Time Colors */
    .solar-time-card {
        border-top: 5px solid #f9a825;
    }

    .solar-time {
        color: #ffeb3b;
    }

    /* Atomic Time Colors */
    .atomic-time-card {
        border-top: 5px solid #00bcd4;
    }

    .atomic-time {
        color: #00e5ff;
    }

    /* Normal Time Colors */
    .normal-time-card {
        border-top: 5px solid #8bc34a;
    }

    .normal-time {
        color: #cddc39;
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
        .time-grid {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<div class="greenwich-time-container">
    <h1>🕰️ Greenwich Time Hub</h1>
    <p class="greenwich-subtitle">Live Time Systems for Greenwich Observatory</p>

    <div class="time-grid">
        <!-- Solar Time Card -->
        <div class="time-card solar-time-card">
            <h2>☀️ Solar Time (GST)</h2>
            <p class="time-display solar-time" data-solar-api-identifier="GreenwichRoyalObservatory">Loading...</p>
            <p class="time-description">Based on the sun's position over Greenwich.</p>
        </div>

        <!-- Atomic Time Card -->
        <div class="time-card atomic-time-card">
            <h2>⚛️ Atomic Time (GAT)</h2>
            <p class="time-display atomic-time">Coming Soon...</p>
            <p class="time-description">Ultra-precise timekeeping with atomic clocks.</p>
        </div>

        <!-- Normal Time Card -->
        <div class="time-card normal-time-card">
            <h2>🕒 Normal Time (GNT)</h2>
            <p class="time-display normal-time">Placeholder...</p>
            <p class="time-description">Standard clock time as we know it.</p>
        </div>
    </div>

    <p><a href="/time" class="time-link">Explore More Time →</a></p>
</div>
