
<?php

trait cani
{
    protected string $crochette;
    protected string $guinzaglio;
    protected string $medicinale;
    protected string $ciotole_cibo;

    function __construnct(
        $_crocchette,
        $_guinzaglio,
        $_medicinale,
        $_ciotole_cibo,
        $_materiale,
        $_prezzo,
        $_disponibilità,
    ) {
        parent::__construnct($_materiale, $_prezzo, $_disponibilità, $_materiale, $_prezzo, $_disponibilità);
        $this->setCrochette($_crocchette);
        $this->setGuinzaglio($_guinzaglio);
        $this->setMedicinale($_medicinale);
        $this->setCiotole_cibo($_ciotole_cibo);
    }

    public function getCrochette()
    {
        return $this->crochette;
    }

    public function setCrochette($crochette)
    {
        $this->crochette = $crochette;

        return $this;
    }

    public function getGuinzaglio()
    {
        return $this->guinzaglio;
    }


    public function setGuinzaglio($guinzaglio)
    {
        $this->guinzaglio = $guinzaglio;

        return $this;
    }

    public function getMedicinale()
    {
        return $this->medicinale;
    }

    public function setMedicinale($medicinale)
    {
        $this->medicinale = $medicinale;

        return $this;
    }
    public function getCiotole_cibo()
    {
        return $this->ciotole_cibo;
    }

    public function setCiotole_cibo($ciotole_cibo)
    {
        $this->ciotole_cibo = $ciotole_cibo;

        return $this;
    }
}
