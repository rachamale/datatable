<?php
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\LoginController;
use Controllers\ClienteController;
use Controllers\ProductoController;
use Controllers\DetalleController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [LoginController::class, 'index']);
$router->get('/menu', [LoginController::class, 'menu']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->post('/API/login', [LoginController::class, 'loginAPI']);

$router->get('/clientes/index', [ClienteController::class, 'index']);
$router->get('/clientes', [ClienteController::class, 'index']);
$router->get('/API/clientes/buscar', [ClienteController::class, 'buscarApi']);
$router->post('/API/clientes/guardar', [ClienteController::class, 'guardarApi']);
$router->post('/API/clientes/modificar', [ClienteController::class, 'modificarApi']);
$router->post('/API/clientes/eliminar', [ClienteController::class, 'eliminarApi']);

$router->get('/clientes/estadistica2', [DetalleController::class,'estadistica2']);
$router->get('/API/clientes/estadistica2', [DetalleController::class,'detalleClientesAPI']);

$router->get('/productos/datatable', [ProductoController::class,'datatable']);
$router->get('/API/productos/buscar', [ProductoController::class,'buscarAPI']);
$router->get('/productos/estadistica', [DetalleController::class,'estadistica']);
$router->get('/API/productos/estadistica', [DetalleController::class,'detalleVentasAPI']);
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();