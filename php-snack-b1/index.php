<!-- 
Given an array containing basketball matches of a hypothetical stage in the schedule. Each array will have a home team and an away team, points scored by the home team, and points scored by the away team. Let's display all the matches on the screen using this format:
-->

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack B1</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <?php

    $matches = [
        // Match 1
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        // Match 2
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        // Match 3
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        // Match 4
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
        // Match 5
        [
            'team1' => 'Giggioletta Giggiona',
            'team2' => 'Aquile Reali Unilaterali',
            'point_team_1' => 121,
            'point_team_2' => 111
        ],
        // Match 6
        [
            'team1' => 'Unicorni Vipiteno',
            'team2' => 'Lampredotti Lampedusa',
            'point_team_1' => 88,
            'point_team_2' => 89
        ],
    ];
    ?>

    <div class="container">
        <?php
        // I'm iterating the array and I'm taking the single match 
        // Then, I'm storing every single property of the match in different variables
        foreach ($matches as $match) {
            $team1 = $match['team1'];
            $team2 = $match['team2'];
            $points1 = $match['point_team_1'];
            $points2 = $match['point_team_2'];

            echo "$team1 - $team2 | $points1-$points2<br>";
        }
        ?>
    </div>


    <ul class="list">
        <?php foreach ($matches as $match) { ?>
            <li>
                <!-- I'm concatenating strings using the "." -->
                <?php echo $match['team1'] . ' - ' . $match['team2'] . ' | ' . $match['point_team_1'] . '-' . $match['point_team_2']; ?>
            </li>
        <?php } ?>
    </ul>


</body>

</html>