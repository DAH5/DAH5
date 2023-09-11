const xhttp = new XMLHttpRequest();

xhttp.onload = function()
{
    const xhttp1 = new XMLHttpRequest();

    xhttp1.onload = function()
    {
        var blog_search_form = document.getElementById( "blog-search-form" );

        blog_search_form.style.display = "block";

        blog_search_form.onsubmit = function( event )
        {
            var searchbox = document.getElementById( "searchbox" );

            var json_result = JSON.parse( xhttp.responseText );

            var results = [];

            for( var r = 0; r < json_result.length; r++ )
            {
                if( ( json_result[ r ].metadata.article_title.toLowerCase() + json_result[ r ].metadata.article_description.toLowerCase() + json_result[ r ].metadata.article_date + json_result[ r ].metadata.article_time ).includes( searchbox.value.toLowerCase() ) )
                {
                    results.push( json_result[ r ].metadata );
                }
            }

            var section_title = document.getElementsByClassName( "blog-title" )[0];

            if( searchbox.value.trim() != "" )
                section_title.innerHTML = "\"" + searchbox.value + "\" Blog Entries";
            else
                section_title.innerHTML = "All Blog Entries";

            var blog_entries = document.getElementsByClassName( "blog-entries" )[0];

            if( searchbox.value.trim() != "" )
                blog_entries.innerHTML = "Your search for \"" + searchbox.value + "\" returned " + results.length + " result" + ( results.length != 1 ? "s" : "" ) + ".";
            else
                blog_entries.innerHTML = "";

            for( var r = 0; r < results.length; r++ )
            {
                blog_entries.innerHTML += xhttp1.responseText
                .replace( "TITLE", results[ r ].article_title )
                .replace( "AUTHOR NAME", results[ r ].article_author )
                .replace( "DATE", results[ r ].article_date )
                .replace( "TIME", results[ r ].article_time )
                .replace( "DESCRIPTION", results[ r ].article_description )
                .replace( "PERMALINK", results[ r ].uri );
            }

            return false;
        }
    }

    xhttp1.open( "GET", "/davidhunter/api/blog/entry-snippet.txt" );
    xhttp1.send();
}

xhttp.open( "GET", "/davidhunter/api/blog/entries.json" );
xhttp.send();
