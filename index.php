<?php

require_once __DIR__ . "\model\prodotti.php";


$prodotto = new categorie("cani", "gatti", "pesci");


var_dump($prodotto);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Boolcommerce</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="grid">

                <?php
                foreach ($prodotto as $product) :
                ?>
                    <div class="card">
                        <img src=" ..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product ?>
                            </h5>
                            <div class="card-text">
                                <?php
                                echo $product->printDescrizione();
                                ?>
                            </div>
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