<?php

//anonmous function
$myName = function($name){
    echo "<hr>";
    echo "<h4>My name is {$name}</h4>";

};

//
function myName($name){
    echo "<hr>";
    echo "<h4>Hello My name is {$name}</h4>";

};

//return statement
$newNumber = 0;
function adding($a, $b){
    return $a + $b;
}

$newNumber = adding(2,4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $myName("Joe"); ?>
    <?php $myName("Jane"); ?>
    <?php myName("John"); ?>
    <?php myName("Raul"); ?>
    <?php echo $newNumber ?>
</body>
</html>