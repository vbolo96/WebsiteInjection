<?php


class CarObject {
    
    public $id;
    public $tip;
    public $producator;
    public $anulfabricatiei;
    public $kilometraj;
    public $pret;
    public $combustibil;
    public $capacitatemotor;
    public $taraorigine;
    public $localitate;
    public $usern;
    public $imagine;
    public $review;
    
    function __construct($id, $tip, $producator, $anulfabricatiei, $kilometraj, $pret, $combustibil, $capacitatemotor, $taraorigine, $localitate, $usern, $imagine, $review) {
        $this->id = $id;
        $this->tip = $tip;
        $this->producator = $producator;
        $this->anulfabricatiei = $anulfabricatiei;
        $this->kilometraj = $kilometraj;
        $this->pret = $pret;
        $this->combustibil = $combustibil;
        $this->capacitatemotor = $capacitatemotor;
        $this->taraorigine = $taraorigine;
        $this->localitate = $localitate;
        $this->usern = $usern;
        $this->imagine = $imagine;
        $this->review = $review;
    }


    
}


?>