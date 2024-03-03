<?php
    require_once('model/usuariomodel.php');

    class usuariocontroller{
        private $modelUsuario;

        public function __construct(){
            $this->modelUsuario = new usuariomodel();
        }
        public function registro(){
            $newUsu = $_POST['registroMail'];
            $newPass = $_POST['registroContraseña'];
            $newNom = $_POST['registroNombre'];
            $newApe = $_POST['registroApellido'];

            $this->modelUsuario->guardarUsuario($newUsu, $newPass, $newNom, $newApe);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/home');
        }
    }
?>