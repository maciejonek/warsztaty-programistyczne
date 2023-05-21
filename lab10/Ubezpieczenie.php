<?php
require_once 'AutoZDodatkami.php';
class Ubezpieczenie extends AutoZDodatkami
{
    private $procWartUb, $liczbaLat;

    public function __construct($model, $cenaEuro, $alarm, $radioOdtwarzacz, $klimatyzacja,$procWartUb,$liczbaLat)
    {
        parent::__construct($model, $cenaEuro, $alarm, $radioOdtwarzacz, $klimatyzacja);
        $this->procWartUb = $procWartUb;
        $this->liczbaLat = $liczbaLat;
    }


    public function ObliczCene()
    {
        return parent::ObliczCene() * $this->procWartUb *((100-$this->liczbaLat)/100);
    }


}