<?php

namespace app\educacion\agenda\fuente\repositorio;

use ConexionBd;

class ProductosRepositorio
{
    public function listaProductos(): array
    {
        $sql = "SELECT name as Nombre , color
         as Color, listprice as Precio, Size as Tamaño, Weight from Production.Product where
        Color is not null and ListPrice is not null and Weight is not null";

        require_once __DIR__ . '/../../core/conexionBd.inc';
        try {
            $con = (new ConexionBd())->getConexion();
            $stn = $con->prepare($sql);
            $stn->execute();
            return $stn->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            $stn = null;
            $con = null;
        }
    }
}
