function calculate( firstName, secondName )
{
    var firstNameFinal = firstName.trim().toLowerCase().replace(/\s+/g, '');
    var secondNameFinal = secondName.trim().toLowerCase().replace(/\s+/g, '');

    var score = 0;

    for( var c = 0; c < firstNameFinal.length; c++ )
    {
        firstNameChar = firstNameFinal.charAt( c );

        if( secondNameFinal.includes( firstNameChar ) )
            score++;
    }

    var percentage = Math.min( 100, Math.round( ( score / firstNameFinal.length ) * 100 ) );

    var result = document.getElementById( 'result' );

    result.innerHTML = 'Compatibility Report:<div class="text">' + firstName + ' is ' + percentage + '% in love with ' + secondName + '! ' + getResultMessage( percentage ) + '</div>';

    document.getElementById( 'swapNamesSpan' ).style.display = 'inline-block';

    var swapNamesLink = document.getElementById( 'swapNamesLink' );

    swapNamesLink.href = '?firstName=' + encodeURI( secondName.replace( ' ', '+' ) ) + '&secondName=' + encodeURI( firstName.replace( ' ', '+' ) );
    swapNamesLink.title = 'Makes ' + secondName + ' the first name, and ' + firstName + ' the second name.';
}

function getResultMessage( percentage )
{
    if( percentage >= 90 )
        return "A match made in heaven! 💖";
    if( percentage >= 75 )
        return "True love is in the air! 💕";
    if( percentage >= 60 )
        return "There's definitely something special here! 💝";
    if( percentage >= 40 )
        return "A promising connection! 💗";
    if( percentage >= 20 )
        return "Maybe give it some time... 💭";
    return "Not quite meant to be... 💔";
}

function copyShareUrl()
{
    navigator.clipboard.writeText( window.location ).then(
        () => {
            /* clipboard successfully set */
            alert( 'URL has been copied to your clipboard!' );
        },
        () => {
            /* clipboard write failed */
            alert( 'URL could not be copied to your clipboard!' );
        },
    );
}

function onLoad()
{
    const urlParams = new URLSearchParams( window.location.search );

    document.getElementById( 'nojs' ).style.display = 'none';
    document.getElementById( 'calculator' ).style.display = 'block';

    document.getElementById( 'shareUrl' ).innerHTML = 'Share with your friends:<br><a href="javascript: void();" onclick="copyShareUrl()">Copy URL to Clipboard</a>';

    if( urlParams.get( 'firstName' ) && urlParams.get( 'secondName' ) )
    {
        document.getElementById( 'result' ).style.display = 'block';
        document.getElementById( 'shareUrl' ).style.display = 'block';

        document.getElementById( 'firstName' ).value = urlParams.get( 'firstName' );
        document.getElementById( 'secondName' ).value = urlParams.get( 'secondName' );

        calculate( urlParams.get( 'firstName' ), urlParams.get( 'secondName' ) );
    }
};
