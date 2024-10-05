<?php

session_start();

require_once '../helpers.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Framework\Router;

if (!isset($_SESSION['daily_challenge'])) {
    $_SESSION['daily_challenge'] = true; 
}

if (!isset($_SESSION['last_reset'])) {
    $_SESSION['last_reset'] = date('Y-m-d'); 
}

$current_date = date('Y-m-d');

if ($_SESSION['last_reset'] != $current_date) {
    $_SESSION['daily_challenge'] = false;

    $_SESSION['last_reset'] = $current_date;
}

// Router
$router = new Router();
$routes = require_once basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri);
