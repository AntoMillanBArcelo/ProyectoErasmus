<?php
class Tutor_legal 
{
    private $dni;
    private $apellido1;
    private $apellido2;
    private $nombre;
    private $domicilio;
    private $tlf;


    public function __construct($dni, $apellido1, $apellido2) {
        $this->dni = $dni;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    public function getdni() {
        return $this->dni;
    }
    public function getapellido1() {
        return $this->apellido1;
    }

    public function getapellido2() {
        return $this->apellido2;
    }
    public function getnombre() {
        return $this->nombre;
    }
    public function getdomicilio() {
        return $this->domicilio;
    }
    public function gettlf() {
        return $this->tlf;
    }

    public function setdni($dni) {
        $this->dni = $dni;
    }
    public function setapellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }
    public function setapellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }
    public function setnombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setdomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }
    public function settlf($tlf) {
        $this->tlf = $tlf;
    }

}
