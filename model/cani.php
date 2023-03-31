<?php

require_once __DIR__."\prodotti.php";
require_once __DIR__."\gatti.php";
require_once __DIR__."\pesci.php";
require_once __DIR__."\pesci.php";


class cani extends categorie{
    public $cibo;
    public $giochi;
    public $guinzaglieria;
    public $ciotole;
    public $medicinali;

    public function __construct($_cibo, $_giochi, $_guinzaglieria, $_ciotole, $_medicinali){
        parent:: __construct("cani", "gatti", "pesci" );
        $this->cibo = $_cibo;
        $this->giochi = $_giochi;
        $this->guinzaglieria = $_guinzaglieria;
        $this->ciotole = $_ciotole;
        $this->medicinali = $_medicinali;

    }

}

