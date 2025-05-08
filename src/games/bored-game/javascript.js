// Game elements
const currentTask = document.getElementById('currentTask');
const nextTaskBtn = document.getElementById('nextTask');
const resetGameBtn = document.getElementById('resetGame');
const progressFill = document.getElementById('progressFill');
const taskCount = document.getElementById('taskCount');
const NoJSOverlay = document.getElementById('NoJSOverlay');

// Game state
let currentTaskIndex = 0;
const totalTasks = 10;

// Boring tasks array
const tasks = [
    "Count the number of pixels on this page. (Don't actually do it!)",
    "Watch paint dry. (Just imagine it...)",
    "Listen to the sound of silence. (Is it really silent?)",
    "Count to infinity. (Start whenever you're ready...)",
    "Wait for the next task. (This is the next task!)",
    "Read this sentence very slowly. (Did you actually do it?)",
    "Think about what you're thinking about. (Meta-boredom!)",
    "Try to be more bored than you are right now. (Is it working?)",
    "Calculate how many times you've blinked today. (Good luck!)",
    "Congratulations! You've completed all the boring tasks. (Was it worth it?)"
];

// Initialize the game
function initGame() {
    updateTask();
    updateProgress();
}

// Update the current task display
function updateTask() {
    currentTask.textContent = tasks[currentTaskIndex];
    taskCount.textContent = `Task ${currentTaskIndex + 1} of ${totalTasks}`;
}

// Update the progress bar
function updateProgress() {
    // Calculate progress as a percentage, ensuring it reaches 100% at the last task
    const progress = ((currentTaskIndex + 1) / totalTasks) * 100;
    progressFill.style.width = `${progress}%`;
}

// Move to the next task
function nextTask() {
    if (currentTaskIndex < totalTasks - 1) {
        currentTaskIndex++;
        updateTask();
        updateProgress();
    }
}

// Reset the game
function resetGame() {
    currentTaskIndex = 0;
    updateTask();
    updateProgress();
}

// Event listeners
nextTaskBtn.addEventListener('click', nextTask);
resetGameBtn.addEventListener('click', resetGame);

// Enable the game by hiding the no-JS overlay
function enableGame() {
    NoJSOverlay.style.display = 'none';
}

// Initialize the game when the page loads
document.addEventListener('DOMContentLoaded', () => {
    enableGame();
    initGame();
}); 