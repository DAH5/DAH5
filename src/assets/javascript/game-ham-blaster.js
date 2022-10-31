var state = "start";
var showDebugInfo = false;
var screen = document.getElementById( 'screen' );

var keys = {
  play: "Space",
  pause: "Space",
  debug: "KeyD"
};

screen.innerHTML += '<div class="state">Welcome! Press ' + keys.play + ' to start!</div><div class="debugInfo"></div>';

document.body.addEventListener( 'keyup',
  function( event )
  {
    var screenState = document.getElementsByClassName( 'state' )[0];
    var debugInfo = document.getElementsByClassName( 'debugInfo' )[0];
    
    if( event.code == keys.play || event.code == keys.pause )
    {
      if( state == "playing" )
      {
        state = "paused";
        screenState.innerHTML = "Press " + keys.play + " to Play!"
      }
      else if( state == "start" || state == "paused" )
      {
        state = "playing";
        screenState.innerHTML = "Press " + keys.pause + " to Pause!";
      }
    }
    
    if( event.code == keys.debug )
    {
      if( showDebugInfo )
        showDebugInfo = false;
      else
        showDebugInfo = true;
    }
    
    debugInfo.innerHTML = "<b>DEBUG INFO</b>";
    debugInfo.innerHTML += "<br><b>State:</b> " + state;
    debugInfo.innerHTML += "<br><b>Keys:</b><br>- <b>Play:</b> " + keys.play + "<br>- <b>Pause:</b> " + keys.pause + "<br>- <b>Debug Info:</b> " + keys.debug;
    
    if( showDebugInfo == true )
      debugInfo.style.display = "block";
    else if ( showDebugInfo == false )
      debugInfo.style.display = "none";
  }
);