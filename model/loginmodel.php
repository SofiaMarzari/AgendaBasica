<?php
    class loginmodel{
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=gestiontareas', 'root', '');
        }

        public function consultUsuario($usuario){
            $consulta = $this->db->prepare("SELECT * FROM usuario WHERE usuarioNombre = (?)");
            $consulta->execute(array($usuario));
            $result = $consulta->fetchAll();
            return $result;
        }
        public function consultaHash($usuario){
            $consulta = $this->db->prepare("SELECT password FROM usuario WHERE usuarioNombre=(?)");
            $consulta->execute(array($usuario));
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>  