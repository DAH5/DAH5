var msgDisabled = document.getElementById( 'msgDisabled' );
var form = document.getElementById( 'form' );
var txtDomain = document.getElementById( 'txtDomain' );
var btnSubmit = document.getElementById( 'btnSubmit' );
var result = document.getElementById( 'result' );

msgDisabled.style.display = 'none';
txtDomain.disabled = false;
btnSubmit.disabled = false;

function lookup( domain )
{
    if( domain == '' )
    {
        result.innerHTML = '<p>Please enter a domain name to continue.</p>';
        return;
    }

    var url = form.dataset.apiurl + '/api/whois/' + domain;

    // Create an XMLHttpRequest object
    const xhttp = new XMLHttpRequest();

    // Define a callback function
    xhttp.onload = function()
    {
        var response = this.responseText;
        var responseJSON = JSON.parse( response );

        var output = '';

        if( responseJSON.type == 'success' )
        {
            const resultJSON = responseJSON.result;

            result.innerHTML = '<pre>' + resultJSON + '</pre>';
        }
    }

    xhttp.open( "GET", url );
    xhttp.send();
}

form.addEventListener( 'submit', function( event )
{
    event.preventDefault();

    lookup( txtDomain.value );
});