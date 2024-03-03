<?php
    class usuariomodel{
        private $db;
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=gestiontareas', 'root', '23344');
        }

        public function guardarUsuario($usu, $pass, $nom, $apel){
            $contraseña = password_hash($pass, PASSWORD_DEFAULT);
            $consulta = $this->db->prepare("INSERT INTO usuario(email, password, nombre, apellido) VALUES(?,?,?,?)");
            $consulta->execute(array($usu, $contraseña, $nom, $apel));
        }
    }
?>