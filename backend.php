<?php

session_start();

$name = filter_input(INPUT_POST, "Nom", FILTER_SANITIZE_SPECIAL_CHARS );
$price = filter_input(INPUT_POST, "Prix", FILTER_VALIDATE_FLOAT );

echo  $name. " : " . $price . "<br>";

// Usage de _SESSION en php natif

if (!isset ($_SESSION['cart'] )){
    $_SESSION['cart'] = [];
}
$_SESSION['cart'] [] = [
    $name => $price
];

var_dump($_SESSION['cart']);




// Récupération des données du front

// foreach ($_POST as $name => $value) {
//     echo $name. " : " . $value . "<br>";
// }
// var_dump($_POST);
// echo "Ce code sera lu !";
// die;
// echo "Ce code ne sera pas lu";