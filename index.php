<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

for ($i = 0; $i < count($hotels); $i++) {
    $hotel = $hotels[$i];
    // var_dump($hotel);
    $name = $hotel['name'];
    // var_dump($name);
    $description = $hotel['description'];

    $parking = $hotel['parking'];
    if ($parking === true) {
        $parkingCheck = "È presente un parcheggio";
    } else {
        $parkingCheck = "Non è presente un parcheggio";
    };


    $vote = $hotels['vote'];
    $distance = $hotel['distance_to_center'];





    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Document</title>
    </head>

    <body>

        <p>
            <?php echo $name; ?>
        </p>
        <p>
            <?php echo $description; ?>
        </p>
        <p>
            <?php echo $parkingCheck; ?>
        </p>
        <p>
            <?php echo $vote; ?>
        </p>
        <p>
            <?php echo $distance; ?>
        </p>
        <br>


    </body>

    </html>

    <?php
}




























