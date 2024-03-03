<?php
    require_once('libs/Smarty.class.php');
    require_once('controller/tareascontroller.php');
    require_once('model/tareasmodel.php');

    class tareasview{
        public function vertareas($result){
            $smarty = new Smarty();
            $smarty->assign('titulo', "Lista de tareas");
            $smarty->assign('tareas', $result);
            $smarty->display('templates/home.tpl');
        }
    }

?>