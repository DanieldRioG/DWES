<?php

namespace app\educacion\agenda\fuente\modelo;

use \DateTime;
use app\educacion\agenda\fuente\modelo\excepcion\AppException;

class Departamento
{
    private ?int $id = null;
    private string $nombre = '';
    private string $division = '';
    private ?DateTime $fModificado = null;

    public function __construct(array $departamento)
    {
        if (is_string($error = $this->setNombre($departamento['nombre']))) {
            $errores['nombre'] = $error;
        }
        if (is_string($error = $this->setDivision($departamento['division']))) {
            $errores['division'] = $error;
        }
        if (is_string($error = $this->setFModificado($departamento['fMod']))) {
            $errores['fMod'] = $error;
        }
        if (isset($errores)) {
            require_once __DIR__ . '/excepcion/AppException.inc';
            throw new AppException($errores);
        }
    }

    public function setNombre(string $nombre): bool|string
    {
        $expReg = '/^[A-ZÁÉÍÓÚÑ][a-áéíóúñ]{4,20}( [A-ZÁÉÍÓÚÑ]?[a-áéíóúñ]{1,20}){0,4}$/';
        if (!preg_match($expReg, $nombre)) {
            return 'formato de Nombre no valido';
        }
        $this->nombre = $nombre;
        return true;
    }
    public function setDivision(string $division): bool|string
    {
        $expReg = '/^[A-ZÁÉÍÓÚÑ][a-áéíóúñ]{4,20}( [A-ZÁÉÍÓÚÑ]?[a-áéíóúñ]{1,20}){0,4}$/';
        if (!preg_match($expReg, $division)) {
            return 'formato de Division no valido o falta';
        }
        $this->division = $division;
        return true;
    }
    public function setFModificado(string $fModificado): bool|string
    {
        if (empty($fModificado)) {
            return true;
        }
        if (!($fecha = DateTime::createFromFormat('Y-m-d', $fModificado))) {
            return 'Formato de fecha incorrecto';
        }
        if ($fecha > new DateTime("now")) {
            return 'Fecha de modificacion no puede ser superior a la fecha de hoy';
        }
        $this->fModificado = $fecha;
        return true;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getDivision()
    {
        return $this->division;
    }
    public function getFModificado(): ?DateTime
    {
        return $this->fModificado;
    }
}
