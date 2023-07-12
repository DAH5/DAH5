---
page_title: Favourite Actors and Actresses
layout: src/_inc/base.php
---

<h1>Favourite Actors and Actresses</h1>

<p>On this page, you will find a list of my favourite actors and acresses from over the years, who I somewhat admire for what they do.</p>

<?php

$favourite_actors_and_actresses = array
(
    array
    (
        "first_name" => "Dani",
        "last_name" => "Harmer",
        "birth_year" => 1989,
        "birth_month" => 2,
        "birth_day" => 8,
        "known_for" => array
        (
            "The Story of Tracy Beaker",
            "Tracy Beaker: Movie of Me",
            "Tracy Beaker Returns",
            "My Mum Tracy Beaker",
            "The Beaker Girls",
        )
    ),
    array
    (
        "first_name" => "Angela",
        "last_name" => "Lansbury",
        "birth_year" => 1925,
        "birth_month" => 10,
        "birth_day" => 16,
        "death_year" => 2022,
        "death_month" => 10,
        "death_day" => 11,
        "known_for" => array
        (
            "Murder, She Wrote",
        )
    ),
);

for( $faaa = 0; $faaa <= count( $favourite_actors_and_actresses ); $faaa++ )
{
    if( ! isset( $favourite_actors_and_actresses[ $faaa ]['birth_year'] ) || ! is_int( $favourite_actors_and_actresses[ $faaa ]['birth_year'] ) )
        continue;
    if( ! isset( $favourite_actors_and_actresses[ $faaa ]['birth_month'] ) || ! is_int( $favourite_actors_and_actresses[ $faaa ]['birth_month'] ) )
        continue;
    if( ! isset( $favourite_actors_and_actresses[ $faaa ]['birth_day'] ) || ! is_int( $favourite_actors_and_actresses[ $faaa ]['birth_day'] ) )
        continue;
    
    if( isset( $favourite_actors_and_actresses[ $faaa ]['death_year'], $favourite_actors_and_actresses[ $faaa ]['death_month'], $favourite_actors_and_actresses[ $faaa ]['death_day'] ) )
        //$favourite_actors_and_actresses[ $faaa ][ 'age' ] = ( date( "dm", date( "U", mktime( 0, 0, 0, $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ], $favourite_actors_and_actresses[ $faaa ][ 'birth_month' ], $favourite_actors_and_actresses[ $faaa ][ 'birth_day' ] ) ) ) > date( "dm", date( "U", mktime( 0, 0, 0, $favourite_actors_and_actresses[ $faaa ][ 'death_year' ], $favourite_actors_and_actresses[ $faaa ][ 'death_month' ], $favourite_actors_and_actresses[ $faaa ][ 'death_day' ] ) ) ) ? ( ( $favourite_actors_and_actresses[ $faaa ][ 'death_year' ] - $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ] ) - 1 ) : ( $favourite_actors_and_actresses[ $faaa ][ 'death_year' ] - $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ] ) );
        $favourite_actors_and_actresses[ $faaa ][ 'age' ] = ( date( "dm", date( "U", mktime( 0, 0, 0, $favourite_actors_and_actresses[ $faaa ][ 'death_year' ], $favourite_actors_and_actresses[ $faaa ][ 'death_month' ], $favourite_actors_and_actresses[ $faaa ][ 'death_day' ] ) ) ) > date( "dm", date( "U", mktime( 0, 0, 0, $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ], $favourite_actors_and_actresses[ $faaa ][ 'birth_month' ], $favourite_actors_and_actresses[ $faaa ][ 'birth_day' ] ) ) ) ? ( ( $favourite_actors_and_actresses[ $faaa ][ 'death_year' ] - $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ] ) - 1 ) : ( $favourite_actors_and_actresses[ $faaa ][ 'death_year' ] - $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ] ) );
    else
        $favourite_actors_and_actresses[ $faaa ][ 'age' ] = ( date( "dm", date( "U", mktime( 0, 0, 0, $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ], $favourite_actors_and_actresses[ $faaa ][ 'birth_month' ], $favourite_actors_and_actresses[ $faaa ][ 'birth_day' ] ) ) ) > date( "dm" ) ? ( ( date( "Y" ) - $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ] ) - 1 ) : ( date( "Y" ) - $favourite_actors_and_actresses[ $faaa ][ 'birth_year' ] ) );
}

?>

<?php if( isset( $favourite_actors_and_actresses ) && is_array( $favourite_actors_and_actresses ) && count( $favourite_actors_and_actresses ) > 0 ): ?>
<div style="overflow-x: auto;">
    <table style="width: 100%; text-align: center;" cellspacing="0">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Known For</th>
        </tr>
        <?php foreach( $favourite_actors_and_actresses as $favourite_actor_or_actress ): ?>
        <tr valign="top">
            <td style="border-top: 1px solid var( --color-text );"><?php echo $favourite_actor_or_actress[ 'first_name' ]; ?></td>
            <td style="border-top: 1px solid var( --color-text );"><?php echo $favourite_actor_or_actress[ 'last_name' ]; ?></td>
            <td style="border-top: 1px solid var( --color-text );"><?php echo date( "j F Y", strtotime( $favourite_actor_or_actress[ 'birth_year' ] . '-' . $favourite_actor_or_actress[ 'birth_month' ] . '-' . $favourite_actor_or_actress[ 'birth_day' ] ) ); ?><?php if( isset( $favourite_actor_or_actress[ 'death_year' ], $favourite_actor_or_actress[ 'death_month' ], $favourite_actor_or_actress[ 'death_day' ] ) ) echo '<br><sup>(Died: ' . date( "j F Y", strtotime( $favourite_actor_or_actress[ 'death_year' ] . '-' . $favourite_actor_or_actress[ 'death_month' ] . '-' . $favourite_actor_or_actress[ 'death_day' ] ) ) . ')</sup>'; ?></td>
            <td style="border-top: 1px solid var( --color-text );"><?php if( isset( $favourite_actor_or_actress[ 'age' ] ) ) echo $favourite_actor_or_actress[ 'age' ]; ?></td>
            <td style="font-size: 0.7rem; border-top: 1px solid var( --color-text );"><?php echo join( ",<br>", $favourite_actor_or_actress[ 'known_for' ] ); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php endif; ?>

<p>More will be added to this list over time, so please check back again.</p>
