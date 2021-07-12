<?php
    require_once('controller/tareascontroller.php');
    require_once('controller/usuariocontroller.php');
    require_once('controller/logincontroller.php');
    require_once('Router.php');

    $action = $_GET['resource'];
    if(isset($action)){
        $partesURL = explode('/', $action);
        if($partesURL[0] == ''){
            $controller = new logincontroller();
            $controller->login();
        }elseif($partesURL[0] == 'ingresar'){
            $controller = new logincontroller();
            $controller->verificar();
        }elseif($partesURL[0] == 'registrar'){
            $controller = new usuariocontroller();
            $controller->registro();
        }elseif($partesURL[0] == 'home'){
            $controller = new tareascontroller();
            $controller->mostrar();
        }elseif($partesURL[0] == 'insertar'){
            $controller = new tareascontroller();
            $controller->agregar();
        }elseif($partesURL[0] == 'eliminar'){
            $controller = new tareascontroller();
            $controller->eliminar($partesURL[1]);
        }elseif($partesURL[0] == 'modificar'){
            $controller = new tareascontroller();
            $controller->modificar($partesURL[1]);
        }elseif($partesURL[0] == 'deslog'){
            $controller = new logincontroller();
            $controller->deslog();
        }
    }

?>