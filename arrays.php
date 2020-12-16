<?php
$names = [

    "Joe Santos",
    22,
    true,
    [
        "Johny", 
        23
    ]
];

$cities = [
    [
        "city" => "Ridgewood",
        "population" => 10000,
        "nickname" => "The Woods"
    ],
    [
        "city" => "Miami",
        "population" => 10000,
        "nickname" => "The Woods"
    ],
    [
        "city" => "Los Angeles",
        "population" => 10000,
        "nickname" => "The Woods"
    ],

];

$cities[3] = "Another city";    //added another element to the array

//change value of population in index 2 to 2000
$cities[2]["population"] = 2000;
var_dump($cities);
//var_dump($city["nickname"]);

//var_dump($names[3]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>