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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP-Hotel</title>
</head>

<body>

    <form action="" method="GET" class="d-flex justify-content-center gap-4 m-4">

        <?php

        ?>
        <div>
            <label for="parking">Parcheggio</label>
            <select name="parking" id="parking">
                <option value="">-</option>
                <option value="No">No</option>
                <option value="Si">Sì</option>
            </select>
        </div>


        <div>
            <label for="vote"> Voto minimo</label>
            <select name="vote" id="vote">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>



        <button>Cerca</button>
    </form>

    <table class="table m-4">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>

            <?php

            for ($i = 0; $i < count($hotels); $i++) {
                $hotel = $hotels[$i];
                // var_dump($hotel);
                $name = $hotel['name'];
                $description = $hotel['description'];

                // $parking = $hotel['parking'];
                // if ($parking === true) {
                //     $parkingCheck = "Si";
                // } else {
                //     $parkingCheck = "No";
                // };
            
                $parking = $hotel['parking'] ? 'Si' : 'No';

                $vote = $hotel['vote'];
                // var_dump($vote);
                $distance = $hotel['distance_to_center'];


                $parking_search = $_GET['parking'] ?? '';
                // var_dump($parking_search);
            
                $vote_search = $_GET['vote'] ?? '';
                // var_dump($vote_search);


                if (($vote_search <= $vote || $vote_search === '') && ($parking_search === $parking || $parking_search === '')) {
                    ?>

                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $parking; ?></td>
                        <td><?php echo $vote; ?> su 5</td>
                        <td><?php echo $distance; ?> Km</td>
                    </tr>
                    <?php
                } elseif ($vote_search === '' && $parking_search === '') {
                    ?>

                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $parking; ?></td>
                        <td><?php echo $vote; ?> su 5</td>
                        <td><?php echo $distance; ?> Km</td>
                    </tr>
                    <?php
                }
            }
            ?>

        </tbody>
    </table>

</body>

</html>

<?php




























