<?php
class Car{
    private $id,$marka,$model,$rok,$cena,$opis,$id_uzytkownik;

    /**
     * @param $id
     * @param $marka
     * @param $model
     * @param $rok
     * @param $cena
     * @param $opis
     * @param $id_uzytkownik
     */
    public function __construct($marka, $model, $rok, $cena, $opis)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->rok = $rok;
        $this->cena = $cena;
        $this->opis = $opis;
    }
    public function __destruct(){}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMarka()
    {
        return $this->marka;
    }

    /**
     * @param mixed $marka
     */
    public function setMarka($marka)
    {
        $this->marka = $marka;
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
    public function getRok()
    {
        return $this->rok;
    }

    /**
     * @param mixed $rok
     */
    public function setRok($rok)
    {
        $this->rok = $rok;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @param mixed $cena
     */
    public function setCena($cena)
    {
        $this->cena = $cena;
    }

    /**
     * @return mixed
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * @param mixed $opis
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
    }

    /**
     * @return mixed
     */
    public function getIdUzytkownik()
    {
        return $this->id_uzytkownik;
    }

    /**
     * @param mixed $id_uzytkownik
     */
    public function setIdUzytkownik($id_uzytkownik)
    {
        $this->id_uzytkownik = $id_uzytkownik;
    }

}
