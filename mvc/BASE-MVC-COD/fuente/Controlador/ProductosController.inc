<?php

namespace app\educacion\agenda\fuente\controlador;

use app\educacion\agenda\fuente\repositorio\ProductosRepositorio;

class ProductosController
{
    public function listarTodosProductos()
    {
        require_once __DIR__ . '/../Repositorio/ProductosRepositorio.inc';
        try {
            $productos = (new ProductosRepositorio())->listaProductos();
        } catch (\PDOException $ex) {
            $error = $ex->getMessage();
            $codigo = $ex->getCode();
        }
        include __DIR__ . '/../../app/plantillas/listaproductos.inc';
    }
}
