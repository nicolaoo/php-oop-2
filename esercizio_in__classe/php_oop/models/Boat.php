<?php
require_once __DIR__ . "/Vehicle.php";

class Boat extends Vehicle {
  public $brand;
  public $model;
  public $name;
  public $seats;
  public $length;
  public $beds;

  // siccome questa variabile esiste già nella classe padre,
  // ridefinendola, la vado a sovrascrivere.
  // public $hasWheels = false;

  function __construct($_brand, $_name, $_price, $_hasEngine) {
    parent::__construct("boats", $_price, $_hasEngine);

    // $this->hasWheels = false;
    $this->setHasWheels(false);

    $this->brand = $_brand;
    $this->name = $_name;
  }

  public function getFinalPrice($discount) {
    if ($discount < 0 || $discount > 30) {
      $discount = 0;
    }

    // volendo possiamo invocare la funzione della classe padre
    // return parent::getFinalPrice($discount);

    return $this->price - ($this->price * $discount / 100);
  }
}
