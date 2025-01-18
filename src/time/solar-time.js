// Fetch and display solar data for a given identifier
async function fetchSolarData(identifier, element) {
    const apiUrl = `https://time.api.weburl.net/solar/${identifier}_solar_data.json`;

    try {
        const response = await fetch(apiUrl);
        const data = await response.json();

        const solarNoon = data.results.solar_noon;
        const solarTime = calculateSolarTime(solarNoon);

        // Update the clock display
        element.textContent = solarTime;

    } catch (error) {
        console.error(`Error fetching data for ${identifier}:`, error);
    }
}

// Calculate the current solar time based on solar noon
function calculateSolarTime(solarNoon) {
    const nowUTC = new Date();

    // Convert solar noon string to Date object
    const [time, period] = solarNoon.split(' ');
    let [hours, minutes, seconds] = time.split(':').map(Number);

    // Convert to 24-hour format
    if (period === 'PM' && hours !== 12) hours += 12;
    if (period === 'AM' && hours === 12) hours = 0;

    const solarNoonUTC = new Date(nowUTC);
    solarNoonUTC.setUTCHours(hours, minutes, seconds, 0);

    // Calculate the difference between now and solar noon
    const diffInMillis = nowUTC.getTime() - solarNoonUTC.getTime();

    // Apply this difference to 12:00:00 (solar noon)
    const solarNow = new Date(solarNoonUTC.getTime() + diffInMillis);
    solarNow.setUTCHours(12, 0, 0, 0);  // Reset to solar noon

    // Apply the offset to solar noon
    solarNow.setTime(solarNow.getTime() + diffInMillis);

    return solarNow.toUTCString().split(' ')[4];  // Format as HH:MM:SS
}

// Start clocks for all solar time elements
function startSolarClocks() {
    const solarElements = document.querySelectorAll('[data-solar-api-identifier]');

    solarElements.forEach((element) => {
        const identifier = element.getAttribute('data-solar-api-identifier');

        if (identifier) {
            fetchSolarData(identifier, element);

            // Refresh solar data every minute
            setInterval(() => fetchSolarData(identifier, element), 60000);

            // Increment displayed solar time every second
            setInterval(() => {
                if (element.textContent) {
                    const [hours, minutes, seconds] = element.textContent.split(':').map(Number);
                    let date = new Date();
                    date.setUTCHours(hours, minutes, seconds + 1);
                    element.textContent = date.toUTCString().split(' ')[4];
                }
            }, 1000);
        }
    });
}

// Start the solar clocks
startSolarClocks();
