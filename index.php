<?php

    require_once __DIR__."\model\prodotti.php";
    require_once __DIR__."\model\categorie.php";
    require_once __DIR__."\model\cani.php";
    require_once __DIR__."\model\pesci.php";
    require_once __DIR__."\model\gatti.php";


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

    


    $prodotti1= [
        new prodotti("cotone", "18", true),
        $categoria1,
        $animale1
    ];

    $prodotti2= [
        new prodotti("seta", "94", true),
        $categoria2,
        $animale2
    ];

    $prodotti3 = [
        new prodotti("acquario", "25", true),
        $categoria3,
        $animale3
   
    ];
    
    
    var_dump($prodotti1);
    var_dump($prodotti2);
    var_dump($prodotti3);
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
    <title>Boolcommerce</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="grid">
                <?php foreach($prodotti1 as $prodotto ) :
                    
                    ?>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Card title:
                                <?php echo $prodotto->cani ?>
                            </h5>
                            <p class="card-text">
                            <?php echo $prodotto->categorie ?>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <?php
                endforeach ?>
                
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>