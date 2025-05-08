var MessageArea = document.getElementById('MessageArea');
var PersonOneTXT = document.getElementById('PersonOneTXT');
var PersonTwoTXT = document.getElementById('PersonTwoTXT');
var CalculateBTN = document.getElementById('CalculateBTN');
var SwapNamesBTN = document.getElementById('SwapNamesBTN');
var ResetBTN = document.getElementById('ResetBTN');
var NoJSOverlay = document.getElementById('NoJSOverlay');

// Enable calculator functionality
function enableCalculator()
{
    NoJSOverlay.style.display = 'none';
    PersonOneTXT.contentEditable = true;
    PersonTwoTXT.contentEditable = true;
}

// Initialize calculator
enableCalculator();

PersonOneTXT.addEventListener('keypress', handleKeyPress);
PersonTwoTXT.addEventListener('keypress', handleKeyPress);
CalculateBTN.addEventListener('click', calculate);
SwapNamesBTN.addEventListener('click', swapNames);
ResetBTN.addEventListener('click', reset);

// Add placeholder text
PersonOneTXT.setAttribute('placeholder', 'Enter first name...');
PersonTwoTXT.setAttribute('placeholder', 'Enter second name...');

function handleKeyPress(e)
{
    if (e.key === "Enter")
    {
        e.preventDefault();
        calculate();
    }
}

function getLoveMessage(percentage)
{
    if (percentage >= 90) return "A match made in heaven! 💖";
    if (percentage >= 75) return "True love is in the air! 💕";
    if (percentage >= 60) return "There's definitely something special here! 💝";
    if (percentage >= 40) return "A promising connection! 💗";
    if (percentage >= 20) return "Maybe give it some time... 💭";
    return "Not quite meant to be... 💔";
}

function calculate()
{
    var personOne = PersonOneTXT.innerText.trim();
    var personTwo = PersonTwoTXT.innerText.trim();

    if (!personOne || !personTwo)
    {
        displayMessage("Please enter both names to calculate love!", "error");
        return;
    }

    // Add loading state
    CalculateBTN.disabled = true;
    CalculateBTN.innerText = "Calculating...";
    
    // Simulate calculation delay for effect
    setTimeout(() => 
    {
        var score = 0;
        
        // Calculate how much personOne loves personTwo
        // Count how many letters from personOne appear in personTwo
        for (var c = 0; c < personOne.length; c++)
        {
            if (personTwo.includes(personOne.charAt(c)))
            {
                score++;
            }
        }
        
        // Calculate percentage based on matching characters
        var percentage = Math.min(100, Math.round((score / personOne.length) * 100));
        var message = getLoveMessage(percentage);
        
        displayMessage(`${personOne} is ${percentage}% in love with ${personTwo}! ${message}`, "success");
        
        // Reset button state
        CalculateBTN.disabled = false;
        CalculateBTN.innerText = "Calculate";
    }, 1000);
}

function displayMessage(message, type = "")
{
    MessageArea.className = type;
    MessageArea.innerText = message;
    
    if (type === "success")
    {
        // Add some fun animation
        MessageArea.style.animation = "none";
        MessageArea.offsetHeight; // Trigger reflow
        MessageArea.style.animation = "pulse 1s ease";
    }
}

function swapNames()
{
    var personOne = PersonOneTXT.innerText;
    var personTwo = PersonTwoTXT.innerText;
    
    if (personOne || personTwo)
    {
        PersonOneTXT.innerText = personTwo;
        PersonTwoTXT.innerText = personOne;
        MessageArea.innerText = "Names swapped! Try calculating again!";
        MessageArea.className = "";
    }
}

function reset()
{
    PersonOneTXT.innerText = "";
    PersonTwoTXT.innerText = "";
    MessageArea.innerText = "";
    MessageArea.className = "";
    CalculateBTN.disabled = false;
    CalculateBTN.innerText = "Calculate";
}