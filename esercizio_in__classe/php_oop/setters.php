<?php

require_once "./models/Car.php";

$auto1 = new Car();
$auto2 = new Car();

$auto1->marca = "Audi";
$auto1->modello = "Q5";
$auto1->setCilindrata(2000);
// $auto1->cilindrata = 2000000;

// var_dump($auto1, $auto2);

?>