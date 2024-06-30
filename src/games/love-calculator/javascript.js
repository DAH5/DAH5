var MessageArea = document.getElementById( 'MessageArea' );
var PersonOneTXT = document.getElementById( 'PersonOneTXT' );
var PersonTwoTXT = document.getElementById( 'PersonTwoTXT' );
var CalculateBTN = document.getElementById( 'CalculateBTN' );
var SwapNamesBTN = document.getElementById( 'SwapNamesBTN' );
var ResetBTN = document.getElementById( 'ResetBTN' );

MessageArea.innerText = "";

PersonOneTXT.contentEditable = true;
PersonTwoTXT.contentEditable = true;

PersonOneTXT.addEventListener( 'keypress', handleKeyPress );
PersonTwoTXT.addEventListener( 'keypress', handleKeyPress );
CalculateBTN.addEventListener( 'click', calculate );
SwapNamesBTN.addEventListener( 'click', swapNames );
ResetBTN.addEventListener( 'click', reset );

function handleKeyPress( e )
{
    if( e.key === "Enter" )
    {
        e.preventDefault();
        calculate();
    }
}

function calculate()
{
    var personOne = PersonOneTXT.innerText;
    var personTwo = PersonTwoTXT.innerText;

    var score = 0;

    if( personOne && personTwo )
    {
        for( var c = 0; c < personOne.length; c++ )
        {
            if( personTwo.includes( personOne.charAt( c ) ) )
                score++;
        }

        var percentage = Math.round( score / personTwo.length * 100 );

        displayMessage( personOne + " is " + percentage + "% in love with " + personTwo + "!", "success" );
    }
    else
    {
        displayMessage( "Please enter a name for Person One and Person Two.", "error" );
    }
}

function displayMessage( message, type = "" )
{
    MessageArea.style.backgroundColor = "";
    MessageArea.style.padding = "";
    MessageArea.style.borderRadius = "";
    MessageArea.style.borderLeft = "";
    MessageArea.style.color = "";
    MessageArea.style.fontWeight = "";

    MessageArea.innerText = message;

    if( type == "success" )
    {
        MessageArea.style.backgroundColor = "#ff9ced";
        MessageArea.style.padding = "1rem";
        MessageArea.style.borderRadius = "1rem";
    }

    if( type == "error" )
    {
        MessageArea.style.padding = "1rem";
        MessageArea.style.borderLeft = "6px solid #ff0000";
        MessageArea.style.color = "#ff0000";
        MessageArea.style.fontWeight = "bold";
    }
}

function swapNames()
{
    var personOne = PersonOneTXT.innerText;
    var personTwo = PersonTwoTXT.innerText;

    PersonOneTXT.innerText = personTwo;
    PersonTwoTXT.innerText = personOne;
}

function reset()
{
    PersonOneTXT.innerText = "";
    PersonTwoTXT.innerText = "";
    MessageArea.innerText = "";
    MessageArea.style.backgroundColor = "";
    MessageArea.style.padding = "";
    MessageArea.style.borderRadius = "";
    MessageArea.style.borderLeft = "";
    MessageArea.style.color = "";
    MessageArea.style.fontWeight = "";
}