<?php

require_once __DIR__."\prodotti.php";

class categorie extends prodotti {
    public $cani;
    public $gatti;
    public $pesci;
    public $tartaruge;

    public function __construct($_cani, $_gatti, $_pesci, $_tartaruge){
        parent:: __construct("lana", 6, false);
        $this->cani = $_cani;
        $this->gatti = $_gatti;
        $this->pesci= $_pesci;
        $this->tartaruge = $_tartaruge;

    }
}