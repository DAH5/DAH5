var welcome_widget_date = document.getElementById( 'welcome-widget-date' );


updateWelcomeWidgetDate();

function updateWelcomeWidgetDate()
{
    var current_date = new Date();
    welcome_widget_date.innerHTML = '<b>' + dayNumToName( current_date.getDay() ) + ' ' + dayNumAddSuffix( current_date.getDate().toString() ) + ' ' + monthNumToName( current_date.getMonth() ) + ' ' + current_date.getFullYear() + '</b> ' + current_date.getHours() + ':' + current_date.getMinutes();
}

setInterval( updateWelcomeWidgetDate, 1000 );

function dayNumToName( num )
{
    switch( num )
    {
        case 1:
            return 'Monday';
        case 2:
            return 'Tuesday';
        case 3:
            return 'Wednesday';
        case 4:
            return 'Thursday';
        case 5:
            return 'Friday';
        case 6:
            return 'Saturday';
        case 0:
            return 'Sunday';
        default:
            return num;
    }
}

function dayNumAddSuffix( num )
{
    if( num.substr( -1, 1 ) == '1' )
        return num + 'st';
    if( num.substr( -1, 1 ) == '2' )
        return num + 'nd';
    if( num.substr( -1, 1 ) == '3' )
        return num + 'rd';
    return num + 'th';
}

function monthNumToName( num )
{
    switch( num )
    {
        case 0:
            return 'January';
        case 1:
            return 'February';
        case 2:
            return 'March';
        case 3:
            return 'April';
        case 4:
            return 'May';
        case 5:
            return 'June';
        case 6:
            return 'July';
        case 7:
            return 'August';
        case 8:
            return 'September';
        case 9:
            return 'October';
        case 10:
            return 'November';
        case 11:
            return 'December';
        default:
            return num;
    }
}