<?php
    require_once('model/tareasmodel.php');
    require_once('libs/Smarty.class.php');
    require_once('view/tareasview.php');
    require_once('controller/sesioncontroller.php');

    class tareascontroller extends sesioncontroller{
        public $compl;

        public function __construct(){
            parent::__construct();
            $this->objVista = new tareasview();
            $this->objModelo = new tareasmodel();
        }

        public function mostrar(){
            $result = $this->objModelo->mostrarTarea();
            $this->objVista->vertareas($result);
        }

        public function agregar(){ 
            if(isset($_POST["completTarea"])){
                $compl = 1;
            }else{
                $compl = 0;
            }
            $this->objModelo->insertarTarea($_POST["tituloTarea"], $_POST["descripTarea"], $compl);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/home');
        }

        public function modificar($id){
            $this->objModelo->modificarTarea($id);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/home');
        }

        public function eliminar($id){
            $this->objModelo->borrarTarea($id);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/home');
        }
    }
?>