function hashPassword( password, rounds = 14 )
{
  if( bcrypt === false )
  {
    alert( "No bcrypt!" );
    return;
  }
  
  bcrypt.hash( password, rounds, ( err, hash ) =>
  {
    if (err)
    {
      //console.error(err);
      return;
    }
    //console.log( hash );
    return hash;
  });
}

hashPassword( "test" );

document.getElementById( "nojs" ).style.display = "none";

var txtPassword = document.getElementById( "txtPassword" );
var result = document.getElementById( "result" );

txtPassword.disabled = false;

txtPassword.addEventListener( "keypress",
  function( event )
  {
    if( event.key == "Enter" )
    {
      var hashedPassword = hashPassword( txtPassword.value );
      
      if( hashedPassword )
      {
        result.innerHTML = "<b>Result:</b> " + hashedPassword;
      }
      else
      {
        result.innerHTML = "An error occured.";
      }
    }
  }
);
