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

    $filtroParcheggio = isset($_GET["parking"]);

    $hotelsCopy = $hotels;

    if( isset($_GET["parking"]) && $_GET["parking"] == "1" ){

        $hotelwithParking = [];

        foreach ($hotels as $elem ) {
            if( $elem["parking"] ) {

                $hotelwithParking[] = $elem;
            }
        }

        $hotelsCopy = $hotelwithParking;
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Which Hotels?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container text-center">
        <h1>La tua ricerca ha portato a questi hotels:</h1>

        <div>
            <form action="index.php" method="GET">
                <label class="d-block mt-2">Desideri Hotel con parcheggio?</label>
                <select name="parking" id="select-parking" class="mt-2">
                    <option value="">-- Seleziona --</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

                <div>
                    <button class="btn btn-warning mt-2" type="submit">Conferma</button>
                </div>
            </form>
        </div>


        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach( $hotelsCopy as $elem ){ ?>
                        <tr>
                            <th scope="row"><?php echo $elem["name"] ?></th>
                            <td><?php echo $elem["description"] ?></td>
                            <td><?php echo $elem["parking"] ?></td>
                            <td><?php echo $elem["vote"] ?></td>
                            <td><?php echo $elem["distance_to_center"] ?></td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>