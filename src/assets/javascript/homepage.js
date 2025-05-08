// Time display elements
const welcomeWidgetDate = document.getElementById('welcome-widget-date');
const hoursDisplay = document.getElementById('hours');
const minutesDisplay = document.getElementById('minutes');
const secondsDisplay = document.getElementById('seconds');
const timeGreeting = document.getElementById('time-greeting');
const clockContainer = document.getElementById('clock-container');

// Update the time display
function updateTimeDisplay() {
    const currentDate = new Date();
    const currentHour = currentDate.getHours();
    
    // Update the greeting based on time of day
    updateGreeting(currentHour);
    
    // Update the date
    welcomeWidgetDate.innerHTML = dayNumToName(currentDate.getDay()) + ' ' + 
                                 dayNumAddSuffix(currentDate.getDate().toString()) + ' ' + 
                                 monthNumToName(currentDate.getMonth()) + ' ' + 
                                 currentDate.getFullYear();
    
    // Update the time
    hoursDisplay.textContent = addLeadingZero(currentDate.getHours());
    minutesDisplay.textContent = addLeadingZero(currentDate.getMinutes());
    secondsDisplay.textContent = addLeadingZero(currentDate.getSeconds());
}

// Update greeting based on time of day
function updateGreeting(hour) {
    let greeting;
    if (hour >= 5 && hour < 12) {
        greeting = 'Good Morning';
    } else if (hour >= 12 && hour < 18) {
        greeting = 'Good Afternoon';
    } else if (hour >= 18 && hour < 22) {
        greeting = 'Good Evening';
    } else {
        greeting = 'Good Night';
    }
    timeGreeting.textContent = greeting;
}

// Enable the enhanced time display
function enableTimeDisplay() {
    // Add js-enabled class to body
    document.body.classList.add('js-enabled');
    
    // Update to dynamic content
    updateTimeDisplay();
    
    // Update every second
    setInterval(updateTimeDisplay, 1000);
}

// Initialize when the page loads
document.addEventListener('DOMContentLoaded', enableTimeDisplay);

function dayNumToName(num) {
    switch(num) {
        case 1: return 'Monday';
        case 2: return 'Tuesday';
        case 3: return 'Wednesday';
        case 4: return 'Thursday';
        case 5: return 'Friday';
        case 6: return 'Saturday';
        case 0: return 'Sunday';
        default: return num;
    }
}

function dayNumAddSuffix(num) {
    if (num.substr(-1, 1) == '1') return num + 'st';
    if (num.substr(-1, 1) == '2') return num + 'nd';
    if (num.substr(-1, 1) == '3') return num + 'rd';
    return num + 'th';
}

function monthNumToName(num) {
    switch(num) {
        case 0: return 'January';
        case 1: return 'February';
        case 2: return 'March';
        case 3: return 'April';
        case 4: return 'May';
        case 5: return 'June';
        case 6: return 'July';
        case 7: return 'August';
        case 8: return 'September';
        case 9: return 'October';
        case 10: return 'November';
        case 11: return 'December';
        default: return num;
    }
}

function addLeadingZero(num) {
    return num < 10 ? '0' + num : num;
}