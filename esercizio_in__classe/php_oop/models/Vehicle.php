<?php

class Vehicle {
  private $hasWheels = true;
  protected $hasEngine;

  /**
   * Categoria del veicolo: "cars", "boats", "bicycles"
   */
  protected $category;

  protected $price;

  private $id;

  private DateTime $createdAt;

  function __construct($_category, $_price, $_hasEngine) {
    $this->category = $_category;
    $this->price = $_price;
    $this->hasEngine = $_hasEngine;

    $this->qualcosaDiPrivato();
    $this->setId($this->category);

    $this->createdAt = new DateTime();
  }

  /**
   * Ritorna il prezzo del veicolo, applicando un eventuale sconto
   */
  public function getFinalPrice($discount) {
    $currentDay = intval($this->createdAt->format("d"));
    // se il giorno è pari, applico il 60% di sconto, altrimenti il 40
    $maxDiscount = $currentDay % 2  === 0 ? 60 : 40;

    // siccome non sono sicuro che l'attributo $discount sia un numero valido,
    // devo fare un controllo
    if ($discount < 0 || $discount > $maxDiscount) {
      $discount = 0;
    }

    return $this->price - ($this->price * $discount / 100);
  }

  public function getHasWheels() {
    return $this->hasWheels;
  }

  public function getHasEngine() {
    return $this->hasEngine;
  }

  public function getCategory() {
    return $this->category;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getId() {
    return $this->id;
  }

  public function setHasWheels($newValue) {
    // prima di salvare il valore, dovrei fare qualche controllo

    // se ricevo un qualcosa di tipo diverso da boolean, lo converto
    if (gettype($newValue) === "string") {
      $newValue = strtolower($newValue) === "true";
    }

    // devo assicurarmi che newValue sia un booleano. Nel caso non lo è, cerco di convertirlo.
    $this->hasWheels = boolval($newValue);
  }

  public function setHasEngine($newValue) {
    // prima di salvare il valore, dovrei fare qualche controllo

    $this->hasEngine = $newValue;
  }

  public function setCategory($newValue) {
    // prima di salvare il valore, dovrei fare qualche controllo

    $this->category = $newValue;
  }

  public function setPrice($newValue) {
    // prima di salvare il valore, dovrei fare qualche controllo

    $this->price = $newValue;
  }

  /**
   * Funzione che assegna il valore alla proprietà "id".
   * La creo come private perché questo metodo deve essere eseguito
   * 1 sola volta, nel costruttore di questa classe.
   */
  private function setId($prefix) {
    $this->id = uniqid($prefix . "_");
  }

  /**
   * Essendo un metodo private, questo è accessibile SOLO
   * all'interno di questa classe, e non può essere invocato
   * nemmeno dentro una classe che estende Vehcile
   */
  private function qualcosaDiPrivato() {
    return "questo è un segreto private";
  }

  /**
   * Essendo un metodo protected, questo è accessibile 
   * SIA all'interno di questa classe 
   * che all'interno di qualsiasi altra classe che estende Vehicle.
   */
  protected function qualcosaDiProtected() {
    return "questo è un segreto protected";
  }

  public function printCardHTML() {

    /*     echo "<div class=\"col\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">{$this->getId()}</h5>
        <ul>
          <li><strong>Categoria:</strong> {$this->getCategory()}</li>
          <li><strong>Prezzo Iniziale:</strong> {$this->getPrice()}</li>
          <li><strong>Prezzo Finale:</strong> {$this->getFinalPrice(20)}</li>
          <li><strong>Motore:</strong> {$this->getHasEngine()}</li>
          <li><strong>Ruote:</strong> {$this->getHasWheels()}</li>
        </ul>
      </div>
    </div>
  </div>"; */

?>
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $this->getId() ?></h5>
          <ul>
            <li><strong>Categoria:</strong> <?php echo $this->getCategory() ?></li>
            <li><strong>Prezzo Iniziale:</strong> <?php echo $this->getPrice() ?></li>
            <li><strong>Prezzo Finale:</strong> <?php echo $this->getFinalPrice(20) ?></li>
            <li><strong>Motore:</strong> <?php echo $this->getHasEngine() ?></li>
            <li><strong>Ruote:</strong> <?php echo $this->getHasWheels() ?></li>
          </ul>
        </div>
      </div>
    </div>
<?php
  }
}
