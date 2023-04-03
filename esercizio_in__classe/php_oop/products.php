<?php

require_once "./models/shop/Phone.php";

try {
  $myPhone = new Phone("iPhone", "12", "iPkjkajhkjhkhjkh", 1100, "Uguale a quello dell'anno prima e anche quello prima.");
  $myPhone2 = new Phone("iPhone", "12", "iPkjkajhkjhkhjkh", 1100, "Uguale a quello dell'anno prima e anche quello prima.");
  $myPhone3 = new Phone("iPhone", "12", "iPkjkajhkjhkhjkh", 1100, "Uguale a quello dell'anno prima e anche quello prima.");
  $myPhone = new Phone("iPhone", "12", "iPkjkajhkjhkhjkh", 1100, "Uguale a quello dell'anno prima e anche quello prima.");
} catch (Exception $e) {
  echo "OOPS, è avvenuto un errore: " . $e->getMessage();
}


var_dump("La classe è stata creata");
