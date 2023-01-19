<?php

namespace app\educacion\agenda\fuente\repositorio;

use app\educacion\agenda\fuente\modelo\Departamento;

class RecursosHumanosRepositorio
{
    /**
     * 
     */
    public function getAllDivisiones(): array
    {
        $sql = "SELECT DISTINCT GroupName as Division from HumanResources.Department order by Division";
        require_once __DIR__ . '/../../core/conexionBd.inc';
        try {
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql);
            $stn->execute();
            $divisiones = [];
            while ($fila = $stn->fetch(\PDO::FETCH_ASSOC)) {
                $divisiones[] = $fila['Division'];
            }
            return $divisiones;
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            $snt = null;
            $con = null;
        }
    }

    public function addNewDepartamento(Departamento $dept): bool
    {
        $sql1 = 'INSERT INTO HumanResources.Department(Name, GroupName, ModifiedDate) values (:nombre, :division, :fModificado)';
        $sql2 = 'INSERT INTO HumanResources.Department(Name, GroupName) values (:nombre, :division)';

        require_once __DIR__ . './../../core/conexionBd.inc';

        try {
            $con = (new \ConexionBd())->getConexion();
            if (!(is_null(($dept->getFModificado())))) {
                $stn = $con->prepare($sql1);
                $stn->bindValue(':fModificado', $dept->getFModificado()->format('Y-m-d'));
            } else {
                $stn = $con->prepare($sql2);
            }

            $stn->bindValue(':nombre', $dept->getNombre());
            $stn->bindValue(':division', $dept->getDivision());
            $stn->execute();
            return $stn->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            $snt = null;
            $con = null;
        }
    }
}
