<?php
    class usuariomodel{
        private $db;
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=tareas', 'root', '');
        }

        public function guardarUsuario($usu, $pass){
            $contraseña = password_hash($pass, PASSWORD_DEFAULT);
            $consulta = $this->db->prepare("INSERT INTO usuario(usuarioNombre, password) VALUES(?,?)");
            $consulta->execute(array($usu, $contraseña));
        }
    }
?>