<?php
$title = 'foreach Loop';
$status = 'Active';

// $favoriteGuitars = [
//     'Vela',
//     'Explorer',
//     'Strat'
// ];

$favplayers = [
    'messi',
    'debruyne',
    'rooney',
    'neymar',
];

$kvpGuitars = [
    'barcelona' => 'messi',
    'man city' => 'debruyne',
    'man utd' => 'rooney',
    'alhilal' => 'neymar'
];

$jersyColors = [
    "barcelona" => 'red',
    "man city" => "sky blue",
    'man utd' => 'red',
    'alhilal' => "yellow",
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/php-fundamentals.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">My Favorite Players</h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <?php

                foreach ($favplayers as $fav) {

                    echo "<tr><td>$fav</td></tr>";
                }


                ?>

            </table>

            <table class="table table-striped">
                <?php

                foreach ($kvpGuitars as $key => $value) {

                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }


                ?>

            </table>

            <table class="table table-striped">
                <h1>Team Jersy Colors</h1>

                <?php

                foreach ($jersyColors as $key => $value) {

                    if ($status == 'Active') {
                        echo "<tr><td>$key </td><td>$value</td></tr>";
                    }
                }

                if ($status != "Active") {
                    echo "<tr><td>No data there</td></tr>";
                }




                ?>

            </table>

        </div>
    </div>
</body>

</html>