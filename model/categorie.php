<?php

require_once __DIR__. "\prodotti.php";

class categorie extends prodotti {
    public string $cani;
    public string $gatti;
    public string $pesci;

    public function __construct($_cani, $_gatti, $_pesci, $_materiale, $_prezzo, $_disponibilità){
        parent:: __construct($_materiale, $_prezzo, $_disponibilità);
        $this->setCani($_cani);
        $this->setGatti( $_gatti);
        $this->setPesci ($_pesci);
    }

    function getCani(){
        return $this->cani;
    }
    function setCani($cani) {
        $this->cani = $cani;

        return $this;
    }

    function getGatti() {
        return $this->gatti;
    }

    function setGatti($gatti) {
        $this->gatti = $gatti;

        return $this;
    }

    function getPesci() {
        return $this->pesci;
    }

    function setPesci($pesci) {
        $this->pesci = $pesci;

        return $this;
    }
}