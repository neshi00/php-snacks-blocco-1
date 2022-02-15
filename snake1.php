<?php

$results_day = [
    [
        "home_team" => "Reggiana",
        "away_team" => "Treviso",
        "final_score" => "67-62",
    ],
    [
        "home_team" => "Venezia",
        "away_team" => "Varese",
        "final_score" => "82-93",
    ],
    [
        "home_team" => "Cagliari",
        "away_team" => "Napoli",
        "final_score" => "90-102",
    ],
    [
        "home_team" => "Torino",
        "away_team" => "Palermo",
        "final_score" => "85-92",
    ],
    [
        "home_team" => "Scapoli",
        "away_team" => "Ammogliati",
        "final_score" => "100-90",
    ],

];


// var_dump($results_day);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Risultati Basket: </h1>



    <?php
    echo "<ul>";

    for ($i = 0; $i < count($results_day); $i++) {
        $home_team = $results_day[$i]["home_team"];
        $away_team = $results_day[$i]["away_team"];
        $final_score = $results_day[$i]["final_score"];

        echo "<li> $home_team - $away_team | $final_score </li>";
    }

    ?>

</body>
</html>





