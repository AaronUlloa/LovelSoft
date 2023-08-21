<?php

namespace Controllers;

use MVC\Router;

class PedidosController
{
    public static function index(Router $router) {

        $router->render('admin/pedidos/index', [
            'titulo' => 'Panel de Pedidos'
        ]);
    }
}