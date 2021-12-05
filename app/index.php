<?php
session_start();
require './vendor/autoload.php';

// $controller = new App\Controllers\FrontController();
// $controller->index();

$router = new \App\Services\Router();
$router->getController();

?>