<?php
require_once "./models/User.php";
require_once "./models/Address.php";
require_once "./models/Coordinates.php";

$indirizzoUtente1 = new Address("Via Berlino, 45", "Bologna");

// Creo un istanza di User
$utente1 = new User("Mario", "Rossi", $indirizzoUtente1);
// $utente1->firstName = "Mario";
// $utente1->lastName = "Rossi";
$utente1->birthYear = 1982;
$utente1->address->zipCode = "80123";
$utente1->role = User::$validRoles[1];

var_dump(User::$validRoles);

// var_dump($utente1->getAge());
// var_dump($utente1->getFullName());
// var_dump($utente1->address->getFullAddress());

$utente2 = new User("Antonella", "Bianchi", new Address("Via Porta di sotto, 4", "Milano"));
// $utente2->firstName = "Antonella";
// $utente2->lastName = "Bianchi";
$utente2->birthYear = "2001";
$utente2->attack = 120;

// var_dump($utente2->getAge());
// var_dump($utente2->getFullName());
// var_dump($utente2->address->getFullAddress());


/* $indirizzo1 = new Address("Via Roma 120", "Milano");
$indirizzo2 = new Address("Via G. Garibaldi 1", "Torino");
$indirizzo3 = new Address("St. John Street, 191", "London");

$indirizzo3->country = "Inghilterra"; */


var_dump($utente1);
var_dump($utente2);

$utente1->address->coordinates = new Coordinates(45.8694, 13.943736);

// if (isset($utente1->address->coordinates)) {
//   var_dump($utente1->address->coordinates);
// }

// var_dump($utente1->address->coordinates?->lat);

// var_dump($indirizzo1, $indirizzo2, $indirizzo3);

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

  <title>Php Oop</title>

  <!-- Third party libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

  <!-- Custom css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <main class="container pb-5">
    <h1 class="my-5">Php Oop</h1>
    <!-- your code -->

    <div class="card">
      <div class="card-title"><?php echo $utente1->getFullName() ?></div>
    </div>

    <div class="card">
      <div class="card-title"><?php echo $utente2->getFullName() ?></div>
    </div>
  </main>

</body>

</html>