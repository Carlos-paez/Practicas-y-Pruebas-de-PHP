<?php
require_once '../Core/AutoLoader.php';

$controller = $_GET['controller'] ?? 'user';
$action = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controler'; // Nota: En tus archivos es 'Controler' con una 'l'

if (class_exists($controllerName)) {
    $instance = new $controllerName();
    if (method_exists($instance, $action)) {
        $instance->$action();
    } else {
        echo "Acción no encontrada.";
    }
} else {
    echo "Controlador $controllerName no encontrado.";
}