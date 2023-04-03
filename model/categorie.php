<?php

require_once __DIR__ . "\prodotti.php";
require_once __DIR__ . "\..\TraitsNick\Cani.php";

class categorie extends prodotti
{
    use Cani;

    public string $cani;
    public string $gatti;
    public string $pesci;

    public function __construct($_cani, $_gatti, $_pesci)
    {
        $this->setCani($_cani);
        $this->setGatti($_gatti);
        $this->setPesci($_pesci);
    }

    function getCani()
    {
        return $this->cani;
    }
    function setCani($cani)
    {
        $this->cani = $cani;

        return $this;
    }

    function getGatti()
    {
        return $this->gatti;
    }

    function setGatti($gatti)
    {
        $this->gatti = $gatti;

        return $this;
    }

    function getPesci()
    {
        return $this->pesci;
    }

    function setPesci($pesci)
    {
        $this->pesci = $pesci;

        return $this;
    }
}
