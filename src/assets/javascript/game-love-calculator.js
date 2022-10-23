document.getElementById( 'nojs' ).style.display = 'none';

var txtFirstName = document.getElementById( 'txtFirstName' );
var txtSecondName = document.getElementById( 'txtSecondName' );
var btnPlay = document.getElementById( 'btnPlay' );
var btnSwap = document.getElementById( 'btnSwap' );
var btnReset = document.getElementById( 'btnReset' );
var alertBox = document.getElementById( 'alertBox' );
var alertBoxCloseButton = document.getElementById( 'alertBoxCloseButton' );

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
  
  var score = 0;
  
  for( var i = 0; i < first_name.length; i++ )
  {
    if( second_name.includes( first_name.charAt( i ) ) )
      score++;
  }
  
  var percentage = score / second_name.length * 100;
  showMessage( first_name + " could be " + percentage + "% in love with " + second_name + "!" );
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