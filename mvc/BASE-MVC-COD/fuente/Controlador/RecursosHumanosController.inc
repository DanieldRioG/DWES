<?php

namespace app\educacion\agenda\fuente\controlador;

use app\educacion\agenda\fuente\repositorio\RecursosHumanosRepositorio;
use app\educacion\agenda\fuente\modelo\Departamento;
use app\educacion\agenda\fuente\modelo\excepcion\AppException;

class RecursosHumanosController
{
    public function agregaDepartamento()
    {
        require_once __DIR__ . '/../Repositorio/RecursosHumanosRepositorio.inc';
        try {
            $objRecHum = new RecursosHumanosRepositorio();
            $divisiones = $objRecHum->getAllDivisiones();
            if (isset($_POST['ok'])) {
                require_once __DIR__ . '/../Modelo/Departamento.inc';
                try {
                    $objDepart = new Departamento($_POST['dep']);
                    try {
                        if ($objRecHum->addNewDepartamento($objDepart)) {
                            header('location: index.php');
                        } else {
                            $error = 'No se ha podido agregar el departamento';
                        }
                    } catch (\PDOException $ex) {
                        $errorAdd = $ex->getMessage();
                    }
                } catch (AppException $ex) {
                    $errores = $ex->getErrores();
                }
            }
        } catch (\PDOException $ex) {
            $errorGetDivision = $ex->getMessage();
        }
        include_once __DIR__ . '/../../app/plantillas/agregarDept.inc';
    }
}
