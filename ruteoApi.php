<?php
    require_once("Router.php");
    require_once("api/controllerApi/apicontroller.php");

    $resource = $_GET['resource'];
    $metodo = $_SERVER['REQUEST_METHOD'];

    $ruteoApi = new Router();

    $ruteoApi->addRoute('tareas', 'GET', 'apicontroller', 'getTareas');
    $ruteoApi->addRoute('tareas/:ID', 'GET', 'apicontroller', 'getTarea');
    $ruteoApi->addRoute('tareas/:ID', 'DELETE', 'apicontroller', 'deleteTarea');
    $ruteoApi->addRoute('tareas', 'POST', 'apicontroller', 'agregarTarea');
    $ruteoApi->addRoute('tareas/:ID', 'PUT', 'apicontroller', 'editarTarea');

    $ruteoApi->route($resource, $metodo);

?>