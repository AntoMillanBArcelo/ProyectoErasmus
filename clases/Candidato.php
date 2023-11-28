<?php

class Candidato
{
    private $dni;
    private $fechaNacimiento;
    private $tutorDni;
    private $apellido1;
    private $apellido2;
    private $nombre;
    private $contrasena;
    private $curso;
    private $telefono;
    private $correo;
    private $domicilio;
    private $rol;

    public function __construct(
        $dni,
        $fechaNacimiento,
        $tutorDni,
        $apellido1,
        $apellido2,
        $nombre,
        $contrasena,
        $curso,
        $telefono,
        $correo,
        $domicilio,
        $rol
    ) 
    {
        $this->dni = $dni;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->tutorDni = $tutorDni;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->curso = $curso;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->domicilio = $domicilio;
        $this->rol = $rol;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getTutorDni()
    {
        return $this->tutorDni;
    }

    public function setTutorDni($tutorDni)
    {
        $this->tutorDni = $tutorDni;
    }

    public function getApellido1()
    {
        return $this->apellido1;
    }

    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }
}