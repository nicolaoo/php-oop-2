<?php

require_once __DIR__ . "\categorie.php";


class prodotti
{

    protected string $materiale;
    protected float $prezzo;
    protected $disponibilità = true;

    public function __construct($_materiale, $_prezzo, $_disponibilità)
    {
        $this->setMateriale($_materiale);
        $this->setPrezzo($_prezzo);
        $this->setDisponibilità($_disponibilità);
    }

    function getMateriale(): string
    {
        return $this->materiale;
    }

    function setMateriale(string $materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }

    function getPrezzo(): float
    {
        return $this->prezzo;
    }

    function setPrezzo(float $prezzo)
    {
        if ($prezzo < 0) {
            throw new Exception("inserisci un numero maggiore di zero");
        } elseif ($prezzo > 50) {
            throw new Exception("inserisci un umero minore di 50");
        }
        $this->prezzo = $prezzo;

        return $this;
    }

    function getDisponibilità()
    {
        return $this->disponibilità;
    }

    function setDisponibilità($disponibilità)
    {
        $this->disponibilità = $disponibilità;

        return $this;
    }
}
