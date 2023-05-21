<?php
require_once 'NoweAuto.php';
class AutoZDodatkami extends NoweAuto
{
    protected $alarm, $radioOdtwarzacz,$klimatyzacja;

    public function __construct($model, $cenaEuro,$alarm,$radioOdtwarzacz,$klimatyzacja)
    {
        parent::__construct($model, $cenaEuro);
        $this->alarm = $alarm;
        $this->radioOdtwarzacz = $radioOdtwarzacz;
        $this->klimatyzacja = $klimatyzacja;
    }

    /**
     * @param $alarm
     * @param $radioOdtwarzacz
     * @param $klimatyzacja
     */

    public function ObliczCene()
    {
        return ($this->cenaEuro+$this->alarm+$this->radioOdtwarzacz+$this->klimatyzacja)*self::$kursEuro;
    }


}