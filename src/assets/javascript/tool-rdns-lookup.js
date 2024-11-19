var msgDisabled = document.getElementById( 'msgDisabled' );
var form = document.getElementById( 'form' );
var txtIP = document.getElementById( 'txtIP' );
var listNS = document.getElementById( 'listNS' );
var pNS = document.getElementById( 'pNS' );
var txtNS = document.getElementById( 'txtNS' );
var btnSubmit = document.getElementById( 'btnSubmit' );
var result = document.getElementById( 'result' );

msgDisabled.style.display = 'none';
txtIP.disabled = false;
listNS.disabled = false;
btnSubmit.disabled = false;

listNS.addEventListener( 'change', toggleCustomNS );
document.onload = toggleCustomNS();

function toggleCustomNS()
{
    if( listNS.value == 'custom' )
    {
        txtNS.disabled = false;
        pNS.style.display = 'block';
    }
    else
    {
        txtNS.disabled = true;
        pNS.style.display = 'none';
    }
}

function lookup( ip )
{
    if( ip == '' )
    {
        result.innerHTML = '<p>Please enter an IP Address to continue.</p>';
        return;
    }

    var selectedType = 'ALL';
    var nsIPs = '1.1.1.1+1.0.0.1';

    if( listNS.value != '' )
        nsIPs = listNS.value;

    if( listNS.value == 'custom' && txtNS.value != '' )
        nsIPs = txtNS.value;

    var url = form.dataset.apiurl + '/api/rdns/' + ip + '/' + nsIPs;

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
            const answers = responseJSON.answers;

            for( const type in answers )
            {
                output += '<h3>' + type + '</h3>';

                if( answers[ type ][ 'answer' ][ 0 ] )
                {
                    output += '<table cellpadding="10" cellspacing="0">';

                    output += '<tr style="text-align: left;"><th>IP Address</th><th>Type</th><th>Class</th><th>TTL</th><th>Hostname</th></tr>';

                    for( const recordID in answers[ type ][ 'answer' ] )
                    {
                        record = answers[ type ][ 'answer' ][ recordID ];

                        output += '<tr><td>' + ip + '</td><td>' + record.type + '</td><td>' + record.class + '</td><td>' + record.ttl + '</td><td>' + record.ptrdname + '</td></tr>';
                    }

                    output += '</table>';

                    output += '<p><b>Answer From:</b> ' + answers[ type ][ 'answer_from' ] + '</p>';
                }
                else
                {
                    output += '<p>Name Server <b>' + answers[ type ][ 'answer_from' ] + '</b> has no <b>' + type + '</b> records for <b>' + ip + '</b>.</p>';
                }
            }
        }

        result.innerHTML = output;
    }

    // Send a request
    xhttp.open( "GET", url );
    xhttp.send();
}

form.addEventListener( 'submit', function( event )
{
    event.preventDefault();

    lookup( txtIP.value );
});
