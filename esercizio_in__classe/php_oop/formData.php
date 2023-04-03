<?php

$data = $_GET;

function testString($strToTest, $minLength, $maxLength) {

  /* if (strlen($strToTest) < $minLength || strlen($strToTest) > $maxLength) {
    throw new Exception("Il testo inserito non rispetta la lunghezza necessaria");
  } */

  if (strlen($strToTest) < $minLength) {
    throw new Exception("Il testo inserito deve essere più lungo di $minLength caratteri.");
  }

  if (strlen($strToTest) > $maxLength) {
    throw new Exception("Il testo inserito deve essere più corto di $maxLength caratteri.");
  }

  return true;
}

/* if (!isset($data["message"])) {
  throw new Exception("Messaggio mancante");
} */

// var_dump($data);
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
    <h1 class="my-5">Php Oop | FormData</h1>

    <form action="">
      <div class="mb-3">
        <label>Nome</label>
        <input type="text" class="form-control" name="name">
        <?php
        try {
          echo "test name";
          testString($_GET["name"], 3, 100);

          echo "test email";
          testString($_GET["email"], 5, 100);

        } catch (Exception $e) {
          echo "<span class='text-danger'>" . $e->getMessage() . "</span>";
        }
        ?>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="text" class="form-control" name="email">
        <?php
        try {
          testString($_GET["email"], 3, 100);
        } catch (Exception $e) {
          echo "<span class='text-danger'>" . $e->getMessage() . "</span>";
        }
        ?>
      </div>

      <div class="mb-3">
        <label>Messaggio</label>
        <textarea type="text" class="form-control" name="message"></textarea>
        <?php
        try {
          testString($_GET["message"], 3, 100);
        } catch (Exception $e) {
          echo "<span class='text-danger'>" . $e->getMessage() . "</span>";
        }
        ?>
      </div>

      <div>
        <button class="btn btn-primary" type="submit">Invia</button>
      </div>
    </form>

  </main>

</body>

</html>