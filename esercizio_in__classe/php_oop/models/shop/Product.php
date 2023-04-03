<?php

require_once __DIR__ . "/../../traits/Position.php";
require_once __DIR__ . "/../../traits/Validator.php";

class Product {
  use Position, Validator;

  protected string $title;
  protected float $price;
  protected string $description;

  function __construct($_title, $_price, $_description) {
    // $this->title = $_title;
    // $this->price = $_price;
    // $this->description = $_description;

    $this->setTitle($_title);
    $this->setPrice($_price);
    $this->setDescription($_description);
  }

  public function getTitle(): string {
    return $this->title;
  }

  public function setTitle(string $newValue) {
    $this->testString($newValue, 3, 255);

    $this->title = $newValue;
  }

  public function getPrice(): float {
    return $this->price;
  }

  public function setPrice(float $newValue) {
    if ($newValue < 0) {
      throw new Exception("L'importo deve essere superiore a 0.");
    }

    $this->price = $newValue;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function setDescription(string $newValue) {
    $this->testString($newValue, 10, 255);

    $this->description = $newValue;
  }
}
