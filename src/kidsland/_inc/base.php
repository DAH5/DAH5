---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata[ 'page_title' ] ) && $metadata[ 'page_title' ] ) echo $metadata[ 'page_title' ] . ' - '; ?>DAH5 Kids Land</title>

        <link rel="stylesheet" href="/assets/w3css/4.15/w3.css">
        <link rel="stylesheet" href="/assets/webfonts/poppins/poppins.css">

        <style>
            body, h1, h2, h3, h4, h5, h6
            {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>

    <body class="w3-dark-gray">
        <div>
            {{ content }}
        </div>
    </body>
</html>