<?php

class NoweAuto
{
    protected $model,$cenaEuro;
    protected static $kursEuro = 2;

    /**
     * @param $model
     * @param $cenaEuro
     */
    public function __construct($model, $cenaEuro)
    {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getCenaEuro()
    {
        return $this->cenaEuro;
    }

    /**
     * @param mixed $cenaEuro
     */
    public function setCenaEuro($cenaEuro)
    {
        $this->cenaEuro = $cenaEuro;
    }

    /**
     * @return float
     */
    public static function getKursEuro()
    {
        return self::$kursEuro;
    }

    /**
     * @param float $kursEuro
     */
    public static function setKursEuro($kursEuro)
    {
        self::$kursEuro = $kursEuro;
    }

    public function ObliczCene(){
        return $this->cenaEuro*self::$kursEuro;
    }

}