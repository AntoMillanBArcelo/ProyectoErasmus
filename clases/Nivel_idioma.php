<?php

class ItemBaremable
{
    private $nivel;

    public function __construct($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getidIdioma()
    {
        return $this->idIdioma;
    }

    public function setidIdioma($idIdioma)
    {
        $this->idIdioma = $idIdioma;
    }   
}
