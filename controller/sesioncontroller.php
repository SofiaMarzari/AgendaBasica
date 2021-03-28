<?php
    class sesioncontroller{
        public function __construct(){
            session_start();
            if(!isset($_SESSION['nombreUsuario'])){
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']));
                die();
            }

        }
    }
?>