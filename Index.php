<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/utils/Autoload.php';

$page = $_GET['page'] ?? 'home';
$controllerFile = __DIR__ . "/controllers/" . ucfirst($page) . "Controller.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($page) . "Controller";
    $controller = new $controllerClass();
    $controller->index();
} else {
    echo "Página não encontrada!";
}
?>
