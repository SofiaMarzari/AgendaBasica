<?php
    require_once('model/tareasmodel.php');
    require_once('api/viewApi/apiview.php');

    class apicontroller{
        private $model;
        private $viewApi;
        private $data;

        public function __construct(){
            $this->model = new tareasmodel();
            $this->viewApi = new apiView();
            $this->data = file_get_contents("php://input");
            /*Con "php://input" leemos datos POST sin procesar*/
            /*y con el metodo file_get_contents(); leemos el contenido del archivo recibido por parametro como una cadena*/
            /*Por lo tanto leemos datos POST como una cadena string */
        }

        public function data(){
            return json_decode($this->data);
            /*Decodifica la información recibida en formato JSON y la convierte a un objeto de tipo PHP */
            /*En este caso la info que recibe es el data de la clase que es contenido POST */
        }
        /*Esta funcion la invocamos cuando precisemos agregar datos a la bbdd, y por lo tanto debamos leerlos del recurso POST*/


        public function getTareas(){
            $data = $this->model->mostrarTarea(); //pide tareas al model
            if(isset($data)){ //si model nos devuelve algo...
                $this->viewApi->response($data, 200); //entonces pasale a la funcion de viewApi, la data y estado OK
            }else{
                $this->viewApi->response(null, 404); //sino entonces pasale por data null, y el estado de Not found
            }
        }

        public function getTarea($params = []){
            $id = $params[':ID'];

            if(isset($id)){
                $data = $this->model->buscarTarea($id);
                if($data){
                    $this->viewApi->response($data, 200);
                }else{
                    $this->viewApi->response($data, 404);
                }
            }else{
                $this->viewApi->response("Tarea no encontrada", 404);
            }
        }

        public function deleteTarea($params =[]){
            $id = $params[':ID'];

            if(isset($id)){
                $data = $this->model->buscarTarea($id);
                if(isset($data)){
                    $this->model->borrarTarea($id);
                    $this->viewApi->response("Tarea: ".$id.", eliminada con éxito.", 200);
                }else{
                    $this->viewApi->response("Tarea no encontrada.", 404);
                }
            }
        }

        public function agregarTarea(){
            /*Nos guardamos en la variable $body la data que pedimos al recurso(POST) en la clase, que es un objeto PHP */
            $body = $this->data();

            if(isset($body)){
                $titulo = $body->titulo; //accedemos asi porque recordemos que es un objeto PHP
                $descr = $body->descripcion;
                $complt = $body->completada;
                $data = $this->model->insertarTarea($titulo, $descr, $complt);
                if(isset($data)){
                    $this->viewApi->response("La tarea fue creada con éxito!", 200);
                }else{
                    $this->viewApi->response("La tarea no pudo se creada.", 404);
                }
            }
        }

        public function editarTarea($params = []){
            $id = $params[':ID'];
            if(isset($id)){
                $tarea = $this->model->buscarTarea($id);
                if(isset($tarea)){      
                    $body = $this->data();
                    $tit = $body->titulo;
                    $descr = $body->descripcion;
                    $complt = $body->completada;
                    
                    $data = $this->model->modificarTarea2($tit, $descr, $complt, $id);
                    $this->viewApi->response("La tarea fue modificada con exito!", 200);
                }
            }else{
                $this->viewApi->response("La tarea no se encontró.", 404);
            }
            
        }

    }
?>