<?php
    require_once('model/usuariomodel.php');

    class usuariocontroller{
        private $modelUsuario;

        public function __construct(){
            $this->modelUsuario = new usuariomodel();
        }
        public function registro(){
            $newUsu = $_POST['registroUsuario'];
            $newPass = $_POST['registroContraseña'];

            $this->modelUsuario->guardarUsuario($newUsu, $newPass);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/home');
        }
    }
?>