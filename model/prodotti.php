<?php

require_once __DIR__."\categorie.php";


class prodotti {

    protected $materiale;
    protected $prezzo;
    protected $disponibilità = true;

    public function __construct($_materiale, $_prezzo, $_disponibilità){
        $this->setMateriale() = $_materiale;
        $this->prezzo = $_prezzo;
        $this->disponibilità = $_disponibilità;

    }

    function getMateriale(){
        return $this->materiale;
    }

    function setMateriale($materiale){
        $this->materiale = $materiale;

        return $this;
    }
}