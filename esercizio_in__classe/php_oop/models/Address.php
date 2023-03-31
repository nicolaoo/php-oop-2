<?php

require_once __DIR__ . "/Coordinates.php";


class Address {
  public $street;
  public $city;

  // Imposto Italia come valore predefinito.
  // Tutte le istanza di partenza avranno questo stesso valore.
  public $country = "Italia";
  public $zipCode;

  // mettendo Coordinates davanti al nome della variabile
  // indichiamo che il valore di questa dovrà per forza
  // essere un istanza della classe Coordinates.
  public $coordinates;

  function __construct($_street, $_city) {
    $this->street = $_street;
    $this->city = $_city;
  }

  public function getFullAddress() {
    // creo una prima stringa con solo i dati che sono sicuro di avere,
    // perche sono entrambi obbligatori nel costruttore
    $finalText = "$this->street, $this->city";

    // Se ho anche il zipCode lo vado a concatenare alla stringa $finalText
    if(isset($this->zipCode)){
      $finalText .= " ($this->zipCode)";
    }

    // infine concateno $country perchè sono sicuro di averlo sempre, 
    // visto che ha un valore predefinito.
    $finalText .= ", $this->country";

    return $finalText;
  }
}
