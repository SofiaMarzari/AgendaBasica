<?php
    require_once('libs/Smarty.class.php');

    class loginview{
        public function mostrarLogin(){
            $smarty = new Smarty();
            $smarty->display("templates/login.tpl");
        }
    }

?>