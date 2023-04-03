<?php

require_once __DIR__."\gatti.php";
require_once __DIR__."\pesci.php";
require_once __DIR__."\cani.php";


class categorie extends prodotti {
    public $cani;
    public $gatti;
    public $pesci;

    public function __construct($_cani, $_gatti, $_pesci){
        parent:: __construct("lana", 6, false);
        $this->cani = $_cani;
        $this->gatti = $_gatti;
        $this->pesci= $_pesci;


    }
}