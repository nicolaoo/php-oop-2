<?php

require_once __DIR__."\categorie.php";

class prodotti {

    public $materiale;
    public $prezzo;
    public $disponibilità = true;

    public function __construct($_materiale, $_prezzo, $_disponibilità){
        $this->materiale = $_materiale;
        $this->prezzo = $_prezzo;
        $this->disponibilità = $_disponibilità;

    }
}