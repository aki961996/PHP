<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <!-- we can write php inside of html -->
    <?php
    $first_name = 'Lionel';
    $last_name = 'Messi';
    ?>

    <?php
    $fav_players = [
        [
            'name' => 'Messi',
            'country' => 'Argentina',
            'age' => 30,
            'position' => 'Forward'
        ],
        [
            'name' => 'Ronaldo',
            'country' => 'Portugal',
            'age' => 30,
            'position' => 'Forward'
        ]
    ];




    ?>

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">
                <?php
                $first_name = !empty($first_name) ? $first_name : 'No data in db';
                $last_name = !empty($last_name) ? $last_name : 'No last name in db';
                $full_name = $first_name . " " . $last_name;
                echo $full_name;
                ?>
            </h1>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div>
                        <?php

                        if (!empty($full_name)) {
                            $para = 'This is full name and we call it only messi.';
                            echo $para;
                        } else {
                            echo "The full name is empty";
                        }
                        ?>

                    </div>
                </div>

            </div>
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Age</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fav_players as $player) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($player['name']); ?></td>
                                <td><?php echo htmlspecialchars($player['country']); ?></td>
                                <td><?php echo htmlspecialchars($player['age']); ?></td>
                                <td><?php echo htmlspecialchars($player['position']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>