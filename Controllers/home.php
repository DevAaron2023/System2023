<?php 

    class Home extends Controllers{

        public function __construct(){
            parent::__construct();
        }

        public function home($params){

            $data["title"] = "Welcome Home Page";
            $this->views->getView($this,"home",$data);
        }

        public function datos($params){

            $carrito = "".$this->model->getCarrito($params);
            echo "Datos ". $carrito;
        }
    }
?>