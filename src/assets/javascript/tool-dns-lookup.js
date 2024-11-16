var msgDisabled = document.getElementById( 'msgDisabled' );
var form = document.getElementById( 'form' );
var txtDomain = document.getElementById( 'txtDomain' );
var listType = document.getElementById( 'listType' );
var listNS = document.getElementById( 'listNS' );
var btnSubmit = document.getElementById( 'btnSubmit' );
var result = document.getElementById( 'result' );

msgDisabled.style.display = 'none';
txtDomain.disabled = false;
listType.disabled = false;
listNS.disabled = false;
btnSubmit.disabled = false;

function lookup( domain )
{
    if( domain == '' )
    {
        result.innerHTML = '<p>Please enter a domain name to continue.</p>';
        return;
    }

    var selectedType = 'ALL';
    var nsIPs = '1.1.1.1+1.0.0.1';

    if( listType.value != '' )
        selectedType = listType.value;

    if( listNS.value != '' )
        nsIPs = listNS.value;

    var url = form.dataset.apiurl + '/api/dns/' + domain + '/' + selectedType + '/' + nsIPs;

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

                    output += '<tr style="text-align: left;"><th>Name</th><th>Type</th><th>Class</th><th>TTL</th>';

                    if( type == 'SOA' )
                    {
                        output += '<th>Primary NS</th><th>Email</th><th>Serial</th><th>Refresh</th><th>Retry</th><th>Expire</th><th>Minimum TTL</th>';
                    }

                    if( type == 'NS' )
                    {
                        output += '<th>Name Server</th>';
                    }

                    if( type == 'A' )
                    {
                        output += '<th>IPv4</th>';
                    }

                    if( type == 'AAAA' )
                    {
                        output += '<th>IPv6</th>';
                    }

                    if( type == 'CNAME' )
                    {
                        output += '<th>Hostname</th>';
                    }

                    if( type == 'MX' )
                    {
                        output += '<th>Priority</th><th>Exchange</th>';
                    }

                    if( type == 'TXT' )
                    {
                        output += '<th>Text</th>';
                    }

                    output += '</tr>';

                    for( const recordID in answers[ type ][ 'answer' ] )
                    {
                        record = answers[ type ][ 'answer' ][ recordID ];

                        output += '<tr><td>' + record.name + '</td><td>' + record.type + '</td><td>' + record.class + '</td><td>' + record.ttl + '</td>';

                        if( record.type == 'SOA' )
                        {
                            output += '<td>' + record.mname + '</td><td>' + record.rname + '</td><td>' + record.serial + '</td><td>' + record.refresh + '</td><td>' + record.retry + '</td><td>' + record.expire + '</td><td>' + record.minimum + '</td>';
                        }

                        if( record.type == 'NS' )
                        {
                            output += '<td>' + record.nsdname + '</td>';
                        }

                        if( record.type == 'A' || record.type == 'AAAA' )
                        {
                            output += '<td>' + record.address + '</td>';
                        }

                        if( record.type == 'CNAME' )
                        {
                            output += '<td>' + record.cname + '</td>';
                        }

                        if( record.type == 'MX' )
                        {
                            output += '<td>' + record.preference + '</td><td>' + record.exchange + '</td>';
                        }

                        if( record.type == 'TXT' )
                        {
                            output += '<td>' + record.text + '</td>';
                        }

                        output += '</tr>';
                    }

                    output += '</table>';

                    output += '<p><b>Answer From:</b> ' + answers[ type ][ 'answer_from' ] + '</p>';
                }
                else
                {
                    output += '<p>Name Server <b>' + answers[ type ][ 'answer_from' ] + '</b> has no <b>' + type + '</b> records for <b>' + domain + '</b>.</p>';
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

    lookup( txtDomain.value );
});