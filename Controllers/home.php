<?php 

    class Home extends Controllers{

        public function __construct(){
            parent::__construct();
        }

        public function home($params){

            $data["title"] = "Welcome Home Page";
            $this->views->getView($this,"home",$data);
        }

        public function insert(){

            $data = $this->model->setUser("Aarom","viza",26);
            print_r($data);

        }
    }
?>