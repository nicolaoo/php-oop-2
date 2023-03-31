<?php

require_once "./models/Car.php";
require_once "./models/Boat.php";

$vehicle1 = new Vehicle("generic", 0, false);

$vehicle1->setHasWheels("true");
$vehicle1->setPrice(1200);

// var_dump($vehicle1->getId());

// var_dump($vehicle1);


$auto1 = new Car("Ford", "Mustang", 30000, 4000);
$auto2 = new Car("Toyota", "Yaris", 18000, 1500);

$barca1 = new Boat("Brand molto costoso", "La Pinta", 120000, true);
$barca1->seats = 10;
$barca1->beds = 3;
$barca1->length = 20;


// Questi metodi, NON essendo public, non possono essere invocati.
// $vehicle1->qualcosaDiPrivato();
// $barca1->qualcosaDiPrivato();


// var_dump($vehicle1);
// var_dump($auto1, $auto2);
// var_dump($barca1, $auto1);

// var_dump("Prezzo barca1 " . $barca1->getFinalPrice(30));
// var_dump("Prezzo auto1 " . $auto1->getFinalPrice(60));
$veicoli = [
  $vehicle1,
  new Vehicle("monopattini", 300, false),
  new Vehicle("monopattini", 800, false)
];

$auto = [
  $auto1,
  $auto2
];

$barche = [
  $barca1,
  new Boat("Piippoooo", "La nina", 50000, false),
  new Boat("Piippoooo", "La Santa Maria", 38000, false),
];


// var_dump($veicoli, $auto, $barche);

?>


<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

  <title>Php Oop | Vehicles</title>

  <!-- Third party libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

  <!-- Custom css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <main class="container pb-5">
    <h1 class="my-5">Php Oop | Vehicles</h1>

    <section>
      <h2>Veicoli generici</h2>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($veicoli as $veicolo) {
          $veicolo->printCardHTML();
        } ?>
      </div>
    </section>

    <section>
      <h2>Auto</h2>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($auto as $veicolo) :

          $veicolo->printCardHTML();

        endforeach ?>
      </div>
    </section>

    <section>
      <h2>Barche</h2>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($barche as $veicolo) :

          $veicolo->printCardHTML();

        endforeach ?>
      </div>
    </section>

  </main>

</body>

</html>