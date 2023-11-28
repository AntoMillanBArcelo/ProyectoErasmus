<?php

class Proyecto
{
    private $codigoPoryecto;
    private $nombre;
    private $fechaInicio;
    private $fechaFin;

    public function __construct($codigoPoryecto, $nombre, $fechaInicio, $fechaFin)
    {
        $this->codigoPoryecto = $codigoPoryecto;
        $this->nombre = $nombre;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }

    public function getcodigoPoryecto()
    {
        return $this->codigoPoryecto;
    }

    public function setcodigoPoryecto($codigoPoryecto)
    {
        $this->codigoPoryecto = $codigoPoryecto;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }
}
