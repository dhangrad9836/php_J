<?php
    $bBallPlayers = [
        [
            "name" => "Michael Jordan",
            "age" => 54
        ],
        [
            "name" => "Dwayne Wade",
            "age" => 33
        ],
        [
            "name" => "Lebron James",
            "age" => 31
        ],
        [
            "name" => "Patrck Ewing",
            "age" => 58
        ]
    ];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($bBallPlayers as $player){
            echo "<hr>";
            echo "<h4>{$player["name"]}</h4>";
            echo "<h4>{$player["age"]}</h4>";
            echo "<hr>";
        }

    ?>
</body>
</html>