<?php

require_once __DIR__."\categorie.php";
require_once __DIR__."\gatti.php";
require_once __DIR__."\pesci.php";
require_once __DIR__."\cani.php";


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