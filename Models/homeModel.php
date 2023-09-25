<?php 

    class homeModel extends Mysql{

        public function __construct()
        {
            parent::__construct();
        }

        public function setUser($name, $lastname, $edad){
            $query_insert = "INSERT INTO user (names, lastname, edad) VALUES (?,?,?)";
            $arrData = array($name, $lastname, $edad);
            $request_insert = $this->insert($query_insert, $arrData);
            
            return $request_insert;
        }
    }
?>