<?php
    require_once('view/loginview.php');
    require_once('model/loginmodel.php');
    
    class logincontroller extends sesioncontroller{
        private $viewLogin;
        private $modelLogin;

        public function __construct(){
            $this->viewLogin = new loginview();
            $this->modelLogin = new loginmodel();
        }
        public function login(){
            session_start();
            session_destroy();
            $this->viewLogin->mostrarLogin();
        }
        public function verificar(){
            $usu = $_POST['loginMail'];
            $contraseña = $_POST['loginContraseña'];
            $existencia = $this->modelLogin->consultUsuario($usu);
            if(isset($existencia)){
                $pass = $this->modelLogin->consultaHash($usu);
                if(password_verify($contraseña, $pass[0]['password'])){
                    session_start();
                    $_SESSION['nombreUsuario'] = $usu;
                    header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/home');
                }else{
                   header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']));
                }
            }

        }
        public function deslog(){
            session_start();
            session_destroy();
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']));
        }
    }
?>