<?php

require_once __DIR__."\prodotti.php";
require_once __DIR__."\cani.php";
require_once __DIR__."\gatti.php";
require_once __DIR__."\categorie.php";

class pesci extends categorie{
    public $cibo;
    public $illuminazione;
    public $acqua;
    public $decorazioni;

    public function __construct($_cibo, $_illuminazione, $_acqua, $_decorazioni){
        parent:: __construct("labrador", "lettiera", "acquario", "laghetto" );
        $this->cibo = $_cibo;
        $this->illuminazione = $_illuminazione;
        $this->acqua = $_acqua;
        $this->decorazioni = $_decorazioni;
    }

}