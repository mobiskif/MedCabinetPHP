<?php
error_reporting(E_ALL);
require_once ( './mvc/model.php' );
require_once ( './mvc/controller.php' );
require_once ( './mvc/view.php' );
require_once ( './utils/functions.php' );

$model = new Model();
$controller = new Controller($model);
$view = new View($model, $controller);
$controller->processInput($_REQUEST);
$view->showModel();
?>