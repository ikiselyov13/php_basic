<?php
//session_start();
//unset($_SESSION['username']);
$controller = $_GET['controller'] ?? 'index';

$routes = require 'routes.php';

try {
    require_once $routes[$controller];
} catch (PDOException $exception) {
    echo "Проблемы с БД позвоните админу";
} catch (Exception $exception) {
    $error = $exception->getMessage();
}

