<?php

namespace Controllers;

use MVC\Router;

class ProductosController
{
    public static function index(Router $router) {
        $router->render('admin/productos/index', [
            'titulo' => 'Panel de Productos'
        ]);
    }
    public static function crear(Router $router){
        $router->render('admin/productos/crear',[
            'title' => 'Agregar Producto'
        ]);
    }
}