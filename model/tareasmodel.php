<?php
    require_once('api/controllerApi/apicontroller.php');

    class tareasmodel{
        private $db;
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=gestiontareas;','root','23344');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }      
        public function mostrarTarea(){
            $datos = $this->db->prepare("SELECT * FROM tarea");
            $datos->execute();
            $result = $datos->fetchAll();
            return $result;
        }
        public function buscarTarea($id){
            $data = $this->db->prepare("SELECT * FROM tarea WHERE id=?");
            $data->execute(array($id));
            $result = $data->fetchAll();
            return $result;
        }
        public function insertarTarea($hor, $desc, $compl){     
            $data = $this->db->prepare("INSERT INTO tarea(horario,descripcion,completada,id_user) VALUES(?,?,?,?)");
            $data->execute(array($hor,$desc,$compl,0));
        }
        public function borrarTarea($id){
            $data = $this->db->prepare("DELETE FROM tarea WHERE id=?");
            $data->execute(array($id));
        }
        public function modificarTarea($id){
            $data = $this->db->prepare("UPDATE tarea SET completada=1 WHERE id=?");
            $data->execute(array($id));
        }
            
        public function modificarTarea2($tit, $desc, $complt, $id){
            $data = $this->db->prepare("UPDATE tarea SET titulo=?, descripcion=?, completada=? WHERE id=?");
            $data->execute(array($tit, $desc, $complt, $id));
         }
    }

?>