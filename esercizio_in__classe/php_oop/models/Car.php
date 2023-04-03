<?php

require_once __DIR__ . "/Vehicle.php";

class Car extends Vehicle
{
  public $brand;
  public $model;

  // cilindrata dovrebbe essere compresa tra 1000 e 10000
  public $cc;

  // cavalli
  public $hp;

  function __construct($_brand, $_model, $_price, $_cc)
  {
    // invoco il costruttore della classe padre, per evitare di dover
    // scrivere le stesse cose all'interno di questo costruttore
    parent::__construct("cars", $_price, true);

    // se non invoco il costruttore padre, 
    // dovrei assegnare i valori a mano
    // $this->category = "cars";
    // $this->price = $_price;
    // $this->hasEngine = true;

    $this->brand = $_brand;
    $this->model = $_model;
    $this->cc = $_cc;


    $this->qualcosaDiProtected();

    // Essendo private, questo non può essere invocato nemmeno quì, 
    // ma solo all'interno della classe Vehicle
    // $this->qualcosaDiPrivato();

  }

  // Setter - delle funzioni che si occupano 
  // solo di assegnare il valore ad una variabile.
  // Per ogi attributo della nostra classe, dovremmo avere un setter dedicato.
  // Il nome della funzione dovrebbe iniziare con "set" 
  // e poi continuare con il nome dell'attributo.
  public function setCilindrata($nuovoValore)
  {
    if ($nuovoValore < 1000 || $nuovoValore > 10000) {
      return;
    }

    $this->cc = $nuovoValore;
  }

  public function printCardHTML()
  {
    $title = $this->brand . " - " . $this->model;


    echo "<div class=\"col\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">{$title}</h5>
        <ul>
          <li><strong>Categoria:</strong> {$this->getCategory()}</li>
          <li><strong>Prezzo Iniziale:</strong> {$this->getPrice()}</li>
          <li><strong>Prezzo Finale:</strong> {$this->getFinalPrice(20)}</li>
          <li><strong>Motore:</strong> {$this->getHasEngine()}</li>
          <li><strong>Ruote:</strong> {$this->getHasWheels()}</li>
          <li><strong>Cilindrata:</strong> {$this->cc}</li>
          <li><strong>Cavalli:</strong> {$this->hp}</li>
        </ul>
      </div>
    </div>
  </div>";
  }

  /**
   * Get the value of brand
   */
  public function getBrand()
  {
    return $this->brand;
  }

  /**
   * Set the value of brand
   *
   * @return  self
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;

    return $this;
  }

  /**
   * Get the value of model
   */
  public function getModel()
  {
    return $this->model;
  }

  /**
   * Set the value of model
   *
   * @return  self
   */
  public function setModel($model)
  {
    $this->model = $model;

    return $this;
  }
}
