<?php

    require_once __DIR__."\model\prodotti.php";
    require_once __DIR__."\model\categorie.php";
    require_once __DIR__."\model\cani.php";
    require_once __DIR__."\model\pesci.php";
    require_once __DIR__."\model\gatti.php";

    $prodotto1 = new prodotti("cotone", 15, true);
    var_dump($prodotto1);
    

    $categoria1 = new categorie( "cani", "", "" );
    $categoria2 = new categorie( "", "gatti", "" );
    $categoria3 = new categorie( "", "", "pesci" );

    var_dump($categoria1);

    $animale1 = new cani ("crocchette, snack", 
    "palle, tira e molla", 
    "guinzagli, collari, pettorine", 
    "dispnser, ciotole", 
    "antizecche, integratori" );

    
    $animale2 = new gatti ("mangime", 
    "luce gialla, luce bianca", 
    "guinzagli, collari, pettorine", 
    "dispnser, ciotole", 
    "antizecche, integratori" );

    
    $animale3 = new pesci ("crocchette, snack", 
    "palle, tiragraffi", 
    "ph 4.0", 
    "sabbia, ghiaia, alghe, sassi" );

    


    $proddoti1= [
        $categoria1,
        $animale1
    ];

    $proddoti2= [
        $categoria2,
        $animale2
    ];

    $proddoti3 = [
        $categoria3,
        $animale3
   
    ];
    
    
    var_dump($proddoti1);
    var_dump($proddoti2);
    var_dump($proddoti3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Boolanimal</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="grid">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>