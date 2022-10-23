var txtFirstName = document.getElementById( 'txtFirstName' );
var txtSecondName = document.getElementById( 'txtSecondName' );
var btnPlay = document.getElementById( 'btnPlay' );
var btnSwap = document.getElementById( 'btnSwap' );
var btnReset = document.getElementById( 'btnReset' );
var alertBox = document.getElementById( 'alertBox' );
var alertBoxCloseButton = document.getElementById( 'alertBoxCloseButton' );

enableGameplay();

function enableGameplay()
{
  document.getElementById( 'nojs' ).style.display = 'none';
  
  txtFirstName.disabled = false;
  txtSecondName.disabled = false;
  btnPlay.disabled = false;
  btnSwap.disabled = false;
  btnReset.disabled = false;
}

btnPlay.addEventListener( 'click', play);
txtFirstName.addEventListener( 'keypress', function(e)
{
  if( e.key === "Enter" )
  {
    play();
  }
});

txtSecondName.addEventListener( 'keypress', function(e)
{
  if( e.key === "Enter" )
  {
    play();
  }
});

function play() {
  var first_name = txtFirstName.value;
  var second_name = txtSecondName.value;
  
  if( ! first_name || ! second_name )
  {
    showMessage( "Please enter both a first and second name into the boxes provided." );
    return;
  }
  
  calculate( first_name, second_name );
}

function calculate( firstName, secondName )
{
  var score = 0;
  
  for( var i = 0; i < firstName.length; i++ )
  {
    if( secondName.includes( firstName.charAt( i ) ) )
      score++;
  }
  
  var percentage = Math.round( score / secondName.length * 100 );
  
  showMessage( firstName + " could be " + percentage + "% in love with " + secondName + "!" );
}

btnSwap.addEventListener( 'click', function()
{
  var first_name = txtFirstName.value;
  var second_name = txtSecondName.value;
  
  txtFirstName.value = second_name;
  txtSecondName.value = first_name;
});

btnReset.addEventListener( 'click', function()
{
  txtFirstName.value = "";
  txtSecondName.value = "";
  alertBox.style.display = 'none';
});

alertBoxCloseButton.addEventListener( 'click', function()
{
  alertBox.style.display = 'none';
});

function showMessage( text )
{
  document.getElementById( 'alertBoxText' ).innerHTML = text;
  alertBox.style.display = 'block';
}