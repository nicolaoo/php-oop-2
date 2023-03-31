<?php

    require_once __DIR__."\model\prodotti.php";
    require_once __DIR__."\model\categorie.php";
    require_once __DIR__."\model\cani.php";
    require_once __DIR__."\model\pesci.php";
    require_once __DIR__."\model\gatti.php";

    $prodotto1 = new prodotti("cotone", 15, true);
    var_dump($prodotto1);
    

    $categoria1 = new categorie( "labrador", "lettiera", "acquario", "laghetto" );
    var_dump($categoria1);

    $labrador = new cani ("crocchette, snack", 
    "palle, tira e molla", 
    "guinzagli, collari, pettorine", 
    "dispnser, ciotole", 
    "antizecche, integratori" );

    var_dump($labrador);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Boolanimal</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="grid">
                
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>