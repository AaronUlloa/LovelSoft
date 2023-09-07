<?php

namespace Controllers;

use Model\Roles;
use MVC\Router;

class UsuariosController
{
    public static function index(Router $router) {

        $router->render('admin/usuarios/index', [
            'titulo' => 'Panel de Usuarios'
        ]);
    }
    public static function registrar(Router $router) {
        $alertas = [];
        $roles = Roles::all();
        $router->render('admin/usuarios/registrar', [
            'titulo' => 'Registrar Usuarios',
            'alertas' => $alertas,
            'roles' => $roles
        ]);
    }
}