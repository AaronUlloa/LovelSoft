<?php


require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;

$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

// Area de administración
$router->get('/admin/dashboard', [\Controllers\DashboardController::class, 'index']);

$router->get('/admin/productos', [\Controllers\ProductosController::class, 'index']);
$router->get('/admin/productos/crear', [\Controllers\ProductosController::class, 'crear']);
$router->post('/admin/productos/crear', [\Controllers\ProductosController::class, 'crear']);
$router->get('/admin/productos/editar', [\Controllers\ProductosController::class, 'editar']);
$router->post('/admin/productos/editar', [\Controllers\ProductosController::class, 'editar']);

$router->get('/admin/pedidos', [\Controllers\PedidosController::class, 'index']);
$router->get('/admin/clientes', [\Controllers\ClientesController::class, 'index']);

$router->get('/admin/usuarios', [\Controllers\UsuariosController::class, 'index']);
$router->get('/admin/usuarios/registrar', [\Controllers\UsuariosController::class, 'registrar']);

$router->comprobarRutas();

