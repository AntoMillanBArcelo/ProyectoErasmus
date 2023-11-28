<?php

class Convocatoria
{
    private $idConvocatoria;
    private $numMovilidades;
    private $tipo;
    private $fechaInicio;
    private $fechaFin;
    private $fechaInicioPruebas;
    private $fechaFinPruebas;
    private $fechaListadoProvisional;
    private $fechaListadoDefinitivo;
    private $codigoProyecto;


    public function __construct(
        $idConvocatoria,
        $numMovilidades,
        $tipo,
        $fechaInicio,
        $fechaFin,
        $fechaInicioPruebas,
        $fechaFinPruebas,
        $fechaListadoProvisional,
        $fechaListadoDefinitivo,
        $codigoProyecto
    ) 
    {
        $this->idConvocatoria = $idConvocatoria;
        $this->numMovilidades = $numMovilidades;
        $this->tipo = $tipo;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->fechaInicioPruebas = $fechaInicioPruebas;
        $this->fechaFinPruebas = $fechaFinPruebas;
        $this->fechaListadoProvisional = $fechaListadoProvisional;
        $this->fechaListadoDefinitivo = $fechaListadoDefinitivo;
        $this->codigoProyecto = $codigoProyecto;
    }

    public function getIdConvocatoria()
    {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria)
    {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getNumMovilidades()
    {
        return $this->numMovilidades;
    }

    public function setNumMovilidades($numMovilidades)
    {
        $this->numMovilidades = $numMovilidades;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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

    public function getFechaInicioPruebas()
    {
        return $this->fechaInicioPruebas;
    }

    public function setFechaInicioPruebas($fechaInicioPruebas)
    {
        $this->fechaInicioPruebas = $fechaInicioPruebas;
    }

    public function getFechaFinPruebas()
    {
        return $this->fechaFinPruebas;
    }

    public function setFechaFinPruebas($fechaFinPruebas)
    {
        $this->fechaFinPruebas = $fechaFinPruebas;
    }

    public function getFechaListadoProvisional()
    {
        return $this->fechaListadoProvisional;
    }

    public function setFechaListadoProvisional($fechaListadoProvisional)
    {
        $this->fechaListadoProvisional = $fechaListadoProvisional;
    }

    public function getFechaListadoDefinitivo()
    {
        return $this->fechaListadoDefinitivo;
    }

    public function setFechaListadoDefinitivo($fechaListadoDefinitivo)
    {
        $this->fechaListadoDefinitivo = $fechaListadoDefinitivo;
    }

    public function getCodigoProyecto()
    {
        return $this->codigoProyecto;
    }

    public function setCodigoProyecto($codigoProyecto)
    {
        $this->codigoProyecto = $codigoProyecto;
    }
}
